<div class="card" style="widht:1600px;height:600px;margin-top:50px">

<div class="row">
    <div class="col-md-6">
        <h3 style="padding:40px;">Master Data - Achievement</h3>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Achievement</h1>
                </div>
                <div class="modal-body">
                    <form class="was-validated" method="post" action="<?= base_url("con_achievement/create") ?>" novalidate>
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
                            <label for="poin" class="form-label">Poin</label>
                            <input class="form-control" id="poin" name="poin" required>
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
                <form method="POST" action="<?= base_url("con_achievement/update") ?>">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="editid" name="editid">
                        <label for="editName">Nama</label>
                        <input type="text" class="form-control" id="editName" name="editName" required>
                    </div>
                    <div class="form-group">
                        <label for="editdeskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="editdeskripsi" name="editdeskripsi" required>
                    </div>
                    <div class="form-group">
                        <label for="editpoin">Poin</label>
                        <input type="text" class="form-control" id="editpoin" name="editpoin" required>
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
                <th>Deskripsi</th>
                <th>Poin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
            <?php
            $count = 0;
            foreach ($dataac as $row) {
                $count++;
            ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->Nama ?></td>
                    <td><?= $row->Deskripsi ?></td>
                    <td><?= $row->Poin ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" onclick="openEditModal('<?= $row->id ?>', '<?= $row->Nama ?>', '<?= $row->Deskripsi ?>', '<?= $row->Poin ?>')" id="editBtn_<?= $row->id ?>">
                            <img src="<?= base_url("application/assets/img/edit putih.png") ?>">
                        </button>
                        <a href="<?= base_url("con_achievement/delete/".$row->id)?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
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
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.querySelector('.was-validated');
            var modal = new bootstrap.Modal(document.getElementById('User'));

            modal._element.addEventListener('show.bs.modal', function () {
                form.reset();
                form.reportValidity();
            });

            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                var namaInput = document.getElementById('nama');
                if (namaInput.value.length > 20) {
                    namaInput.setCustomValidity('Nama Achievement harus maksimal 20 huruf.');
                } else {
                    namaInput.setCustomValidity('');
                }

                var deskripsiInput = document.getElementById('deskripsi');
                if (deskripsiInput.value.length > 20) {
                    deskripsiInput.setCustomValidity('Nama Achievement harus maksimal 20 huruf.');
                } else {
                    deskripsiInput.setCustomValidity('');
                }
                var PoinInput = document.getElementById('poin');
                var PoinValue = parseInt(PoinInput.value);
                if (PoinValue < 1 || PoinValue > 50 || isNaN(PoinValue)) {
                    PoinInput.setCustomValidity('Poin harus berada di antara 1 dan 50.');
                } else {
                    PoinInput.setCustomValidity('');
                }

                form.reportValidity();
            });

            document.getElementById('editForm').addEventListener('submit', function (event) {
            validateForm('editForm'); 
        });


        var editModal = new bootstrap.Modal(document.getElementById('editModal'));
        editModal._element.addEventListener('show.bs.modal', function () {

            document.getElementById('editForm').reset();
            validateForm('editForm');
        });
        });
        function openEditModal(id, nama, deskripsi, poin) {
        var modal = document.getElementById('editModal');

        document.getElementById('editid').value = id;
        document.getElementById('editName').value = nama;
        document.getElementById('editdeskripsi').value = deskripsi;
        document.getElementById('editpoin').value = poin;

        $(modal).modal('show');
        }

        var clickedItemId = 1;
    </script>