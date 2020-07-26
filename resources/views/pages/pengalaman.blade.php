@extends('template.layout')
@section('title', 'pengalaman')
@section('header', 'Pengalamanku')
@section('content')
    <div class="container">
        <section class="page-section bg-info text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">PengalamanKu</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <!-- About Section Content-->

                <div class="row">
                    <div class="col-lg-3 ml-auto"><p class="lead"><b>Seminar DSC</b><br>
                      <img src="img/dsc.jpg" width="200px">
                      <p>Development Student Clubs(DSC) disini saya <br>
                         mendapat ilmu baru dan banyak pengetahuan <br>
                         baru tentang dunia IT juga programmer.</p>
                </div>

                <div class="col-lg-3 ml-auto"><p class="lead"><b>Kunjungan Industri</b><br>
                  <img src="img/cinovasi.jpg" width="200px">
                  <p>Di kelas 10 ada kegiatan kunjungan industri<br>
                     ke PT. Cinovasi Rekprima, dari kegiatan tersebut<br>
                     pikiran saya tentang dunia pekerjaan di dunia IT jadi meluas<br>
                  </p>
                </div>

                <div class="col-lg-3 ml-auto"><p class="lead"><b>Dicoding</b><br>
                  <img src="img/sertifikat.jpg" width="200px">
                  <p>Dicoding mengadakan ID Camp dan saya mengikuti
                    kelas web dasar dan submissionnya saya membuat
                    web profile menggunakan HTML dan CSS<br>
                  </p>
                </div>

                <div class="col-lg-3 ml-auto"><p class="lead"><b>Starbhak Day</b><br>
                  <img src="img/sbd.jpg" width="132px">
                  <p>Starbhak Day adalah kegiatan ajang pameran karya siswa, di SMK Taruna Bhakti  <br>
                     rutin menggelar acara seperti itu untuk mengexplore para murid <br>
                     agar lebih memahami kondisi saat turun kelapangan seperti apa<br>
                  </p>
                </div>
        </section>
    </div>
@endsection
