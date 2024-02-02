<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{

    protected $fillable = ['send_offices','receive_offices','amount','date','receive_name','send_name'];


    public function office(){
        return $this->belongsTo(Office::class);
    }

    use HasFactory;
}
