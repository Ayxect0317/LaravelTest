<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /* 1対1のリレーションを定義する
     * (Addressモデル -> Postモデル : belongsTo)
     *
     * 親: postsテーブル: idカラム
     * 子: Addressesテーブル: user_idカラム
     */
    public function post(){
      return $this->belongsTo('App\Models\Post', 'user_id');
    }

}
