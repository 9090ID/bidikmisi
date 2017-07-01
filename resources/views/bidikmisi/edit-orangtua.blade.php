@extends('templates')
@section("container")

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
       <center><a href="{{URLGroup("bidikmisi/rangking/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}"><button class="btn btn-success">Masukkan Rangking Data Calon Penerima Beasiswa Bidikmisi</button></a></center>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
<div class="container">
    <div class="row">
        <h2 style="font-family: Vollkorn;">Masukkan Data Orangtua Calon Penerima Beasiswa Bidikmisi</h2>
        <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-home"></i></a>
            <a href="#" class="btn btn-success">List Menu</a>
                <a href="{{URLGroup("bidikmisi/mahasiswa/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}" class="btn btn-info">Data Mahasiswa Success</a>
            <a href="#" class="btn btn-danger">Data Orangtua/Wali</a>
        </div>
	</div>
  </div>
  <hr>
  <div class="col-md-12">
<div class="col-md-6">
<table class="table table-striped table-condensed">
{!!Form::open(['url' => URLGroup("bidikmisi/orangtua/update"), 'name'=>'form-update-orangtua'])!!}
{{Form::hidden("id",Crypt::encrypt($data->id))}}
    <tr><th>{{Form::bsText("id_mahasiswa",$data->id_mahasiswa,['class'=>'col-12 numerik input-right form-control','readonly','required'=>true])}}</th></tr>
    <tr><th><h5 style="text-align: center;font-family: forge;text">DATA AYAH MAHASISWA</h5></th></tr>
    <tr><th>{{Form::bsText("nama_ayah",$data->nama_ayah,['required'=>true])}}</th></tr>
    <tr><th>{{Form::bsText("umur_ayah",$data->umur_ayah,['class'=>'col-12 numerik input-right form-control','required'=>true])}}</th></tr>
    <tr><th>{{Form::bsText("pendidikan_ayah",$data->pendidikan_ayah,['required'=>true])}}</th></tr>
    <tr><th>{{Form::bsText("pekerjaan_ayah",$data->pekerjaan_ayah,['required'=>true])}}</th></tr>
    <tr><th>{{Form::bsText("penghasilan_ayah",$data->penghasilan_ayah,['class'=>'col-12 double input-right form-control', 'required'=>true])}}</th></tr>
    <tr><th>{{Form::bsText("nomor_hp_ayah",$data->nomor_hp_ayah,['required'=>true])}}</th></tr>
    </table>
    </div>
   <div class="col-md-6">
      <table class="table table-striped table-condensed">
           <tr><th>{{Form::bsText("tanggungan_kk",$data->tanggungan_kk,['class'=>'col-12 numerik input-right form-control','required'=>true])}}</th></tr>
            <tr><th><h5 style="text-align: center;font-family: forge;text">DATA IBU MAHASISWA</h5></th></tr>
           <tr><th>{{Form::bsText("nama_ibu",$data->nama_ibu,['required'=>true])}}</th></tr>
           <tr><th>{{Form::bsText("umur_ibu",$data->umur_ibu,['class'=>'col-12 numerik input-right form-control','required'=>true])}}</th></tr>
           <tr><th>{{Form::bsText("pendidikan_ibu",$data->pendidikan_ibu,['required'=>true])}}</th></tr>
           <tr><th>{{Form::bsText("pekerjaan_ibu",$data->pekerjaan_ibu,['required'=>true])}}</th></tr>
           <tr><th>{{Form::bsText("penghasilan_ibu",$data->penghasilan_ibu,['class'=>'col-12 double input-right form-control', 'required'=>true])}}</th></tr>
           <tr><th>
{{Form::bsText("nomor_hp_ibu",$data->nomor_hp_ibu,['required'=>true])}}
</th></tr>
       </table>
   </div>

       {!!Form::bsSubmit('Simpan',"")!!}
{!!Form::close()!!} 

</div>


<script type="text/javascript">
	 $(function(){
var $validator = $("form[name=form-update-orangtua]").validate({
ignore:[],
rules: {
id_mahasiswa: {required:true},
nama_ayah: {required:true},
umur_ayah: {required:true},
pendidikan_ayah: {required:true},
pekerjaan_ayah: {required:true},
penghasilan_ayah: {required:true},
nomor_hp_ayah: {required:true},
nama_ibu: {required:true},
umur_ibu: {required:true},
pendidikan_ibu: {required:true},
pekerjaan_ibu: {required:true},
penghasilan_ibu: {required:true},
nomor_hp_ibu: {required:true},
tanggungan_kk: {required:true},
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
if(result){ $("form[name=form-delete-orangtua]").submit();}
}
});
})
    })
</script>


@endsection