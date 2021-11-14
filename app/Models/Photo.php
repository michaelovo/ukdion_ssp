<?php

namespace App\Models;

use App\Models\Campaign;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory, SoftDeletes, MediaAlly;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'campaign_id','image_url',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class,'campaign_id','id');
    }
    
}
