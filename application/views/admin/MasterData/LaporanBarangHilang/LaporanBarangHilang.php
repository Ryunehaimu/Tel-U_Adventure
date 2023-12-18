<div class="card" style="widht:1600px;height:400px;margin-top:50px">

            <div class="row">
                <div class="col-md-8">
                    <h3 style="padding:40px;">Master Data-Laporan Barang Hilang</h3>
                </div>
                <div class="col-md-4 d-flex justify-content-end" style="padding:40px">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#User">
                        + Tambah</button>
                </div>
            </div>
            <div class="row">
                <div class="modal fade" id="User" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Gedung</h1>
                            </div>
                            <div class="modal-body">
                                <form class="was-validated" method="post" action="<?= base_url("con_hilang/create") ?>" novalidate>
                                    <div class="mb-3">
                                        <label for="namaBarang" class="form-label">Nama Barang</label>
                                        <input class="form-control" id="namaBarang" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid name.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenisBarang" class="form-label">Jenis Barang</label>
                                        <input class="form-control" id="jenisBarang" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid deskripsi.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal Hilang</label>
                                        <input type="date" class="form-control" id="tanggal" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid deskripsi.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <input class="form-control" id="deskripsi" name="deskripsi" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid deskripsi.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <input class="form-control" id="status" name="status" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid poin.
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
            <!--Modal Edit-->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="was-validated" method="post" action="<?= base_url("con_hilang/create") ?>" novalidate>
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control" id="editid" name="editid">
                                        <label for="namaBarang" class="form-label">Nama Barang</label>
                                        <input class="form-control" id="editnama" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid name.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenisBarang" class="form-label">Jenis Barang</label>
                                        <input class="form-control" id="editjenis" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid deskripsi.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal Hilang</label>
                                        <input type="date" class="form-control" id="edittanggal" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid deskripsi.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <input class="form-control" id="editdeskripsi" name="editdeskripsi" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid deskripsi.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <input class="form-control" id="editstatus" name="editstatus" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid poin.
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="padding:40px;">
                <table id="example" class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Tanggal Hilang</th>
                        <th scope="col">Deskripsi Barang</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <?php
                        $count = 0;
                        foreach ($datahl as $row) {
                            $count++;
                    ?>
                        <tr>
                            <td><?= $count ?></td>
                            <td><?= $row->Nama ?></td>
                            <td><?= $row->Jenis ?></td>
                            <td><?= $row->Tanggal ?></td>
                            <td><?= $row->Deskripsi ?></td>
                            <td><?= $row->Status ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" onclick="openEditModal('<?= $row->id ?>', '<?= $row->Nama ?>', '<?= $row->Jenis ?>', '<?= $row->Tanggal ?>', '<?= $row->Deskripsi ?>', '<?= $row->Status ?>')" id="editBtn_<?= $row->id ?>">
                                    <img src="<?= base_url("application/assets/img/edit putih.png") ?>">
                                </button>
                                <a href="<?= base_url("con_gedung/delete/".$row->id)?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
                                    <img src="<?= base_url("application/assets/img/hapus putih.png") ?>">
                                </a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>  
              </table>
            </div>
          </div>
        </div>
    </div>
    <!-- Tambahkan JavaScript untuk menangani saat tombol "Save changes" pada modal "Tambah User" ditekan -->
    <script>
        function openEditModal(id, nama, jenis, tanggal, deskripsi, status) {
            var modal = document.getElementById('editModal');

            // Populate modal fields with data
            document.getElementById('editid').value = id;
            document.getElementById('editnama').value = nama;
            document.getElementById('editjenis').value = jenis;
            document.getElementById('edittanggal').value = tanggal;
            document.getElementById('editdeskripsi').value = deskripsi;
            document.getElementById('editstatus').value = status;

            // Show the modal
            $(modal).modal('show');
        }
    </script>