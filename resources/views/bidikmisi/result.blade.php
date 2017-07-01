@extends('templates')
@section("container")
  @if (count($hasil))
   @foreach($hasil as $data)
   <center><img src="unj.png" width="90px" height="100px" style="padding-top: 10px;"><br>
   <h4 style="font-family: open sans;">Data Calon Penerima Beasiswa Bidikmisi <br>Universitas Jambi Tahun 2017 <br><br><a href="{{url('search')}}"><i class="fa fa-search">cari data berikutnya</i></a><hr></h4></center>
<div class="col-md-12" style="font-family:Josefin Slab;">
	<div class="col-md-6" >
		<table class="table table-bordered table-striped table-responsive">
	
			<tr>
				<th>NIM <sup style="color: red;">belum registrasi</sup></th>
				<td>{{$data->nim}}</td>
			</tr>
			<tr>
				<th>NOMOR PENDAFTARAN</th>
				<td>{{$data->no_pendaftaran}}</td>
			</tr>
			<tr>
				<th>NAMA CALON PENERIMA BIDIKMISI</th>
				<td>{{$data->nama_mahasiswa}}</td>
			</tr>
			<tr>
				<th>SEKOLAH ASAL</th>
				<td>{{$data->sekolah_asal}}</td>
			</tr>
			<tr>
				<th>JALUR MASUK PT</th>
				<td>{{$data->jalur_masuk_PT}}</td>
			</tr>
			<tr>
				<th>DITERIMA PADA PROGRAM STUDI</th>
				<td>{{$data->program_studi}}</td>
			</tr>
			<tr>
				<th>NOMOR KARTU KELUARGA</th>
				<td>{{$data->nomor_kk}}</td>
			</tr>
			<tr>
				<th>NOMOR KTP</th>
				<td>{{$data->nomor_ktp}}</td>
			</tr>
			<tr>
				<th>TEMPAT/TANGGAL LAHIR</th>
				<td>{{$data->tempat_lahir}}/{{$data->TTL}}</td>
			</tr>
			<tr>
				<th>JENIS KELAMIN</th>
				<td>{{$data->jenis_kelamin}}</td>
			</tr>
			<tr>
				<th>NOMOR HP</th>
				<td>{{$data->nomor_hp_siswa_1}}|{{$data->nomor_hp_siswa_2}}</td>
			</tr>

		</table>
	</div>
	<div class="col-md-6">
		<table class="table table-bordered table-striped table-responsive">
		<tr>
				<th>KOTA/KABUPATEN</th>
				<td>{{$data->kota_kabupaten}}</td>
			</tr>
			<tr>
				<th>PROVINSI</th>
				<td>{{$data->provinsi}}</td>
			</tr>
			<tr>
				<th>STATUS PENYERAHAN BERKAS</th>
				<td>{{$data->status_penyerahan_berkas}}</td>
			</tr>
			<tr>
				<th>STATUS REGISTRASI <sup style="color: red">belum registarsi</sup></th>
				<td>{{$data->status_registrasi}}</td>
			</tr>
		</table>
		<H6><b>ALAMAT MAHASISWA : </b><br><br>{{$data->alamat}}</H6>

		<a href="{{URLGroup("bidikmisi/mahasiswa/edit")}}/{{Hashids::encode($data->id_mahasiswa)}}"><button class="btn btn-info"> <i class="fa fa-file">&nbsp</i>Masukkan Data Calon Mahasiswa</button></a><br><br>
		<a href="#"><button class="btn btn-info"> <i class="fa fa-file">&nbsp</i>Masukkan Data Orang Tua</button></a>
		<a href="#"> <button class="btn btn-info"><i class="fa fa-file">&nbsp</i>Masukkan Data Rangking</button></a>
		<br><br>
		<a href="#"><button class="btn btn-info"><i class="fa fa-file">&nbsp</i>Masukkan Data Pendukung Seleksi</button></a><br><br>
		<a href="#"><button class="btn btn-info" value="disable"><i class="fa fa-file">&nbsp</i>Masukkan Data Keputusan Tim Visitasi</button></a>
	</div>
</div>
@endforeach
@endif
            

@endsection