<?php
    require_once 'admin/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genesis Education</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php require 'nav.php'; ?>

    <section class=" gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h5>
                            <form method="post">
                                <h2>Data Calon Mahasiswa</h2>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="nama" name="nama" class="form-control form-control-lg" required />
                                            <label class="form-label" for="nama">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="tempatLahir" name="tempatLahir" class="form-control form-control-lg" required />
                                            <label class="form-label" for="tempatLahir">Tempat Lahir</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline datepicker w-100">
                                            <input type="date" class="form-control form-control-lg" id="tanggalLahir" name="tanggalLahir" required />
                                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="agama" name="agama" class="form-control form-control-lg" required />
                                            <label class="form-label" for="agama">Agama</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="alamat" name="alamat" class="form-control form-control-lg" required />
                                            <label class="form-label" for="alamat">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="asalSekolah" name="asalSekolah" class="form-control form-control-lg" required />
                                            <label class="form-label" for="asalSekolah">Asal Sekolah</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="kelas" name="kelas" class="form-control form-control-lg" required />
                                            <label class="form-label" for="kelas">Kelas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="jurusan" name="jurusan" class="form-control form-control-lg" required />
                                            <label class="form-label" for="jurusan">Jurusan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                                            <label class="form-label" for="email">Alamat Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control form-control-lg" required />
                                            <label class="form-label" for="phoneNumber">Nomor HP/WA</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="mediaSocial" name="mediaSocial" class="form-control form-control-lg" required />
                                            <label class="form-label" for="mediaSocial">Akun Media Social (IG/FB)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h6 class="mb-2 pb-1">Tertarik untuk kuliah di Negara: </h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="negara" id="germany" value="Germany" required />
                                            <label class="form-check-label" for="germany">Germany</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="negara" id="turkiye" value="Turkiye" required />
                                            <label class="form-check-label" for="turkiye">Turkiye</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="negara" id="malaysia" value="Malaysia" required />
                                            <label class="form-check-label" for="malaysia">Malaysia</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="negara" id="egypt" value="Egypt" required />
                                            <label class="form-check-label" for="egypt">Egypt</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="negara" id="finland" value="Finland" required />
                                            <label class="form-check-label" for="finland">Finland</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="jurusanDiminati" name="jurusanDiminati" class="form-control form-control-lg" required />
                                            <label class="form-label" for="jurusanDiminati">Jurusan yang Diminati</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="citacita" name="citacita" class="form-control form-control-lg" required />
                                            <label class="form-label" for="citacita">Cita-cita</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <textarea id="pesanHarapan" name="pesanHarapan" class="form-control form-control-lg" required></textarea>
                                            <label class="form-label" for="pesanHarapan">Pesan & Harapan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="infoGenesia" name="infoGenesia" class="form-control form-control-lg" required />
                                            <label class="form-label" for="infoGenesia">Info Genesia dari</label>
                                        </div>
                                    </div>
                                </div>

                                <h2>Data Orang Tua Ayah</h2>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="namaAyah" name="namaAyah" class="form-control form-control-lg" required />
                                            <label class="form-label" for="namaAyah">Nama Ayah</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="alamatRumahAyah" name="alamatRumahAyah" class="form-control form-control-lg" required />
                                            <label class="form-label" for="alamatRumahAyah">Alamat Rumah</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="pekerjaanAyah" name="pekerjaanAyah" class="form-control form-control-lg" required />
                                            <label class="form-label" for="pekerjaanAyah">Pekerjaan Ayah</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="alamatKantorAyah" name="alamatKantorAyah" class="form-control form-control-lg" required />
                                            <label class="form-label" for="alamatKantorAyah">Alamat Kantor</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="tel" id="phoneNumberAyah" name="phoneNumberAyah" class="form-control form-control-lg" required />
                                            <label class="form-label" for="phoneNumberAyah">Nomor HP/WA Ayah</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="email" id="emailAyah" name="emailAyah" class="form-control form-control-lg" required />
                                            <label class="form-label" for="emailAyah">Alamat Email</label>
                                        </div>
                                    </div>
                                </div>

                                <h2>Data Orang Tua Ibu</h2>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="namaIbu" name="namaIbu" class="form-control form-control-lg" required />
                                            <label class="form-label" for="namaIbu">Nama Ibu</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="alamatRumahIbu" name="alamatRumahIbu" class="form-control form-control-lg" required />
                                            <label class="form-label" for="alamatRumahIbu">Alamat Rumah</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="pekerjaanIbu" name="pekerjaanIbu" class="form-control form-control-lg" required />
                                            <label class="form-label" for="pekerjaanIbu">Pekerjaan Ibu</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="alamatKantorIbu" name="alamatKantorIbu" class="form-control form-control-lg" required />
                                            <label class="form-label" for="alamatKantorIbu">Alamat Kantor</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="tel" id="phoneNumberIbu" name="phoneNumberIbu" class="form-control form-control-lg" required />
                                            <label class="form-label" for="phoneNumberIbu">Nomor HP/WA Ibu</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="email" id="emailIbu" name="emailIbu" class="form-control form-control-lg" required />
                                            <label class="form-label" for="emailIbu">Alamat Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input data-mdb-ripple-init class="btn btn-warning btn-lg" name="daftar" type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
    </div>

    <?php require 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>