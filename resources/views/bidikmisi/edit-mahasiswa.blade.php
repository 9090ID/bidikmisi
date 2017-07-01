@extends('templates')
@section("container")

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
       <center><a href="{{URLGroup("bidikmisi/orangtua/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}"><button class="btn btn-success">Masukkan Data Orangtua Calon Penerima Beasiswa Bidikmisi</button></a></center>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->

<div class="container">
    <div class="row">
        <h2 style="font-family: Vollkorn;">Masukkan Data Calon Penerima Beasiswa Bidikmisi</h2>
        <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-home"></i></a>
            <a href="#" class="btn btn-success" >List Menu</a>
            <a href="#" class="btn btn-danger">Data Mahasiswa</a>
           
     
        </div>
</div>
  
    </div>
    <hr>
<div class="col-md-12">
{!!Form::open(['url' => URLGroup("bidikmisi/mahasiswa/update"), 'name'=>'form-update-mahasiswa'])!!}
{{Form::hidden("id_mahasiswa",Crypt::encrypt($data->id_mahasiswa))}}
<div class="col-md-6">
<div class="">
<table class="table table-striped table-condensed">
    <tr><th>{{Form::bsText("nim",$data->nim,[])}}</th></tr>
   <tr><th>{{Form::bsText("no_pendaftaran",$data->no_pendaftaran,[])}}</th></tr>
   <tr><th>{{Form::bsText("nama_mahasiswa",$data->nama_mahasiswa,['required'=>true])}}</th></tr>
   <tr><th>{{Form::bsText("nomor_kk",$data->nomor_kk,['class'=>'col-12 numerik input-right form-control','required'=>true])}}</th></tr>
   <tr><th>{{Form::bsText("nomor_ktp",$data->nomor_ktp,['class'=>'col-12 numerik input-right form-control','required'=>true])}}</th></tr>
   <tr><th>{{Form::bsText("program_studi",$data->program_studi,['required'=>true])}}</th></tr>
   <tr><th>
            <?php
            $list = array('SNMPTN'=>'SNMPTN', 'SBMPTN'=>'SBMPTN', );
            $select =$data->jalur_masuk_PT;
            ?>
            {!!Form::bsRadioInline($list,$select,"jalur_masuk_PT",['required'=>true])!!}
       </th>
   </tr>
   <tr>
       <th>
           <?php
            $list = array('Laki-Laki'=>'LAKI-LAKI', 'Perempuan'=>'PEREMPUAN', );
            $select =$data->jenis_kelamin;
            ?>
            {!!Form::bsRadioInline($list,$select,"jenis_kelamin",['required'=>true])!!}
       </th>
   </tr>
   <tr><th>{{Form::bsText("tempat_lahir",$data->tempat_lahir,['required'=>true])}}</th></tr>
   <tr>
       <th>
            {{Form::bsText("TTL",tanggalIndo($data->TTL),['class'=>'col-4 datepicker form-control','required'=>true])}}
       </th>
   </tr>
   <tr>
       <th class="col-">
           
            {{Form::bsText("agama",$data->agama,['required'=>true])}}
       </th>
   </tr>
  

</table>
</div>
</div>

<div class="col-md-6 ">
<table class="table table-striped table-condensed">
<tr><th>{{Form::bsText("alamat",$data->alamat,['required'=>true])}}</th></tr>
<tr><th>{{Form::bsText("kota_kabupaten",$data->kota_kabupaten,['required'=>true])}}</th></tr>
<tr><th>{{Form::bsText("provinsi",$data->provinsi,['required'=>true])}}</th></tr>
<tr><th>{{Form::bsText("nomor_hp_siswa_1",$data->nomor_hp_siswa_1,[])}}</th></tr>
<tr><th>{{Form::bsText("nomor_hp_siswa_2",$data->nomor_hp_siswa_2,[])}}</th></tr>
<tr><th>
{{Form::bsText("email",$data->email,[])}}</th></tr>
<tr><th>
{{Form::bsText("sekolah_asal",$data->sekolah_asal,['required'=>true])}}</th></tr>
<tr><th>{{Form::bsText("kota_kabupaten_sekolah",$data->kota_kabupaten_sekolah,['required'=>true])}}</th></tr>

<tr><th>
{{Form::bsText("provinsi_sekolah",$data->provinsi_sekolah,['required'=>true])}}</th></tr>
<tr><th><?php
$list = array('Menyerahkan Berkas'=>'MENYERAHKAN BERKAS', 'Tidak Menyerahkan Berkas'=>'TIDAK MENYERAHKAN BERKAS', );
$select =$data->status_penyerahan_berkas;
?>
{!!Form::bsSelect($list,$select,"status_penyerahan_berkas",[])!!}</th></tr>
<tr><th><?php
$list = array('Regis'=>'REGIS', 'Tidak Regis'=>'TIDAK REGIS','Belum Mulai Registrasi'=>'BELUM MULAI REGISTRASI' );
$select =$data->status_resgistrasi;
?>
{!!Form::bsSelect($list,$select,"status_registrasi",[])!!}</th></tr>
</table>
</div>

{!!Form::bsSubmit('Simpan Data',"")!!}
{!!Form::close()!!} 

</div>         

    		</div>
	</div>
</div>
@endsection
@section("modal")


@endsection
@section("javascript")
<script type="text/javascript">
    $(function(){
       var $validator = $("form[name=form-update-mahasiswa]").validate({
ignore:[],
rules: {
nama_mahasiswa: {required:true},
nomor_kk: {required:true},
nomor_ktp: {required:true},
program_studi: {required:true},
jalur_masuk_PT: {required:true},
jenis_kelamin: {required:true},
tempat_lahir: {required:true},
TTL: {required:true},
agama: {required:true},
alamat: {required:true},
kota_kabupaten: {required:true},
provinsi: {required:true},
sekolah_asal: {required:true},
kota_kabupaten_sekolah: {required:true},
provinsi_sekolah: {required:true},
},
messages: {
},
submitHandler: function(form) {
form.submit();
}
});


$("#delete").on("click", function(){
bootbox.confirm({
title: "Hapus",
message: "Anda Yakin Ingin Menghapus Data Ini.",
buttons: {
cancel: {
label: 'Batal'
},
confirm: { label: 'Ya, Hapus'
}
},
callback: function (result) {
if(result){ $("form[name=form-delete-mahasiswa]").submit();}
}
});
})

    })
</script>
@endsection


