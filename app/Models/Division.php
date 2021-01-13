<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    /*
     * DivisionモデルとEmployeeモデルの間に 1:N の関係
     * 関数名は複数形にすること
     */
    public function employees() {
      return $this->hasMany('App\Models\Employee');
    }
}
