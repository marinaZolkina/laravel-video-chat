<?php

namespace marinaZolkina\LaravelVideoChat\Models\File\Attribute;

trait FileAttribute
{
    public function getFileDetailsAttribute()
    {
        return get_file_details($this->name);
    }
}
