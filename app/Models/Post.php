<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /* 1対1のリレーションを定義する
     * (Postモデル -> Addressモデル : hasOne)
     *
     * 親: postsテーブル: idカラム
     * 子: Addressesテーブル: user_idカラム
     */
    public function address(){
      return $this->hasOne('App\Models\Address', 'user_id');
    }
}
