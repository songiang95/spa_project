<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanXet extends Model
{
    protected $table = "nhanxet";
    
    public function nhanxet_khuyenmai()
    {
        return $this->hasMany('App\KhuyenMai','khuyenmai_id','id_khuyenmai');
    }
    
    public function nhanxet_nguoidung()
    {
        return $this->hasMany('App\NguoiDung','nguoidung_id','id_nguoidung');
    }
}
