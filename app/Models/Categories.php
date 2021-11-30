<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
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
        'category',
    ];

    public function books(){
        return $this->hasMany(Books::class, 'category_id', 'id');
    }

}
