<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<head>
    <title>Cetak Berita Acara Ujian Mempertahankan Skripsi</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }

    .header{
        width: 100%;
        height: 150px;
        box-sizing: content-box;
        padding: 24px;
    }

    .kopsurat{
        width: calc(100% - 150px);
        float: left;
        height: 150px;
    }

    .logo{
        height: 150px;
        float: left;
    }

    .kementrian{
        font-size: 20px;
        text-decoration: none;
    }

    .tengah{
        text-align:center;
    }

    .isi{
        padding: 10px 0;
        vertical-align: middle;
    }

    hr{
      border: 1px;
      margin-top: 5px;
      border-style: solid;
    }

    .judul{
        text-decoration: underline;
        font-weight: bold;
        margin-top: 30px;
        font-size: 22px;
    }

    .isi-surat, .hasil-ujian{
        margin-top: 40px;
        font-size: 19px;
    }

    .tanggal-surat{
        text-decoration: underline;
    }

    .table{
        margin-top: 30px;
        overflow : wrap;
    }

    .table td{
        vertical-align: top;
        height: 20px;
        text-align: justify;
    }
    
    .kota{
        margin-top: 40px;
        font-size: 19px;
        margin-left: 60%;
    }

    .penguji-table{
        margin-top: 40px;
        margin-left: 10%;
        margin-right: 10%;
        width: 80%;
        font-size: 19px;
    }

    .penguji-table td{
        height: 40px;
    }

    .tanda{
        font-size: 19px;
        margin-top: 60px;
        margin-left: 10%;
        margin-right: 10%;
    }

    .tanda-tangan{
        float: left;
    }

    .kanan{
        float: right;
    }

    .tempat-neken{
        margin-top: 80px;
    }

    .table-nilai td{
        height: 30px;
    }

    td.baris-atas{
        height: 20px;
    }

    .table-nilai, .table-keterangan-nilai{
        border-collapse: collapse;
    }

    .table-nilai{
        width: 100%;
    }

    .table-keterangan{
        margin-top: 20px;
        text-align: justify;
    }

    .atas{
        vertical-align: top;
    }

</style>
<body>
    <header class="header">
        <img src="unimed.png" alt="" class="logo">
        <div class="kopsurat">
            <div class="isi">
            <p class="kementrian tengah">KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</p>
            <h1 class="tengah">UNIVERSITAS NEGERI MEDAN</h1>
            <h2 class="tengah">FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM</h2>
            <p class="tengah">Jl. Williem Iskandar Psr. V Medan Estate-Kotak Pos No. 1589 Medan 20211</p>
            <p class="tengah">Telp. (061) 6625970, Fax. (061) 614002-613319</p>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <p class="tengah judul">NILAI AKHIR UJIAN SKRIPSI</p>
        <div class="isi-surat">
            <table class="table" width="100%">
                <tr>
                    <td width="30%">Nama Mahasiswa</td>
                    <td width=3%>:</td>
                    <td width="67%">Ryan Ananda Nolly</td>
                </tr>
                <tr>
                    <td>Nomor Induk Mahasiswa</td>
                    <td>:</td>
                    <td>4183250019</td>
                </tr>
                <tr>
                    <td>Jurusan/ Program Studi</td>
                    <td>:</td>
                    <td>Matematika/Ilmu Komputer</td>
                </tr>
                <tr>
                    <td>Dosen Pemb. Skripsi (PS)</td>
                    <td>:</td>
                    <td>Dr. Hermawan Syahputra, M.Si.</td>
                </tr>
                <tr>
                    <td>Hari/ Tanggal Ujian</td>
                    <td>:</td>
                    <td>Selasa / 30 November 2022</td>
                </tr>
                <tr>
                    <td>Judul Skripsi</td>
                    <td>:</td>
                    <td>Analisis bla bla bla</td>
                </tr>
            </table>
        </div>

        <div class="hasil-ujian">
            <table class="table-nilai" border="1px">
                <tr>
                    <th rowspan="2" width="3%" style="background-color: #9eedff;">No.</th>
                    <th rowspan="2" width="57%" style="background-color: #9eedff;">Nama Dosen Penguji</th>
                    <th colspan="3" width="40%" style="background-color: #9eedff;">Nilai Ujian Mempertahankan Skripsi</th>
                </tr>
                <tr>
                    <th style="background-color: #9eedff;">Komponen Skripsi</th>
                    <th style="background-color: #9eedff;">Komponen Presentasi</th>
                    <th style="background-color: #9eedff;">Nilai Ujian [(3)+(4)/2]</th>
                </tr>
                <tr>
                    <td class="baris-atas"><center>(1)</center></td>
                    <td class="baris-atas"><center>(2)</center></td>
                    <td class="baris-atas"><center>(3)</center></td>
                    <td class="baris-atas"><center>(4)</center></td>
                    <td class="baris-atas"><center>(5)</center></td>
                </tr>
                <tr>
                    <td><center>1</center></td>
                    <td>Ini Pembimbing</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><center>2</center></td>
                    <td>Ini Penguji 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><center>3</center></td>
                    <td>Ini Penguji 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><center>4</center></td>
                    <td>Ini Penguji 3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><b>Nilai Akhir Angka = [&Sigma;(Nilai Uji+an)/4]</b></td>
                    <td style="background-color: #9eedff;"></td>
                    <td style="background-color: #9eedff;"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><b>Nilai Akhir Huruf*)</b></td>
                    <td style="background-color: #9eedff;"></td>
                    <td style="background-color: #9eedff;"></td>
                    <td></td>
                </tr>
            </table>
        </div>

        <div class="table-keterangan">
            <table width="50%">
                <tr>
                    <td class="atas">*)</td>
                    <td>Konversi nilai angka ke nilai huruf, sesuai dengan SK Rektor No. 715/J39.Kep/PP/2005, sebagai berikut:</td>
                </tr>
            </table>
            <table width="50%" border="1px" class="table-keterangan-nilai">
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Rentang Nilai Angka</center></th>
                    <th><center>Nilai Huruf</center></th>
                </tr>
                <tr>
                    <td><center>1</center></td>
                    <td><center>90-100</center></td>
                    <td><center>A</center></td>
                </tr>
                <tr>
                    <td><center>2</center></td>
                    <td><center>80-89</center></td>
                    <td><center>B</center></td>
                </tr>
                <tr>
                    <td><center>3</center></td>
                    <td><center>70-79</center></td>
                    <td><center>C</center></td>
                </tr>
                <tr>
                    <td><center>4</center></td>
                    <td><center>0-69</center></td>
                    <td><center>E</center></td>
                </tr>
            </table>
        </div>

        <div class="tanda">
            <div class="tanda-tangan">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Ketua,</p>
                <p class="tempat-neken">Dr. Fauziyah Harahap, M.Si.</p>
                <p>NIP. 196607281991052002</p>
            </div>
            <div class="tanda-tangan kanan">
                <p>Medan, 30 November 2022</p>
                <p>Panitia Ujian Mempertahankan Skripsi</p>
                <p>Sekretaris,</p>
                <p class="tempat-neken">Dr. Pardomoan Sitompul, M.Si.</p>
                <p>NIP. 196911261997021001</p>
            </div>
        </div>
    </main>
</body>
</html>
';
$mpdf->SetDisplayMode(85);
$mpdf->WriteHTML($html);
$mpdf->Output();