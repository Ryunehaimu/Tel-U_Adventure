<div class="container" style="margin-top:40px;">
        <div class="row">
            <h1>Dashboard</h1>
        </div>
        <div class="row" style="margin-top:40px">
            <div class="col">
                <div class="card" style="width: 21rem;border-radius:13px;padding:20px;border:none;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <p>lorem ipsum dolor</p>
                    <canvas id="myLineChart" width="300" height="300"></canvas>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 21rem;border-radius:13px;padding:20px;border:none;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <p>lorem ipsum dolor</p>
                    <canvas id="myPieChart" width="300" height="300"></canvas>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 21rem;border-radius:13px;padding:20px;border:none;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <p>lorem ipsum dolor</p>
                    <canvas id="myChart" width="300" height="300"></canvas>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:40px">
            <div class="col">
                <div class="col">
                    <div class="card" style="width: 66rem;height:500px;border-radius:13px;padding:20px;border:none;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                        <p>lorem ipsum dolor</p>
                        <canvas id="myLineChart1" width="800rem" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Sample data for Line Chart
    var data = {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Monthly Sales',
            data: [50, 60, 70, 80, 90],
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false // Do not fill the area under the line
        }]
    };

    // Chart configuration
    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var ctxLine = document.getElementById('myLineChart').getContext('2d');

    // Create the Line Chart
    var myLineChart = new Chart(ctxLine, {
        type: 'line',
        data: data,
        options: options
    });
        // Sample data for Pie Chart
        var data = {
        labels: ['Category A', 'Category B', 'Category C'],
        datasets: [{
            data: [30, 40, 30],
            backgroundColor: ['rgba(255, 99, 132, 0.8)', 'rgba(54, 162, 235, 0.8)', 'rgba(255, 206, 86, 0.8)'],
            borderColor: 'rgba(255, 255, 255, 1)', // Border color of each slice
            borderWidth: 2
        }]
    };
    // Sample data for Line Chart
    var data = {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Monthly Sales',
            data: [50, 90, 40, 60, 70],
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false // Do not fill the area under the line
        }]
    };

    // Chart configuration
    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var ctxLine = document.getElementById('myLineChart1').getContext('2d');

    // Create the Line Chart
    var myLineChart = new Chart(ctxLine, {
        type: 'line',
        data: data,
        options: options
    });
        // Sample data for Pie Chart
        var data = {
        labels: ['Category A', 'Category B', 'Category C'],
        datasets: [{
            data: [30, 40, 30],
            backgroundColor: ['rgba(255, 99, 132, 0.8)', 'rgba(54, 162, 235, 0.8)', 'rgba(255, 206, 86, 0.8)'],
            borderColor: 'rgba(255, 255, 255, 1)', // Border color of each slice
            borderWidth: 2
        }]
    };

    // Get the context of the canvas element
    var ctxPie = document.getElementById('myPieChart').getContext('2d');

    // Create the Pie Chart
    var myPieChart = new Chart(ctxPie, {
        type: 'pie',
        data: data
    });
        // Sample data
        var data = {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Monthly Sales',
            data: [50, 60, 70, 80, 90],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Chart configuration
    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var ctx = document.getElementById('myChart').getContext('2d');

    // Create the chart
    var myChart = new Chart(ctx, {
        type: 'bar', // Change the chart type as needed (e.g., 'line', 'pie', etc.)
        data: data,
        options: options
    });
</script>