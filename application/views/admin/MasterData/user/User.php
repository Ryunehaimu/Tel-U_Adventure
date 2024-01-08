        <div class="card" style="widht:1600px;height:600px;margin-top:50px">

        <div class="row">
            <div class="col-md-6">
                <h3 style="padding:40px;">Master Data - Mahasiswa</h3>
            </div>
        </div>


        <div class="container" style="padding:40px;">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                    </tr>
                </thead>
                <?php
                    $count=0;
                    foreach ($datauser as $row) {
                        $count++;
                ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->Nama ?></td>
                    <td><?= $row->NIM_NIP?></td>
                    <td><?= $row->Angkatan ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>
<script>

</script>