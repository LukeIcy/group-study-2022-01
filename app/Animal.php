<?php

namespace App;

// use App\AnimalImg; 好像不用引入
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $species
 * @property string $gender
 * @property int $age
 * @property string $persona
 * @property string $chara
 * @property string $health
 * @property string $fixed
 * @property string $location
 * @property string $vaccine
 * @property string $adcond
 * @property string $exhort
 * @property integer $user_id
 * @property string $launched
 * @property string $created_at
 * @property string $updated_at
 */
class Animal extends Model
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
    protected $fillable = ['name', 'species', 'gender', 'age', 'persona', 'chara', 'health', 'fixed', 'location', 'vaccine', 'adcond', 'exhort', 'user_id', 'launched', 'created_at', 'updated_at'];

    // 做一對多關聯到animal_img
    public function imgs()//我要叫關聯的圖片出來的時候 我要取什麼名字 ex:$animal->imgs
    {
        return $this->hasMany(AnimalImg::class,'animal_id','id');
        // hasMany的三個參數('要對應的資料表的 model','那個資料表的對應欄位','自己表的對應欄位')
    }

}
