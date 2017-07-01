<?php
namespace App\Http\Controllers\bidikmisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use URL;
use DB;
use Validator;
use Yajra\Datatables\Datatables;
use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Vinkla\Hashids\Facades\Hashids;
use App\User;
//model (table) yang digunakan
use App\Models\Pendukung;
class BidikmisiPendukungController extends Controller{


public function editPendukung($id)
    {
        $data  = Pendukung::find(Hashids::decode($id)[0]);
       // $hasil = Rangking::select(['rangking.*','mahasiswa.nama_mahasiswa as nama']->wh//ere('id_mahasiswa,$id_mahasiswa')//
        //	->leftjoin('mahasiswa','mahasiswa.id_mahasiswa','=','rangking.id')
        //	->get());
        //$route = array("main" => "potensi", "sub" => "kantor-desa", "title" => "Potensi - Kantor Desa");
        return view('bidikmisi.edit-pendukung', array("data"=>$data));
    }

    //tambahkan fungsi update data Pendukung
function updatePendukung (Request $request) {
$id=Crypt::decrypt($request->input('id'));
$id_mahasiswa=$request->input('id_mahasiswa');
$kepemilikan_rumah=$request->input('kepemilikan_rumah');
$keadaan_rumah=$request->input('keadaan_rumah');
$daya_listrik=$request->input('daya_listrik');
$sumber_air=$request->input('sumber_air');
$lahan_kebun=$request->input('lahan_kebun');
$kepunyaan_mobil=$request->input('kepunyaan_mobil');
$kepunyaan_motor=$request->input('kepunyaan_motor');
$record = Pendukung::find($id);
if($record){
$record->id_mahasiswa = $id_mahasiswa;
$record->kepemilikan_rumah = $kepemilikan_rumah;
$record->keadaan_rumah = $keadaan_rumah;
$record->daya_listrik = $daya_listrik;
$record->sumber_air = $sumber_air;
$record->lahan_kebun = $lahan_kebun;
$record->kepunyaan_mobil = $kepunyaan_mobil;
$record->kepunyaan_motor = $kepunyaan_motor;
$record->save();
$request->session()->flash('notice', "Anda Berhasil Memasukkan Menyimpan data mahasiswa, data rangking, dan data pendukung seleksi");
return redirect(URLGroup('list'));
}else{
throw new HttpException(404);
}
}
}
/*
//fungsi hapus data Pendukung
function deletePendukung (Request $request) {
$id=Crypt::decrypt($request->input('id'));
$record = Pendukung::find($id);
if($record){
$record->delete();
$request->session()->flash('notice', "Hapus Data Berhasil!");
return redirect(URLGroup('bidikmisi/pendukung'));
}else{
throw new HttpException(404);
}
}
/*

