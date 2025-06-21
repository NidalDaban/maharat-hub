<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model  // Changed from Skills to Skill
{
    use HasFactory;

    protected $fillable = ['name', 'classification_id'];

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_skills'); // Correct table name
    }
}