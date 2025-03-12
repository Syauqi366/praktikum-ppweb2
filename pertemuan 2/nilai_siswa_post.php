<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

if ($nilai_akhir > 55) {
    $status = "LULUS"; 
} 
else {$status = "TIDAK LULUS";} 

if($nilai_akhir <= 35 && $nilai_akhir >= 0) {
    $grade = "E";
}
elseif($nilai_akhir <= 55 && $nilai_akhir >= 36) {
    $grade = "D";
}
elseif($nilai_akhir <= 69 && $nilai_akhir >= 56) {
    $grade = "C";
}
elseif($nilai_akhir <= 84 && $nilai_akhir >= 70) {
    $grade = "B";
}
elseif($nilai_akhir <= 100 && $nilai_akhir >= 85) {
    $grade = "A";
}
else{$grade = "I"; }

switch ($grade) {
    case "E":
        $predikat = "sangat kurang";
        break;
    case "D":
        $predikat = "kurang";
        break;
    case "C":
        $predikat = "cukup";
        break;
    case "B":
        $predikat = "memuaskan";
        break;
    case "A":
        $predikat = "sangat memuaskan";
        break;
    default :
        $predikat = "tidak ada";
        break;
    }

// MENCETAK HASIL
if (!empty($proses)) {
    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
    echo '<br/>Nilai Akhir : ' . $nilai_akhir;
    echo '<br/>Status : ' . $status;
    echo '<br/>Grade : ' . $grade;
    echo '<br/>Predikat : ' . $predikat;

    // Mencetak Nilai Akhir, Status, Grade, dan Predikat
}