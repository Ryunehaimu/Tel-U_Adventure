<div class="card" style="widht:1600px;height:700px;margin-top:50px">

<div class="row">
    <div class="col-md-6">
        <?php echo $this->session->flashdata('errors'); ?>
        <h3 style="padding:40px;">Master Data - Laporan Barang Hilang</h3>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Hilang</h1>
            </div>
            <div class="modal-body">
                <!-- Use form_open_multipart to handle file uploads -->
                <?= form_open_multipart(base_url("con_hilang/create"), 'class="was-validated" novalidate') ?>
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
                        <label for="jenis" class="form-label">jenis</label>
                        <input class="form-control" id="jenis" name="jenis" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid jenis.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Hilang</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid tanggal.
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
                        <select class="form-select" id="status" name="status" required>
                            <option value="ditemukan">Ditemukan</option>
                            <option value="belum_ditemukan">Belum Ditemukan</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid status.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" size="20" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid image file.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                <?= form_close() ?>
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
            <form method="POST" action="<?= base_url("con_hilang/update") ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="editid" name="editid">
                        <label for="editName">Nama</label>
                        <input type="text" class="form-control" id="editName" name="editName" required>
                    </div>                            
                    <div class="form-group">
                        <label for="editjenis">Jenis</label>
                        <input type="text" class="form-control" id="editjenis" name="editjenis" required>
                    </div>
                    <div class="form-group">
                        <label for="edittanggal">Tanggal Hilang</label>
                        <input type="date" class="form-control" id="edittanggal" name="edittanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="editdeskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="editdeskripsi" name="editdeskripsi" required>
                    </div>
                    <div class="form-group">
                        <label for="editstatus">Status</label>
                        <select class="form-select" id="editstatus" name="editstatus" required>
                            <option value="ditemukan">Ditemukan</option>
                            <option value="belum_ditemukan">Belum Ditemukan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editgambar">Gambar</label>
                        <input type="file" class="form-control" id="editgambar" name="editgambar" accept="image/*" required>
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
                <th>Jenis</th>
                <th>Tanggal Hilang</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
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
                    <td><img src="<?= base_url('application/assets/gambar/hilang') ?>/<?= $row->gambar ?>" width="100px"></td>
                    <td><?= $row->Status ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" onclick="openEditModal('<?= $row->id ?>', '<?= $row->Nama ?>', '<?= $row->Jenis ?>', '<?= $row->Tanggal ?>', '<?= $row->Deskripsi ?>', '<?= $row->Status ?>')" id="editBtn_<?= $row->id ?>">
                            <img src="<?= base_url("application/assets/img/edit putih.png") ?>">
                        </button>
                        <!-- Delete button -->
                        <a href="<?= base_url("con_hilang/delete/".$row->id)?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
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
function openEditModal(id, nama, jenis, tanggal, deskripsi, status) {
    var modal = document.getElementById('editModal');

    // Populate modal fields with data
    document.getElementById('editid').value = id;
    document.getElementById('editName').value = nama;
    document.getElementById('editjenis').value = jenis;
    document.getElementById('edittanggal').value = tanggal;
    document.getElementById('editdeskripsi').value = deskripsi;

    // Set the selected option in the dropdown for status
    var statusDropdown = document.getElementById('editstatus');
    for (var i = 0; i < statusDropdown.options.length; i++) {
        if (statusDropdown.options[i].value === status) {
            statusDropdown.selectedIndex = i;
            break;
        }
    }

    // Show the modal
    $(modal).modal('show');
}


var clickedItemId = 1;
</script>