<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        PRAJA
    </title>
    <!-- Favicon -->
    <!-- <link href="<?php echo base_url('assets/argon/img/brand/favicon.png'); ?>" rel="icon" type="image/png"> -->
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?php echo base_url('assets/argon/js/plugins/nucleo/css/nucleo.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/argon/js/plugins/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?php echo base_url('assets/argon/css/argon-dashboard.css?v=1.1.2'); ?>" rel="stylesheet" />
    <!-- CSS2 Files -->
    <link href="<?php echo base_url('assets/select2/css/select2.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>" />
</head>

<body class="">
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="profile">PRAJA
                    <?php echo date('Y'); ?></a>

                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <?php if ($this->session->userdata('jk') == 'L') { ?>
                                        <img alt="Image placeholder" src="https://meetanentrepreneur.lu/wp-content/uploads/2019/08/profil-linkedin-300x300.jpg">
                                    <?php } else { ?>
                                        <img alt="Image placeholder" src="https://st4.depositphotos.com/12780408/25357/v/600/depositphotos_253570434-stock-illustration-woman-face-profile-line-icon.jpg">
                                    <?php } ?>
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"><?= $this->session->userdata('nama') ?>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url('login/logout'); ?>" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://mmc.tirto.id/image/2019/03/13/gedung-ipdn_ratio-16x9.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Hello
                            <?php echo $data->nama . ' ' . $this->session->flashdata('login') ?></h1>
                        <p class="text-white mt-0 mb-5">Silahkan Mengisi Form Praja</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <?php if ($this->session->userdata('jk') == 'L') { ?>
                                            <img src="https://meetanentrepreneur.lu/wp-content/uploads/2019/08/profil-linkedin-300x300.jpg" class="rounded-circle">
                                        <?php } else { ?>
                                            <img src="https://st4.depositphotos.com/12780408/25357/v/600/depositphotos_253570434-stock-illustration-woman-face-profile-line-icon.jpg" class="rounded-circle">
                                        <?php } ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h2>
                                    <?php echo $data->nama ?>
                                </h2>
                                <h5><b><?= $this->session->userdata('spcp') ?></b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Form Data Praja <?= date('Y') ?></h3>
                                    <p>Note :</p>
                                    <p>
                                        <font color='red'>* </font>Data Wajib diisi
                                    </p>
                                    <p>Data wali, jika tidak diisi. Wajib Mengisikan "-" atau "0"</p>
                                    <a href="<?= $link->link ?>" class="btn btn-primary" target="_blank"><i class="fa fa-download"> Panduan Pengisian Form Data Praja
                                            <?= date('Y') ?></i></a>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="post" action="<?php echo base_url('profile/edit'); ?>">
                                <h6 class="heading-small text-muted mb-4">Data Pribadi</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Nomor Peserta</label>
                                                <input type="text" name="no_spcp" id="no_spcp" class="form-control form-control-alternative" placeholder="Nomor Peserta .." value="<?php echo $data->no_spcp ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">
                                                    NPP
                                                </label>
                                                <input type="text" name="npp" id="npp" class="form-control form-control-alternative" placeholder="NPP .." value="<?php echo $data->npp ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">
                                                    <font color='red'>*</font>Nama
                                                </label>
                                                <input type="text" name="nama" id="nama" class="form-control form-control-alternative" placeholder="Nama Lengkap .." value="<?php echo $data->nama ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Jenis Kelamin
                                                </label>
                                                <select name="jk" id="jk" class="form-control" required>
                                                    <option value="">-Pilih Jenis Kelamin-</option>
                                                    <option value="L" <?php if ($data->jk == "L") {
                                                                            echo "selected";
                                                                        } ?>>Laki-Laki
                                                    </option>
                                                    <option value="P" <?php if ($data->jk == "P") {
                                                                            echo "selected";
                                                                        } ?>>Perempuan
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">
                                                    <font color='red'>*</font>NISN
                                                </label>
                                                <input type="number" name="nisn" id="nisn" class="form-control form-control-alternative" placeholder="NISN .." value="<?php echo $data->nisn ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">
                                                    <font color='red'>*</font>NIK
                                                </label>
                                                <input type="number" name="nik_praja" id="nik_praja" class="form-control form-control-alternative" placeholder="NIK .." value="<?php echo $data->nik_praja ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">
                                                    <font color='red'>*</font>NPWP
                                                </label>
                                                <input type="number" name="npwp" id="npwp" class="form-control form-control-alternative" placeholder="NPWP .." value="<?php echo $data->npwp ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-first-name">
                                                    <font color='red'>*</font>Tempat Lahir
                                                </label>
                                                <input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control form-control-alternative" placeholder="Tempat Lahir .." value="<?php echo $data->tmpt_lahir ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Tanggal Lahir
                                                </label>
                                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-alternative" placeholder="Tanggal Lahir .." value="<?php echo $data->tgl_lahir ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Agama
                                                </label>

                                                <select name="agama" id="agama" class="form-control" required>
                                                    <option value="" disabled>-Pilih Agama-</option>
                                                    <?php foreach ($agamaa as $x) { ?>
                                                        <option value="<?php echo $x->id_agama ?>" <?php if ($data->agama == $x->id_agama) {
                                                                                                        echo "selected";
                                                                                                    } ?>>
                                                            <?php echo $x->nama_agama ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>No TLP
                                                </label>
                                                <input type="number" name="tlp_rumah" id="tlp_rumah" class="form-control form-control-alternative" placeholder="No Tlp .." value="<?php echo $data->tlp_rumah ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>No HP
                                                </label>
                                                <input type="number" name="tlp_pribadi" id="tlp_pribadi" class="form-control form-control-alternative" placeholder="No HP .." value="<?php echo $data->tlp_pribadi ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Email
                                                </label>
                                                <input type="email" name="email" id="email" class="form-control form-control-alternative" placeholder="Email .." value="<?php echo $data->email ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Informasi Alamat</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Alamat
                                                    <p>Cukup mengisikan nama jalan saja dan nomor rumah jika ada</p>
                                                </label>
                                                <textarea name="alamat" id="alamat" class="form-control form-control-alternative" placeholder="Alamat  .." required><?php echo $data->alamat ?></textarea>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>RT
                                                </label>
                                                <input type="number" name="rt" id="rt" class="form-control form-control-alternative" placeholder="RT .." value="<?php echo $data->rt ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>RW
                                                </label>
                                                <input type="number" name="rw" id="rw" class="form-control form-control-alternative" placeholder="RW .." value="<?php echo $data->rw ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Provinsi
                                                </label>
                                                <select name="provinsi" id="provinsi" class="form-control" required>
                                                    <option value="">-Pilih Provinsi-</option>
                                                    <?php foreach ($wilayah as $x) { ?>
                                                        <option value="<?php echo $x->nama_provinsi ?>" <?php if ($data->provinsi == $x->nama_provinsi) {
                                                                                                            echo "selected";
                                                                                                        } ?>>
                                                            <?php echo $x->nama_provinsi ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Kabupaten/Kota
                                                </label>
                                                <select name="kab_kota" id="kab_kota" class="form-control" required>
                                                    <option value="" disabled>-Pilih Kab/Kota-</option>
                                                    <option value="<?php echo $data->kab_kota ?>" selected>
                                                        <?php echo $data->kab_kota ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Kecamatan
                                                </label>
                                                <select name="kecamatan" id="kecamatan" class="form-control" required>
                                                    <option value="" disabled>-Pilih Kecamatan-</option>
                                                    <?php if ($data->id_kecamatan != NULL) { ?>
                                                        <option value="<?php echo $data->id_kecamatan ?>" selected>
                                                            <?php echo $data->nama_kecamatan ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Nama Dusun
                                                </label>
                                                <input type="text" name="nama_dusun" id="nama_dusun" class="form-control form-control-alternative" placeholder="Nama Dusun .." value="<?php echo $data->nama_dusun ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Kelurahan
                                                </label>
                                                <input type="text" name="kelurahan" id="kelurahan" class="form-control form-control-alternative" placeholder="Kelurahan .." value="<?php echo $data->kelurahan ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Kode Pos
                                                </label>
                                                <input type="text" name="kode_pos" id="kode_pos" class="form-control form-control-alternative" placeholder="Kode Pos .." value="<?php echo $data->kode_pos ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Description -->
                                <h6 class="heading-small text-muted mb-4">Data Lembaga</h6>
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">
                                                    <font color='red'>*</font>Asal Pendaftaran
                                                </label>
                                                <select name="asdaf" id="asdaf" class="form-control" readonly>
                                                    <option value="">-Pilih Asal Pendaftaran-</option>
                                                    <?php foreach ($wilayah as $x) { ?>
                                                        <option value="<?php echo $x->nama_provinsi ?>" <?php if ($data->asdaf == $x->nama_provinsi) {
                                                                                                            echo "selected";
                                                                                                        } ?>>
                                                            <?php echo $x->nama_provinsi ?>
                                                        </option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Jenis Tinggal
                                                </label>
                                                <select name="jenis_tinggal" id="jenis_tinggal" class="form-control" required>
                                                    <option value="">-Pilih Jenis Tinggal-</option>
                                                    <?php foreach ($jenistinggal as $x) { ?>
                                                        <option value="<?php echo $x->id_jenis_tinggal ?>" <?php if ($data->jenis_tinggal == $x->id_jenis_tinggal) {
                                                                                                                echo "selected";
                                                                                                            } ?>>
                                                            <?php echo $x->nama_jenis_tinggal ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Alat Transportasi
                                                </label>
                                                <select name="alat_transport" id="alat_transport" class="form-control" required>
                                                    <option value="">-Pilih Alat Transportasi-</option>
                                                    <?php foreach ($alattransportasi as $x) { ?>

                                                        <option value="<?php echo $x->id_alat_transportasi ?>" <?php if ($data->alat_transport == $x->id_alat_transportasi) {
                                                                                                                    echo "selected";
                                                                                                                } ?>>
                                                            <?php echo $x->nama_alat_transportasi ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Kewarganegaraan</label>
                                                <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" readonly>
                                                    <option value="ID">Indonesia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Pendaftaran</label>
                                                <select name="jenis_pendaftaran" id="jenis_pendaftaran" class="form-control" readonly>
                                                    <option value="1">Peserta Didik Baru</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Tanggal Masuk Kuliah</label>
                                                <input type="date" name="tgl_masuk_kuliah" id="tgl_masuk_kuliah" class="form-control form-control-alternative" placeholder="Tanggal Masuk Kuliah .." value="2021-09-07" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class=" form-group">
                                                <label class="form-control-label">Tahun Masuk Kuliah</label>
                                                <input type="number" name="tahun_masuk_kuliah" id="tahun_masuk_kuliah" class="form-control form-control-alternative" placeholder="Tahun Masuk Kuliah .." value="<?php echo date('Y') ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Jenis Pembiayaan</label>
                                                <select name="pembiayaan" id="pembiayaan" class="form-control" readonly>
                                                    <option value="3">Beasiswa Penuh</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    Jalur Masuk
                                                </label>

                                                <select name="jalur_masuk" id="jalur_masuk" class="form-control" readonly>
                                                    <option value="11">Program Kerjasama Perusahaan/Institusi/Pemerintah
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Penempatan
                                                </label>
                                                <select name="penempatan" id="penempatan" class="form-control" readonly>
                                                    <option value="IPDN KAMPUS JATINANGOR">IPDN KAMPUS JATINANGOR
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Mulai Semester
                                                </label>
                                                <select name="mulai_semester" id="mulai_semester" class="form-control" readonly>
                                                    <option value="20211">2021/2022 Ganjil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="status" id="status" value="aktif">
                                        <input type="hidden" name="tingkat" id="tingkat" value="1">
                                        <input type="hidden" name="angkatan" id="angkatan" value="32">

                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Penerima KPS
                                                </label>

                                                <select name="penerima_pks" id="penerima_pks" class="form-control" required>
                                                    <option value="">-Pilih-</option>
                                                    <option value="Ya" <?php if ($data->penerima_pks == "Ya") {
                                                                            echo "selected";
                                                                        } ?>>
                                                        Ya
                                                    </option>
                                                    <option value="Tidak" <?php if ($data->penerima_pks == "Tidak") {
                                                                                echo "selected";
                                                                            } ?>>
                                                        Tidak
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>No KPS
                                                </label>

                                                <?php if ($data->penerima_pks == "Ya") { ?>
                                                    <input type="number" name="no_pks" id="no_pks" class="form-control form-control-alternative" placeholder="No KPS .." value="<?php echo $data->no_pks ?>" required>
                                                <?php } else { ?>
                                                    <input type="number" name="no_pks" id="no_pks" class="form-control form-control-alternative" placeholder="No KPS .." value="<?php echo $data->no_pks ?>" disabled>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <?php if ($data->prodi  == NULL) { ?>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">
                                                        <font color='red'>*</font>Prodi
                                                    </label>

                                                    <p class="text-black mt-0 mb-1">Note : Perlu diperhatikan pilih prodi
                                                        1-10 diurutkan sesuai minat</p>
                                                    <select class="form-control select2" multiple="multiple" id="prodii" name="prodii[]" data-placeholder="Pilih Prodi 1-10" required>
                                                        <?php foreach ($get_prodisepuluh as $x) { ?>
                                                            <option value=" <?php echo $x->id_prodi; ?>">
                                                                <?php echo $x->nama_program_studi; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Description -->
                                <h6 class="heading-small text-muted mb-4">Data Orang Tua</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>NIK Ayah
                                                </label>
                                                <input type="number" name="nik_ayah" id="nik_ayah" class="form-control form-control-alternative" placeholder="NIK Ayah .." value="<?php echo $data->nik_ayah ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Nama Ayah
                                                </label>
                                                <input type="text" name="nama_ayah" id="nama_ayah" class="form-control form-control-alternative" placeholder="Nama Ayah .." value="<?php echo $data->nama_ayah ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Tanggal Lahir Ayah
                                                </label>
                                                <input type="date" name="tgllahir_ayah" id="tgllahir_ayah" class="form-control form-control-alternative" placeholder="Tanggal Lahir Ayah .." value="<?php echo $data->tgllahir_ayah ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Pendidikan Ayah
                                                </label>
                                                <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control" required>
                                                    <option value="">-Pilih Pendidikan Ayah-</option>
                                                    <?php foreach ($pendidikan as $x) { ?>

                                                        <option value="<?php echo $x->id_jenjang_didik ?>" <?php if ($data->pendidikan_ayah == $x->id_jenjang_didik) {
                                                                                                                echo "selected";
                                                                                                            } ?>>
                                                            <?php echo $x->nama_jenjang_didik ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Pekerjaan Ayah
                                                </label>
                                                <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" required>
                                                    <option value="">-Pilih Pekerjaan Ayah-</option>
                                                    <?php foreach ($pekerjaan as $x) { ?>

                                                        <option value="<?php echo $x->id_pekerjaan ?>" <?php if ($data->pekerjaan_ayah == $x->id_pekerjaan) {
                                                                                                            echo "selected";
                                                                                                        } ?>>
                                                            <?php echo $x->nama_pekerjaan ?>
                                                        </option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Penghasilan Ayah
                                                </label>
                                                <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" required>
                                                    <option value="">-Pilih Penghasilan Ayah-</option>
                                                    <?php foreach ($penghasilan as $x) { ?>
                                                        <option value="<?php echo $x->id_penghasilan ?>" <?php if ($data->penghasilan_ayah == $x->id_penghasilan) {
                                                                                                                echo "selected";
                                                                                                            } ?>>
                                                            <?php echo $x->nama_penghasilan ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>No TLP Ayah
                                                </label>
                                                <input type="number" name="tlp_ayah" id="tlp_ayah" class="form-control form-control-alternative" placeholder="No TLP Ayah .." value="<?php echo $data->tlp_ayah ?>" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>NIK Ibu
                                                </label>
                                                <input type="number" name="nik_ibu" id="nik_ibu" class="form-control form-control-alternative" placeholder="NIK Ibu .." value="<?php echo $data->nik_ibu ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Nama Ibu
                                                </label>
                                                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control form-control-alternative" placeholder="Nama Ibu .." value="<?php echo $data->nama_ibu ?>" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Tanggal Lahir Ibu
                                                </label>
                                                <input type="date" name="tgllahir_ibu" id="tgllahir_ibu" class="form-control form-control-alternative" placeholder="Tanggal Lahir Ibu .." value="<?php echo $data->tgllahir_ibu ?>" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Pendidikan Ibu
                                                </label>
                                                <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control" required>
                                                    <option value="">-Pilih Pendidikan Ibu-</option>
                                                    <?php foreach ($pendidikan as $x) { ?>
                                                        <option value="<?php echo $x->id_jenjang_didik ?>" <?php if ($data->pendidikan_ibu == $x->id_jenjang_didik) {
                                                                                                                echo "selected";
                                                                                                            } ?>>
                                                            <?php echo $x->nama_jenjang_didik ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Pekerjaan Ibu
                                                </label>
                                                <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" required>
                                                    <option value="">-Pilih Pekerjaan Ibu-</option>
                                                    <?php foreach ($pekerjaan as $x) { ?>

                                                        <option value="<?php echo $x->id_pekerjaan ?>" <?php if ($data->pekerjaan_ibu == $x->id_pekerjaan) {
                                                                                                            echo "selected";
                                                                                                        } ?>>
                                                            <?php echo $x->nama_pekerjaan ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Penghasilan Ibu
                                                </label>
                                                <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control" required>
                                                    <option value="">-Pilih Penghasilan Ibu-</option>
                                                    <?php foreach ($penghasilan as $x) { ?>
                                                        <option value="<?php echo $x->id_penghasilan ?>" <?php if ($data->penghasilan_ibu == $x->id_penghasilan) {
                                                                                                                echo "selected";
                                                                                                            } ?>>
                                                            <?php echo $x->nama_penghasilan ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>No TLP Ibu
                                                </label>
                                                <input type="number" name="tlp_ibu" id="tlp_ibu" class="form-control form-control-alternative" placeholder="No TLP Ibu .." value="<?php echo $data->tlp_ibu ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Description -->
                                <h6 class="heading-small text-muted mb-4">Data Wali</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>NIK Wali
                                                </label>
                                                <input type="number" name="nik_wali" id="nik_wali" class="form-control form-control-alternative" placeholder="NIK Wali .." value="<?php echo $data->nik_wali ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Nama Wali
                                                </label>
                                                <input type="text" name="nama_wali" id="nama_wali" class="form-control form-control-alternative" placeholder="Nama Wali .." value="<?php echo $data->nama_wali ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Tanggal Lahir Wali
                                                </label>
                                                <input type="date" name="tgllahir_wali" id="tgllahir_wali" class=" form-control form-control-alternative" placeholder="Tanggal Lahir Wali .." value="<?php echo $data->tgllahir_wali ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Pendidikan Wali
                                                </label>
                                                <select name="pendidikan_wali" id="pendidikan_wali" class="form-control" required>
                                                    <option value="">-Pilih Pendidikan Wali-</option>
                                                    <?php foreach ($pendidikan as $x) { ?>
                                                        <option value="<?php echo $x->id_jenjang_didik ?>" <?php if ($data->pendidikan_wali == $x->id_jenjang_didik) {
                                                                                                                echo "selected";
                                                                                                            } ?>>
                                                            <?php echo $x->nama_jenjang_didik ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Pekerjaan Wali
                                                </label>
                                                <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control" required>
                                                    <option value="">-Pilih Pekerjaan Wali-</option>
                                                    <?php foreach ($pekerjaan as $x) { ?>

                                                        <option value="<?php echo $x->id_pekerjaan ?>" <?php if ($data->pekerjaan_wali == $x->id_pekerjaan) {
                                                                                                            echo "selected";
                                                                                                        } ?>>
                                                            <?php echo $x->nama_pekerjaan ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>Penghasilan Wali
                                                </label>
                                                <select name="penghasilan_wali" id="penghasilan_wali" class="form-control" required>
                                                    <option value="">-Pilih Penghasilan Wali-</option>
                                                    <?php foreach ($penghasilan as $x) { ?>
                                                        <option value="<?php echo $x->id_penghasilan ?>" <?php if ($data->penghasilan_wali == $x->id_penghasilan) {
                                                                                                                echo "selected";
                                                                                                            } ?>>
                                                            <?php echo $x->nama_penghasilan ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label">
                                                    <font color='red'>*</font>No TLP Wali
                                                </label>
                                                <input type="number" name="tlp_wali" id="tlp_wali" class="form-control form-control-alternative" placeholder="No TLP Wali .." value="<?php echo $data->tlp_wali ?>" required>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" onClick="return validasi()" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; <?php echo date('Y'); ?> <a href="https://scdb.ipdn.ac.id" class="font-weight-bold ml-1" target="_blank">TIM IT IPDN</a>
                        </div>
                    </div>
                    <div class="col-xl-6">

                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!--   Core   -->
    <script src="<?php echo base_url('assets/argon/js/plugins/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/argon/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <!--   Optional JS   -->
    <!--   Argon JS   -->
    <script src="<?php echo base_url('assets/argon/js/argon-dashboard.min.js?v=1.1.2'); ?>"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url('assets/select2/js/select2.full.min.js'); ?>"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>
</body>

</html>

<script>
    function validasi() {

        var optionLength = $("#prodii :selected").length;
        if (optionLength != 10 && optionLength != 0) {

            Swal.fire(
                'Oops',
                'Periksa kembali data prodi! Anda baru mengisi <b>' + optionLength +
                '</b>  prodi, <b> prodi diurutkan 1-10 sesuai minat dan di wajibkan mengisi 10 Prodi  </b> !!',
                'question'
            )
            return false;
        } else {
            return true;
        }
    }

    $('#penerima_pks').change(function() {
        if ($(this).val() == "Ya") {
            $('#no_pks').prop("disabled", false);
        } else {
            $('#no_pks').prop("disabled", true);
        }
    });

    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

    });

    $('#provinsi').change(function() {
        var kab_kota = $(this).val();

        console.log(kab_kota);
        $.ajax({
            url: "<?php echo site_url('profile/get_sub_provinsi'); ?>",
            method: "POST",
            data: {
                kab_kota: kab_kota
            },
            async: true,
            dataType: 'json',
            success: function(data) {

                var html = " ";
                var i;
                for (i = 0; i < data.length; i++) {

                    html += "<option value=" + "'" + data[i].nama_kabkota + "'" + ">" + data[i]
                        .nama_kabkota + "</option>";
                }

                $('#kab_kota').html(html);

            }
        });
        return false;
    });

    $('#kab_kota').change(function() {
        var kecamatan = $(this).val();
        console.log(kecamatan);
        $.ajax({
            url: "<?php echo site_url('profile/get_sub_kabkota'); ?>",
            method: "POST",
            data: {
                kecamatan: kecamatan
            },
            async: true,
            dataType: 'json',
            success: function(data) {

                var html = " ";
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + "'" + data[i].id_kecamatan + "'" + '>' + data[i]
                        .nama_kecamatan + '</option>';
                }
                $('#kecamatan').html(html);

            }
        });
        return false;
    });

    $('#fk').change(function() {
        var prodi = $(this).val();
        console.log(prodi);
        $.ajax({
            url: "<?php echo site_url('profile/get_sub_category'); ?>",
            method: "POST",
            data: {
                prodi: prodi
            },
            async: true,
            dataType: 'json',
            success: function(data) {

                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].id_prodi + '>' + data[i].nama_program_studi +
                        '</option>';
                }
                $('#prodi').html(html);

            }
        });
        return false;

    });
</script>
