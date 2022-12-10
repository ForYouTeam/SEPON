<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600&display=swap");

        body {
            background: rgb(204, 204, 204);
            font-family: "Poppins", sans-serif;
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        @media print {

            body,
            page {
                margin: 0;
                box-shadow: 0;
            }
        }

        .title {
            text-align: center;
            padding: 0;
            margin: 0;
        }

        .title h3 {
            font-size: 23pt;
            font-weight: 800;
        }

        .title p {
            font-size: 15pt;
            font-weight: 400;
            margin-top: -30px;
        }

        hr {
            height: 1.5px;
            background: black;
        }

        .text-bold {
            font-weight: 800;
        }

        .img-profile {
            height: 230px;
            width: auto;
        }

        .image {
            padding: 40px 0px;
            display: flex;
        }

        .image ul {
            margin: 0px 10px;
        }

        .image ul li {
            margin-top: 13px;
            font-size: 12pt;
            text-decoration: none;
            list-style: none;
        }

        .detail {
            display: flex;
        }

        .detail ul {
            margin: 0px 105px 0px 0px;
            padding: 0;
        }

        .detail ul li {
            margin-top: 8px;
            list-style: none;
        }
    </style>
</head>

<body>
    <page size="A4">
        <div style="padding: 60px 50px">
            <div class="title">
                <h3>Bukti Pendaftaran</h3>
                <p>SD MUHAMMADIYAH 3 PALU</p>
            </div>
            <hr />
            <div class="image">
                <img class="img-profile" src="{{ asset($data->path_img) }}" alt="" />
                <ul class="text-bold">
                    <li>Nama Lengkap</li>
                    <li>Nama Panggilan</li>
                    <li>Jenis Kelamin</li>
                    <li>Tempat Tgl Lahir</li>
                    <li>Agama</li>
                    <li>Alamat</li>
                </ul>
                <ul>
                    <li>: {{ $data->nama_lengkap }}</li>
                    <li>: {{ $data->nama_panggilan }}</li>
                    <li>: {{ $data->jk }}</li>
                    <li>: {{ $data->tempat_lahir }} {{ $data->tgl_lahir }}</li>
                    <li>: {{ $data->agama }}</li>
                    <li>: {{ $data->alamat }}</li>
                </ul>
            </div>
            <hr />
            <div>
                <h3>Data Lainnya</h3>
                <div class="detail">
                    <ul class="text-bold">
                        <li>Anak Ke</li>
                        <li>Nama Ayah</li>
                        <li>Nama Ibu</li>
                        <li>Wali</li>
                        <li>Jumlah Saudara Kandung</li>
                        <li>Jumlah Saudara Tiri</li>
                        <li>Jumlah Saudara Angkat</li>
                        <li>Hobi</li>
                        <li>Bidang Studi Digemari</li>
                        <li>Olahraga Digemari</li>
                    </ul>
                    <ul>
                        <li>: {{ $data->detailRole->anak_ke }}</li>
                        <li>: {{ $data->ayah }}</li>
                        <li>: {{ $data->ibu }}</li>
                        <li>: {{ $data->wali ? $data->detailRole->wali['nama'] : 'Tidak Ada' }}
                        </li>
                        <li>: {{ $data->detailRole->jumlah_saudara_kandung }}</li>
                        <li>: {{ $data->detailRole->jumlah_saudara_tiri }}</li>
                        <li>: {{ $data->detailRole->jumlah_saudara_angkat }}</li>
                        <li>: {{ $data->detailRole->hobi }}</li>
                        <li>: {{ $data->detailRole->bidang_studi_digemari }}</li>
                        <li>: {{ $data->detailRole->olahraga_digemari }}</li>
                    </ul>
                </div>
            </div>
            <div style="padding-top: 20px;">
                <p>Untuk mencetak/menyimpan dokumen ini gunakan perintah Ctrl+p kemudian pilih destination kemudian save
                    as pdf</p>
                <br>
                <small style="color: blue">Terdaftar di PALU pada tanggal {{ date('d-m-Y') }}</small>
            </div>
        </div>
    </page>
</body>

</html>
