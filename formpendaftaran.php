<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
</head>
<link rel="stylesheet" href="tugasakhir.css" />

<body>
    <div class="wrapper">
        <div class="title">
            Form Pendaftaran <a>SMKN 13</a>
        </div>
        <div class="form">
            <form method="POST" action="hasilform.php">
                <div class="input_field">
                    <label>Nama lengkap</label>
                    <input type="text" name="nama" class="input" required>
                </div>
                <div class="input_field">
                    <label>Asal Kota</label>
                    <input type="text" name="kota" class="input" required>
                </div>
                <div class="input_field">
                    <label>Asal sekolah</label>
                    <input type="text" name="asal" class="input" required>
                </div>
                <div class="input_field">
                    <label>Tanggal lahir</label>
                    <div class="custom_select">
                        <select name="tanggal" required>
                            <option>
                                <?php
                                for ($tanggal = 1; $tanggal < 32; $tanggal++)
                                    echo "<option> $tanggal </option>";
                                ?>
                            </option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Bulan lahir</label>
                    <div class="custom_select">
                        <select name="bulan" required>
                            <option>
                                <?php
                                $month;
                                for ($bul = 1; $bul < 13; $bul++) {
                                    if ($bul == 1) {
                                        $month = "Januari";
                                    } elseif ($bul == 2) {
                                        $month = "Februari";
                                    } elseif ($bul == 3) {
                                        $month = "Maret";
                                    } elseif ($bul == 4) {
                                        $month = "April";
                                    } elseif ($bul == 5) {
                                        $month = "Mei";
                                    } elseif ($bul == 6) {
                                        $month = "Juni";
                                    } elseif ($bul == 7) {
                                        $month = "Juli";
                                    } elseif ($bul == 8) {
                                        $month = "Agustus";
                                    } elseif ($bul == 9) {
                                        $month = "September";
                                    } elseif ($bul == 10) {
                                        $month = "Oktober";
                                    } elseif ($bul == 11) {
                                        $month = "November";
                                    } elseif ($bul == 12) {
                                        $month = "Desember";
                                    }
                                    echo "<option>$month</option>";
                                }
                                ?>
                            </option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Tahun lahir</label>
                    <div class="custom_select">
                        <select name="tahun" required>
                            <option>
                                <?php
                                for ($tanggal = 2003; $tanggal < 2015; $tanggal++)
                                    echo "<option> $tanggal </option>";
                                ?>
                            </option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Jenis kelamin</label>
                    <div class="custom_select">
                        <select name="kelamin" required>
                            <option value=""></option>
                            <option value="Laki_laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" name="email" class="input" required>
                </div>
                <div class="input_field">
                    <label>No HP</label>
                    <input type="text" name="nohp" class="input" required>
                </div>
                <div class="input_field">
                    <label>Alamat</label>
                    <textarea class="textarea" name="alamat" required></textarea>
                </div>
                <div class="input_field">
                    <label>Jurusan</label>
                    <div class="custom_select">
                        <select name="jurusan" required>
                            <option value=""></option>
                            <option value="Rekayasa Perangkat Lunak (RPL)">Rekayasa perangkat lunak</option>
                            <option value="Teknik Komputer Jaringan (TKJ)">Teknik komputer jaringan</option>
                            <option value="Analis Kimia (AK)">Analis kimia</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Jalur Pendaftaran</label>
                    <div class="custom_select">
                        <select name="jalur" required>
                            <option value=""></option>
                            <option value="Jalur Prestasi">Jalur prestasi</option>
                            <option value="Zonasi">Zonasi</option>
                            <option value="Perpindahan Orang-tua">Perpindahan Orang Tua</option>
                            <option value="Jalur Afirmasi">Jalur Afirmasi</option>
                            <option value="Jalur Anak Guru">Jalur Anak Guru</option>
                        </select>
                    </div>
                </div>
                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Saya siap untuk menjadi siswa 13</p>
                </div>
                <div class="input_field">
                    <input type="submit" name="kirim" value="Daftar" class="btn">
                </div>
            </form>
        </div>
    </div>
</body>
</html>