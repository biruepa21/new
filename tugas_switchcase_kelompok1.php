<html>
    <head>
        <title>Validasi Form Dengan Javascript</title>
    </head>
    <script type="text/javascript">
        function validasi() {
            var nama = document.login.nama.value;
            if(nama=="") {
                alert("Silahkan Masukkan Nama");
                document.login.nama.focus();
                return false;
            }
            var x = document.login.email.value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if(x=="") {
                alert("Tolong Isi Email Anda!");
                document.login.email.focus();
                return false;
            }
            if(atpos < 1 || dosatpos < atpos + 2 || dosatpos + 2 >= x.length) {
                alert("Format Tidak Benar");
                return false;
            }
            function check_radio(radio) {
                for (i = 0; i < radio.length; i++){
                    if (radio[i].checked == true) {
                        return radio[i].value;
                    }
                }
                return false;
            }
            var radio_val = check_radio(login.jk);
            if(radio_val==false) {
                alert("Silahkan Pilih Jenis Kelamin");
                return false;
            }
            var kerja = (login.pekerjaan.value);
            if(kerja=="kosong") {
                alert("Tolong Pilih Pekerjaan");
                document.login.pekerjaan.focus();
                return false;
            }
        }
    </script>
    <body>
        <form action="" name="login" onsubmit="return validasi()">
            <table>
                <tr>
                    <td width="80">Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="20" maxlength="20"></td>
                </tr>
                <tr>
                    <td width="80">Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" size="20" maxlength="20"></td>
                </tr>
                <tr>
                    <td width="80">Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jk" value="pria">Pria</td>
                    <td><input type="radio" name="jk" value="wanita">Wanita</td>
                </tr>
                <tr>
                    <td width="80">Pekerjaan</td>
                    <td>:</td>
                    <td>
                        <select name="pekerjaan" id="pekerjaan">
                            <option value="kosong" selected="selected">Pilih</option>
                            <option value="pelajar">pelajar</option>
                            <option value="swasta">swasta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="reset" value="clear"></td>
                    <td><input type="submit" value="send"></td>
                </tr>
            </table>
        </form>
    </body>
</html>