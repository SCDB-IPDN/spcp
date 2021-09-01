<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <!--  
    Document Title
    =============================================
    -->
  <title>PRAJA IPDN <?php echo date('Y'); ?></title>
  <!--  
    Favicons
    =============================================
    -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/home/images/favicons/apple-icon-57x57.png'); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/home/images/favicons/apple-icon-60x60.png'); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/home/images/favicons/apple-icon-72x72.png'); ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/home/images/favicons/apple-icon-76x76.png'); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/home/images/favicons/apple-icon-114x114.png'); ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/home/images/favicons/apple-icon-120x120.png'); ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/home/images/favicons/apple-icon-144x144.png'); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/home/images/favicons/apple-icon-152x152.png'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/home/images/favicons/apple-icon-180x180.png'); ?>">
  <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png">
  <!-- <link rel="manifest" href="<?php echo base_url('assets/home/images/favicons/manifest.json'); ?>"> -->
  <meta name="msapplication-TileColor" content="#ffffff">
  <!-- <meta name="msapplication-TileImage" content="<?php echo base_url('assets/home/images/favicons/ms-icon-144x144.png'); ?>"> -->
  <meta name="theme-color" content="#ffffff">
  <!--  
    Stylesheets
    =============================================
    -->
  <!-- Default stylesheets-->
  <link href="<?php echo base_url('assets/home/lib/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Template specific stylesheets-->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/animate.css/animate.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/components-font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/et-line-font/et-line-font.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/flexslider/flexslider.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/owl.carousel/dist/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/owl.carousel/dist/assets/owl.theme.default.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/magnific-popup/dist/magnific-popup.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/simple-text-rotator/simpletextrotator.css'); ?>" rel="stylesheet">
  <!-- Main stylesheet and color file-->
  <link href="<?php echo base_url('assets/home/css/style.css'); ?>" rel="stylesheet">
  <link id="color-scheme" href="<?php echo base_url('assets/home/css/colors/default.css'); ?>" rel="stylesheet">
  <link id="color-scheme" href="<?php echo base_url('assets/home/css/apa.css'); ?>" rel="stylesheet">

  <!-- icon  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>

    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>

    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="https://spcp.ipdn.ac.id" target="_blank">PRAJA <?php echo date('Y'); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
          <!-- <ul class="nav navbar-nav navbar-right">
            <?php if (date('m') >= '05') { ?>
              <li><a href="login" class="btn btn-sm btn-warning btn-round">Login</a></li>
            <?php } ?>
          </ul> -->
        </div>
      </div>
    </nav>

    <section class="home-section home-full-height bg-dark-30" id="home" data-background="https://mmc.tirto.id/image/2019/03/13/gedung-ipdn_ratio-16x9.jpg">
      <div class="video-player" data-property="{videoURL:'<?= $link_video->link ?>', containment:'.home-section', startAt:<?= $link_video->start ?>, <?= $link_video->stop != NULL ? "stopAt:$link_video->stop," : "" ?> mute:<?= $link_video->mute ?>, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
      <div class="video-controls-box">
        <div class="container">
          <div class="video-controls"><a class="fa fa-volume-up" style="font-size: 21px;" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" style="font-size: 21px;" id="video-play" href="#">&nbsp;</a></div>
        </div>
      </div>
      <div class="titan-caption">
        <div class="caption-content">
          <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png" width="15%"></img>
          <?php if (date('m') >= '08') { ?>
            <div class="font-alt mb-40 titan-title-size-4">PRAJA</div><a class="section-scroll btn btn-primary  btn-round" href="login">Login</a>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- content -->
    <div class="main">
      <section class="module" id="alt-features">
        <div class="container mt-5 wow bounceInRight">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Tentang CPRA IPDN</h2>
              <div class="module-subtitle font-serif">Selamat Datang Calon Praja IPDN.</div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="alt-features-item">
                <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                <h3 class="alt-features-title font-alt">Dasar Seleksi</h3>
                <p class="text-justify">Berdasarkan Surat Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor B/435/M.SM.01.00/2020 tanggal 6 Mei 2020 Hal Rencana Pembukaan Pendaftaran dan Seleksi Sekolah Kedinasan Tahun 2020, Kementerian Dalam Negeri Republik Indonesia memberikan kesempatan bagi Putra/Putri Warga Negara Republik Indonesia untuk mengikuti Seleksi Penerimaan Calon Praja (SPCP) Institut Pemerintahan Dalam Negeri (IPDN) Tahun <?php echo date('Y'); ?></p>.
              </div>
              <div class="alt-features-item">
                <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                <h3 class="alt-features-title font-alt">Maksud dan Tujuan</h3>
                <p class="text-justify">Maksud dan tujuan pelaksanaan seleksi penerimaan calon Praja IPDN adalah untuk menjaring calon Praja IPDN yang berkualitas dalam hal memiliki dasar pengetahuan dan keterampilan yang memadai, kesehatan diri yang prima, kemampuan psikologis diri yang mampu berkembang secara potensial, integritas dan kejujuran diri yang terpercaya, kemampuan berkomunikasi yang efektif, dan kesiapan untuk bekerja di seluruh wilayah Negara Kesatuan Republik Indonesia.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
              <div class="alt-services-image align-center">
                <img src="<?php echo base_url('assets/home/images/spcp.jpeg'); ?>" alt="Feature Image">
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="alt-features-item">
                <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                <h3 class="alt-features-title font-alt">Prinsip Pelaksanaan</h3>
                <p class="text-justify">Untuk menjaring Calon Praja IPDN yang berkualitas, sistem seleksi penerimaan Calon Praja IPDN dilakukan secara jujur dalam keseluruhan tahapan seleksi, transparan terkait keseluruhan tahap dan informasi hasil tes kepada seluruh peserta tes dan masyarakat melalui media online, adil tanpa membedakan agama dan asal usul, akuntabel dalam arti keseluruhan hasil tes dapat dipertanggungjawabkan.</p>
              </div>
              <div class="alt-features-item">
                <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                <h3 class="alt-features-title font-alt">Mekanisme Seleksi</h3>
                <p class="text-justify">Maksud dan tujuan pelaksanaan seleksi penerimaan calon Praja IPDN adalah untuk menjaring calon Praja IPDN yang berkualitas dalam hal memiliki dasar pengetahuan dan keterampilan yang memadai, kesehatan diri yang prima, kemampuan psikologis diri yang mampu berkembang secara potensial, integritas dan kejujuran diri yang terpercaya, kemampuan berkomunikasi yang efektif, dan kesiapan untuk bekerja di seluruh wilayah Negara Kesatuan Republik Indonesia.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="card" class="clearfix">
        <section class="module bg-dark-30 parallax-bg" data-background="https://spcp.ipdn.ac.id/2020/assets/upload/media/img4.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Tahapan</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Seleksi Penerimaan Calon Praja IPDN TAHUN <?= date('Y'); ?></h2>
                <br>
                <p class="text-justify wow fadeInLeft">Setelah Proses Pendaftaran dan Verifikasi yang dilakukan di Portal SSCASN DIKDIN, untuk menjadi Calon Praja IPDN, para calon peserta diwajibkan untuk mengikuti semua tahapan tes yang akan diujikan. Jika para pendaftar/peserta di tiap tes nya sampai dengan tes akhir memenuhi persyaratan yang telah ditetapkan maka dapat dinyatakan lulus sebagai calon praja IPDN. Begitu pula sebaliknya jika salah satu item Tahapan Tes Yang diujikan ada yang GAGAL/GUGUR atau Tidak Memenuhi Syarat maka dinyatakan GAGAL karena sistem tahapan tes yang dilakukan IPDN dalam Seleksi Penerimaan Calon Praja (SPCP) baru menggunakan sistem GUGUR.</p>
              </div>
            </div>
          </div>
        </section>
        <br>
        <div class="container">
          <div class="col-lg-3">
            <div class="card">
              <div class="face face1">
                <div class="content">
                  <img src="https://images.vexels.com/media/users/3/157295/isolated/preview/5ab1a21aaafa93397c0d6eedcb24731e-computer-laptop-icon-by-vexels.png" style="margin-left:auto;margin-right:auto;display:block;width:150px;">
                  <h3>Seleksi Kompetensi Dasar</h3>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <h4><b>SKD</b></h4>
                  <p>Seleksi Kompetensi Dasar (SKD) akan dilakukan dengan menggunakan sistem CAT (Computer Assesment Test) oleh BKN</p>
                  <a href="https://dikdin.bkn.go.id/" target="_blank">Selengkapnya</a>
                  <a href="https://cat.bkn.go.id/" target="_blank">Simulasi SKD</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="face face1">
                <div class="content">
                  <img src="https://miro.medium.com/max/2800/0*mZRkjSe7rlNRgKsd.png" style="margin-left:auto;margin-right:auto;display:block;width:150px;">
                  <h3>Tes Kesehatan Tahap I</h3>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <h4><b>Tes Kesehatan Tahap I</b></h4>
                  <p>Pelaksanaan Tes Kesehatan Tahap I di Rumah Sakit Bhayangkara/Biddokkes POLDA</p>
                  <a href="https://spcp.ipdn.ac.id" target="_blank">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="face face1">
                <div class="content">
                  <img src="https://res.cloudinary.com/dmnh1fqbj/image/upload/c_fill,f_auto,h_310,q_auto,w_670/v1/berita/otak-pria-ternyata-lebih-besar-dari-wanita.png" style="margin-left:auto;margin-right:auto;display:block;width:150px;">
                  <h3>Tes Psikologi Integritas dan Kejujuran</h3>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <h4><b>Tes Psikologi Integritas dan Kejujuran</b></h4>
                  <p>Pelaksanaan Tes Psikologi, Integritas dan Kejujuran oleh Biro SDM Polda</p>
                  <a href="https://spcp.ipdn.ac.id" target="_blank">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="face face1">
                <div class="content">
                  <img src="https://www.nicepng.com/png/full/131-1318812_avatar-group-icon.png" style="margin-left:auto;margin-right:auto;display:block;width:150px;">
                  <h3>Pantukhir</h3>
                </div>
              </div>
              <div class="face face2">
                <div class="content">
                  <p class="font-spcp"> 1. Verifikasi Faktual Dokumen Persyaratan Administrasi Pendaftaran</p>
                  <p class="font-spcp"> 2. Tes Kesehatan Tahap II</p>
                  <p class="font-spcp"> 3. Tes Kesamaptaan dan Pemeriksaan Penampilan</p>
                  <a href="https://spcp.ipdn.ac.id" target="_blank">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <br><br>

      <section id="schedule" class="clearfix">
        <section class="module bg-dark-30 parallax-bg" data-background="https://asset.kompas.com/crops/qltvnMMqHqC2X4IkBIvvj5mqOV0=/1x184:1024x695/750x500/data/photo/2019/04/09/3728637684.jpeg">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Jadwal</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Seleksi Penerimaan Calon Praja IPDN Tahun <?= date('Y'); ?></h2>
              </div>
            </div>
          </div>
        </section>

        <div class="container">
          <section class="module">
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-responsive mt-5 wow bounceInLeft">
                    <tbody>
                      <tr>
                        <th width="5%"> NO </th>
                        <th>URAIAN KEGIATAN</th>
                        <th width="15%">TANGGAL</th>
                        <th>KETERANGAN</th>
                      </tr>
                      <tr>
                        <td class="text-center"> 1. </td>
                        <td>Pelamar mendaftar secara online/daring Calon Peserta mengakses ke portal SSCASN BKN. </td>
                        <td rowspan="5" class="align-middle">9-30 April <?= date('Y') ?></td>
                        <td rowspan="5" class="align-middle">Laman <a href="https://dikdin.bkn.go.id/" target="_blank">https://dikdin.bkn.go.id/ </a></td>
                      </tr>
                      <tr>
                        <td class="text-center">2.</td>
                        <td>Pelamar membuat akun SSCASN Sekolah Kedinasan Tahun <?= date('Y') ?>.</td>
                      </tr>
                      <tr>
                        <td class="text-center">3.</td>
                        <td>Pelamar log in ke SSCASN Sekolah Kedinasan dengan menggunakan NIK dan Password yang telah didaftarkan.</td>
                      </tr>
                      <tr>
                        <td class="text-center">4.</td>
                        <td>Pelamar memilih Sekolah Kedinasan dan mengisi biodata serta mengunggah dokumen persyaratan administrasi SPCP IPDN.</td>
                      </tr>
                      <tr>
                        <td class="text-center">5.</td>
                        <td>Pelamar menyelesaikan pendaftaran dengan mengecek resume dan mencetak bukti pendaftaran.</td>
                      </tr>
                      <tr>
                        <td class="text-center">6.</td>
                        <td>Verifikasi dokumen persyaratan administrasi pendaftaran yang telah diunggah.</td>
                        <td>10 April - 3 Mei <?= date('Y') ?></td>
                        <td>Laman <a href="https://dikdin.bkn.go.id/" target="_blank">https://dikdin.bkn.go.id/ </a></td>
                      </tr>
                      <tr>
                        <td class="text-center">7.</td>
                        <td>Pengumuman verifikasi dokumen persyaratan administrasi pendaftaran.</td>
                        <td>4 Mei <?= date('Y') ?></td>
                        <td>Laman <a href="https://dikdin.bkn.go.id/" target="_blank">https://dikdin.bkn.go.id/ </a> dan Laman <a href="https://spcp.ipdn.ac.id/<?= date('Y') ?>" target="_blank">https://spcp.ipdn.ac.id/<?= date('Y') ?></a></td>
                      </tr>
                      <tr>
                        <td class="text-center">8.</td>
                        <td>Pelamar yang memenuhi syarat verifikasi dokumen persyaratan administrasi pendaftaran melakukan pembayaran PNBP Seleksi Kompetensi Dasar (SKD) sesuai kode billing.</td>
                        <td>15 - 23 Mei <?= date('Y') ?></td>
                        <td>Bank yang ditunjuk oleh BKN</td>
                      </tr>
                      <tr>
                        <td class="text-center">9.</td>
                        <td>Pelamar yang telah melakukan pembayaran PNBP SKD mencetak kartu ujian melalui akun masing-masing pada website SSCASN BKN.</td>
                        <td>25 Mei <?= date('Y') ?></td>
                        <td>Laman <a href="https://dikdin.bkn.go.id/" target="_blank">https://dikdin.bkn.go.id/ </a></td>
                      </tr>
                      <tr>
                        <td class="text-center">10.</td>
                        <td>Pengumuman Peserta SKD.</td>
                        <td>27 Mei <?= date('Y') ?></td>
                        <td>Laman <a href="https://dikdin.bkn.go.id/" target="_blank">https://dikdin.bkn.go.id/ </a> dan Laman <a href="https://spcp.ipdn.ac.id/<?= date('Y') ?>" target="_blank">https://spcp.ipdn.ac.id/<?= date('Y') ?></a></td>
                      </tr>
                      <tr>
                        <td class="text-center">11.</td>
                        <td>Pelaksanaan SKD.</td>
                        <td>3 - 28 Juni <?= date('Y') ?></td>
                        <td>Lokasi yang ditunjuk Panitia SPCP IPDN</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.</td>
                        <td>Pengumuman Hasil SKD.</td>
                        <td> 9 Juli <?= date('Y') ?></td>
                        <td>Laman <a href="https://dikdin.bkn.go.id" target="_blank">https://dikdin.bkn.go.id</a><br>dan Laman <a href="https://spcp.ipdn.ac.id/<?= date('Y') ?>" target="_blank">https://spcp.ipdn.ac.id/<?= date('Y') ?></a></td>
                      </tr>
                      <tr>
                        <td class="text-center">13.</td>
                        <td>Pelaksanaan Tes Kesehatan Tahap I.</td>
                        <td> 22 - 23 Juli <?= date('Y') ?></td>
                        <td>Rumah Sakit Bhayangkara/Biddokkes POLDA</td>
                      </tr>
                      <tr>
                        <td class="text-center">14.</td>
                        <td>Pengumuman Hasil Tes Kesehatan Tahap I.</td>
                        <td> 28 Juli <?= date('Y') ?></td>
                        <td>Laman <a href="https://spcp.ipdn.ac.id/<?= date('Y') ?>" target="_blank">https://spcp.ipdn.ac.id/<?= date('Y') ?></a></td>
                      </tr>
                      <tr>
                        <td class="text-center">15.</td>
                        <td>Pelaksanaan Tes Psikologi, Integritas dan Kejujuran</td>
                        <td>12 Agustus <?= date('Y') ?></td>
                        <td>Psikologi POLDA</td>
                      </tr>
                      <tr>
                        <td class="text-center">16.</td>
                        <td>Pengumuman Hasil Tes Psikologi, Integritas dan Kejujuran</td>
                        <td>17 Agustus <?= date('Y') ?></td>
                        <td>Laman <a href="https://spcp.ipdn.ac.id/<?= date('Y') ?>" target="_blank">https://spcp.ipdn.ac.id/<?= date('Y') ?></a></td>
                      </tr>
                      <tr>
                        <td class="text-center">17.</td>
                        <td>
                          Pantukhir<br>
                          <ul>
                            <li>Verifikasi Faktual Dokumen Persyaratan Administrasi Pendaftaran</li>
                            <li>Tes Kesehatan Tahap II</li>
                            <li>Tes Kesamaptaan dan Pemeriksaan Penampilan</li>
                          </ul>
                        </td>
                        <td>23 - 27 Agustus <?= date('Y') ?></td>
                        <td>
                          <ul>

                            <li>Rumah Sakit Bhayangkara/Biddokkes/POLDA</li>

                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">18.</td>
                        <td>Pengumuman Hasil Pantukhir</td>
                        <td>1 September <?= date('Y') ?></td>
                        <td>Laman <a href="https://spcp.ipdn.ac.id/<?= date('Y') ?>" target="_blank">https://spcp.ipdn.ac.id/<?= date('Y') ?></a></td>
                      </tr>
                      <tr>
                        <td class="text-center">19.</td>
                        <td>Registrasi Calon Praja bertempat di kampus IPDN Jatinangor</td>
                        <td>7 - 12 September <?= date('Y') ?></td>
                        <td rowspan="6" class="align-middle">Kampus IPDN Jatinangor</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>

      <div class="module-small bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="widget">
                <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png" width="30%"></img>
                  <p style="font-size: 14px;">INSTITUT PEMERINTAHAN DALAM NEGERI</p>
                </center>
              </div>
            </div>
            <div class="col-sm-3">
              <h5 class="widget-title font-alt" style="color : white;">TENTANG IPDN</h5>
              <a href="https://ipdn.ac.id" target="_blank">Institut Pemerintahan Dalam Negeri</a>
              <p><a href="https://scdb.ipdn.ac.id" target="_blank">Smart Campus Database IPDN</a></p>

              <h5 class="widget-title font-alt" style="color : white;">KUNJUNGAN</h5>
              <p><i class="fa fa-users" style="color: yellow;"></i> <?= $statistik->hits ?> PENGUNJUNG</p>
            </div>
            <div class="col-sm-3">
              <h5 class="widget-title font-alt" style="color : white;">CONTACT</h5>
              <p class="text-justify">Jalan Ir. Soekarno KM 20
                Desa Cibeusi, Jatinangor
                Kabupaten Sumedang, Jawa Barat 45363</p>
              <p><i class="fa fa-envelope" style="font-size: 16px;"></i> <a href="#"> scdb.ipdn@gmail.com</a></p>
              <p><i class="fa fa-phone" style="font-size: 16px;"></i> 0-804-1-700-700</p>
              <p><i class="fa fa-clock-o" style="font-size: 16px;"></i> 09.00 s/d 15.00 WIB (Setiap Hari)</p>
            </div>
          </div>
        </div>
      </div>
      <hr class="divider-d">
      <footer class="footer bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="copyright font-alt">&copy; <?php echo date('Y'); ?>&nbsp;<a href="https://scdb.ipdn.ac.id"><b>TIM IT IPDN</b></a></p>
            </div>
            <div class="col-sm-6">
              <p>Aplikasi optimal dijalankan dengan Browser <a href="https://www.mozilla.org/id/firefox/new/" target="_blank"><span style="color : black;"><b>Mozilla Firefox</b> </span></a><i class="fa fa-firefox"></i></p>
            </div>
          </div>
        </div>
      </footer>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
  </main>
  <!--  
    JavaScripts
    =============================================
    -->
  <script src="<?php echo base_url('assets/home/lib/jquery/dist/jquery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/wow/dist/wow.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/isotope/dist/isotope.pkgd.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/imagesloaded/imagesloaded.pkgd.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/flexslider/jquery.flexslider.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/owl.carousel/dist/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/smoothscroll.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/magnific-popup/dist/jquery.magnific-popup.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/simple-text-rotator/jquery.simple-text-rotator.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/js/plugins.js'); ?>"></script>
  <script src="<?php echo base_url('assets/home/js/main.js'); ?>"></script>
</body>

</html>