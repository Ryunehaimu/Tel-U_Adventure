<div class="wrapper">
        <!-- Komponen Utama -->
        <div class="container-fluid">
            <div class="card" style="margin-top:40px">
                <div class="main">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="padding:40px;">Master Data - Gedung</h3>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end" style="padding:40px">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal">
                            + Tambah</button>
                    </div>
                </div>
                    <main class="content">
                        <!-- Navbar -->
                        <nav class="navbar bg-body-tertiary" style="height: 100%;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalinputan">Masukkan Data Baru</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="formModalTambah" role="search" action="/proses-formulir" method="post">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <label for="inputgambar">Input Gambar</label>
                                                                <div class="d-flex">
                                                                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                                    <button class="btn btn-outline-secondary" type="button" id="upload">Upload</button>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="width: 103%;">
                                                                <label for="inputnamagendung">Nama Gedung</label>
                                                                <input type="text" class="form-control" id="namagedung" placeholder="Nama Gedung">
                                                            </div>
                                                            <div class="row" style="width: 103%;">
                                                                <label for="inputdeskripsigendung">Deskripsi Gedung</label>
                                                                <input type="text" class="form-control" id="deskripsigedung" placeholder="Deskripsi Gedung">
                                                            </div>
                                                            <div class="row" style="width: 103%;">
                                                                <label for="inputketerangan">Keterangan</label>
                                                                <input type="text" class="form-control" id="keterangan" placeholder="Keterangan">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="button" class="btn btn-primary" id="tambah" onclick="tambahdata()">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
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
                                        <!-- Form for editing user -->
                                        <form id="editForm">
                                            <div class="form-group">
                                                <label for="inputgambar">Input Gambar</label>
                                                    <div class="d-flex">
                                                                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                                    <button class="btn btn-outline-secondary" type="button" id="upload">Upload</button>
                                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="editNim">NiM:</label>
                                                <input type="text" class="form-control" id="editNim" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="editAngkatan">Angkatan:</label>
                                                <input type="text" class="form-control" id="editAngkatan" required>
                                            </div>
                                            <button type="button" class="btn btn-primary" id="saveEdit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="delete">
                            <div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-12">
                                                <p>Apakah kamu yakin?</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary" style="background-color:red;">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="table" style="padding: 40px;">
                            <table class="table table-bordered" id="tabel">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama Gedung</th>
                                        <th scope="col">Deskripsi Gedung</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>img</td>
                                        <td>KU1</td>
                                        <td>gedung kelas panas</td>
                                        <td>banyak pohon tapi panas</td>
                                        <td style="text-align:center;">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                            <button type="button" class="btn btn-danger hapus-btn" data-bs-toggle="modal" data-bs-target="#Delete">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#formModalTambah").validate({
                rules: {
                    inputGroupFile04: {
                        required: true
                    },
                    namagedung: {
                        required: true
                    },
                    deskripsigedung: {
                        required: true
                    },
                    keterangan: {
                        required: true
                    }
                },
                messages: {
                    inputGroupFile04: {
                        required: "Silakan pilih file."
                    },
                    namagedung: {
                        required: "Silakan masukkan Nama Gedung."
                    },
                    deskripsigedung: {
                        required: "Silakan masukkan Deskripsi Gedung."
                    },
                    keterangan: {
                        required: "Silakan masukkan Informasi Gedung."
                    }
                },
                submitHandler: function (form) {
                    tambahdata();
                }
            });

            $("#tambah").click(function () {
                var isValid = true;
                $("#formModalTambah input").each(function(){
                    if ($(this).val()===""){
                        isValid = false;
                        return false;
                    }
                });
                if (isValid){
                    tambahdata();
                } else {
                    alert("Harap isi semua field sebelum menambahkan data.")
                }
            });

            $(".hapus-btn").click(function () {
                var currentRow = $(this).closest("tr");
                $('#Delete').modal('show');
                $("#btnDeleteConfirm").on("click", function () {
                    currentRow.remove();
                    $('#Delete').modal('hide');
                });
            });
        });

        function tambahdata() {
            var inputGambar = $("#inputGroupFile04").val();
            var namaGedungInput = $("#namagedung").val();
            var deskripsiGedungInput = $("#deskripsigedung").val();
            var keteranganInput = $("#keterangan").val();
            
            if (inputGambar !== "" && namaGedungInput !== "" && deskripsiGedungInput !== "" && keteranganInput !== "") {
            var newRow = $("<tr>");
            newRow.append("<td>" + inputGambar + "</td>");
            newRow.append("<td>" + namaGedungInput + "</td>");
            newRow.append("<td>" + deskripsiGedungInput + "</td>");
            newRow.append("<td>" + keteranganInput + "</td>");
            newRow.append('<td><button type="button" class="btn btn-primary">Edit</button>' +
                '<button type="button" style="margin-left:5px" class="btn btn-danger hapus-btn">Hapus</button>');

            $("#tabel tbody").append(newRow);

            $("#inputGroupFile04, #namagedung, #deskripsigedung, #keterangan").val('');
        } else {
            alert("Harap isi semua field sebelum menambahkan data.");
        }
    }
    </script>