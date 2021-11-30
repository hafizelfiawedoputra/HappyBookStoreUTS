<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'category_id',
        'title',
    ];

    public function categories(){
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }

    public function details(){
        return $this->belongsTo(Details::class,'id', 'book_id');
    }
}
