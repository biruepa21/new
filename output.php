<?php 
                if (isset($_POST['hitung'])){

                    $nama   = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $jenis  = $_POST['jenis'];
                    $kue    = '';
                        switch ($jenis) {
                            case 'K1':
                                $kue = "Kue Cubit";
                                break;
                            case 'K2':
                                $kue = "Kue Pancong";
                                break;
                            case 'K3':
                                $kue = "Kue Putu";
                                break;
                            default:
                                $kue = "Tidak Ada";
                                break;
                        }
                    $toping = $_POST['toping'];
                    $harga  = '';
                        switch ($jenis) {
                            case 'K1':
                                $harga = 2000;
                                break;
                            case 'K2':
                                $harga = 2500;
                                break;
                            case 'K3':
                                $harga = 3000;
                                break;
                            default:
                                $harga = 0;
                                break;
                        }
                    $jumbel = $_POST['jumbel'];
                    $jumlah = $harga * $jumbel;
                        switch ($jumbel) {
                            case ($jumbel >= 10):
                                $diskon = $jumlah * 0.1;
                                break;
                            
                            default:
                                $diskon = 0;
                                break;
                        }
                    $total = $jumlah - $diskon;    
                }
            ?>

        <br><br>
        <table width="350" align="center">
            <tr>
                <td colspan="3">Toko Kue UI</td>
            </tr>
            <tr>
                <td colspan="3" align="center">----------------------------------------------------------------</td>
            </tr>
            <tr>
                <td>Nama Customer</td>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <td>Jenis Kue</td>
                <td>:</td>
                <td><?php echo $jenis; ?></td>
            </tr>
            <tr>
                <td>Nama Kue</td>
                <td>:</td>
                <td><?php echo $kue; ?></td>
            </tr>
            <tr>
                <td>Toping Kue</td>
                <td>:</td>
                <td><?php echo $toping; ?></td>

            </tr>
            <tr>
                <td>Harga Kue</td>
                <td>:</td>
                <td><?php echo $harga; ?></td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td>:</td>
                <td><?php echo $jumbel; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">----------------------------------------------------------------</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td><?php echo $jumlah; ?></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td><?php echo $diskon; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">----------------------------------------------------------------</td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td><?php echo $total; ?></td>
            </tr>
        </table>

        <center><a href="tugas_switchcase_kelompok.php">Back</a></center>