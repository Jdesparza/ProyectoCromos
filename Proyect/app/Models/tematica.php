<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Providers\RouteServiceProvider;
use App\Models\tematica;
use App\Http\Controllers\Controller;

class tematica extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nombretematica',
    ];

    protected $hidden = [
        'nombretematica',
    ];

    protected $casts = [
        
    ];
}
