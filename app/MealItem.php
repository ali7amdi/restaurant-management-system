<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealItem extends Model
{
    protected $table = 'meal_item';
    protected $fillable = ['meal_id', 'item_id', 'discount'];
}
