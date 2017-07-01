@extends('templates')
@section("container")

  
    <table class="table table-bordered table-striped table-responsive">
    @foreach($data as $d)
      <tr>
     
      </tr>
      <tr>
        <th>NOMOR PENDAFTARAN</th>
        <td>{{$d->no_pendaftaran}}</td>
      </tr>
      <tr>
        <th>NAMA CALON PENERIMA BIDIKMISI</th>
        <td>{{$d->nama_mahasiswa}}</td>
      </tr>
      <tr>
        <th>SEKOLAH ASAL</th>
        <td>{{$d->sekolah_asal}}</td>
      </tr>
      <tr>
        <th>JALUR MASUK PT</th>
        <td>{{$d->jalur_masuk_PT}}</td>
      </tr>
      <tr>
        <th>DITERIMA PADA PROGRAM STUDI</th>
        <td>{{$d->program_studi}}</td>
      </tr>
      <tr>
        <th>NOMOR KARTU KELUARGA</th>
        <td>{{$d->nomor_kk}}</td>
      </tr>
      <tr>
        <th>NOMOR KTP</th>
        <td>{{$d->nomor_ktp}}</td>
      </tr>
      <tr>
        <th>TEMPAT/TANGGAL LAHIR</th>
        <td>{{$d->tempat_lahir}}/{{$d->TTL}}</td>
      </tr>
      <tr>
        <th>JENIS KELAMIN</th>
        <td>{{$d->jenis_kelamin}}</td>
      </tr>
      <tr>
        <th>NOMOR HP</th>
        <td>{{$d->nomor_hp_siswa_1}}|{{$d->nomor_hp_siswa_2}}</td>
      </tr>

    </table>
  </div>
  <div class="col-md-6">
    <table class="table table-bordered table-striped table-responsive">
    <tr>
        <th>KOTA/KABUPATEN</th>
        <td>{{$d->kota_kabupaten}}</td>
      </tr>
      <tr>
        <th>PROVINSI</th>
        <td>{{$d->provinsi}}</td>
      </tr>
      <tr>
        <th>STATUS PENYERAHAN BERKAS</th>
        <td>{{$d->status_penyerahan_berkas}}</td>
      </tr>
      <tr>
        <th>STATUS REGISTRASI <sup style="color: red">belum registarsi</sup></th>
        <td>{{$d->status_registrasi}}</td>
      </tr>
    </table>
    <H6><b>ALAMAT MAHASISWA : </b><br><br>{{$d->alamat}}</H6>

    <a href="{{URLGroup("bidikmisi/mahasiswa/edit")}}/{{Hashids::encode($d->id_mahasiswa)}}"><button class="btn btn-info"> <i class="fa fa-file">&nbsp</i>Masukkan Data Calon Mahasiswa</button></a><br><br>
    <a href="#"><button class="btn btn-info"> <i class="fa fa-file">&nbsp</i>Masukkan Data Orang Tua</button></a>
    <a href="#"> <button class="btn btn-info"><i class="fa fa-file">&nbsp</i>Masukkan Data Rangking</button></a>
    <br><br>
    <a href="#"><button class="btn btn-info"><i class="fa fa-file">&nbsp</i>Masukkan Data Pendukung Seleksi</button></a><br><br>
    <a href="#"><button class="btn btn-info" value="disable"><i class="fa fa-file">&nbsp</i>Masukkan Data Keputusan Tim Visitasi</button></a>
  </div>
</div>
@endforeach
@endsection