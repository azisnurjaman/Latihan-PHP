<?php
if (isset($_POST['input'])) {
    $nama = ($_POST['nama']);
    echo "<b>Nama</b> : $nama";

    echo "<br></br>";

    $nis = ($_POST['nis']);
    echo "<b>NIS</b> : $nis";

    echo "<br></br>";

    $alamat = nl2br($_POST['alamat']);
    echo "<b>Alamat</b> : $alamat";

    echo "<br></br>";

   $jk = ($_POST['jk']);
   echo "<b>Jenis Kelamin</b> : $jk";

   echo "<br></br>";

   $agama = ($_POST['agama']);
   echo "<b>Agama</b> : $agama";

   echo "<br></br>";

   $sekolah = ($_POST['sekolah']);
   echo "<b>Sekolah</b> : $sekolah";

   echo "<br></br>";

   $email = ($_POST['email']);
   echo "<b>Email</b> : $email";

   echo "<br></br>";

   $guru = ($_POST['guru']);
   echo "<b>Pengajar</b> : $guru";

   echo "<br></br>";

    echo "<b>Mata Pelajaran Yang Disukai</b> : <br>";
    if (isset($_POST['pel1'])) {
    echo "+ " . $_POST['pel1'] . "<br>";
    }
    if (isset($_POST['pel2'])) {
    echo "+ " . $_POST['pel2'] . "<br>";
    }
    if (isset($_POST['pel3'])) {
    echo "+ " . $_POST['pel3'] . "<br>";
    }
    if (isset($_POST['pel4'])) {
    echo "+ " . $_POST['pel4'] . "<br>";
    }
    if (isset ($_POST['pel5'])) {
    echo "+ " . $_POST['pel5'] . "<br>";
    }

    echo "<br>";

   $nilai = ($_POST['sd']);
   echo "<b>Nilai Ijazah SD</b> : $nilai";

   echo "<br></br>";

   if ($nilai>=23) {
    echo "<b>Selamat Anda Lulus</b>";
   } else {
    echo "<b>Mohon Maaf Anda Gagal</b>";
   }
}