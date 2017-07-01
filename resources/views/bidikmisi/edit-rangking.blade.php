
@extends('templates')
@section("container")
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
       <center>
 <a href="{{URLGroup("bidikmisi/pendukung/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}""><button class="btn btn-success">Masukkan Data Pendukung Calon Penerima Beasiswa Bidikmisi</button></a>
</center>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->


<div class="container">
    <div class="row">
        <h2 style="font-family: Vollkorn;">Masukkan Data Rangking Calon Penerima Beasiswa Bidikmisi</h2>
        <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-home"></i></a>
            <a href="#" class="btn btn-success"> List Menu</a>
            <a href="{{URLGroup("bidikmisi/mahasiswa/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}"  class="btn btn-info"> Data Mahasiswa Success</a>
            <a href="{{URLGroup("bidikmisi/orangtua/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}" class="btn btn-success">Data Orang tua Success</a>
            <a href="#" class="btn btn-danger">Data Rangking</a>
        
        </div>
</div>
  <br>
<div class="col-md-12">
  <div class="col-md-6">
    <table class="table table-striped table-condensed">
      {!!Form::open(['url' => URLGroup("bidikmisi/rangking/update"), 'name'=>'form-update-rangking'])!!}
      {{Form::hidden("id",Crypt::encrypt($data->id))}}
      <tr><th><div class="form-group">
        {{Form::bsText("id_mahasiswa",$data->id_mahasiswa,['class'=>'col-12 numerik input-right form-control','readonly','required'=>true])}}
      </div></th></tr>
      <tr><th><div class="form-group">
      {{ Form::label('Prestasi', 'Prestasi') }}
      {{Form::textarea("prestasi",$data->prestasi,['class'=>'form-control'])}}
      </div></th></tr>
      <tr><th><div class="form-group">
  <?php
$list = array('Ada'=>'ADA', 'Tidak Ada'=>'TIDAK ADA', );
$select =$data->kip_atau_bsm;
?>
{!!Form::bsSelect($list,$select,"kip_atau_bsm",['class'=>'form-control','required'=>true])!!}
</div></th></tr>
    </table>
  </div>
<div class="col-md-6">
<table class="table table-striped table-condensed">

<tr><th> {{Form::bsText("kelas1_1",$data->kelas1_1,['class'=>'col-12 double input-right form-control', ])}}</th></tr>
<tr><th>{{Form::bsText("kelas1_2",$data->kelas1_2,['class'=>'col-12 double input-right form-control', ])}}</th></tr>
<tr><th>
{{Form::bsText("kelas2_1",$data->kelas2_1,['class'=>'col-12 double input-right form-control', ])}}
</th></tr>
<tr><th>{{Form::bsText("kelas2_2",$data->kelas2_2,['class'=>'col-12 double input-right form-control', ])}}</th></tr>
<tr><th>{{Form::bsText("kelas3_1",$data->kelas3_1,['class'=>'col-12 double input-right form-control', ])}}</th></tr>
<tr><th>{{Form::bsText("kelas3_2",$data->kelas3_2,['class'=>'col-12 double input-right form-control', ])}}</th></tr>
<tr><th>{{Form::bsText("total_rangking",$data->total_rangking,['class'=>'col-12 numerik input-right form-control',])}}
</th></tr>

</table>
  
</div>
{!!Form::bsSubmit('Simpan',"")!!}
{!!Form::close()!!}
</div>
</div>
</div>
</div>
@section("javascript")
<script type="text/javascript">
$(function(){
              var $validator = $("form[name=form-update-rangking]").validate({
              ignore:[],
              rules: {
              id_mahasiswa: {required:true},
              kip_atau_bsm: {required:true},
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
              if(result){ $("form[name=form-delete-rangking]").submit();}
              }
              });

               $("#total_rangking").on('focus', function(){
                          total = parseNumerik($("#kelas1_1").val()) +
                                  parseNumerik($("#kelas1_2").val()) +
                                  parseNumerik($("#kelas2_1").val()) +
                                  parseNumerik($("#kelas2_2").val()) +
                                  parseNumerik($("#kelas3_1").val()) +
                                  parseNumerik($("#kelas3_2").val());
                          $(this).val(parseDesimal(total));
                         });
        })
    })

</script> 
@endsection