<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/Loading.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("user/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("user/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Alur Pendaftaran</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Alur Pendaftaran Kartu Peserta</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid mb-2">
                    <h2 class="text-center">Alur Pendaftaran Kartu Peserta</h2>
                    <div style="margin-top:50px;">
                        <div class="row">
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/permohonan.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">1. Lakukan pendaftaran akun sebagai pelamar
                                        (Mengunjungi website SSCASN KKP Jawa Timur)</p>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_right.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/hp.jpg" width="100px"
                                        alt="Permohonan" width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">2. Login dan lengkapi profile anda dengan melampirkan syarat-syarat yang diperlukan yaitu:
                                    </p>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_right.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/syarat.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row">
                                    <p> - Softcopy KTP asli (dalam bentuk image)</p>
                                    <p> - Softcopy ijazah asli yang terakhir (dalam bentuk image)</p>
                                    <p> - Softocpy pas foto terbaru (dalam bentuk image) </p>
                                    <p> - Softcopy surat keterangan pengalaman kerja jika ada (dalam bentuk image)</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col mt-5 mb-5 d-flex justify-content-center" style="margin-right:860px;">
                                <div class="row ">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_top.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>

                            <div class="col mt-5 mb-5 d-flex justify-content-center">
                                <div class="row  ">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_down.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/cetak.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">5. Pemohon dapat mengunduh dan mencetak secara mandiri kartu peserta</p>
                                </div>
                            </div>

                            <div class="col mt-5">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_left.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/operator.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">4. Operator akan memverifikasi anda dan mengaktifkan button
                                        print
                                        Kartu Peserta di akun anda. </p>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_left.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/request.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">3. Silahkan request pencetakan Kartu Peserta Anda
                                        pada hari dan jam kerja. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("user/components/js.php") ?>
</body>

</html>