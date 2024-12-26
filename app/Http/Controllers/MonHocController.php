<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MonHocController extends Controller
{
// Đọc toàn bộ dữ liệu trong bảng môn học
public function getMonHocs()
{
$monHocs = DB::table('MonHoc')->get();
return view('monhoc.index',['monHocs'=>$monHocs]);
}
// Create Form
public function create()
{
return view('monhoc.create');
}
}