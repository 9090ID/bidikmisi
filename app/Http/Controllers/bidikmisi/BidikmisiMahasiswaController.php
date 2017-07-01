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
//use App\User;
//model (table) yang digunakan
use App\Models\Mahasiswa;
use App\Models\Rangking;

class BidikmisiMahasiswaController extends Controller{
function listMahasiswa($id){
	//$id_mahasiswa = Auth::user()->user();
	$data  = Mahasiswa::find(Hashids::decode($id)[0]);
	return view('bidikmisi.list-mahasiswa' ,array("data" => $data));

}
public function editMahasiswa($id)
    {
        $data  = Mahasiswa::find(Hashids::decode($id)[0]);
        //$route = array("main" => "potensi", "sub" => "kantor-desa", "title" => "Potensi - Kantor Desa");
        return view('bidikmisi.edit-mahasiswa', array("data" => $data));
    }
//tambahkan fungsi update data Mahasiswa
function updateMahasiswa (Request $request) {
$id_mahasiswa=Crypt::decrypt($request->input('id_mahasiswa'));
$nim=$request->input('nim');
$no_pendaftaran=$request->input('no_pendaftaran');
$nama_mahasiswa=$request->input('nama_mahasiswa');
$nomor_kk=$request->input('nomor_kk');
$nomor_ktp=$request->input('nomor_ktp');
$program_studi=$request->input('program_studi');
$jalur_masuk_PT=$request->input('jalur_masuk_PT');
$jenis_kelamin=$request->input('jenis_kelamin');
$tempat_lahir=$request->input('tempat_lahir');
$TTL=$request->input('TTL');
$agama=$request->input('agama');
$alamat=$request->input('alamat');
$kota_kabupaten=$request->input('kota_kabupaten');
$provinsi=$request->input('provinsi');
$nomor_hp_siswa_1=$request->input('nomor_hp_siswa_1');
$nomor_hp_siswa_2=$request->input('nomor_hp_siswa_2');
$email=$request->input('email');
$sekolah_asal=$request->input('sekolah_asal');
$kota_kabupaten_sekolah=$request->input('kota_kabupaten_sekolah');
$provinsi_sekolah=$request->input('provinsi_sekolah');
$status_penyerahan_berkas=$request->input('status_penyerahan_berkas');
$status_registrasi=$request->input('status_registrasi');
$record = Mahasiswa::find($id_mahasiswa);
if($record){
$record->nim = $nim;
$record->no_pendaftaran = $no_pendaftaran;
$record->nama_mahasiswa = $nama_mahasiswa;
$record->nomor_kk = $nomor_kk;
$record->nomor_ktp = $nomor_ktp;
$record->program_studi = $program_studi;
$record->jalur_masuk_PT = $jalur_masuk_PT;
$record->jenis_kelamin = $jenis_kelamin;
$record->tempat_lahir = $tempat_lahir;
$record->TTL = tanggalSystem($TTL);
$record->agama = $agama;
$record->alamat = $alamat;
$record->kota_kabupaten = $kota_kabupaten;
$record->provinsi = $provinsi;
$record->nomor_hp_siswa_1 = $nomor_hp_siswa_1;
$record->nomor_hp_siswa_2 = $nomor_hp_siswa_2;
$record->email = $email;
$record->sekolah_asal = $sekolah_asal;
$record->kota_kabupaten_sekolah = $kota_kabupaten_sekolah;
$record->provinsi_sekolah = $provinsi_sekolah;
$record->status_penyerahan_berkas = $status_penyerahan_berkas;
$record->status_registrasi = $status_registrasi;
$record->save();
//$request->session()->flash('notice', "Update Data Berhasil!");
//return redirect(URL('list'));
////return redirect()->back();
//return redirect()->back();
$request->session()->flash('alert-success', 'Data Mahasiswa Berhasil Anda Simpan, Silakan Masukkan Data Selanjutnya');
return redirect()->back();


}else{
throw new HttpException(404);
}
}
/*
>>>>>>>>>head
//fungsi hapus data Mahasiswa
function deleteMahasiswa (Request $request) {
$id_mahasiswa=Crypt::decrypt($request->input('id_mahasiswa'));
$record = Mahasiswa::find($id_mahasiswa);
if($record){
$record->delete();
$request->session()->flash('notice', "Hapus Data Berhasil!");
return redirect(URLGroup('bidikmisi/mahasiswa'));
}else{
throw new HttpException(404);
}
}
<<<<<<>>>>>>>>*/
}