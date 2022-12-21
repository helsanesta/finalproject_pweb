<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("perusahaan/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php if ($this->session->flashdata('input')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Data Berhasil Diubah!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Data Gagal Diubah!",
                icon: "error"
            });
        </script>
    <?php } ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>assets/admin_lte/dist/img/Loading.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("perusahaan/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("perusahaan/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Perusahaan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col">
                        <?php

                        $id = 0;
                        foreach ($perusahaan as $i) :
                            $id++;
                            $id_perusahaan_detail = $i['id_perusahaan_detail'];
                            $nama_perusahaan = $i['nama_perusahaan'];
                            $jenis_perusahaan = $i['jenis_perusahaan'];
                            $npwp_perusahaan = $i['npwp_perusahaan'];
                            $formasi_jabatan = $i['formasi_jabatan'];
                            $lokasi_tes = $i['lokasi_tes'];
                            $alamat = $i['alamat'];
                            $tanggal_tes = $i['tanggal_tes'];
                            $deskripsi = $i['deskripsi'];
                            $nomor_telepon = $i['nomor_telepon'];
                            $logo = $i['logo'];
                            $id_status_verifikasi = $i['id_status_verifikasi'];



                        ?>
                            <form action="<?= base_url(); ?>Daftar/lengkapi_data_perusahaan" method="POST" enctype="multipart/form-data">

                                <input type="text" name="id_user" id="id_user" value="<?= $id_perusahaan_detail ?>" hidden>
                                <input type="text" id="logo_old" name="logo_old" value="<?= $logo ?>" hidden>

                                <div class="form-group">
                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?= $nama_perusahaan ?>" <?php if ($id_status_verifikasi == 2) {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        } else {
                                                                                                                                                            echo 'required';
                                                                                                                                                        }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_perusahaan">Jenis Perusahaan</label>
                                    <input type="text" class="form-control" id="jenis_perusahaan" name="jenis_perusahaan" value="<?= $jenis_perusahaan ?>" <?php if ($id_status_verifikasi == 2) {
                                                                                                                                                                echo 'disabled';
                                                                                                                                                            } else {
                                                                                                                                                                echo 'required';
                                                                                                                                                            }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="npwp_perusahaan">NPWP Perusahaan</label>
                                    <input type="text" class="form-control" id="npwp_perusahaan" name="npwp_perusahaan" value="<?= $npwp_perusahaan ?>" <?php if ($id_status_verifikasi == 2) {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        } else {
                                                                                                                                                            echo 'required';
                                                                                                                                                        }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="formasi_jabatan">Formasi Jabatan</label>
                                    <input type="text" class="form-control" id="formasi_jabatan" name="formasi_jabatan" value="<?= $formasi_jabatan ?>" <?php if ($id_status_verifikasi == 2) {
                                                                                                                                        echo 'disabled';
                                                                                                                                    } else {
                                                                                                                                        echo 'required';
                                                                                                                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi_tes">lokasi_tes</label>
                                    <input type="text" class="form-control" id="lokasi_tes" name="lokasi_tes" value="<?= $lokasi_tes ?>" <?php if ($id_status_verifikasi == 2) {
                                                                                                                            echo 'disabled';
                                                                                                                        } else {
                                                                                                                            echo 'required';
                                                                                                                        }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" <?php if ($id_status_verifikasi == 2) {
                                                                                                            echo 'disabled';
                                                                                                        } else {
                                                                                                            echo 'required';
                                                                                                        }  ?>><?= $alamat ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_tes">Tanggal Tes</label>
                                    <input type="text" class="form-control" id="tanggal_tes" name="tanggal_tes" value="<?= $tanggal_tes ?>" <?php if ($id_status_verifikasi == 2) {
                                                                                                                                        echo 'disabled';
                                                                                                                                    } else {
                                                                                                                                        echo 'required';
                                                                                                                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" <?php if ($id_status_verifikasi == 2) {
                                                                                                                echo 'disabled';
                                                                                                            } else {
                                                                                                                echo 'required';
                                                                                                            }  ?>><?= $deskripsi ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo" <?php if ($id_status_verifikasi == 2) {
                                                                                                        echo 'disabled';
                                                                                                    } else {
                                                                                                        echo 'required';
                                                                                                    }  ?>>

                                </div>

                                <?php if ($id_status_verifikasi == 2) {
                                    echo '';
                                } else {
                                    echo '<button type="submit" class="btn btn-primary mb-3">Submit</button>';
                                }  ?>

                            </form>
                        <?php endforeach; ?>
                    </div>

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("perusahaan/components/js.php") ?>
</body>

</html>
