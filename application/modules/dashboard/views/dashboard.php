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


    <link href="<?php echo base_url('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet'); ?>" />

    <link href="<?php echo base_url('assets/plugins/jvectormap-next/jquery-jvectormap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/gritter/css/jquery.gritter.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/select2/dist/css/select2.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" />


</head>

<body class="">
    <div class="main-content">
        <br>

        <center> <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png" width="10%"></center>
        <h1 class="mb-0 " style="text-align: center;">INSTITUT PEMERINTAHAN DALAM NEGERI - IPDN</h1>
        <center>
            <p> <?php echo "Tanggal : " . date("Y-m-d") ?></p>
        </center>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <center>
                                        <h1 class="mb-0 ">MONITORING DATA PRAJA ANGKATAN 32 TAHUN <?= date('Y') ?></h1>
                                    </center>

                                    <br>
                                </div>

                                <div class="col-12">
                                    <center>
                                        <h1 class="mb-0 ">Jumlah Praja yang sudah registrasi : </h1>
                                        <h1 class="mb-0" style="color:red;"> <?php foreach ($total as $x) { ?>
                                                <?php echo ($x->total) . " /1.123" ?>
                                            <?php } ?>
                                    </center>

                                    <br>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="panel-body">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="panel panel-inverse">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <span>DATA ASAL PENDAFTARAN</span>

                                                        </h4>

                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <h5 class="text-center">Jumlah <b> keseluruhan</b> data Praja</h5>
                                                            <h5 class="text-center"> berdasarkan <b> ASAL PENDAFTARAN </b></h5>
                                                            <canvas id="myChartasdafreal" height="70"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="col-sm">
                                                    <div class="panel panel-inverse">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <span>DATA ASAL PENDAFTARAN</span>
                                                            </h4>

                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <h5 class="text-center">Jumlah Praja yang <b> sudah melalukan Registrasi </b></h5>
                                                                <h5 class="text-center"> berdasarkan <b> ASAL PENDAFTARAN </b></h5>
                                                                <canvas id="myChart" height="70"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>



                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="panel panel-inverse">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <span>DATA JENIS KELAMIN</span>
                                                            </h4>

                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <h5 class="text-center">Jumlah <b> keseluruhan</b> data Praja</h5>
                                                                <h5 class="text-center"> berdasarkan <b> JENIS KELAMIN </b></h5>
                                                                <canvas id="doughnutchartreal" height="70"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="panel panel-inverse">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <span>DATA JENIS KELAMIN</span>

                                                            </h4>

                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <h5 class="text-center">Jumlah Praja yang <b> sudah melalukan Registrasi </b></h5>
                                                                <h5 class="text-center"> berdasarkan <b> JENIS KELAMIN </b></h5>
                                                                <canvas id="doughnutchart" height="70"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>



                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="panel panel-inverse">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <span>DATA AGAMA</span>

                                                            </h4>

                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="table-responsive">

                                                                <h5 class="text-center">Jumlah <b> keseluruhan</b> data Praja</h5>
                                                                <h5 class="text-center"> berdasarkan <b> AGAMA </b></h5>
                                                                <canvas id="charteereal" height="70"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="panel panel-inverse">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <span>DATA AGAMA</span>

                                                            </h4>

                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <h5 class="text-center">Jumlah Praja yang <b> sudah melalukan Registrasi </b></h5>
                                                                <h5 class="text-center"> berdasarkan <b> AGAMA </b></h5>
                                                                <canvas id="chartee" height="70"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-8 center">
                                                    <div class="panel panel-inverse">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <span>DATA PRODI</span>

                                                            </h4>

                                                        </div>
                                                        <div class="panel-body">
                                                            <h5 class="text-center">Jumlah Praja yang <b> sudah melalukan Registrasi </b></h5>
                                                            <h5 class="text-center"> berdasarkan <b> PRODI YANG TERMINATI </b></h5>
                                                            <canvas id="haha" height="70"></canvas>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->

            <div class="container-fluid mt-5">
                <div class="row">

                    <div class="col-xl-12 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <center>
                                            <h1 class="mb-0">DATA PRAJA ANGKATAN 32 TAHUN <?= date('Y') ?> YANG BELUM MELENGKAPI DATA</h1>
                                        </center>

                                    </div>
                                    <br>
                                </div>
                            </div>

                            <div class="card-body">
                                <br>
                                <div class="panel-body">

                                    <table id="prajakosong" class="table table-striped table-bordered table-td-valign-middle" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No SPCP</th>
                                                <th>Nama</th>
                                                <th>Asdaf</th>
                                                <th>Jenis Kelamin</th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid mt-5">
                <div class="row">

                    <div class="col-xl-12 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <center>
                                            <h1 class="mb-0">DATA PRAJA ANGKATAN 32 TAHUN <?= date('Y') ?></h1>
                                        </center>

                                    </div>
                                    <br>
                                </div>
                            </div>

                            <div class="card-body">
                                <br>
                                <div class="panel-body">

                                    <table id="data-praja" class="table table-striped table-bordered table-td-valign-middle" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No SPCP</th>
                                                <th>NPP</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tingkat</th>
                                                <th>Angkatan</th>
                                                <th>Status</th>
                                                <th>Penempatan</th>
                                                <th>Prodi 1</th>
                                                <th>Prodi 2</th>
                                                <th>Prodi 3</th>
                                                <th>Prodi 4</th>
                                                <th>Prodi 5</th>
                                                <th>Prodi 6</th>
                                                <th>Prodi 7</th>
                                                <th>Prodi 8</th>
                                                <th>Prodi 9</th>
                                                <th>Prodi 10</th>
                                                <th>Asal Pendaftaran</th>

                                                <th>Fakultas</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>NISN</th>
                                                <th>NPWP</th>
                                                <th>Nomor Peserta</th>
                                                <th>NIK</th>
                                                <th>Agana</th>
                                                <th>Alamat</th>
                                                <th>RT</th>
                                                <th>RW</th>
                                                <th>Provinsi</th>
                                                <th>Kab/Kota</th>
                                                <th>Kelurahan</th>
                                                <th>Nama Dusun</th>
                                                <th>Kecamatan</th>
                                                <th>Kode Pos</th>
                                                <th>Jenis Tinggal</th>
                                                <th>Nomor Handphone</th>
                                                <th>Nomor Telepon Rumah</th>
                                                <th>Email</th>
                                                <th>Kewarganegaraan</th>
                                                <th>Jenis Pendaftaran</th>
                                                <th>Tgl Masuk Kuliah</th>
                                                <th>Tahun Masuk Kuliah</th>
                                                <th>Pembiayaan</th>
                                                <th>Alat Transportasi</th>
                                                <th>Biaya Masuk</th>
                                                <th>Jalur Masuk</th>
                                                <th>Penerima KPS</th>
                                                <th>NO KPS</th>
                                                <th>Mulai Semester</th>

                                                <th>NIK Ayah</th>
                                                <th>Nama Ayah </th>
                                                <th>Tgl Lahir Ayah</th>
                                                <th>Pendidikan Ayah</th>
                                                <th>Pekerjaan Ayah</th>
                                                <th>Penghasilan Ayah</th>
                                                <th>Nomor Handphone Ayah</th>

                                                <th>NIK Ibu</th>
                                                <th>Nama Ibu</th>
                                                <th>Tgl Lahir Ibu</th>
                                                <th>Pendidikan Ibu</th>
                                                <th>Pekerjaan Ibu</th>
                                                <th>Penghasilan Ibu</th>
                                                <th>Nomor Handphone Ibu</th>

                                                <th>NIK Wali</th>
                                                <th>Nama Wali</th>
                                                <th>Tgl Lahir Wali</th>
                                                <th>Pendidikan Wali</th>
                                                <th>Pekerjaan Wali</th>
                                                <th>Penghasilan Wali</th>
                                                <th>NOmor Handphone Wali</th>

                                                <th>Update Date</th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-12">
                    <div class="copyright text-center text-xl-center text-muted">
                        &copy; <?php echo date('Y'); ?> <a href="https://scdb.ipdn.ac.id" class="font-weight-bold ml-1" target="_blank">TIM IT IPDN</a>
                    </div>
                </div>
                <div class="col-xl-6">

                </div>
            </div>
        </footer>
        <!-- </div>
    </div> -->


        <!--   Core   -->
        <script src="<?php echo base_url('assets/argon/js/plugins/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/argon/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

        <!-- script tambahan  -->
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js">
        </script>

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
    $(document).ready(function() {

        if ($('#data-praja').length !== 0) {
            var url = 'dashboard/get_praja';

            $('#data-praja').dataTable({
                // dom: 'Bfrtip',
                dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
                buttons: [
                    'copy', 'excel', 'print'
                ],
                responsive: true,
                "ajax": {
                    "url": url,
                    "dataSrc": ""
                }
            });
        }


    });
</script>

<script>
    $(document).ready(function() {

        if ($('#prajakosong').length !== 0) {
            var url = 'dashboard/get_prajakosong';

            $('#prajakosong').dataTable({
                // dom: 'Bfrtip',
                dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
                buttons: [
                    'copy', 'excel', 'print'
                ],
                responsive: true,
                "ajax": {
                    "url": url,
                    "dataSrc": ""
                }
            });
        }


    });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


<script>
    //ASAL PENDAFTARAN 
    var ctx = document.getElementById("myChart").getContext("2d");
    var data = {
        labels: [
            <?php
            if (count($asdaf) > 0) {
                foreach ($asdaf as $data) {
                    echo "'" . $data->asdaf . "',";
                }
            }
            ?>

        ],
        datasets: [{
            label: "Jumlah Praja",
            data: [<?php
                    if (count($asdaf) > 0) {
                        foreach ($asdaf as $data) {
                            echo $data->jumlah . ", ";
                        }
                    }
                    ?>],
            backgroundColor: '#f9deff',
            borderColor: '#93C3D2',
        }]
    };

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(label, index, labels) {
                            // when the floored value is the same as the value we have a whole number
                            if (Math.floor(label) === label) {
                                return label;
                            }

                        },
                    }
                }],
            }
        }
    });

    //ASAL PENDAFTARAN REAL
    var ctx = document.getElementById("myChartasdafreal").getContext("2d");
    var data = {
        labels: [
            <?php
            if (count($asdafreal) > 0) {
                foreach ($asdafreal as $data) {
                    echo "'" . $data->asdaf . "',";
                }
            }
            ?>

        ],
        datasets: [{
            label: "Jumlah Praja",
            data: [<?php
                    if (count($asdafreal) > 0) {
                        foreach ($asdafreal as $data) {
                            echo $data->jumlah . ", ";
                        }
                    }
                    ?>],
            backgroundColor: '#f9deff',
            borderColor: '#93C3D2',
        }]
    };

    var myChartasdafreal = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(label, index, labels) {
                            // when the floored value is the same as the value we have a whole number
                            if (Math.floor(label) === label) {
                                return label;
                            }

                        },
                    }
                }],
            }
        }
    });
</script>




<script>
    //JK REAL
    var ctx = document.getElementById("doughnutchartreal").getContext("2d");
    var data = {
        labels: [
            <?php
            if (count($jkreal) > 0) {
                foreach ($jkreal as $data) {
                    echo "'" . $data->jk . "',";
                }
            }
            ?>

        ],
        datasets: [{
            label: "Jumlah Praja",
            data: [<?php
                    if (count($jkreal) > 0) {
                        foreach ($jkreal as $data) {
                            echo "'" . $data->jumlah . "',";
                        }
                    }
                    ?>],
            backgroundColor: [
                '#ceffff',
                '#ffc2da',

            ]
        }]
    };

    var mydoughnutchart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true
        }
    });

    //JK
    var ctx = document.getElementById("doughnutchart").getContext("2d");
    var data = {
        labels: [
            <?php
            if (count($jk) > 0) {
                foreach ($jk as $data) {
                    echo "'" . $data->jk . "',";
                }
            }
            ?>

        ],
        datasets: [{
            label: "Jumlah Praja",
            data: [<?php
                    if (count($jk) > 0) {
                        foreach ($jk as $data) {
                            echo "'" . $data->jumlah . "',";
                        }
                    }
                    ?>],
            backgroundColor: [
                '#ceffff',
                '#ffc2da',

            ]
        }]
    };

    var mydoughnutchart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true
        }
    });
</script>




<script>
    //AGAMA
    var ctx = document.getElementById("chartee").getContext("2d");
    var data = {
        labels: [
            <?php
            if (count($agama) > 0) {
                foreach ($agama as $data) {
                    echo "'" . $data->agama . "',";
                }
            }
            ?>

        ],
        datasets: [{
            label: "Jumlah Praja",
            data: [<?php
                    if (count($agama) > 0) {
                        foreach ($agama as $data) {
                            echo "'" . $data->jumlah . "',";
                        }
                    }
                    ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'

            ]
        }]
    };

    var chartee = new Chart(ctx, {
        type: 'horizontalBar',
        data: data,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(label, index, labels) {
                            // when the floored value is the same as the value we have a whole number
                            if (Math.floor(label) === label) {
                                return label;
                            }

                        },
                    }
                }],
            }
        }
    });


    //AGAMA REAL 
    var ctx = document.getElementById("charteereal").getContext("2d");
    var data = {
        labels: [
            <?php
            if (count($agamareal) > 0) {
                foreach ($agamareal as $data) {
                    echo "'" . $data->agama . "',";
                }
            }
            ?>

        ],
        datasets: [{
            label: "Jumlah Praja",
            data: [<?php
                    if (count($agamareal) > 0) {
                        foreach ($agamareal as $data) {
                            echo "'" . $data->jumlah . "',";
                        }
                    }
                    ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'

            ]
        }]
    };

    var charteereal = new Chart(ctx, {
        type: 'horizontalBar',
        data: data,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(label, index, labels) {
                            // when the floored value is the same as the value we have a whole number
                            if (Math.floor(label) === label) {
                                return label;
                            }

                        },
                    }
                }],
            }
        }
    });
</script>

<script>
    //PRODI
    var ctx = document.getElementById("haha").getContext("2d");
    var data = {
        labels: [
            <?php
            if (count($prod) > 0) {
                foreach ($prod as $data) {
                    echo "'" . $data->nama . "',";
                }
            }
            ?>

        ],
        datasets: [{
            label: "Jumlah Praja",
            data: [<?php
                    if (count($prod) > 0) {
                        foreach ($prod as $data) {
                            echo $data->jumlah . ", ";
                        }
                    }
                    ?>],
            backgroundColor: '#e4f1cb',
            borderColor: '#93C3D2',
        }]
    };

    var haha = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(label, index, labels) {
                            // when the floored value is the same as the value we have a whole number
                            if (Math.floor(label) === label) {
                                return label;
                            }

                        },
                    }
                }],
            }
        }
    });

    //PRODI REAL
    var ctx = document.getElementById("hahareal").getContext("2d");
    var data = {
        labels: [
            <?php
            if (count($prodreal) > 0) {
                foreach ($prodreal as $data) {
                    echo "'" . $data->nama . "',";
                }
            }
            ?>

        ],
        datasets: [{
            label: "Jumlah Praja",
            data: [<?php
                    if (count($prodreal) > 0) {
                        foreach ($prodreal as $data) {
                            echo $data->jumlah . ", ";
                        }
                    }
                    ?>],
            backgroundColor: '#e4f1cb',
            borderColor: '#93C3D2',
        }]
    };

    var hahareal = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(label, index, labels) {
                            // when the floored value is the same as the value we have a whole number
                            if (Math.floor(label) === label) {
                                return label;
                            }

                        },
                    }
                }],
            }
        }
    });
</script>