<?php

namespace marinaZolkina\LaravelVideoChat\Models\File;

use Illuminate\Database\Eloquent\Model;
use marinaZolkina\LaravelVideoChat\Models\File\Attribute\FileAttribute;
use marinaZolkina\LaravelVideoChat\Models\File\Relationship\FileRelationship;

class File extends Model
{
    use FileRelationship,FileAttribute;

    protected $table;

    protected $fillable = [
        'message_id', 'user_id', 'name',
    ];

    protected $appends = [
        'file_details',
    ];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('laravel-video-chat.table.files_table');
    }
}
