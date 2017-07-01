@extends('templates')
@section("container")


 <center><img src="unj.png" width="90px" height="100px" style="padding-top: 10px;"><br>
   <h4 style="font-family: open sans;">Data Calon Penerima Beasiswa Bidikmisi <br>Universitas Jambi Tahun 2017 <br>
   <hr></h4>
    <span style="color:orange;"><i class="fa fa-check" aria-hidden="true"></i></span>
   : Sudah Menyerahkan Berkas  &nbsp&nbsp <span style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i></span> : Belum Menyerahkan Berkas &nbsp&nbsp  <span style="color: blue;"><i class="fa fa-user" aria-hidden="true"></i></span> : Lihat Biodata
<hr>
   
   <center>
       <form action="{{URL::to('list')}}">
      <div class="col-md-6">
         <div class="form-group">
                    <div class="input-group">   
                        <input class="form-control" type="text" name="keyword" placeholder="Enter Registration Number" required/>
                        <span class="input-group-btn">
                        <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i>&nbsp &nbspcari data</button>
                        </span>
                     </div>
</center>
<!--<a href="{{ route('pdfview',['download'=>'pdf']) }}"><b class="btn btn-success">Download PDF Data Keseluruhan</b></a></h4>-->
</center> 
<!--<marquee scrollamount="5" behavior="alternate" direction="right" width="350">
    <p class="blue"> Selamat Datang di Dumet School</p>
  </marquee>-->

<table class="table table-striped table-bordered table-sm">
      <thead>
            <tr>
              
               <th>No</th>

               <th>Nim </th>
               <th>No Pendaftaran </th>
               <th>Nama Mahasiswa </th>
               <th>Kota/Kabupaten</th>
               <th>Program Studi </th>
               <th>Jalur Masuk PT </th>
               <th >Status </th>
               <th style="text-align: center;" colspan="2">Action</th>
            </tr>
      </thead>
      <tbody>
       
@if (count($hasil))
   @foreach($hasil as $d)
                     
        <tr>
                     
                     <td align="center">{{$d->id_mahasiswa}}</td> 
                     <td>{{($d->nim)}}</td>
                     <td>{{($d->no_pendaftaran)}}</td>
                     <td>{{($d->nama_mahasiswa)}}</td>
                      <td>{{$d->kota_kabupaten}}</td>
                     <td>{{($d->program_studi)}}</td>
                     <td>{{($d->jalur_masuk_PT)}}</td>
                     <td align="center">@if ($d->status_penyerahan_berkas=="Tidak Menyerahkan Berkas")
                             <span style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i></span> 
                          @else
                                 <span style="color:orange;"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    @endif</td>
                     <td align="center"><a href="{{URLGroup("bidikmisi/mahasiswa/edit")}}/{{Hashids::encode($d->id_mahasiswa)}}"><span class="btn btn-info">Input Data Selengkapnya</span></a> 
                     </td>
                     <td><a href="{{URL("biodata")}}/{{Hashids::encode($d->id_mahasiswa)}}"><span style="color: blue;"><i class="fa fa-user" aria-hidden="true"></a></i>
</i></span>
</td>
               </tr>
      
          @endforeach
        @endif

         @if(count($hasil)==0) <tr> <td colspan="24">Data Yang Anda Cari Tidak Ada Dimuka Bumi Ini!!</td> </tr> @endif
 
      </tbody>
</table>
 {{$hasil->render()}}

@endsection