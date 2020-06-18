<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /** @var string */
    protected $table = 'photos';

    protected $fillable = [
        'project_id',
        'description',
        'path'
    ];

    public function project()
    {
        $this->belongsTo(Project::class);
    }
}
