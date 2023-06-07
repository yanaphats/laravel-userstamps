<?php

namespace Sandbox\UserStamps\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sandbox\UserStamps\Concerns\HasUserStamps;

class LaravelUserstamp extends Model
{
    use HasUserStamps, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
