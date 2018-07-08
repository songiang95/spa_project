<?php

namespace App\Http\Controllers;
use App\KhuyenMai_HinhAnh;
use App\DichVu;
use App\KhuyenMai;
use App\QuangCao;
use App\KhuyenMai_DaXem;
use App\NhanXet;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getTrangchu()
    {
        // l?y banner c� d?t qu?ng c�o l?n nh?t  
       $slide = QuangCao::where('vitri_quangcao',1)->get();
        //print_r($slide);
        //exit;
        // L?y ra c�c qu?ng c�o d?t v? tr� v� c�c khuy?n m?i max
       $km_muc_desc = KhuyenMai::join_km_url();
       $quangcao = QuangCao::where('vitri_quangcao','!=',1)->get();
       //dd($quangcao);
       
        // L?y c�c d?ch v?
       $dsdv = DichVu::join_khuyenmai();
        // dd($dsdv);
       
       //L?y danh s�ch s?n ph?m
       $dssp =$km_muc_desc;
       //dd($dssp);
       
       //L?y c�c d?ch v? uu th�ch khi kh�ch h�ng dang nh?p
       //L?y c�c d?ch v? c� d�nh gi� sao trong b?ng nh�n x�t
       //$spdg =KhuyenMai::join_nhanxet()->count('danhgia_sao');
      $spdg = NhanXet::count('danhgia_sao')->get();
       //dd($spdg);
       
       //L?y nh?ng khuy?n m?i m� ngu?i d�ng dang nh?p d� xem
       $spdx = KhuyenMai_DaXem::join_khuyenmai()->where('nguoidung_id',1);
       //dd($spdx);       
        return View('master',compact('slide','dsdv','quangcao','km_muc_desc','dssp','spdg','spdx'));
      
    }
    public function dichvu()
    {   
        //$con= DichVu::kn()->get();
        /**

 *         $con = DB::table('dichvu')
 *               ->select('dichvu.id_dichvu as dichvu_id_dichvu' )
 *               ->join('khuyenmai', 'dichvu.id_dichvu', '=', 'khuyenmai.dichvu_id')             
 *               ->get();
 */
       // $con = DichVu::test()->all();
        //$dsdv=DichVu::orderby('muc_khuyenmai','desp')->get();
        //$con = DichVu::find(1)->dichvu_khuyenmai;
        $users = \DB::table('dichvu')->join('khuyenmai', 'dichvu.id_dichvu', '=', 'khuyenmai.dichvu_id')->get();
        dd($users);
        //print_r($dsdv);exit;
      //  return View('master',['dsdv'=>$dsdv]);
    }
    public function index()
    {
        $tg=KhuyenMai::join_km_url()
        ->where('id_khuyenmai',2)
        ;
        dd($tg);
    }
}
