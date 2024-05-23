<?php
require 'top.php';
require 'function.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM table_pendaftaran where id = $id");
    $row = mysqli_fetch_array($sql);
}
?>
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Invoice Logo-->
                            <div class="clearfix">
                                <div class="float-start mb-3">
                                    <img src="../images/lOGO GIA(1).png" alt="dark logo" height="100px">
                                </div>
                                <div class="float-end">
                                    <h4 class="m-0 d-print-none">Formulir Pendaftaran</h4>
                                </div>
                            </div>
                            <div class="h5">Formulir Pendaftaran</div>
                            <div class="row">
                                <div class="col-6">
                                <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['nama']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tanggal Lahir</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['tempat_lahir']) ?>, <?= htmlspecialchars($row['tanggal_lahir']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['agama']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['alamat']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Asal Sekolah</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['asal_sekolah']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kelas</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['kelas']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jurusan</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['jurusan']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Email</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['email']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor HP/WA</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['phone_number']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Akun Media Social (IG/FB)</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['media_social']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tertarik untuk kuliah di Negara</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['negara']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jurusan yang Diminati</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['jurusan_diminati']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Cita-cita</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['citacita']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pesan & Harapan</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['pesan_harapan']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Info Genesia dari</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['info_genesia']) ?></td>
                                            </tr>
                                            
                                        </thead>
                                    </table>
                                </div>
                                <div class="col-6">
                                <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <td>Nama Ayah</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['nama_ayah']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Rumah Ayah</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['alamat_rumah_ayah']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan Ayah</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['pekerjaan_ayah']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Kantor Ayah</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['alamat_kantor_ayah']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor HP/WA Ayah</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['phone_number_ayah']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Email Ayah</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['email_ayah']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Ibu</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['nama_ibu']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Rumah Ibu</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['alamat_rumah_ibu']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan Ibu</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['pekerjaan_ibu']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Kantor Ibu</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['alamat_kantor_ibu']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor HP/WA Ibu</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['phone_number_ibu']) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Email Ibu</td>
                                                <td>:</td>
                                                <td><?= htmlspecialchars($row['email_ibu']) ?></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-md-8">
                                    
                                </div>
                            </div>


                            <div class="d-print-none mt-4">
                                <div class="text-center">
                                    <a href="javascript:window.print()" class="btn btn-primary"><i class="ri-printer-line"></i> Print</a>
                                </div>
                            </div>
                            <!-- end buttons -->

                        </div> <!-- end card-body-->
                    </div> <!-- end card -->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Velonic - Theme by <b>Techzaa</b>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<?php
require 'bottom.php';
?>