<?php

namespace App\Traits\General;
use Illuminate\Support\Str;

trait Utility{
    public function generateId($prefix=null){
        $uuid = (string)Str::uuid();
        return !empty($prefix)?$prefix.$uuid:$uuid;
    }
}