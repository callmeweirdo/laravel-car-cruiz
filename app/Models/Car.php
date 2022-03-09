<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable =  ['name', 'founded', 'description'];

    protected $primarykey = 'id';

    public function carModel(){
        return $this->hasMany(CarModel::class);
    }

    public function headquarter (){
        return $this->hasOne(Headquarter::class);
    }

    //  Defines an has many relationship
    public function engines(){
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //Foreing key on CarModel
            'model_id' //Foreign Key on Engine Table
        );
    }

    public function productionDate(){
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

}
