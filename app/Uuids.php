<?php
/**
 * Created by PhpStorm.
 * User: osama
 * Date: 11/21/2018
 * Time: 12:34 PM
 */

namespace App;

use Webpatser\Uuid\Uuid;


trait Uuids
{
    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}