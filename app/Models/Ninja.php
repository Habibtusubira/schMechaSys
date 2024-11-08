<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    use HasFactory;
}

// this command creates model,controller and the migration all at  once
// php artisan make:Model food -mc