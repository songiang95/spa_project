<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuaHang extends Model
{
    protected $table = "cuahang";
    
    public function cuahang_quangcao()
    {
        return $this->hasMany('App\QuangCao','cuahang_id','id_cuahang');
    }
      public function cuahangkhuyenmai()
    {
        return $this->hasMany('App\KhuyenMai','cuahang_id','id_cuahang');
    }
    
}
