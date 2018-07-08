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
        // l?y banner có d?t qu?ng cáo l?n nh?t  
       $slide = QuangCao::where('vitri_quangcao',1)->get();
        //print_r($slide);
        //exit;
        // L?y ra các qu?ng cáo d?t v? trí và các khuy?n m?i max
       $km_muc_desc = KhuyenMai::join_km_url();
       $quangcao = QuangCao::where('vitri_quangcao','!=',1)->get();
       //dd($quangcao);
       
        // L?y các d?ch v?
       $dsdv = DichVu::join_khuyenmai();
        // dd($dsdv);
       
       //L?y danh sách s?n ph?m
       $dssp =$km_muc_desc;
       //dd($dssp);
       
       //L?y các d?ch v? uu thích khi khách hàng dang nh?p
       //L?y các d?ch v? có dánh giá sao trong b?ng nhân xét
       //$spdg =KhuyenMai::join_nhanxet()->count('danhgia_sao');
      $spdg = NhanXet::count('danhgia_sao')->get();
       //dd($spdg);
       
       //L?y nh?ng khuy?n m?i mà ngu?i dùng dang nh?p dã xem
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
