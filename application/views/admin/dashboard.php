<!-- admin/dashboard.php -->

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="margin-top:20px">Dashboard</h1>

    <!-- Matakuliah Table -->
    <div class="card mb-4">
        <div class="card-header">
            Matakuliah Data
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Matakuliah</th>
                            <th>Dosen Pengampu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 0;
                        ?>
                        <?php foreach ($matakuliah as $row) : $count++?>
                            <tr>
                                <td><?= $count; ?></td>
                                <td><?= $row->Nama; ?></td>
                                <td><?= $row->DosenPengampu; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="card mb-4">
        <div class="card-header">
            Jumlah Mahasiswa per Angkatan
        </div>
        <div class="card-body">
            <canvas id="angkatanChart" width="100%" height="30"></canvas>
        </div>
    </div>
</div>

<script>
    // Parse the PHP array from the controller to JavaScript
    var angkatanChartData = <?php echo $angkatanChartData; ?>;

    // Prepare data for Chart.js
    var labels = Object.keys(angkatanChartData);
    var data = Object.values(angkatanChartData);

    // Render Pie Chart
    var ctx = document.getElementById('angkatanChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: ['#FF5733', '#33FF57', '#5733FF', '#FF3362', '#33C6FF'],
            }],
        },
    });
</script>
