@extends('bio')
@section("container")
 <header class="header" id="jump">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL("list")}}">
                      <i class="fa fa-undo" aria-hidden="true"></i>&nbspKembali</a>
                </div>
                <div class="collapse navbar-collapse hidden-xs">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="#jump2">Data Mahasiswa</a></li>
                        <li><a href="#jump3">Data Orangtua</a></li>
                        <li><a href="#jump4">Data Pendukung</a></li>
                        <li><a href="#jump5">Data Rangking</a></li>
                        <li><a href="#jump6">Data Foto <sup style="color: red;"><i>not found!!</i></sup></a></li>
                         <li><a href="#jump7">Data Tim Visitasi <sup style="color: red;"><i>not found!!</i></sup></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <div class="collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                     
                        <li class="active"><a href="#jump2" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            Data Mahasiswa</a></li>
                        <li><a href="#jump3" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            Data Orangtua</a></li>
                        <li><a href="#jump4" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            Data Pendukung</a></li>
                        <li><a href="#jump5" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            Data Rangking</a></li>
                        <li><a href="#jump6" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            Data Foto</a></li>
                            <li><a href="#jump6" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            Data Tim Visitasi</a></li>
                    </ul>
                </div>
                <!-- /.navbar-responsive-collapse -->
            </div>
        </nav>
    </header>


    

    <div id="jump2" class="jumper">
    </div>
    <div class="section type-1" style="padding-bottom: 0">
        <div class="container">
            <div class="section-headlines">
            <br><br><br>
            <div class="col-md-12">
                <div class="col-md-6">
                      <h4 style="color:white; font-family:Anton;">Data Mahasiswa</h4>
                </div>
                <div class="col-md-6" style="font-family: Fresca;color: white;">
                    <b>Nomor KK    &nbsp  &nbsp:</b> {{$data->nomor_kk}} |
                    <b>Nomor KTP   :</b> {{$data->nomor_ktp}} <br>
                    <b>Jalur Masuk :</b> {{$data->jalur_masuk_PT}}
                </div>
            </div>
            
            <div class="col-md-12">
            <hr>
                <div class="col-md-6">
                <table class="table  table-bordered" style="color:white;font-family: Fresca;">
                    <tr>
                        <th>NOMOR PENDAFTARAN</th>
                        <th>:</th>
                        <th>{{$data->no_pendaftaran}}</th>
                    </tr>
                    <tr>
                        <th>NAMA MAHASISWA</th>
                        <th>:</th>
                        <th>{{$data->nama_mahasiswa}}</th>
                    </tr>
                    <tr>
                        <th>TEMPAT / TTL</th>
                        <th>:</th>
                        <th> {{$data->tempat_lahir}}/{{$data->TTL}}</th>
                    </tr>
                    <tr>
                        <th>PROGRAM STUDY</th>
                        <th>:</th>
                        <th>{{$data->program_studi}}</th>
                    </tr>
                    <tr>
                        <th>JENIS KELAMIN</th>
                        <th>:</th>
                        <th>{{$data->jenis_kelamin}}</th>
                    </tr>
                    <tr>
                        <th>NOMOR HANDPHONE 1</th>
                        <th>:</th>
                        <th>{{$data->nomor_hp_siswa_1}}</th>
                        <tr>
                        <th>NOMOR HANDPHONE 2</th>
                        <th>:</th>
                        <th>{{$data->nomor_hp_siswa_2}}</th>
                    </tr>
                    <tr>
                        <th>EMAIL</th>
                        <th>:</th>
                        <th>{{$data->email}}</th>
                    </tr>
                    <tr>
                        <th>STATUS REGISTRASI</th>
                        <th>:</th>
                        <th>{{$data->status_registrasi}}</th>
                    </tr>
                    </tr>
                </table> 
                </div>
                <div class="col-md-6">
                 <table class="table  table-bordered" style="color:white;font-family: Fresca; ">
                    <tr>
                        <th>AGAMA</th>
                        <th>:</th>
                        <th>{{$data->agama}}</th>
                    </tr>
                     <tr>
                        <th>KOTA / KABUPATEN</th>
                        <th>:</th>
                        <th>{{$data->kota_kabupaten}}</th>
                    </tr>
                     <tr>
                        <th>PROVINSI</th>
                        <th>:</th>
                        <th>{{$data->provinsi}}</th>
                    </tr>
                     <tr>
                        <th>ALAMAT</th>
                        <th>:</th>
                        <th>{{$data->alamat}}</th>
                    </tr>
                     <tr>
                        <th>ASAL SEKOLAH</th>
                        <th>:</th>
                        <th>{{$data->sekolah_asal}}</th>
                    </tr>
                    <tr>
                        <th>KOTA / KABUPATEN SEKOLAH</th>
                        <th>:</th>
                        <th>{{$data->kota_kabupaten_sekolah}}</th>
                    </tr>
                    <tr>
                        <th>PROVINSI SEKOLAH</th>
                        <th>:</th>
                        <th>{{$data->provinsi_sekolah}}</th>
                    </tr>
                    <tr>
                        <th>STATUS PENYERAHAN BERKAS</th>
                        <th>:</th>
                        <th>{{$data->status_penyerahan_berkas}}</th>
                    </tr>
                </table>

                 <br><br>
                </div>
                <center> <img src="/unj.png" height="64" width="64"> <br><br><span style="font-family: Fascinate Inline;font-size: 15px;">BIODATA CALON PENERIMA BEASISWA BIDIKMISI <br><br>UNIVERSITAS JAMBI TAHUN 2017</span></p>

            </div>
           
        




            </div>
        </div>
            
    </div>
 
    <div id="jump3" class="jumper">
    </div>
    <div class="section type-2">
        <div class="container">
            <div class="section-headlines">
             <br><br><br>
             <div class="col-md-12">
                <div class="col-md-6">
                      <h4 style="color:white; font-family:Anton;">Data OrangTua / Wali</h4>
                </div>
                <div class="col-md-6" style="font-family: Fresca;color: white;">
                    <br><b>Nama Mahasiswa :</b> {{$data->nama_mahasiswa}}
                </div>
            </div>
            
            <div class="col-md-12">
            <hr>
                <div class="col-md-6">
                <table class="table  table-bordered" style="color:white;font-family: Fresca;">
                    <tr>
                        <th>Nama Ayah/Wali</th>
                        <th>:</th>
                        <th>{{$hasil->nama_ayah}}</th>
                    </tr>
                    <tr>
                        <th>Umur Ayah</th>
                        <th>:</th>
                        <th>{{$hasil->umur_ayah}}</th>
                    </tr>
                    <tr>
                        <th>Pendidikan Ayah</th>
                        <th>:</th>
                        <th> {{$hasil->pendidikan_ayah}}</th>
                    </tr>
                    <tr>
                        <th>Penghasilan Ayah</th>
                        <th>:</th>
                        <th>{{$hasil->penghasilan_ayah}}</th>
                    </tr>
                    <tr >
                        <th>Nomor Handphone Ayah</th>
                        <th>:</th>
                        <th>{{$data->nomor_hp_ayah}}</th>
                    </tr>
                    <tr>
                        <th colspan="3"></th>
                      
                        <tr>
                        <th>Nama Ibu/Wali</th>
                        <th>:</th>
                        <th>{{$hasil->nama_ibu}}</th>
                    </tr>
                    <tr>
                        <th>Pendidikan Ibu</th>
                        <th>:</th>
                        <th>{{$hasil->pendidikan_ibu}}</th>
                    </tr>
                    <tr>
                        <th>Penghasilan Ibu</th>
                        <th>:</th>
                        <th>{{$hasil->penghasilan_ibu}}</th>
                    </tr>
                    </tr>
                </table> 
                </div>
                <div class="col-md-6">
                 <table class="table  table-bordered" style="color:white;font-family: Fresca; ">
                    <tr>
                        <th>Nomor Handphone Ibu</th>
                        <th>:</th>
                        <th>{{$hasil->nomor_hp_ibu}}</th>
                    </tr>
                     <tr>
                        <th colspan="3" >TANGGUNGAN KK  : {{$hasil->tanggungan_kk}}</th>
                    </tr>
                     
                </table>

                 <br><br> <br><br><br><br><br><br><br><br><br><br>
                </div>
                <center> <img src="/unj.png" height="64" width="64"> <br><br><span style="font-family: Fascinate Inline;font-size: 15px;">BIODATA CALON PENERIMA BEASISWA BIDIKMISI <br><br>UNIVERSITAS JAMBI TAHUN 2017</span></p>

            </div>
            </div>
        </div>
    </div>

    <div id="jump4" class="jumper">
    </div>
    <div class="section type-3">
        <div class="container">
            <div class="section-headlines">
                <br><br><br>
             <div class="col-md-12">
                <div class="col-md-6">
                      <h4 style="color:white; font-family:Anton;">Data Pendukung Mahasiswa</h4>
                </div>
                <div class="col-md-6" style="font-family: Fresca;color: white;">
                    <br><b>Nama Mahasiswa :</b> {{$data->nama_mahasiswa}}
                </div>
            </div>
            
            <div class="col-md-12">
            <hr>
                <div class="col-md-6">
                <table class="table  table-bordered" style="color:white;font-family: Fresca;">
                    <tr>
                        <th>Kepemilikan Rumah</th>
                        <th>:</th>
                        <th>{{$pendukung->kepemilikan_rumah}}</th>
                    </tr>
                    <tr>
                        <th>Daya Listrik</th>
                        <th>:</th>
                        <th>{{$pendukung->daya_listrik}}</th>
                    </tr>
                    <tr>
                        <th>Sumber Air</th>
                        <th>:</th>
                        <th> {{$pendukung->sumber_air}}</th>
                    </tr>
                </table> 
                </div>
                <div class="col-md-6">
                 <table class="table  table-bordered" style="color:white;font-family: Fresca; ">
                     <tr>
                        <th>Lahan Kebun</th>
                        <th>:</th>
                        <th>{{$pendukung->lahan_kebun}}</th>
                    </tr>
                    <tr>
                        <th>Kepunyaan Mobil</th>
                        <th>:</th>
                        <th>{{$pendukung->kepunyaan_mobil}}</th>
                    </tr>
                    <tr>
                        <th>Kepunyaan Motor</th>
                        <th>:</th>
                        <th> {{$pendukung->kepunyaan_motor}}</th>
                    </tr>
                </table>

                 <br><br> 
                </div>
                <center><span style="color: white;font-family: Fresca;font-size: 20px;">KEADAAN RUMAH : {{$pendukung->keadaan_rumah}}</span></center>
                <br><br><br><br><br><br><br>
                <center> <img src="/unj.png" height="64" width="64"> <br><br><span style="font-family: Fascinate Inline;font-size: 15px;">BIODATA CALON PENERIMA BEASISWA BIDIKMISI <br><br>UNIVERSITAS JAMBI TAHUN 2017</span></p></center>

            </div>
            </div>
        </div></div>
            
    <div id="jump5" class="jumper">
    </div>
    <div class="section type-2">
        <div class="container">
            <div class="section-headlines">
                
                   <br><br><br>
             <div class="col-md-12">
                <div class="col-md-6">
                      <h4 style="color:white; font-family:Anton;">Data Rangking Mahasiswa</h4>
                </div>
                <div class="col-md-6" style="font-family: Fresca;color: white;">
                    <br><b>Nama Mahasiswa :</b> {{$data->nama_mahasiswa}}
                </div>
            </div>
            
            <div class="col-md-12">
            <hr>
                <div class="col-md-6">
                <table class="table  table-bordered" style="color:white;font-family: Fresca;">
                    <tr>
                        <th>Kelas 1 Semester 1</th>
                        <th>:</th>
                        <th> <center>{{$rangking->kelas1_1}}</center></th>
                    </tr>
                    <tr>
                        <th>Kelas 1 Semester 2</th>
                        <th>:</th>
                        <th><center>{{$rangking->kelas1_2}}</center></th>
                    </tr>
                    <tr>
                        <th>Kelas 2 Semester 1</th>
                        <th>:</th>
                        <th> <center>{{$rangking->kelas2_1}}</center></th>
                    </tr>
                </table> 
                </div>
                <div class="col-md-6">
                 <table class="table  table-bordered" style="color:white;font-family: Fresca; ">
                     <tr>
                        <th>Kelas 2 Semester 2</th>
                        <th>:</th>
                        <th><center>{{$rangking->kelas2_2}}</center></th>
                    </tr>
                    <tr>
                        <th>Kelas 3 Semester 1</th>
                        <th>:</th>
                        <th><center>{{$rangking->kelas3_1}}</center></th>
                    </tr>
                    <tr>
                        <th>Kelas 3 Semester 2</th>
                        <th>:</th>
                        <th> <center>{{$rangking->kelas3_2}}</center></th>
                    </tr>
                </table>

                 <br><br> 
                </div>
                <table class="table table-bordered" style="color: white;font-family: Fresca;font-size: 17px;">
                    <tr>
                        <th>KIP , BSM DLL</th>
                        <th>{{$rangking->kip_atau_bsm}}</th>
                    </tr>
                    <tr>
                        <th>PRESTASI</th>
                        <th>{{$rangking->prestasi}}<br><br><br><br></th>
                    </tr>

                </table>
                
                
                <center> <img src="/unj.png" height="64" width="64"> <br><br><span style="font-family: Fascinate Inline;font-size: 15px;">BIODATA CALON PENERIMA BEASISWA BIDIKMISI <br><br>UNIVERSITAS JAMBI TAHUN 2017</span></p></center>
                </div>
            </div>
            </div>
    </div>
    <div id="jump6" class="jumper">
    </div>
    <div class="section type-1 section-contact">
        <div class="container">
            <div class="section-headlines">
                
                   <br><br><br><br><br><br><br><br><br><br><br><br>
             <div class="col-md-12">
               <!-- <div class="col-md-6">
                      <h4 style="color:white; font-family:Anton;">Data keputusan Tim Visitasi</h4>
                </div>
                <div class="col-md-6" style="font-family: Fresca;color: white;">
                    <br><b>Nama Mahasiswa :</b> {{$data->nama_mahasiswa}}
                </div>-->
            </div>
            
            <div class="col-md-12">
           
               <center><SPAN style="color: white;font-family: Fresca;font-size: 17px;">DATA YANG ANDA CARI BELUM TERSEDIA!! </SPAN> </center>

                 <br><br> <br><br><br><br><br><br>
                </div>

                
                
                </div>
            </div>
            </div>
    </div>
     <div id="jump7" class="jumper">
    </div>
    <div class="section type-1 section-contact">
        <div class="container">
            <div class="section-headlines">
                
                   <br><br><br><br><br><br><br><br><br><br><br><br>
             <div class="col-md-12">
               <!-- <div class="col-md-6">
                      <h4 style="color:white; font-family:Anton;">Data keputusan Tim Visitasi</h4>
                </div>
                <div class="col-md-6" style="font-family: Fresca;color: white;">
                    <br><b>Nama Mahasiswa :</b> {{$data->nama_mahasiswa}}
                </div>-->
            </div>
            
            <div class="col-md-12">
           
               <center><SPAN style="color: white;font-family: Fresca;font-size: 17px;">DATA YANG ANDA CARI BELUM TERSEDIA!! </SPAN> </center>

                 <br><br> <br><br><br><br><br><br>
                </div>

                
                
                </div>
            </div>
            </div>
    </div>
  <br><br><br>

@endsection