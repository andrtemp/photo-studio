<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 * @package App
 * @method static create($data)
 */
class Photo extends Model
{
    /** @var string */
    protected $table = 'photos';

    protected $fillable = [
        'project_id',
        'description',
        'path'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
