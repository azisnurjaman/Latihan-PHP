<form action="" method="POST">
╔┓┏╦━━╦┓╔┓╔━━╗<br>
║┗┛║┗━╣┃║┃║XX║<br>
║┏┓║┏━╣┗╣┗╣╰╯║<br>
╚┛┗╩━━╩━╩━╩━━╝<br>
    NIM Anda :
    <input type="text" name="nim"><br>
    <input type="submit" name="submit" value="Proses">
</form>

<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $a = substr ($nim,2, 2);
    switch ($a) {
        case '111':
            $jurusan = "Teknik Informatika";
            break;
        case '222':
            $jurusan = "Sistem Informasi";
            break;
        case '333':
            $jurusan = "Sistem Komputer";
            break;
        default:
            $jurusan = "Salah Jurusan";
            break;
    }
    echo "NIM Anda : $nim<br>";
    echo "Jurusan Anda : $jurusan";
}