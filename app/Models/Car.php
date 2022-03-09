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

}
