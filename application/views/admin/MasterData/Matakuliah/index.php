        <div class="card" style="widht:1600px;height:600px;margin-top:50px">

        <div class="row">
            <div class="col-md-6">
                <h3 style="padding:40px;">Master Data - Matakuliah</h3>
            </div>
            <div class="col-md-6 d-flex justify-content-end" style="padding:40px">
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                            </div>
                            <div class="modal-body">
                                <form class="was-validated" method="post" action="<?= base_url("con_matkul/create") ?>" novalidate>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Matkul</label>
                                        <input class="form-control" id="nama" name="nama" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid name matkul.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kode" class="form-label">Kode Matkul</label>
                                        <input class="form-control" id="kode" name="kode" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid kode matkul.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dosen" class="form-label">Dosen Pengampu</label>
                                        <input class="form-control" id="dosen" name="dosen" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid dosen pengampu.
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
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url("con_matkul/update") ?>">
                                <div class="form-group">
                                    <label for="editName">Nama Matkul</label>
                                    <input type="text" class="form-control" id="editName" name="editName" required>
                                </div>
                                <div class="form-group">
                                    <label for="editNim">Kode Matkul</label>
                                    <input type="text" class="form-control" id="editKode" name="editKode" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="editAngkatan">Dosen Pengampu</label>
                                    <input type="text" class="form-control" id="editDosen" name="editDosen" required>
                                </div>
                                <button type="submit" class="btn btn-primary" >Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding:40px;">
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Makul</th>
                            <th>Kode Matkul</th>
                            <th>Dosen Pengampu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        $count=0;
                        foreach ($datamk as $row) {
                            $count++;
                    ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td><?= $row->Nama ?></td>
                        <td><?= $row->Kode ?></td>
                        <td><?= $row->DosenPengampu ?></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" onclick="openEditModal('<?= $row->id ?>', '<?= $row->Nama ?>', '<?= $row->Kode ?>', '<?= $row->DosenPengampu ?>')" id="editBtn_<?= $row->id ?>">
                                <img src="<?= base_url("application/assets/img/edit putih.png") ?>">
                            </button>
                            <a href="<?= base_url("con_matkul/delete/".$row->id)?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
                                <img src="<?= base_url("application/assets/img/hapus putih.png") ?>">
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        function openEditModal(id,nama, kode, dosenpengampu) {
            var modal = document.getElementById('editModal');

            // Populate modal fields with data
            document.getElementById('editName').value = nama;
            document.getElementById('editKode').value = kode;
            document.getElementById('editDosen').value = dosenpengampu;

            // Show the modal
            $(modal).modal('show');
        }

        var clickedItemId = 1;
    </script>