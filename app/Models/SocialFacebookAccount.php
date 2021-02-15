<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialFacebookAccount extends Model
{
    use HasFactory;

    protected $fillable = ['provider_user_id', 'provider'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
