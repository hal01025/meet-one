<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function followers()
    {
        return $this->belongsToMany(User::class, 'friendactions','action_id', 'user_id');
    }
    
    public function followings()
    {
        return $this->belongsToMany(User::class, 'friendactions','user_id', 'action_id');
    }
    
    public function follow($userId)
    {
        $exist = $this->is_following($userId);
        $its_me = $this->id == $userId;
        
        if ($its_me || $exist) {
            return false;
        }
        else {
            $this->followings()->attach($userId);
            return true;
            
        }
    }
    
    public function unfollow($userId)
    {
        $exist = $this->is_following($userId);
        $its_me = $this->id == $userId;
        
        if ($its_me && $exist) {
            $this->followings()->detach($userId);
            return true;
        }
        else {
            return false;
        }
    }
    
    public function is_following($userId)
    {
        return $this->followings()->where('action_id', $userId)->exists();
        
    }
}
