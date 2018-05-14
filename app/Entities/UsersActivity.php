<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class UsersActivity.
 *
 * @package namespace App\Entities;
 */
class UsersActivity extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'activities_id',
        'presenca',
        'user_activity_types_id'
    ];
    public function activity(){
        return $this->belongsTo(Activity::class,'activities_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }
    public function userActivityType(){
        return $this->belongsTo(UserActivityType::class,'user_activity_types_id');
    }
}