<!DOCTYPE html>
<html>
<head>
    <title>Form Karyawan UBSI</title>
</head>
<body>
    
    <strong><div align='center'><font face='Times New Roman'><h1>Form Karyawan UBSI</h1></font><div></strong>
    <hr>
    <form action="" method="post">
        <table border="1" align="center"><font face="Calibri"></font>
            <tr>
                <td colspan="2"><center>Isi Data Di Bawah Ini</center></td>
            </tr>
            <tr>
                <td width="50%">Nama</td>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>
            <tr>
                <td width="50%">Alamat</td>
                <td>
                    <textarea row="2" cols="0" name="alamat" required></textarea>
                </td>
            </tr>
            <tr>
                <td width="50%">Tempat Lahir</td>
                <td>
                    <input type="text" name="tmpt_lahir" required>
                </td>
            </tr>
            <tr>
                <td width="50%">Tanggal Lahir</td>
                <td>
                    <input type="date" name="tgl_lahir" required>
                </td>
            </tr>
            <tr>
                <td width="50%">Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis" value="Laki-Laki" required>Laki-Laki &nbsp;&nbsp;
                    <input type="radio" name="jenis" value="Perempuan" required>Perempuan
                </td>
            </tr>
            <tr>
                <td width="50%">Pendidikan</td>
                <td>
                <select size="1" name="pendidikan" required>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
                </td>
            </tr>
            <tr>
                <td width="50%">Email</td>
                <td>
                <input type="email" name="email" required>
                </td>
            </tr>
            <tr><td colspan="2" >
            <center>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="reset"></td>
            </center>
            </tr>
        </table>
    </form>

    <strong><div align='center'><font face='Times New Roman'><h1>Form Karyawan UBSI</h1></font><div></strong>
    <table border="2" align="center">
        <?php
            if (isset($_POST['submit'])){
                $nama          =$_POST['nama'];
                $alamat        =$_POST['alamat'];
                $tempat_lahir  =$_POST['tmpt_lahir'];
                $tanggal_lahir = $_POST['tgl_lahir'];
                $jenis         = $_POST['jenis'];
                $pendidikan    = $_POST['pendidikan'];
                $email         = $_POST['email'];

                if($pendidikan=="D1")
                {
                }
                else
                if($pendidikan=="D2")
                {
                }
                else
                if($pendidikan=="D3")
                {
                }
                else
                if($pendidikan=="S1")
                {
                }
                else
                if($pendidikan=="S2")
                {
                }
                else
                $pendidikan="S1";
                echo"
                <tr>
                <td width=50%>Nama</td><td>$nama</td> 
                </tr>
                <tr>
                <td width=50%>Alamat</td><td>$alamat</td>
                </tr>
                <tr>
                <td width=50%>Tempat Lahir</td><td>$tempat_lahir</td>
                </tr>
                <tr>
                <td width=50%>Tanggal Lahir</td><td>$tanggal_lahir</td>
                </tr>
                <tr>
                <td width=50%>Jenis kelamin</td><td>$jenis</td>
                </tr>
                <tr>
                <td width=50%>Pendidikan</td><td>$pendidikan</td>
                </tr>
                <tr>
                <td width=50%>Email </td><td>$email</td>
                </tr>
                ";
            }
        ?>
    </table>
    <center><a href="javascript:window.location.reload();">Back To Home</a></center>
</body>
</html>