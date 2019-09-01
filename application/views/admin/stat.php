<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Statistics</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Stat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Chart-1
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Real Time Online Users</h5>
                    <div id="real-time" style="height:400px;"></div>
                    <p>Time between updates:
                        <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ENd chart-1 -->

    <!-- Cards -->
    <div class="row">
        <div class="col-md-3">
            <div class="card m-t-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_neutral left text-center m-t-10"><span><span style="display: none;">10,15,8,14,13,10,10</span>
                                <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>10%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center p-t-10">
                        <h3 class="mb-0 font-weight-bold">150</h3>
                        <span class="text-muted">New Users</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-t-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_good left text-center m-t-10"><span><span style="display: none;">12,6,9,23,14,10,17</span>
                                <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>+60%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center p-t-10">
                        <h3 class="mb-0 ">5672</h3>
                        <span class="text-muted">Active Users</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-t-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_bar_bad left text-center m-t-10"><span><span style="display: none;">3,5,6,16,8,10,6</span>
                                <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>-40%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center p-t-10">
                        <h3 class="mb-0 font-weight-bold">4560</h3>
                        <span class="text-muted">Inactive Users</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-t-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_bar_good left text-center m-t-10"><span>12,6,9,23,14,10,13</span>
                            <h6>+30%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center p-t-10">
                        <h3 class="mb-0 font-weight-bold">2560</h3>
                        <span class="text-muted">Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End cards -->

    <!-- Charts -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Site Visited</h5>
                    <canvas id="myChart" style="max-height:430px!important;"></canvas>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Top Users</h5>
                    <canvas id="myChart2" style="max-height:430px!important;"></canvas>
                </div>
            </div>

        </div>
    </div>
    <!-- End Charts -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Site Statistic',
                data: [120, 190, 30, 50, 20, 30, 60, 70, 50, 10, 20, 12],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(54, 162, 235, 0.6)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script>
    var ctx2 = document.getElementById('myChart2');
    var myChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            datasets: [{
                data: [10, 20, 30],
                backgroundColor: [
                    'rgba(255, 0, 0, 1)',
                    'rgba(0, 255, 0, 1)',
                     'rgba(0, 0, 255, 1)'
                ]
            }],
            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: ['Pewdiepie', 'Sandhika Galih', 'Rizalord']

        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>