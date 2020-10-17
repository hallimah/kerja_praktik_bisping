<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$nipd=$_POST['nipd'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$id_jenis_kelamin=$_POST['id_jenis_kelamin'];
	$nisn=$_POST['nisn'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$nik=$_POST['nik'];
	$id_agama=$_POST['id_agama'];
	$alamat=$_POST['alamat'];
	$rt=$_POST['rt'];
	$rw=$_POST['rt'];
	$dusun=$_POST['dusun'];
	$kelurahan=$_POST['kelurahan'];
	$kecamatan=$_POST['kecamatan'];
	$kode_pos=$_POST['kode_pos'];
	$jenis_tinggal=$_POST['jenis_tinggal'];
	$alat_transportasi=$_POST['alat_transportasi'];
	$hp=$_POST['hp'];
	$email=$_POST['email'];
	$nama_ayah=$_POST['nama_ayah'];
	$tahun_lahir_ayah=$_POST['tahun_lahir_ayah'];
	$pendidikan_ayah=$_POST['pendidikan_ayah'];
	$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
	$penghasilan_ayah=$_POST['penghasilan_ayah'];
	$no_telpon_ayah=$_POST['no_telpon_ayah'];
	
	$status_siswa=$_POST['status_siswa'];
	$kode_jurusan=$_POST['kode_jurusan'];
	$angkatan=$_POST['angkatan'];
	$kode_kelas=$_POST['kode_kelas'];

	$nama_ibu=$_POST['nama_ibu'];
	$tahun_lahir_ibu=$_POST['tahun_lahir_ibu'];
	$pendidikan_ibu=$_POST['pendidikan_ibu'];
	$pekerjaan_ibu=$_POST['pekerjaan_ibu'];
	$penghasilan_ibu=$_POST['penghasilan_ibu'];
	$no_telpon_ibu=$_POST['no_telpon_ibu'];
	
	// buat query
	$sql="INSERT into rb_siswa (id_siswa,nipd,password,nama,
	id_jenis_kelamin,nisn,tempat_lahir,tanggal_lahir,
	nik,id_agama,alamat,rt,rw,dusun,kelurahan,kecamatan,
	kode_pos,jenis_tinggal,alat_transportasi,hp,email,
	nama_ayah,tahun_lahir_ayah,pendidikan_ayah,pekerjaan_ayah,
	penghasilan_ayah,no_telpon_ayah,
	angkatan,status_siswa,kode_kelas,kode_jurusan,
	nama_ibu,tahun_lahir_ibu,pendidikan_ibu,pekerjaan_ibu,
	penghasilan_ibu,no_telpon_ibu)
	VALUE('$id_siswa','$nipd','$password','$nama','$id_jenis_kelamin',
	'$nisn','$tempat_lahir','$tanggal_lahir','$nik','$id_agama','$alamat',
	'$rt','$rw','$dusun','$kelurahan','$kecamatan','$kode_pos',
	'$jenis_tinggal','$alat_transportasi','$hp','$email',
	'$nama_ayah','$tahun_lahir_ayah','$pendidikan_ayah',
	'$pekerjaan_ayah','$penghasilan_ayah','$no_telpon_ayah',
	'$angkatan','$status_siswa','$kode_kelas','$kode_jurusan',
	'$nama_ibu','$tahun_lahir_ibu','$pendidikan_ibu',
	'$pekerjaan_ibu','$penghasilan_ibu','$no_telpon_ibu')";
	
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: biodata.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: biodata.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
