<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{

    protected $fillable = ['name','address','country','amount'];

    public function transfer(){
        return $this->hasMany(Transfer::class,'send_offices');
    }

    use HasFactory;
}
