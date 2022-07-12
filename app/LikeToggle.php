<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeToggle extends Model
{
    //
    public function likes(){
        return $this->belongsToMany(Recipe::class, 'like_toggle');
        /**
         * The roles that belong to the LikeToggle
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
         function roles(): BelongsToMany
        {
            return $this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');
        }
    }
}
