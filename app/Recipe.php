<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{


    public function users()
    {
      return $this->hasMany(User::class);
    }


    protected $casts = [
        'ingredients' => 'array',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'ingredients', "instructions", "likes", "hotLvl","timeToPrepere","isVegetarian", "author_id"
    ];

}
