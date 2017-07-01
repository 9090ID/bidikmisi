@extends('templates')
@section("container")
 <center><img src="unj.png" width="90px" height="100px" style="padding-top: 10px;"><br>
   <h4 style="font-family: open sans;">Data Calon Penerima Beasiswa Bidikmisi <br>Universitas Jambi Tahun 2017 <br><br>
   <center>
      <div class="col-md-6">
         <div class="form-group">
                    <div class="input-group">   
                        <input class="form-control" type="text" name="keyword" placeholder="Enter Registration Number" required/>
                        <span class="input-group-btn">
                        <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i>&nbsp &nbspcari data</button>
                        </span>
                     </div>
</center>
<hr style="border:dotted 7px orange;"></h4></center>
<hr>


<table class="table table-striped table-bordered table-sm">
      <thead>
            <tr>
               <th>Action</th>
               <th>No</th>
               <th>Nim </th>
               <th>No Pendaftaran </th>
               <th>Nama Mahasiswa </th>
               <th>Program Studi </th>
               <th>Jalur Masuk PT </th>
               <th>Status Penyerahan Berkas </th>
               <th>Status Registrasi </th>
            </tr>
      </thead>
      <tbody>
      <?php $no = 1;$tahun = 0;?>
      @foreach($data as $d)
               @if(tahunSystem($d->tanggal)!=$tahun) <?php $tahun = tahunSystem($d->tanggal);?> <tr><td colspan="24"><b>Set Data Tahun {{$tahun}}</b></td></tr> @endif
               <tr>
                     <td align="center">
                              <a href="{{URL("menu/")}}/{{Hashids::encode($d->id_mahasiswa)}}"><span class="btn btn-info">Isian Data Selengkapnya</span></a>
                     </td>
                     <td align="center">{{$no}}</td>
                     <td>{{($d->nim)}}</td>
                     <td>{{($d->no_pendaftaran)}}</td>
                     <td>{{($d->nama_mahasiswa)}}</td>
                     <td>{{($d->program_studi)}}</td>
                     <td>{{($d->jalur_masuk_PT)}}</td>
                     <td>{{($d->status_penyerahan_berkas)}}</td>
                     <td>{{($d->status_registrasi)}}</td>
               </tr>
               <?php $no++;?>

         @endforeach
         @if(count($data)==0) <tr> <td colspan="24">Tidak Ada Data Untuk Ditampilkan!</td> </tr> @endif
      
      </tbody>
</table>

@endsection