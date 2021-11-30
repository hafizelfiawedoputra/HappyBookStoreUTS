<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
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
        'book_id',
        'author',
        'publisher',
        'year',
        'description',
    ];

    public function books(){
        return $this->belongsTo(Books::class);
    }

}
