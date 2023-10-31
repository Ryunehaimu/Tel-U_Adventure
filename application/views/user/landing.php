<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#" style="padding: 20px;">
        <img src="./application/assets/img/Logo_Telkom_University_potrait2 3.png" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
        <img style="padding-left:10px;" src="./application/assets/img/Adventure.png" width="130" height="20">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto" style="margin-left: 560px;padding:5px">
          <a class="nav-link active" aria-current="page" href="#home">HOME</a>
          <a class="nav-link" href="#">FEATURES</a>
          <a class="nav-link" href="#">FEEDBACK</a>
          <a class="nav-link" href="#about_us">ABOUT US</a>
          <button type="button" id="pindahHalaman" class="btn btn-primary" style="background-color: #A11E22; margin-left: 20px; border-radius:2;width: 120px;height: 40px;font: weight 500px;">LOGIN</button>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- konten  -->
  <div class="container">
    <div class="label" id="home">
      <p class="explore-the-world" style="margin-left:-300px">
        <span class="text-wrapper">Explore the World <br />with</span>
        <span class="span"> TEL-U Adventure,<br /></span>
        <span class="text-wrapper">Discover the </span>
        <span class="span">Way<br> Forward</span>
        <br>
        <span class="text-wrapper-1" style="margin-left:-300px;top:-20px">
          Sebuah aplikasi yang memudahkan pengguna untuk menjelajahi
        </span>
        <span class="text-wrapper-1" style="margin-left:-520px;top:5px"> kampus dan menavigasi ke berbagai lokasi di Telkom</span>
        <span class="text-wrapper-1" style="margin-left:-440px;top:30px">University dengan mudah.</span>
      </p>
    </div>
    <div class="gambar">
      <img class="T" src="./application/assets/img/T.png" style="top:-220px;left:600px" />
      <img class="E" src="./application/assets/img/E.png" style="top:-485px;left:820px" />
      <img class="L" src="./application/assets/img/L.png" style="top:-750px;left:1030px" />
      <img class="U" src="./application/assets/img/U.png" style="top:-1015px;left:1120px" />
      <img class="adventure" src="./application/assets/img/Adventure.png" style="top:-850px;left:820px" />
    </div>
    <button class="login-lets" type="button" style="top: -177px;left:40px">Lets Go</button>
    <div class="ellipse" style="margin-top: -700px;left:1px">
      <img class="ph-arrow-up-light" src="./application/assets/img/ph_arrow-up-light.png" width="32px" height="26px" />
    </div>
    <!-- card -->
    <!-- akhir card -->
    <div class="card" style="width: 1000px;height:200px;border-radius:33px;top:550px;z-index:1;left:150px">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    <img class="jumbotron" src="./application/assets/img/jumbotron_1.jpg" style="top: 450px;left:-5px;z-index:0" />
    <!-- feature -->
    <!--card feedback-->
  </div>

  <!-- akhir content -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script>
    // Ambil tombol dengan ID "pindahHalaman"
    var tombolPindahHalaman = document.getElementById("pindahHalaman");

    // Tambahkan event click pada tombol
    tombolPindahHalaman.addEventListener("click", function() {
      // Pindah ke halaman yang diinginkan menggunakan window.location.href
      window.location.href = "<?php echo base_url('/controllers/auth'); ?>";
    });
  </script>
</body>

</html>