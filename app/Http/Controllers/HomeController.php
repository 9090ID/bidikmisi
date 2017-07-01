<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use URL;
use DB;
use table;
use PDF;
use Validator;
use Yajra\Datatables\Datatables;
use Crypt;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\User;
use App\Models\Mahasiswa;
use App\Models\Orangtua;
use App\Models\Pendukung;
use App\Models\Rangking;

class HomeController extends Controller
{
   	public function index ()
    {
    return view('bidikmisi.search');
    }
     public function result(Request $request)
    {
        $input = $request->get('keyword');
		$hasil = Mahasiswa::where('no_pendaftaran', 'LIKE', '%'.$input.'%')->paginate(10);
		return view('bidikmisi.result', compact('hasil','input'));
    }
    function listOpr(Request $request){
    //$id_mahasiswa = Auth::user()->user();
    //$data=Mahasiswa::all();
        
        $input = $request->get('keyword');
        $hasil = Mahasiswa::where('no_pendaftaran', 'LIKE', '%'.$input.'%')->paginate(10);
    return view('bidikmisi.list-mahasiswa-opr' ,compact('hasil','input'));
    }
 

     public function bio($id)
    {
     $data  = Mahasiswa ::find(Hashids::decode($id)[0]);
     $hasil  = Orangtua ::find(Hashids::decode($id)[0]);
     $rangking  = Rangking ::find(Hashids::decode($id)[0]);
     $pendukung  = pendukung ::find(Hashids::decode($id)[0]);
     //$hasil  =  ::find(Hashids::decode($id)[0]);
     return view('bidikmisi.biodata', array("data"=>$data,"hasil"=>$hasil,"rangking"=>$rangking,"pendukung"=>$pendukung));

    }

        public function pdfview(Request $request)

        {

        $items = DB::table('mahasiswa')
        ->leftjoin('orangtua','orangtua.id_mahasiswa','=','mahasiswa.id_mahasiswa')
        ->leftjoin('pendukung','pendukung.id_mahasiswa','=','mahasiswa.id_mahasiswa')
        ->leftjoin('tim_visitasi','tim_visitasi.id_mahasiswa','=','mahasiswa.id_mahasiswa')
        ->where('status_penyerahan_berkas','Menyerahkan Berkas')
        ->get();
        view()->share('items',$items);
        if($request->has('download')){
            
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }
        return view('pdfview');
    }

}
