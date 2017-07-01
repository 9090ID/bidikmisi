<style type="text/css">
.header,
.footer {
    width: 100%;
    text-align: center;
    position: fixed;
}
.header {
    top: 0px;
}
.footer {
    bottom: 0px;
}
.pagenum:before {
    content: counter(page);
}


	table td, table th{

		border:1px solid black;
		text-align: left;

	}
	@page {
            margin-top: 50px;
            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 50px;
        }

</style>

<div class="container">


	<br/>
<div class="header">
HASIL EVALUASI VISITASI DAN VERIFIKASI LAPANGAN	<br>								
CALON PENERIMA BANTUAN BIAYA PENDIDIKAN BIDIKMISI<br>							
UNIVERSITAS JAMBI TAHUN 2017<br>	
YANG LULUS SELEKSI JALUR SNMPTN DAN SBMPTN		<hr>								
</div>
<br><br><br><br>
<u>BIODATA MAHASISWA CALON PENERIMA BIDIKMISI :</u>						

<div class="body" class="margin-top:400px;">
	<br>@foreach ($items as $key => $item)
	<table>
		<tr><th>NAMA CALON PENERIMA BIDIKMISI</th><td>{{ $item->nama_mahasiswa }}</td>
		</tr>
		<tr><th>SEKOLAH ASAL</th><td>{{ $item->sekolah_asal }}</td></tr>
		<tr><th>JALUR MASUK PT</th><td>{{ $item->jalur_masuk_PT }}</td></tr>
		<tr><th>DITERIMA PADA PROGRAM STUDI</th><td>{{ $item->program_studi }}</td></tr>
		<tr><th>NOMOR KARTU KELUARGA</th><td>{{ $item->nomor_kk }}</td></tr>
		<tr><th>NOMOR KTP</th><td>{{ $item->nomor_ktp }}</td></tr>
		<tr><th>TEMPAT/ TANGGAL LAHIR</th><td>{{ $item->tempat_lahir }}/{{$item->TTL}}</td></tr>
		<tr><th>JENIS KELAMIN</th><td>{{ $item->jenis_kelamin }}</td></tr>
		<tr><th>ALAMAT</th><td>{{ $item->alamat }}</td></tr>
		<tr><th>NOMOR HANDPHONE</th><td>{{ $item->nomor_hp_siswa_1 }}/{{$item->nomor_hp_siswa_2}}</td></tr>
		<tr><th>NAMA AYAH</th><td>{{ $item->nama_ayah }}</td></tr>
		<tr><th>UMUR</th><td>{{ $item->umur_ayah }}</td></tr>
		<tr><th>PENDIDIKAN TERAKHIR</th><td>{{ $item->pendidikan_ayah }}</td></tr>
		<tr><th>PEKERJAAN</th><td>{{ $item->pekerjaan_ayah }}</td></tr>
		<tr><th>BESAR PENGHASILAN PERBULAN</th><td>{{ $item->penghasilan_ayah }}</td></tr>
		<tr><th>NOMOR HP</th><td>{{ $item->nomor_hp_ayah }}</td></tr>
		<tr><th>NAMA IBU</th><td>{{ $item->nama_ibu }}</td></tr>
		<tr><th>UMUR</th><td>{{ $item->umur_ibu }}</td></tr>
		<tr><th>PENDIDIKAN TERAKHIR</th><td>{{ $item->pendidikan_ibu }}</td></tr>
		<tr><th>PEKERJAAN</th><td>{{ $item->pekerjaan_ibu }}</td></tr>
		<tr><th>BESAR PENGHASILAN PERBULAN</th><td>{{ $item->penghasilan_ibu }}</td></tr>
		<tr><th>NOMOR HP</th><td>{{ $item->nomor_hp_ibu }}</td></tr>
		<br><br><br><br>
		<tr><th>KEPEMILIKAN RUMAH</th><td>{{$item->kepemilikan_rumah}}</td></tr>
		<tr><th>KEADAAN RUMAH</th><td>{{$item->keadaan_rumah}}</td></tr>
		<tr><th><td></td></th></tr>
		

		@endforeach

	</table>
</div>
 <div id="content">
    <p>the first page</p>
    <p style="page-break-before: always;">the second page</p>
  </div>



</div>