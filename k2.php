
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<title>Profil Sekolah SMA N 2 Magetan</title>
</head>
<body>
<!--header-->
<div class="topnav" id="myTopnav">
  <div class="row">
    <div class="col">
      <a href="k2.php" class="active">Sekolah</a>
      <a href="biodata.php">Profil</a>
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

<!--menu-->
  <!--isi-->
    <!--2 pilih-->
<button class="tablink" onclick="openPage('Home', this, 'DarkBlue')" id="defaultOpen">Profil Sekolah</button>
<button class="tablink" onclick="openPage('News', this, 'DarkBlue')">Tata Tertib</button>

    <div id="Home" class="tabcontent">
      <center><h2>SMA N 2 MAGETAN</h2></center>
      <section class="banner-1 responsive">
      </section>
      
      <div class="container">
      <center> <h3>Profil SMA N 2 Magetan</h3> </center>
      <table id="customers">
  <tr>
    <th>Nama</th>
    <th>Keterangan</th>
  </tr>
  <tr>
    <td>Nama Sekolah</td>
    <td></td>
  </tr>
  <tr>
    <td>Nama Kepala Sekolah</td>
    <td></td>
  </tr>
  <tr>
    <td>Nomor Pokok Sekolah Nasional / Nomor Identitas Nasional (NIS)</td>
    <td></td>
  </tr>
  <tr>
    <td>Nomor Statistik Sekolah (NSS)</td>
    <td></td>
  </tr>
  <tr>
    <td>Alamat Sekolah</td>
    <td></td>
  </tr>
  <tr>
    <td><strike>Kabupaten </strike> / Kota *)</td>
    <td></td>
  </tr>
  <tr>
    <td>Provinsi</td>
    <td></td>
  </tr>
  <tr>
    <td>Kode Pos</td>
    <td></td>
  </tr>
  <tr>
    <td>Telepon / faksimili</td>
    <td></td>
  </tr>
  <tr>
    <td>E-Mail</td>
    <td></td>
  </tr>
  <tr>
    <td>Status Sekolah</td>
    <td></td>
  </tr>
  <tr>
    <td>Tahun Pendirian</td>
    <td></td>
  </tr>
</table>
</div>
<br>
<div class="container">
    <h2><center>Identitas Kepala Sekolah</center></h2>

    <div class="row">
        <div class="column2"  >
          <p>Nama Kepala Sekolah</p>
          <p>Pendidikan Terakhir</p>
          <p>Jurusan Ijazah</p>
          <p>Pelatihan yang pernah diikuti</p>
        </div>
        <div class="column2">
          <p>: Some text..</p>
          <p>: Some text..</p>
          <p>: Some text..</p>
          <p>: Some text..</p>
        </div>
    </div>

    <table id="customers">
      <tr>
        <th>No</th>
        <th>Tahun</th>
        <th>Jenis Pelatihan</th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
</div>

<br>
<div class="container">
  <h2><center>Visi & Misi</center></h2>
</div>

</div>


<!--tabel-->
<div id="News" class="tabcontent">
  <div class="container">
      <table id="customers">
          <tr>
            <th>No</th>
            <th>Jenis Pelanggaran</th>
            <th>sanksi</th>
          </tr>
          <tr>
            <td>No</td>
            <td>Jenis Pelanggaran</td>
            <td>sanksi</td>
          </tr>
          <tr>
            <td>No</td>
            <td>Jenis Pelanggaran</td>
            <td>sanksi</td>
          </tr>
        </table>
  </div>
</div>
  <!--end 2 pilihan-->
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
 </div>

<!--end Menu-->

<!--footer-->
<div class="footer">
  <p>@ 2018 | SMA N 2 Magetan </p>
</div>
<!--end footer-->
</body>
</html>
