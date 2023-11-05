<body>

  <div class="container">
    <h3>Barang Hilang</h3>
    <div class="row">
      <div class="col-md-4">
        <form>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="inputData" placeholder="Cari Barang Hilang">
            <div class="input-group-append">
              <button type="button" class="btn btn-primary">
                <img src="gambar/cari putih.png">
                Cari
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8 d-flex justify-content-end">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#barangHilang">
          <img src="gambar/tambah member putih.png">Tambah</button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="barangHilang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Hilang</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="formFile" class="form-label">Nama Barang</label>
                <input class="form-control">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Jenis Barang</label>
                <input class="form-control">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Tanggal Laporan</label>
                <input class="form-control">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Deskripsi Barang</label>
                <input class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Tanggal Laporan</th>
            <th scope="col">Deskripsi Barang</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>kdm</td>
            <td>rt</td>
            <td>12 Juli 2003</td>
            <td>kdm warna merah</td>
            <td>Sudah ditemukan</td>
            <td>
              <button type="button" class="btn btn-primary"><img src="gambar/edit putih.png"></button>
              <button type="button" class="btn btn-danger"><img src="gambar/hapus putih.png"></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Memuat library JavaScript Bootstrap (diletakkan sebelum penutup tag body) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>