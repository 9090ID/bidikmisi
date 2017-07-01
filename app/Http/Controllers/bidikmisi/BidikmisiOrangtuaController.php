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
use App\Models\Orangtua;
class BidikmisiOrangtuaController extends Controller{

public function editOrangtua($id)
    {
        $data  = Orangtua::find(Hashids::decode($id)[0]);
        return view('bidikmisi.edit-orangtua', array("data"=>$data));
    }


//tambahkan fungsi update data Orangtua
function updateOrangtua (Request $request) {
$id=Crypt::decrypt($request->input('id'));
$id_mahasiswa=$request->input('id_mahasiswa');
$nama_ayah=$request->input('nama_ayah');
$umur_ayah=$request->input('umur_ayah');
$pendidikan_ayah=$request->input('pendidikan_ayah');
$pekerjaan_ayah=$request->input('pekerjaan_ayah');
$penghasilan_ayah=$request->input('penghasilan_ayah');
$nomor_hp_ayah=$request->input('nomor_hp_ayah');
$nama_ibu=$request->input('nama_ibu');
$umur_ibu=$request->input('umur_ibu');
$pendidikan_ibu=$request->input('pendidikan_ibu');
$pekerjaan_ibu=$request->input('pekerjaan_ibu');
$penghasilan_ibu=$request->input('penghasilan_ibu');
$nomor_hp_ibu=$request->input('nomor_hp_ibu');
$tanggungan_kk=$request->input('tanggungan_kk');
$record = Orangtua::find($id);
if($record){
$record->id_mahasiswa = $id_mahasiswa;
$record->nama_ayah = $nama_ayah;
$record->umur_ayah = $umur_ayah;
$record->pendidikan_ayah = $pendidikan_ayah;
$record->pekerjaan_ayah = $pekerjaan_ayah;
$record->penghasilan_ayah = system_numerik($penghasilan_ayah);
$record->nomor_hp_ayah = $nomor_hp_ayah;
$record->nama_ibu = $nama_ibu;
$record->umur_ibu = $umur_ibu;
$record->pendidikan_ibu = $pendidikan_ibu;
$record->pekerjaan_ibu = $pekerjaan_ibu;
$record->penghasilan_ibu = system_numerik($penghasilan_ibu);
$record->nomor_hp_ibu = $nomor_hp_ibu;
$record->tanggungan_kk = $tanggungan_kk;
$record->save();
$request->session()->flash('alert-success', 'Data Orang tua Berhasil Anda Simpan, Silakan Masukkan Data Selanjutnya');
return redirect()->back();
}else{
throw new HttpException(404);
}
}
}
/*
//fungsi hapus data Orangtua
function deleteOrangtua (Request $request) {
$id=Crypt::decrypt($request->input('id'));
$record = Orangtua::find($id);
if($record){
$record->delete();
$request->session()->flash('notice', "Hapus Data Berhasil!");
return redirect(URLGroup('bidikmisi/orangtua'));
}else{
throw new HttpException(404);
}
}

}
