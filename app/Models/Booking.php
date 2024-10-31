<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'email',
        'morning',
        'evening',
        // other fillable attributes...
    ];

public function reviews()
{
    return $this->hasMany(User::class);
}
}