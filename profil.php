<!--masuk data base-->
<?php
include ("koneksi.php");

$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM rb_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!--end masuk data base-->

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
                            <input type="text" value="<?php echo $siswa['id'] ?>" name="id_siswa" placeholder="Id" maxlength="4" required="" />
                            <input type="text" value="<?php echo $siswa['nipd'] ?>" name="nipd" placeholder="NIPD" maxlength="5" required="" />
                            <input type="text" value="<?php echo $siswa['angkatan'] ?>" name="angkatan" placeholder="Tahun Masuk" maxlength="4" required="" />
                            <input type="text" value="<?php echo $siswa['kode_jurusan'] ?>" name="kode_jurusan" placeholder="Jurusan" required=""/>
                            
                        </div>
                        <div class="right-agileits">
                            <input type="text" value="<?php echo $siswa['nisn'] ?>" name="nisn" placeholder="NISN" maxlength="10" required="" />
                            <input type="text" value="<?php echo $siswa['nik'] ?>" name="nik" placeholder="NIK" maxlength="16" required="" />
                            <input type="text" value="<?php echo $siswa['status_siswa'] ?>" name="status_sisawa" placeholder="Status Siswa" maxlength="11" required="" />
                            <input type="text" value="<?php echo $siswa['kode_kelas'] ?>" name="kode_kelas" placeholder="Kode Kelas" maxlength="11" required="" />
                        </div>
                        <input type="password" value="<?php echo $siswa['password'] ?>" name="password" placeholder="Password" maxlength="10" required="" />
                        <input type="text" value="<?php echo $siswa['kode_kelas'] ?>" name="nama" placeholder="Nama Lengkap" maxlength="50" required="" />
                        <div class="left-w3-agile">
                            <input type="text" value="<?php echo $siswa['tempat_lahir'] ?>" name="tempat_lahir" placeholder="Tempat Lahir" maxlength="10" required="" />
                            <select class="form-control" value="<?php $jk=$siswa['id_jenis_kelamin']; ?>" name="id_jenis_kelamin">
                                <option <?php echo ($jk == 'laki_laki') ? "selected" :"" ?> value="1">Laki-Laki</option>
                                <option <?php echo ($jk == 'perempuan') ? "selected" :"" ?> value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="right-agileits">
                            <input type="date" value="<?php echo $siswa['tanggal_lahir'] ?>" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required="" />
                            <select class="form-control" value="<?php $agama=$siswa['id_agama']; ?>" name="id_agama">
                                <option <?php echo ($agama == 'islam') ? "selected" :"" ?> value="1">Islam</option>
                                <option <?php echo ($agama == 'kristen') ? "selected" :"" ?> value="2">Kristen</option>
                                <option <?php echo ($agama == 'Hindu') ? "selected" :"" ?> value="3">Hindu</option>
                                <option <?php echo ($agama == 'budha') ? "selected" :"" ?> value="4">Budha</option>
                            </select>
                        </div>
                        <input type="text" value="<?php echo $siswa['alamat'] ?>" name="alamat" placeholder="Alamat Rumah" maxlength="50" required="" />
                        <div class="left-w3-agile">
                            <input type="text" value="<?php echo $siswa['rt'] ?>" name="rt" placeholder="RT" maxlength="2" required=""/>
                            <input type="text" value="<?php echo $siswa['dusun'] ?>" name="dusun" placeholder="Dusun / Desa" maxlength="20" required=""/>
                            <input type="text" value="<?php echo $siswa['kelurahan'] ?>" name="kelurahan" placeholder="Kelurahan" maxlength="20" required=""/>
                            <select class="form-control" value="<?php $jenis_tinggal=$siswa['jenis_tinggal'] ?>" name="jenis_tinggal">
                                <option <?php echo ($jenis_tinggal == 'Rumah Sendiri') ? "selected" :"" ?>>Rumah Sendiri</option>
                                <option <?php echo ($jenis_tinggal == 'kontrakan') ? "selected" :"" ?>>Kontakan</option>
                                <option <?php echo ($jenis_tinggal == 'Kost') ? "selected" :"" ?>> Kost</option>
                            </select>
                            <input type="text" value="<?php echo $siswa['hp'] ?>" name="hp" placeholder="Nomor Telepon" maxlength="12" required="" />
                        </div>
                        <div class="right-agileits">
                            <input type="text" value="<?php echo $siswa['rw'] ?>" name="rw" placeholder="RW" maxlength="2" required=""/>
                            <input type="text" value="<?php echo $siswa['kecamatan'] ?>" name="kecamatan" placeholder="Kecamatan" maxlength="20" required=""/>
                            <input type="text" value="<?php echo $siswa['kode_pos'] ?>" name="kode_pos" placeholder="Kode Pos" maxlength="5" required=""/>
                            <select class="form-control" value="<?php $transportasi=$siswa['alat_transportasi'] ?>" name="alat_transportasi">
                                <option <?php echo ($transportasi == 'jalan kaki') ? "selected" :"" ?>>Jalan Kaki</option>
                                <option <?php echo ($transportasi == 'sepeda') ? "selected" :"" ?>>Sepeda</option>
                                <option <?php echo ($transportasi == 'motor') ? "selected" :"" ?>>Sepeda Motor</option>
                                <option <?php echo ($transportasi == 'angkutan') ? "selected" :"" ?>>Angkutan Umum / Bus</option>
                            </select>
                            <input value="<?php echo $siswa['email'] ?>" type="email"  name="email" placeholder="Email" required="" />
                        </div>
                      </div>
                      <div class="row">
                        <center> <h2>Data Orang Tua</h2> </center>
                        <div class="left-w3-agile">
                            <input type="text" value="<?php echo $siswa['nama_ayah'] ?>" name="nama_ayah" placeholder="Nama Ayah" maxlength="50" required=""/>
                            <input type="text" value="<?php echo $siswa['tahun_lahir_ayah'] ?>" name="tahun_lahir_ayah" placeholder="Tahun Lahir Ayah" maxlength="4" required="" />
                            <select class="form-control" value="<?php $pendidikan_ayah=$siswa['penidikan_ayah'] ?>" name="pendidikan_ayah">
                                <option <?php echo ($pendidikan_ayah == 'sd sederajat') ? "selected" :"" ?>>SD / Sederajat</option>
                                <option <?php echo ($pendidikan_ayah == 'smp sederajat') ? "selected" :"" ?>>SMP / Sederajat</option>
                                <option <?php echo ($pendidikan_ayah == 'sma sederajat') ? "selected" :"" ?>> SMA /Sederajat</option>
                                <option <?php echo ($pendidikan_ayah == 's1 sederajat') ? "selected" :"" ?>>S1 /Sederajat</option>
                            </select>
                            <input type="text" value="<?php echo $siswa['pekerjaan_ayah'] ?>" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" maxlength="10" required=""/>
                            <input type="text" value="<?php echo $siswa['penghasilan_ayah'] ?>" name="penghasilan_ayah" placeholder="Penghasilan Ayah Perbulan" required=""/>
                            <input type="text" value="<?php echo $siswa['no_telpon_ayah'] ?>" name="no_telpon_ayah" placeholder="Nomor Telepon Ayah" maxlength="12" required="" />
                        </div>
                        <div class="right-agileits">
                            <input type="text" value="<?php echo $siswa['nama_ibu'] ?>" name="nama_ibu" placeholder="Nama Ibu" maxlength="50" required=""/>
                            <input type="text" value="<?php echo $siswa['tahun_lahir_ibu'] ?>" name="tahun_lahir_ibu" placeholder="Tahun Lahir Ibu" maxlength="4" required="" />
                            <select class="form-control" value="<?php $pendidikan_ibu=$siswa['pendidikan_ibu'] ?>" name="pendidikan_ibu">
                            <option <?php echo ($pendidikan_ibu == 'sd sederajat') ? "selected" :"" ?>>SD / Sederajat</option>
                                <option <?php echo ($pendidikan_ibu == 'smp sederajat') ? "selected" :"" ?>>SMP / Sederajat</option>
                                <option <?php echo ($pendidikan_ibu == 'sma sederajat') ? "selected" :"" ?>> SMA /Sederajat</option>
                                <option <?php echo ($pendidikan_ibu == 's1 sederajat') ? "selected" :"" ?>>S1 /Sederajat</option>
                            </select>
                            <input type="text" value="<?php echo $siswa['pekerjaan_ibu'] ?>" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" maxlength="10" required=""/>
                            <input type="text" value="<?php echo $siswa['penghasilan_ibu'] ?>" name="penghasilan_ibu" placeholder="Penghasilan Ibu Perbulan" required=""/>
                            <input type="text" value="<?php echo $siswa['no_telpon_ibu'] ?>" name="no_telpon_ibu" placeholder="Nomor Telepon Ibu" maxlength="12" required="" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <input type="submit" name="submit" value="Simpan">

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
  <tr>
      <th>No</th>
      <th>NIS</th>
    <th>Nama</th>
    <th>NISN</th>
    <th>TTL</th>
  </tr>
</table>
</div>
</div>
<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);</script>


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

