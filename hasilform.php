<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Form Pendaftaran</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Dosis', sans-serif;
            background-color: orange;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            max-width: 450px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            margin-top: 50px;
            margin-left: 16px;
            border-radius: 16px;
        }

        .judul {
            text-align: left;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
            background-color: white;
        }

        .judul span {
            color: orange;
        }

        .hasil-label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .hasil-label span {
            font-weight: bold;
            font-size: 18px;
        }

        h4 {
            font-size: 20px;
            margin-bottom: 8px;
            margin-top: -90px;
            text-align: center;
            margin-left: 470px;
        }

        h4 span {
            color: red;
        }

        h4 a {
            color: green;
        }

        .icon-tack {
            margin-left: 150px;
            margin-top: -250px;
            margin-bottom: -90px;
            position: relative;
        }

        .icon-tack img {
            width: 10%;
            justify-content: center;
            margin-left: 670px;
            margin-top: -100px;
            margin-bottom: 100px;
        }

        .back button {
            border: 0;
            padding: 8px 10px;
            margin-left: 800px;
            margin-top: 80px;
            width: 10%;
            font-size: 16px;
            font-weight: bold;
            border-radius: 16px;
            background: teal;
            color: #000;
            cursor: pointer;
            outline: none;
        }

        .back button:hover {
            background: lightseagreen;
            padding: 8px 30px;
            border: 0;
            border-radius: 16px;
            font-weight: bold;
            outline: none;
            transition: .5s ease;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="judul">
            HASIL DATA <span> FORM PENDAFTARAN</span>
        </div>
        <label class="hasil-label">
            <span>Nama lengkap:</span> <?php
                                        if (isset($_POST['kirim'])) {
                                            $nama = $_POST['nama'];
                                            echo isset($nama) ? $nama : '';
                                        } ?>
        </label>
        <label class="hasil-label">
            <span>Tanggal lahir:</span> <?php
                                        if (isset($_POST['kirim'])) {
                                            $tanggal_lahir = $_POST['tanggal'];
                                            echo isset($tanggal_lahir) ? $tanggal_lahir : '';
                                        } ?>
        </label>
        <label class="hasil-label">
            <span>Bulan lahir:</span> <?php
                                        if (isset($_POST['kirim'])) {
                                            $bulan = $_POST['bulan'];
                                            echo isset($bulan) ? $bulan : '';
                                        } ?>
        </label>
        <label class="hasil-label">
            <span>Jenis kelamin:</span> <?php
                                        if (isset($_POST['kirim'])) {
                                            $kelamin = $_POST['kelamin'];
                                            echo isset($kelamin) ? $kelamin : '';
                                        } ?>
        </label>
        <label class="hasil-label">
            <span>Alamat rumah:</span> <?php
                                        if (isset($_POST['kirim'])) {
                                            $Alamat_rumah = $_POST['alamat'];
                                            echo isset($Alamat_rumah) ? $Alamat_rumah : '';
                                        } ?>
        </label>
        <label class="hasil-label">
            <span>Email:</span> <?php
                                if (isset($_POST['kirim'])) {
                                    $email = $_POST['email'];
                                    echo isset($email) ? $email : '';
                                } ?>
        </label>
        <label class="hasil-label">
            <span>Nomor HP:</span> <?php
                                    if (isset($_POST['kirim'])) {
                                        $nohp = $_POST['nohp'];
                                        echo isset($nohp) ? $nohp : '';
                                    } ?>
        </label>
        <label class="hasil-label">
            <span>Kota:</span> <?php
                                if (isset($_POST['kirim'])) {
                                    $kota = $_POST['kota'];
                                    echo isset($kota) ? $kota : '';
                                } ?>
        </label>
        <label class="hasil-label">
            <span>Asal sekolah:</span> <?php
                                        if (isset($_POST['kirim'])) {
                                            $asal = $_POST['asal'];
                                            echo isset($asal) ? $asal : '';
                                        } ?>
        </label>
        <label class="hasil-label">
            <span>Jurusan:</span> <?php
                                    if (isset($_POST['kirim'])) {
                                        $jurusan = $_POST['jurusan'];
                                        echo isset($jurusan) ? $jurusan : '';
                                    } ?>
        </label>
        <label class="hasil-label">
            <span>Jalur Pendaftaran:</span> <?php
                                            if (isset($_POST['kirim'])) {
                                                $jalur = $_POST['jalur'];
                                                echo isset($jalur) ? $jalur : '';
                                            } ?>
        </label>
    </div>
    <div class="icon-tack">
        <img src="img/accept.png">
    </div>
    <h4><a>Data form pendaftaran peserta didik baru telah terkirim,</a><br>
        Mohon tunggu informasi terbaru yang akan kami kirim melalui <span>Email anda</span></h4>

    <div class="back">
        <a href="halamanutama.php"><button> Home </button></a>
    </div>
</body>
</html>