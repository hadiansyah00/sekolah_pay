<!-- Custom styles for this template-->
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

    /* Timeline holder */
    ul.timeline {
        list-style-type: none;
        position: relative;
        padding-left: 1.5rem;
    }

    /* Timeline vertical line */
    ul.timeline:before {
        content: ' ';
        background: #fff;
        display: inline-block;
        position: absolute;
        left: 16px;
        width: 4px;
        height: 100%;
        z-index: 400;
        border-radius: 1rem;
    }

    li.timeline-item {
        margin: 20px 0;
    }

    /* Timeline item arrow */
    .timeline-arrow {
        border-top: 0.5rem solid transparent;
        border-right: 0.5rem solid #fff;
        border-bottom: 0.5rem solid transparent;
        display: block;
        position: absolute;
        left: 2rem;
    }

    /* Timeline item circle marker */
    li.timeline-item::before {
        content: ' ';
        background: #ddd;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #fff;
        left: 11px;
        width: 14px;
        height: 14px;
        z-index: 400;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }


    /*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
    body {
        background: #E8CBC0;
        background: -webkit-linear-gradient(to right, #E8CBC0, #636FA4);
        background: linear-gradient(to right, #E8CBC0, #636FA4);
        min-height: 100vh;
    }

    .text-gray {
        color: #999;
    }
</style>

<style type="text/css">
    img[src=""] {
        display: none;
    }

    .pointer {
        cursor: pointer;
    }

    input[type="checkbox"][class^="cb"] {
        display: none;
    }

    label {
        border: 1px solid #fff;
        display: block;
        position: relative;
        cursor: pointer;
    }

    label:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        border: 1px solid grey;
        position: absolute;
        top: -5px;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
    }

    label img {
        height: 35px;
        width: 80px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
    }

    :checked+label {
        border-color: #ddd;
    }

    :checked+label:before {
        content: "✓";
        background-color: grey;
        transform: scale(1);
    }

    :checked+.bg {
        background-color: darkgray;
        color: white;
    }

    :checked+label img {
        transform: scale(0.9);
        z-index: -1;
    }
</style>
<main id="main" style="padding-top: 15px;">
    <section class="inner-page">
        <div class="container">
            <!-- Begin Page Content -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 py-10 p0 mx-auto">
                        <ul class="timeline">
                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                <div class="timeline-arrow">
                                </div>
                                <h2 class="h5 mb-0 text-primary font-weight-bold">Informasi Mahasiswa Baru</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i></span>
                                <div class="row">
                                    <div class="card-body col-md-4 mb-4 mb-md-0">
                                        <img src="<?php if (!empty($user['img_siswa'])) {
                                                        echo base_url('assets/img/data/' . $user['img_siswa']);
                                                    } ?>" class="img-thumbnail rounded mb-2">
                                        <br /><br />

                                    </div>
                                    <div class="card-body col-md-8 mb-4 mb-md-0">
                                        <table style="font-size: 14px;" cellpadding="3">
                                            <tbody>
                                                <tr>
                                                    <td>Nomor Daftar</td>
                                                    <td>: <b><?= $user['no_daftar'] ?></b></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>: <?= $user['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Daftar Ulang</td>
                                                    <?php if ($user['sts_pmb']  == '0') : ?>
                                                        <td>: <span class="badge badge-danger badge-pill disabled" aria-disabled="true">Belum Bayar</span></td>
                                                    <?php elseif ($user['sts_pmb']  == '1') : ?>
                                                        <td>: <span class="badge badge-success badge-pill disabled" aria-disabled="true">Menunggu Verfikasi Staff</span></td>
                                                    <?php elseif ($user['sts_pmb']  == '2') : ?>
                                                        <td>: <span class="badge badge-success badge-pill disabled" aria-disabled="true">Pembayaran Telah Verfikasi</span></td>

                                                    <?php endif ?>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <?php if ($user['status']  == '0') : ?>
                                                        <td>: <span class="badge badge-warning badge-pill disabled" aria-disabled="true">Pending</span></td>
                                                    <?php elseif ($user['status']  == '1') : ?>
                                                        <td>: <span class="badge badge-success badge-pill disabled" aria-disabled="true">Konfirmasi</span></td>
                                                    <?php elseif ($user['status']  == '2') : ?>
                                                        <td>: <span class="badge badge-danger badge-pill disabled" aria-disabled="true">Di Tolak</span></td>
                                                    <?php endif ?>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Daftar</td>
                                                    <td>: <?= mediumdate_indo(date($user['date_created'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>: <?= $user['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>NISN</td>
                                                    <td>: <?= $user['nis'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="container-fluid">
                                            <?php if ($user['status'] == 2) : ?>
                                                <div class="col-md-12">
                                                    <div class="card-footer bg-danger text-white shadow mb-2">
                                                        <div class="card-body">
                                                            <strong><i class="bi bi-bell"></i> Informasi Penolakan.</strong><br />
                                                            <span><?= $user['alasan'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif ?>

                                            <?php if ($user['sts_pmb']  == '2') : ?>
                                                <a target="_blank" href="<?= base_url('laporan/cetak_invoice?id=' . $this->secure->encrypt($user['id'])) ?>" class="btn btn-primary"><i class="bi bi-printer"></i> Cetak Invoice</a>
                                            <?php endif ?>

                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                <div class="timeline-arrow"></div>
                                <h2 class="h5 mb-0 text-primary font-weight-bold">Informasi Akademik</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i></span>
                                <p class="text-small mt-1 font-weight-bold ">Tanggal Tes Akademik :</p>
                                <p class="text-small mt-1 font-weight-bold ">Lokasi Tes Akademik : </p>
                                <p class="text-small mt-1 font-weight-normal text-danger"> <strong>Syarat dan Ketentuan Mengikuti Tes Akademik</strong></p>
                                <hr>
                                <p>Dokumen Persyaratan Pendaftaran
                                    <br>
                                    1. Membawa Berkas berkas
                                    <br>
                                    2. Pakain Hitam Putih
                                    <br>
                                    3. Membawa Kartu PMB

                                </p>
                                <br>
                                <?php if ($user['status']  == '1') : ?>
                                    <a target="_blank" href="<?= base_url('laporan/cetak_formulir?id=' . $this->secure->encrypt($user['id'])) ?>" class="btn btn-primary"><i class="bi bi-printer"></i> Cetak Formulir</a>
                                <?php endif ?>
                            </li>
                        </ul>
                    </div>

                </div>
</main><!-- End #main -->


<script type="text/javascript">
    var input = document.getElementById('password'),
        icon = document.getElementById('icon');

    icon.onclick = function() {

        if (input.className == 'active form-control') {
            input.setAttribute('type', 'text');
            icon.className = 'bi bi-eye';
            input.className = 'form-control';

        } else {
            input.setAttribute('type', 'password');
            icon.className = 'bi bi-eye-slash';
            input.className = 'active form-control';
        }

    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        <?php if ($user['id_majors'] == 0) : ?>
            $("#jurus").hide();
        <?php endif ?>
        $('#prov').change(function() {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('get/get_kota_ppdb'); ?>',
                data: {
                    prov: this.value
                },
                cache: false,
                success: function(response) {
                    $('#kab').html(response);
                }
            });
        });
        $('#kab').change(function() {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('get/get_kec'); ?>',
                data: {
                    kab: this.value
                },
                cache: false,
                success: function(response) {
                    $('#kec').html(response);
                }
            });
        });
        $('#kec').change(function() {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('get/get_kel'); ?>',
                data: {
                    kec: this.value
                },
                cache: false,
                success: function(response) {
                    $('#kel').html(response);
                }
            });
        });
        $('#pendidikan').change(function() {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('get/get_majors'); ?>',
                data: {
                    pendidikan: this.value
                },
                cache: false,
                success: function(response) {
                    $('#jurusan').html(response);
                }
            });
            $.ajax({
                type: 'POST',
                url: '<?= site_url('get/get_id_majors'); ?>',
                data: {
                    pendidikan: this.value
                },
                cache: false,
                success: function(response) {
                    if (response == 1) {
                        $("#jurus").show();
                    } else if (response == 0) {
                        $("#jurus").hide();
                    }
                }
            });
        });

        $.ajax({
            type: 'POST',
            url: '<?= site_url('get/get_jenis_pay'); ?>',
            cache: false,
            success: function(response) {
                $('#jenis_pay').html();
                $('#jenis_pay').html(response);
            }
        });

        $(document).on('change', ".cb", function() {
            $(".cb").not(this).prop('checked', false);
        });

    });
</script>

<script type="text/javascript">
    $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });

    $(document).on("click", ".browse1", function() {
        var file = $(this).parents().find(".file1");
        file.trigger("click");
    });

    $(document).on("click", ".browse2", function() {
        var file = $(this).parents().find(".file2");
        file.trigger("click");
    });

    $(document).on("click", ".browse3", function() {
        var file = $(this).parents().find(".file3");
        file.trigger("click");
    });

    $('#imgInp').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#imgInp1').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file1").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview1").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#imgInp2').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file2").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview2").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#imgInp3').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file3").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview3").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>