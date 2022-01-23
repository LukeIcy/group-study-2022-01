<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $image
 * @property integer $animal_id
 * @property string $created_at
 * @property string $updated_at
 */
class AnimalImg extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['image', 'animal_id', 'created_at', 'updated_at'];
    
}
