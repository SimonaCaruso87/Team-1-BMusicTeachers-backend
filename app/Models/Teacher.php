<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function messages() {
        return $this->hasMany(Message::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function subjects() {
        return $this->belongsToMany(Subject::class);
    }

    public function sponsorization() {
        return $this->belongsToMany(Sponsorization::class);
    }

    public function reatings() {
        return $this->belongsToMany(Reating::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
