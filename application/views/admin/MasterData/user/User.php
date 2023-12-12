<div class="card" style="widht:1600px;height:600px;margin-top:50px">

            <div class="row">
                <div class="col-md-6">
                    <h3 style="padding:40px;">Master Data-User</h3>
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
                                <form class="was-validated" method="post" action="<?= base_url("admin/create") ?>" novalidate>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input class="form-control" id="nama" name="nama" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid name.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nim" class="form-label">Nim</label>
                                        <input class="form-control" id="nim" name="nim" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid NIM.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="angkatan" class="form-label">Angkatan</label>
                                        <input class="form-control" id="angkatan" name="angkatan" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid angkatan.
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
                            <form method="POST" action="<?= base_url("admin/update") ?>">
                                <div class="form-group">
                                    <label for="editName">Nama:</label>
                                    <input type="text" class="form-control" id="editName" name="editName" required>
                                </div>
                                <div class="form-group">
                                    <label for="editNim">NiM:</label>
                                    <input type="text" class="form-control" id="editNim" name="editNim" required>
                                </div>
                                <div class="form-group">
                                    <label for="editAngkatan">Angkatan:</label>
                                    <input type="text" class="form-control" id="editAngkatan" name="editAngkatan" required>
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
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Angkatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <?php
                        $count = 0;
                        foreach ($datauser as $row) {
                            $count++;
                        ?>
                            <tr>
                                <td><?= $count ?></td>
                                <td><?= $row->Nama ?></td>
                                <td><?= $row->NIM ?></td>
                                <td><?= $row->Angkatan ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" onclick="openEditModal('<?= $row->NIM ?>', '<?= $row->Nama ?>', '<?= $row->Angkatan ?>')" id="editBtn_<?= $row->NIM ?>">
                                        <img src="<?= base_url("application/assets/img/edit putih.png") ?>">
                                    </button>
                                    <!-- Delete button -->
                                    <a href="<?= base_url("admin/delete/".$row->NIM)?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
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
    <script>
        function openEditModal(nim, nama, angkatan) {
            var modal = document.getElementById('editModal');

            // Populate modal fields with data
            document.getElementById('editName').value = nama;
            document.getElementById('editNim').value = nim;
            document.getElementById('editAngkatan').value = angkatan;

            // Show the modal
            $(modal).modal('show');
        }

        var clickedItemId = 1;
    </script>