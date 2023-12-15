<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'image',
        'video',
        'descriptions',
        'type',
        'lat',
        'lng',
        'remarks',
    ]; 

    public function user () {
        return $this->belongsTo(User::class, 'user_id'); 
    }

    const STATUS_FOR_REVIEW = 'For Review';
    const STATUS_DONE = 'Done';
    const STATUS_REJECTED = 'Rejected'; 
}
