<?php
require 'top.php';
?>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid my-3">
            <div class="card">
                <div class="card-body">
                    <h2>Data Pendaftaran Masuk</h2>
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Detail</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'function.php';
                            $no = 1;
                            $sql = mysqli_query($conn, "SELECT * FROM table_pendaftaran ORDER BY id DESC");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td>
                                        <a href="formulir.php?id=<?=$row['id']?>" class="btn btn-warning">Lihat Formulir</a>
                                    </td>
                                    <td>
                                        <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            };
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- container -->

    </div>
    <?php
    require 'bottom.php';
    ?>