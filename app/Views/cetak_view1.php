<?php
// Get current date
$currentDate = date('d F Y');
// Generate 4-digit reference number
$nomorSurat = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
?>

<table style="border-bottom: 2px solid #000000;" border="0" width="100%">
    <tbody>
        <tr>
            <td width="100"><img src="<?= base_url('slide/logo.png') ?>" alt="logo" width="120" /></td>
            <td><br />
                <div style="font-weight: bold; " align="center">PEMERINTAHAN PROVINSI KOTA BEKASI JAWA BARAT</div>
                <div style="font-weight: bold; font-family: Times; font-size: 25px;" align="center">DINAS PENDIDIKAN
                </div>
                <div style="font-weight: bold; font-family: Times; font-size: 28px;" align="center">SMP NURUL ANWAR
                    TERAKREDTASI "B"</div>
                <div style="font-weight: bold; font-family: Times; font-size: 18px;" align="center">KABUPATEN JAWA BARAT
                </div>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <div style="font-size: 11px;" align="center">Alamat : Jl. Ratna Gg.Masjid ALMuhajirin RT
                                    002/008 Jatikramat Jatiasih Kota Bekasi .Email : smpnurulanwar21@gmail.com</div>
                            </td>
                            <td>
                                <div style="font-size: 11px;" align="center"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="font-size: 11px;" align="center">Telp. 08192606234 .Kode Pos: 17421</div>
                            </td>
                            <td>
                                <div style="font-size: 11px;" align="center"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<br>
<tr>
    <td colspan="4">
        <div align="center"><strong>LAPORAN PENGEMBALIAN BUKU</strong></div>
        <div align="left"><strong>Tanggal : <?= $currentDate ?></strong></div>
        <div align="left"><strong>No Surat : <?= $nomorSurat ?></strong></div>
    </td>
</tr>
<tr>
    <td colspan="4">
        <div align="center">&nbsp</div>
    </td>
</tr>

<table border="1" cellpadding="5" class="table table-bordered table-striped"
    style="border-collapse: collapse; border: 1px solid #000; text-align: center; width: 100%">
    <thead>
        <tr class="text-center">
            <th width="50px">No</th>
            <th width="150px">Tanggal Pinjam</th>
            <th width="150px">Tanggal Harus Dikembalikan</th>
            <th width="150px">Tanggal Kembali</th>
            <th width="150px">Status</th>
            <th width="150px">ID Anggota</th>
            <th>Kelas</th>
            <th width="400px">Judul Buku Dikembalikan</th>

        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($peminjaman as $key => $value) : ?>
        <?php if ($value['status'] == 'Kembali') : ?>
        <tr>
            <td><?= $no++ ?>.</td>
            <td><?= $value['tgl_pinjam'] ?></td>
            <td><?= $value['tgl_harus_kembali'] ?></td>
            <td><?= $value['tgl_kembali'] ?></td>
            <td>
                <span class="badge <?= $value['status_kembali'] == 'Terlambat' ? 'badge-danger' : 'badge-success' ?>">
                    <?= $value['status_kembali'] ?>
                </span>
            </td>
            <td><?= $value['id_anggota'] ?> </td>
            <td><?= $value['nama_kelas'] ?></td>
            <td><?= $value['judul_buku'] ?> <?= $value['no'] ?></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
</table>

<td>&nbsp;</td>

<table border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:12px" width="700">
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="335">
            <div align="right">Mengetahui,</div>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <div align="right">Kepala Perpustakaan </div>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <div align="right">SMA Negeri 1 Nan Sabaris </div>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <div align="right">Nurmayanti, S.Pd</div>
        </td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <script language="javascript1.2">
    window.print()
    </script>