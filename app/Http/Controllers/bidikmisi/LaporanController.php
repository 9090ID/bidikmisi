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


class LaporanController extends Controller{
function listlap(){
	
	return view('bidikmisi.list-laporan');

}
}