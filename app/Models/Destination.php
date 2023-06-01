<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $table = "destinations";
    protected $fillable = [
        'name',
        'description',
        'locations',
        'location_url'
    ];

    public function image()
    {
        return $this->hasMany(DestinationImage::class);
    }
}
