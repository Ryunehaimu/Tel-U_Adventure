        <div class="card" style="widht:1600px;height:400px;margin-top:50px">

            <div class="row">
                <div class="col-md-8">
                    <h3 style="padding:40px;">Master Data-Laporan Barang Ditemukan</h3>
                </div>
                <div class="col-md-4 d-flex justify-content-end" style="padding:40px">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#User">
                        + Tambah</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="row">
                <div class="modal fade" id="User" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Hilang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="namaBarang" class="form-label">Nama Barang</label>
                                    <input class="form-control" id="namaBarang">
                                </div>
                                <div class="mb-3">
                                    <label for="jenisBarang" class="form-label">Jenis Barang</label>
                                    <input class="form-control" id="jenisBarang">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggalDitemukan" class="form-label">Tanggal Ditemukan</label>
                                    <input type="date" class="form-control" id="tanggalDitemukan" >
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                                    <input class="form-control" id="deskripsiBarang">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input class="form-control" id="status">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="saveLaporanBarangHilang" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal hapus-->
                    
            <div class="row">
                <div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-12">
                                    <p>Apakah kamu yakin?</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" style="background-color:red;">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding:40px">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Tanggal Ditemukanm</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ktm</td>
                    <td>kartu</td>
                    <td>2003-11-07</td>
                    <td>ktm telyu</td>
                    <td>Sudah ditemukan</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#User"><img src="<?=base_url("application/assets/img/edit putih.png")?>"></button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Delete"><img src="<?=base_url("application/assets/img/hapus putih.png")?>"></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    <!-- Tambahkan JavaScript untuk menangani saat tombol "Save changes" pada modal "Tambah User" ditekan -->
    <script>
      document.getElementById('saveLaporanBarangHilang').addEventListener('click', function() {
          var namaBarang = document.getElementById('namaBarang').value;
          var jenisBarang = document.getElementById('jenisBarang').value;
          var tanggalDitemukan = document.getElementById('tanggalDitemukan').value;
          var deskripsiBarang = document.getElementById('deskripsiBarang').value;
          var status = document.getElementById('status').value;
          // Membuat baris baru di tabel
          var table = document.querySelector('.table tbody');
          var newRow = table.insertRow(table.rows.length);

          var cell1 = newRow.insertCell(0);
          var cell2 = newRow.insertCell(1);
          var cell3 = newRow.insertCell(2);
          var cell4 = newRow.insertCell(3);
          var cell5 = newRow.insertCell(4);
          var cell6 = newRow.insertCell(5);
          var cell7 = newRow.insertCell(6);

          cell1.innerHTML = table.rows.length;
          cell2.innerHTML = namaBarang;
          cell3.innerHTML = jenisBarang;
          cell4.innerHTML = tanggalDitemukan;
          cell5.innerHTML = deskripsiBarang;
          cell6.innerHTML = status;
          cell7.innerHTML = '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#User"><img src="<?=base_url("application/assets/img/edit putih.png")?>"></button> ' + '<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Delete"><img src="<?=base_url("application/assets/img/hapus putih.png")?>"></button>';

          // Reset nilai input setelah disimpan
          document.getElementById('namaBarang').value = '';
          document.getElementById('jenisBarang').value = '';
          document.getElementById('tanggalLaporan').value = '';
          document.getElementById('deskripsiBarang').value = '';
          document.getElementById('status').value = '';
          // Tutup modal
      });
    </script>

