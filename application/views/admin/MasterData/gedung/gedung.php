    <div class="wrapper">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- Komponen Utama -->
        <div class="container-fluid">
            <div class="card">
                <div class="main">
                    <main class="content px-3 py-2">
                        <div class="container-fluid">
                            <div class="hgedung">
                                <h3>Gedung</h3>
                            </div>
                        </div>
                        <br>
                        <!-- Navbar -->
                        <nav class="navbar bg-body-tertiary" style="height: 100%;">
                            <div class="container-fluid">
                                <form id="modaltambah" class="d-flex" role="search" action="/proses-formulir" method="post">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <div class="d-flex" style="padding-left:20px;">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </div>
                                </form>
                                <!-- Form input Pop-up -->
                                <div class="ml-auto" style="padding-right: 30px;">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">+Tambah</button>
                                </div>
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
                            <table class="table text-center" id="tabel">
                                <thead class="table" style="tabel-lyout:absolute;">
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
                                            <button type="button" class="btn btn-primary">Edit</button>
                                            <button type="button" class="btn btn-danger hapus-btn">Hapus</button>
                                            <button type="button" class="btn btn-info">Info</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
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
                '<button type="button" class="btn btn-danger hapus-btn">Hapus</button>' +
                '<button type="button" class="btn btn-info">Info</button></td>');

            $("#tabel tbody").append(newRow);

            $("#inputGroupFile04, #namagedung, #deskripsigedung, #keterangan").val('');
        } else {
            alert("Harap isi semua field sebelum menambahkan data.");
        }
    }
    </script>
