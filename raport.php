<html>
<head>
    <title>Sistem Raport Sederhana</title>
</head>
<body>
    <form action="prosesraport.php" method="POST" name="input">
    <h1><center>Sistem Raport Sederhana</center></h1>
    <center><table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <th>NIS</th>
                <td><input type="number" name="nis"></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" cols="23" rows="5"></textarea></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>
                <input type="radio" name="jk" value="Laki-laki">Laki-laki
                <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>
                <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                </select>
                </td>
            </tr>
            <tr>
                <th>Sekolah</th>
                <td><input type="text" name="sekolah"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>Pengajar</th>
                <td><input type="text" name="guru"></td>
            </tr>
            <tr>
                <th>Mata Pelajaran Yang Disukai</th>
                <td>
                <input type="checkbox" name="pel1" value="RPL">RPL
                <input type="checkbox" name="pel2" value="B. Inggris">B. Inggris
                <input type="checkbox" name="pel3" value="B. Indonesia">B. Indonesia<br>
                <input type="checkbox" name="pel4" value="B. Sunda">IPA
                <input type="checkbox" name="pel5" value="Matematika">Matematika
                </td>
            </tr>
            <tr>
                <th>Total Nilai Ijazah SD</th>
                <td><input type="double" name="sd"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="input" value="Input Data"></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>