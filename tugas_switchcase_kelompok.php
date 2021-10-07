<!DOCTYPE html>
<html>
    <head>
        <title>Toko Kue UI</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <form name="input" action="output.php" method="POST" onsubmit="return validasi()">
            <table width="350" border="1" align="center">
            <tr>
                <td colspan="3" align="center">Toko Kue UI</td>
            </tr>
            <tr>
               <td width="350">Nama Customer</td>
               <td>:</td>
               <td><input type="text" name="nama" id="nama"></td> 
            </tr>
            <tr>
               <td width="350">Alamat</td>
               <td>:</td>
               <td><input type="text" name="alamat" id="alamat"></td> 
            </tr>
            <tr>
               <td width="350">Jenis Kue</td>
               <td>:</td>
               <td>
                <select name="jenis" id="jenis">
                    <option value="0" selected="selected">--Pilih--</option>
                    <option value="K1" >K1</option>
                    <option value="K2" >K2</option>
                    <option value="K3" >K3</option>
                </select>
               </td> 
            </tr>
            <tr>
               <td width="350">Toping</td>
               <td>:</td>
               <td>
               <input type="radio" name="toping" value="Meses"/>Meses <br>
               <input type="radio" name="toping" value="Keju"/>Keju <br>
               <input type="radio" name="toping" value="Matcha"/>Matcha <br>
               </td> 
            </tr>
            <tr>
               <td width="350">Jumlah Beli</td>
               <td>:</td>
               <td><input type="number" name="jumbel" id="jumbel"/></td> 
            </tr>
            <tr>
                <td colspan="3" >
                    <center>
                        <input type="submit" name="hitung" value="Hitung" class="tombol">
                        <input type="reset" value="Batal" class="tombol">
                    </center>
                </td>
            </tr>
            </table>
        </form>
    </body>
    <script type="text/javascript">
        function validasi () {
            //Validasi Inputan Text Nama
            var validasiHuruf = /^[a-zA-Z ]+$/;
            var nama = document.getElementById("nama");
            if (nama.value.match(validasiHuruf)) {
                alert("Nama Kamu Adalah " + nama.value);
            }else {
                alert("Nama Wajib Huruf !");
                return false;
            }
            //Validasi Inputan Alamat
            var alamat = document.input.alamat.value;
            if(alamat=="") {
                alert("Kamu Belum Memasukkan Alamat !");
                document.input.alamat.focus();
                return false;
            }
            //Validasi Select Jenis Kue
            var jenis = (input.jenis.value);
            if (jenis=="0") {
                alert("Kamu Belum Memilih Jenis Kue !");
                document.input.jenis.focus();
                return false;
            }
            //Validasi Radio Button Toping
            function check_radio(radio) {
                //Memeriksa Apakah Radio Button Sudah Ada Yang Dipilih
                for (i=0; i<radio.length; i++) {
                    if (radio[i].checked === true) {
                        return radio[i].value;
                    }
                }
                return false;
            }
            var radio_val = check_radio(input.toping);
            if (radio_val===false) {
                alert("Kamu Belum Memilih Toping Kue !");
                return false;
            }
            
            //Validasi Inputan Jumlah Beli
            var beli = (input.jumbel.value);
            if(beli=="") {
                alert("Kamu Belum Memasukkan Jumlah Beli !");
                document.input.jumbel.focus();
                return false;
            }
            return (true);
        }
    </script>
</html>

<!---- Nama Anggota 
1. Annisa Fahira            (19200893)
2. Biru Epa Damainingati    (19200891)
3. Syara Waldana            (19200866)
4. Yulius Caesar Adiputro   (19200957)
5. Dwikhy Reza Aryandika    (19200962)
?>