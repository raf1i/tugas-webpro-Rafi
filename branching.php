<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
function evaluasiNilai($nilai) {
    if ($nilai >= 81 && $nilai <= 100) {
        $hasil = array('nilaiHuruf' => 'A', 'bobot' => 4);
    } elseif ($nilai >= 78 && $nilai <= 80.99) {
        $hasil = array('nilaiHuruf' => 'A-', 'bobot' => 3.7);
    } elseif ($nilai >= 75 && $nilai <= 77.99) {
        $hasil = array('nilaiHuruf' => 'B+', 'bobot' => 3.3);
    } elseif ($nilai >= 70 && $nilai <= 74.99) {
        $hasil = array('nilaiHuruf' => 'B', 'bobot' => 3);
    } elseif ($nilai >= 65 && $nilai <= 69.99) {
        $hasil = array('nilaiHuruf' => 'B-', 'bobot' => 2.7);
    } elseif ($nilai >= 60 && $nilai <= 64.99) {
        $hasil = array('nilaiHuruf' => 'C+', 'bobot' => 2.3);
    } elseif ($nilai >= 55 && $nilai <= 59.99) {
        $hasil = array('nilaiHuruf' => 'C', 'bobot' => 2);
    } elseif ($nilai >= 40 && $nilai <= 54.99) {
        $hasil = array('nilaiHuruf' => 'D', 'bobot' => 1);
    } elseif ($nilai >= 0 && $nilai <= 39.99) {
        $hasil = array('nilaiHuruf' => 'E', 'bobot' => 0);
    } else {
        $hasil = array('nilaiHuruf' => 'Nilai di luar batas', 'bobot' => null);
    }

    return $hasil;
}

// Menampilkan hasil evaluasi nilai
$nilai = 84;
$hasilEvaluasi = evaluasiNilai($nilai);
?>

<table>
    <tr>
        <th>Nilai Angka</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    <tr>
        <td><?php echo $nilai; ?></td>
        <td><?php echo $hasilEvaluasi['nilaiHuruf']; ?></td>
        <td><?php echo $hasilEvaluasi['bobot']; ?></td>
    </tr>
</table>

</body>
</html>
