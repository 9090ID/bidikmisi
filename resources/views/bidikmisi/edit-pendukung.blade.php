@extends('templates')
@section("container")

<div class="container">
    <div class="row">
        <h2 style="font-family: Vollkorn;">Masukkan Data Pendukung Selesksi Calon Penerima Beasiswa Bidikmisi</h2>
        <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-home"></i></a>
            <a href="#" class="btn btn-success"> List Menu</a>
            <a href="{{URLGroup("bidikmisi/mahasiswa/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}"  class="btn btn-info"> Data Mahasiswa Success</a>
            <a href="{{URLGroup("bidikmisi/orangtua/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}"  class="btn btn-success">Data Orang tua Success</a>
            <a href="{{URLGroup("bidikmisi/rangking/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}" class="btn btn-info">Data Rangking Success</a>
            <a href="#" class="btn btn-danger">Data Pendukung Seleksi</a>

        
        </div>
</div>
<br>
<div class="col-md-12">
    <div class="col-md-6">
{!!Form::open(['url' => URLGroup("bidikmisi/pendukung/update"), 'name'=>'form-update-pendukung'])!!}
{{Form::hidden("id",Crypt::encrypt($data->id))}}
        <table class="table table-striped table-condensed">
            <tr><th>{{Form::bsText("id_mahasiswa",$data->id_mahasiswa,['class'=>'col-6 numerik input-right form-control','readonly','required'=>true])}}</th></tr>
            <tr><th>
<?php
$list = array('Sendiri'=>'SENDIRI', 'Sewa'=>'SEWA', 'Menumpang'=>'MENUMPANG', 'Tidak Memiliki'=>'TIDAK MEMILIKI', );
$select =$data->kepemilikan_rumah;
?>
{!!Form::bsRadioInline($list,$select,"kepemilikan_rumah",['required'=>true])!!}</th></tr>
            <tr><th><?php
$list = array('Sangat Baik'=>'SANGAT BAIK', 'Baik'=>'BAIK', 'Sedang'=>'SEDANG', 'Buruk'=>'BURUK', );
$select =$data->keadaan_rumah;
?>
{!!Form::bsRadioInline($list,$select,"keadaan_rumah",['required'=>true])!!}</th></tr>
            <tr><th><?php
$list = array('450 WAT'=>'450 WAT', '900 WAT'=>'900 WAT', '1300 WAT'=>'1300 WAT','GENSET'=>'GENSET','DLL'=>'DLL', );
$select =$data->daya_listrik;
?>
{!!Form::bsSelect($list,$select,"daya_listrik",['required'=>true])!!}</th></tr>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-striped table-condensed">
            <tr><th><?php
$list = array('PDAM'=>'PDAM', 'AIR PAM'=>'AIR PAM', 'AIR SUMUR'=>'AIR SUMUR', 'AIR SUNGAI'=>'AIR SUNGAI','DLL'=>'DLL', );
$select =$data->sumber_air;
?>
{!!Form::bsRadioInline($list,$select,"sumber_air",['required'=>true])!!}</th></tr>
            <tr><th>{{Form::bsText("lahan_kebun",$data->lahan_kebun)}}</th></tr>
            <tr><th><?php
$list = array('Ada'=>'ADA', 'Tidak Ada'=>'TIDAK ADA', );
$select =$data->kepunyaan_mobil;
?>
{!!Form::bsRadioInline($list,$select,"kepunyaan_mobil",['required'=>true])!!}</th></tr>
            <tr><th><?php
$list = array('Ada'=>'ADA', 'Tidak Ada'=>'TIDAK ADA', );
$select =$data->kepunyaan_motor;
?>
{!!Form::bsRadioInline($list,$select,"kepunyaan_motor",['required'=>true])!!}</th></tr>
        </table>

    </div>
    {!!Form::bsSubmit('Simpan',"")!!}
{!!Form::close()!!} 
</div>









<script type="text/javascript">
	 $(function(){
	var $validator = $("form[name=form-update-pendukung]").validate({
ignore:[],
rules: {
id_mahasiswa: {required:true},
kepemilikan_rumah: {required:true},
keadaan_rumah: {required:true},
daya_listrik: {required:true},
sumber_air: {required:true},
lahan_kebun: {required:true},
kepunyaan_mobil: {required:true},
kepunyaan_motor: {required:true},
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
if(result){ $("form[name=form-delete-pendukung]").submit();}
}
});
})
    })
</script>


@endsection