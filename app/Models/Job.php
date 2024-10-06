<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'salary', 'status', 'location'];

    public function Employer()
    {
        return $this->belongsTo(Employer::class);
    }
}