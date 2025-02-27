<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Feedback extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ["id"];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belognsTo(Product::class);
    }
}
