<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $contract
 * @property string $age
 * @property string $name
 * @property string $phone
 * @property string $line
 * @property string $fbName
 * @property string $address
 * @property string $myself
 * @property string $created_at
 * @property string $updated_at
 */
class Apply extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'applys';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['contract', 'age', 'name', 'phone', 'line', 'fbName', 'address', 'myself', 'created_at', 'updated_at','user_id','animal_id',];

    // 每張申請表都只有一個申請人
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 每張申請表都只針對一個寵物
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

}
