<?php

namespace App\Http\Services;

use App\Photo;
use App\Project;
use Illuminate\Http\UploadedFile;

class ProjectService
{
    /** @var Project */
    private $_project;

    /**
     * ProjectService constructor.
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        $this->_project = $project;
    }

    /**
     * @param array|UploadedFile[] $files
     */
    public function storePhotos(array $files)
    {
        foreach ($files as $file) {
            $originalName = $file->getClientOriginalName();
            $originalExt = $file->getClientOriginalExtension();

            $fullName = md5(microtime()) . '_' . md5($originalName) . '.' .  $originalExt;
            $path = 'public' . DIRECTORY_SEPARATOR . $this->_project->id . DIRECTORY_SEPARATOR;

            $file->storeAs($path, $fullName);

            $name =  $this->_project->id . DIRECTORY_SEPARATOR . $fullName ;

            Photo::create([
                'project_id' => $this->_project->id,
                'description' => '',
                'path' => $name
            ]);
        }
    }
}