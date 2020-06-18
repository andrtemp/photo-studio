<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * @package App
 * @property integer $user_id
 * @property integer $id
 * @method static create($data)
 * @method static find($id)
 */
class Project extends Model
{
    /** @var string */
    protected $table = 'projects';

    protected $fillable = [
        'name',
        'description'
    ];

    public function save(array $options = [])
    {
        $userId = request()->user()->id;

        $this->user_id = $userId;
        return parent::save($options); // TODO: Change the autogenerated stub
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(Photo::class, 'project_id');
    }
}
