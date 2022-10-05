<!-- import untuk excell -->
<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <h3 style="text-align: center;">Laporan Evaluasi</h3>
    <br>
    <table border="1" style="margin-left: auto; margin-right: auto;">
        <tr>
            <th>NO</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Hasil</th>
            <th>Soal</th>
            <th>Jawaban Anak</th>
        </tr>
        <?php
        $no = 1;
        foreach ($hasil as $row) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->tanggal ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->hasil ?></td>
            <td><?= $row->soal ?></td>
            <td><?= $row->jawaban_anak ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body></html>