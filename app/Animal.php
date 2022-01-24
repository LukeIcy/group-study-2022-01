<?php

namespace App;

// use App\AnimalImg; 好像不用引入也可以用
use App\Models\User; //這邊就要引入才能用 神秘...
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
        // hasMany的三個參數('要對應的資料表的 model','那個資料表的對應欄位','自己表的對應欄位')
        return $this->hasMany(AnimalImg::class,'animal_id','id');
    }

    //每個寵物都只有一個送養人
    public function user()
    {
        // belongsTo的三個參數('要對應的資料表的 model','自己表的對應欄位','那個資料表的對應欄位') 還是我搞錯了?
        // return $this->belongsTo(User::class,'user_id','id');
        // 奇怪...這邊又要importUserClass才可以用，不然會報錯，明明上面的animal_img不用importClass
        return $this->belongsTo(User::class);
    }

    // 理論上不importClass也可以執行，因為laravel會自動去找Class，目前這個版本預設是去(app/)資料夾下找model，除非路徑有誤，偏偏user在(app/model裡面)

        // 一個寵物 可以被申請很多次領養
        public function apply()
        {
            return $this->hasMany(Apply::class,'animal_id', 'id');
        }
}
