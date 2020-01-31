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
    
//ユーザー対ユーザー

    public function followers()
    {
        return $this->belongsToMany(User::class, 'friendactions','action_id', 'user_id');
    }
    
    public function follower_counts() {
        return count($this->followers()->get());
    }
    
    
    
    public function followings()
    {
        return $this->belongsToMany(User::class, 'friendactions','user_id', 'action_id');
    }
    
    public function following_counts() {
        return count($this->followings()->get());
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
            $this->counter += 1;
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


//コミュニティ対ユーザー
     public function communities ()
    {
        return $this->belongsToMany(Community::class, 'join_community', 'user_id', 'community_id');
    }
    
    public function join($communityId)
    {

        $exist = $this->is_joining($communityId);

        if ($exist) {
            return false;
        } else {
            $this->communities()->attach($communityId);
            return true;
        }
    }
    
    public function unjoin($communityId)
    {

        $exist = $this->is_joining($communityId);
        if ($exist) {
            
            $this->communities()->detach($communityId);
            return true;
        } else {
            return false;
        }
    }
    
    public function is_joining($userId)
    {
        return $this->communities()->where('community_id', $userId)->exists();
    }
    
}