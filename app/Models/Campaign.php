<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;

class Campaign extends Model
{

    protected $fillable = [
        'name','start_date','end_date','total_budget','daily_budget','image',
    ];
    use HasFactory, SoftDeletes, MediaAlly;

    protected $dates = ['deleted_at'];

    protected $casts = [
        'total_budget' => 'decimal:2',
        'daily_budget' => 'decimal:2',
    ];
}
