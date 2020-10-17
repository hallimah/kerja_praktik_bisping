<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<title>Profil Siswa SMA N 2 Magetan</title>
</head>
<body>
<!--header-->
<div class="topnav" id="myTopnav">
  <div class="row">
    <div class="col">
      <a href="k2.php">Sekolah</a>
      <a href="biodata.php" class="active">Profil</a>
      <div class="dropdown">
        <button class="dropbtn">Kesiswaan
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="kehadiran.html">Kehadiran</a>
          <a href="jadwal.html">Jadwal Pelajaran</a>
          <a href="diskusi.html">Diskusi</a>
        </div>
      </div>
      <a href="sman2magetan.sch.id/home/album">Gallery</a>
      <a href="nilai.html">Nilai</a>
      <div class="dropdown">
          <button class="dropbtn">Informasi
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="info.html">Notifikasi</a>
            <a href="http://sman2magetan.sch.id">Web Sekolah</a>
            <a href="https://bukusekolahdigital.com">Buku Online</a>
            <a href="https://id.wikipedia.org/wiki/Daftar_perguruan_tinggi_di_Indonesia">Perguruan Tinggi</a>
            <a href="alumni.html">Daftar Alumni</a>
          </div>
        </div>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <div class="kanan">
      <a href="masuk.php">keluar</a>
    </div>
  </div>

</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<!--end header-->

<!--isi-->
<button class="tablink" onclick="openPage('Home', this, 'DarkBlue')" id="defaultOpen">Biodata</button>
<button class="tablink" onclick="openPage('News', this, 'DarkBlue')">Data Siswa</button>

<div id="Home" class="tabcontent">
  <!--input-->
  <div class="container">
    <form action="biodata1.php" method="post">
      <center> <img src="i2.png" class="bundar" alt="" width="200" height="200"></center>
      <center> <h2>Nama Siswa</h2> </center>
                <br/>
                    <div class="login-form">
                      <div class="row">
                        <div class="left-w3-agile">
                            <input type="text"  name="id_siswa" placeholder="Id" maxlength="4" readonly required="" />
                            <input type="text"  name="nipd" placeholder="NIPD" maxlength="5" readonly required="" />
                            <input type="text"  name="angkatan" placeholder="Tahun Masuk" maxlength="4" required="" />
                            <input type="text" name="kode_jurusan" placeholder="Kode Jurusan" readonly required="" />
                        </div>
                        <div class="right-agileits">
                            <input type="text"  name="nisn" placeholder="NISN" maxlength="10" readonly required="" />
                            <input type="text"  name="nik" placeholder="NIK" maxlength="16" readonly required="" />
                            <input type="text" name="status_siswa" placeholder="Status Siswa" readonly required="" />
                            <input type="text"name="kode_kelas" placeholder="Kode Kelas" readonly required="" />
                                
                        </div>
                        <input type="password" name="password" placeholder="Password" maxlength="10" required="" />
                        <input type="text" name="nama" placeholder="Nama Lengkap" maxlength="50" required="" />
                        <div class="left-w3-agile">
                            <input type="text"  name="tempat_lahir" placeholder="Tempat Lahir" maxlength="10" required="" />
                            <select class="form-control" name="id_jenis_kelamin">
                                <option value="">Jenis Kelamin</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="right-agileits">
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required="" />
                            <select class="form-control" name="id_agama">
                                <option value="">Pilih Agama</option>
                                <option value="1">Islam</option>
                                <option value="2">Kristen</option>
                                <option value="3">Hindu</option>
                                <option value="4">Budha</option>
                            </select>
                        </div>
                        <input type="text"  name="alamat" placeholder="Alamat Rumah" maxlength="50" required="" />
                        <div class="left-w3-agile">
                            <input type="text" name="rt" placeholder="RT" maxlength="2" required=""/>
                            <input type="text" name="dusun" placeholder="Dusun / Desa" maxlength="20" required=""/>
                            <input type="text" name="kelurahan" placeholder="Kelurahan" maxlength="20" required=""/>
                            <select class="form-control" name="jenis_tinggal">
                                <option>Jenis Tinggal</option>
                                <option>Rumah Sendiri</option><option>Kontakan</option><option> Kost</option>
                            </select>
                            <input type="text"  name="hp" pattern="[0-9]+" placeholder="Nomor Telepon" maxlength="12" required="" />
                        </div>
                        <div class="right-agileits">
                            <input type="text" name="rw" placeholder="RW" maxlength="2" required=""/>
                            <input type="text" name="kecamatan" placeholder="Kecamatan" maxlength="20" required=""/>
                            <input type="text" name="kode_pos" placeholder="Kode Pos" maxlength="5" required=""/>
                            <select class="form-control" name="alat_transportasi">
                                <option>Alat Transportasi yang digunakan</option>
                                <option>Jalan Kaki</option><option>Sepeda</option>
                                <option>Sepeda Motor</option><option>Angkutan Umum / Bus</option>
                            </select>
                            <input type="email"  name="email" placeholder="Email" required="" />
                        </div>
                      </div>
                      <div class="row">
                        <center> <h2>Data Orang Tua</h2> </center>
                        <div class="left-w3-agile">
                            <input type="text" name="nama_ayah" placeholder="Nama Ayah" maxlength="50" required=""/>
                            <input type="text"  name="tahun_lahir_ayah" placeholder="Tahun Lahir Ayah" maxlength="4" required="" />
                            <select class="form-control" name="pendidikan_ayah">
                                <option>Pendidikan Terakhir Ayah</option>
                                <option>SD / Sederajat</option><option>SMP / Sederajat</option>
                                <option> SMA /Sederajat</option><option>S1 /Sederajat</option>
                                <option>S2 / Sederajat</option><option>S3 / Sederajat</option>
                            </select>
                            <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" maxlength="10" required=""/>
                            <input type="text" name="penghasilan_ayah" placeholder="Penghasilan Ayah Perbulan" required=""/>
                            <input type="text"  name="no_telpon_ayah" placeholder="Nomor Telepon Ayah" maxlength="12" required="" />
                        </div>
                        <div class="right-agileits">
                            <input type="text" name="nama_ibu" placeholder="Nama Ibu" maxlength="50" required=""/>
                            <input type="text"  name="tahun_lahir_ibu" placeholder="Tahun Lahir Ibu" maxlength="4" required="" />
                            <select class="form-control" name="pendidikan_ibu">
                                <option>Pendidikan Terakhir Ibu</option>
                                <option>SD / Sederajat</option><option>SMP / Sederajat</option>
                                <option> SMA / Sederajat</option><option>S1 /Sederajat</option>
                                <option>S2 / Sederajat</option><option>S3 / Sederajat</option>
                            </select>
                            <input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" maxlength="10" required=""/>
                            <input type="text" name="penghasilan_ibu" placeholder="Penghasilan Ibu Perbulan" required=""/>
                            <input type="text"  name="no_telpon_ibu" placeholder="Nomor Telepon Ibu" maxlength="12" required="" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <input type="submit" name="simpan" value="Simpan">

                    </div>
                </form>
                </div>
  <!--end input-->
</div>

<div id="News" class="tabcontent">
    <center>
        <h3>Daftar Seluruh Siswa SMA N 2 Magetan</h3>
        <h2>SMA N MAGETAN</h2>
    </center>

<?php include("koneksi.php");?>

<div class="container">
    <div class="row">
    <div class="left-w3-agile">
        <select class="form-control" name="kelas">
            <option value="">Kelas</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        </div>
        <div class="right-agileits">
            <select class="form-control" name="kelas">
                <option value="">Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            </div>

</div>
<br>
<table id="customers">
  <thead>
  <tr>
      <th>No</th>
      <th>NIS</th>
    <th>Nama</th>
    <th>NISN</th>
    <th>TEMPAT LAHIR</th>
    <th>TANGGAL LAHIR</th>
  </tr>
  </thead>
  <tbody>
    <?php
    $no=0;
    
    $sql="SELECT * FROM rb_siswa";
    $query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
      echo "<tr>";
      $no++;
			echo "<td>".$no."</td>";
			echo "<td>".$siswa['nipd']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['nisn']."</td>";
			echo "<td>".$siswa['tempat_lahir']."</td>";
			echo "<td>".$siswa['tanggal_lahir']."</td>";
			
			echo "</tr>";
		}
    ?>
  </tbody>
</table>
</div>
</div>
</div>

<script>
function openPage(pageName,elmnt,color) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablink");
for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
}
document.getElementById(pageName).style.display = "block";
elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!--end isi-->

<!--footer-->
<div class="footer">
  <p>@ 2018 | SMA N 2 Magetan</p>
</div>
<!--end footer-->
</body>
</html>
