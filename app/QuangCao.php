<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuangCao extends Model
{
    protected $table = "quangcao";
    
    public function quangcao_cuahang()
    {
        return $this->belongsTo('App\CuaHang','id_cuahang','id_cuahang');
    }
}
