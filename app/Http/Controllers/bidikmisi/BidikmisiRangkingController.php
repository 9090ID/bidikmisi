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
use App\Models\Rangking;
use App\Models\Mahasiswa;

class BidikmisiRangkingController extends Controller{



public function editRangking($id)
    {
        $data  = Rangking::find(Hashids::decode($id)[0]);
        return view('bidikmisi.edit-rangking', array("data"=>$data));
    }


//tambahkan fungsi update data Rangking
function updateRangking (Request $request) {
$id=Crypt::decrypt($request->input('id'));
$id_mahasiswa=$request->input('id_mahasiswa');
$prestasi=$request->input('prestasi');
$kip_atau_bsm=$request->input('kip_atau_bsm');
$kelas1_1=$request->input('kelas1_1');
$kelas1_2=$request->input('kelas1_2');
$kelas2_1=$request->input('kelas2_1');
$kelas2_2=$request->input('kelas2_2');
$kelas3_1=$request->input('kelas3_1');
$kelas3_2=$request->input('kelas3_2');
$total_rangking=$request->input('total_rangking');
$record = Rangking::find($id);
if($record){
$record->id_mahasiswa = $id_mahasiswa;
$record->prestasi = $prestasi;
$record->kip_atau_bsm = $kip_atau_bsm;
$record->kelas1_1 = system_numerik($kelas1_1);
$record->kelas1_2 = system_numerik($kelas1_2);
$record->kelas2_1 = system_numerik($kelas2_1);
$record->kelas2_2 = system_numerik($kelas2_2);
$record->kelas3_1 = system_numerik($kelas3_1);
$record->kelas3_2 = system_numerik($kelas3_2);
$record->total_rangking = $total_rangking;
$record->save();
$request->session()->flash('alert-success', 'Data Rangking Calon Mahasiswa Berhasil Anda Simpan, Silakan Masukkan Data Selanjutnya');
return redirect()->back();

}else{
throw new HttpException(404);
}
}
}
/*
//fungsi hapus data Rangking
function deleteRangking (Request $request) {
$id=Crypt::decrypt($request->input('id'));
$record = Rangking::find($id);
if($record){
$record->delete();
$request->session()->flash('notice', "Hapus Data Berhasil!");
return redirect(URLGroup('bidikmisi/rangking'));
}else{
throw new HttpException(404);
}
}
/*
