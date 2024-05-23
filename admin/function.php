<?php
$conn = mysqli_connect("localhost", "root", "", "db-genesia");

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempatLahir'];
    $tanggal_lahir = $_POST['tanggalLahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $asal_sekolah = $_POST['asalSekolah'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $phone_number = $_POST['phoneNumber'];
    $media_social = $_POST['mediaSocial'];
    $negara = $_POST['negara'];
    $jurusan_diminati = $_POST['jurusanDiminati'];
    $citacita = $_POST['citacita'];
    $pesan_harapan = $_POST['pesanHarapan'];
    $info_genesia = $_POST['infoGenesia'];

    $nama_ayah = $_POST['namaAyah'];
    $alamat_rumah_ayah = $_POST['alamatRumahAyah'];
    $pekerjaan_ayah = $_POST['pekerjaanAyah'];
    $alamat_kantor_ayah = $_POST['alamatKantorAyah'];
    $phone_number_ayah = $_POST['phoneNumberAyah'];
    $email_ayah = $_POST['emailAyah'];

    $nama_ibu = $_POST['namaIbu'];
    $alamat_rumah_ibu = $_POST['alamatRumahIbu'];
    $pekerjaan_ibu = $_POST['pekerjaanIbu'];
    $alamat_kantor_ibu = $_POST['alamatKantorIbu'];
    $phone_number_ibu = $_POST['phoneNumberIbu'];
    $email_ibu = $_POST['emailIbu'];

    $sql = "INSERT INTO table_pendaftaran (nama, tempat_lahir, tanggal_lahir, agama, alamat, asal_sekolah, kelas, jurusan, email, phone_number, media_social, negara, jurusan_diminati, citacita, pesan_harapan, info_genesia, nama_ayah, alamat_rumah_ayah, pekerjaan_ayah, alamat_kantor_ayah, phone_number_ayah, email_ayah, nama_ibu, alamat_rumah_ibu, pekerjaan_ibu, alamat_kantor_ibu, phone_number_ibu, email_ibu) 
                VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$agama', '$alamat', '$asal_sekolah', '$kelas', '$jurusan', '$email', '$phone_number', '$media_social', '$negara', '$jurusan_diminati', '$citacita', '$pesan_harapan', '$info_genesia', '$nama_ayah', '$alamat_rumah_ayah', '$pekerjaan_ayah', '$alamat_kantor_ayah', '$phone_number_ayah', '$email_ayah', '$nama_ibu', '$alamat_rumah_ibu', '$pekerjaan_ibu', '$alamat_kantor_ibu', '$phone_number_ibu', '$email_ibu')";

    if ($conn->query($sql) === TRUE) {
        header('location: success.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
