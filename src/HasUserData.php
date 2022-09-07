<?php 
namespace Hexathos\Traits\HasUserData;

use Carbon\Carbon;

/**
 * Trait HasUserData
 * @package Hexathos\HasUserData
 */
trait HasUserData
{
    protected static function bootHasUserData()
    {
        static::creating(function ($model) {
            $model->created_by = (null != auth()->user()) ? auth()->user()->username : 'unknown';
            $model->updated_by = (null != auth()->user()) ? auth()->user()->username : 'unknown';
            $model->created_at = new Carbon();
        });

        static::updating(function ($model) {
            $model->updated_by = (null != auth()->user()) ? auth()->user()->username : $model->updated_by;
            $model->updated_at = new Carbon();
        });
    }

}
