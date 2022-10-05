<!-- index dasboard -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Soal</div>
                                                
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $soal; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Bar Chart -->
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Nilai</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myChart" width="800" height="400"></canvas>
                                    </div>
                                    <hr>
                                  
                                </div>
                            </div>
                            

                        
                    </div>
                    
                    <script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['nilai 20', 'nilai 30', 'nilai 40', 'nilai 50', 'nilai 60', 'nilai 70', 'nilai 80', 'nilai 90', 'nilai 100'],
        datasets: [{
            label: 'Jumlah Anak',
            data: 
            [
                
                <?= json_encode($nilai20) ?>,
                <?= json_encode($nilai30) ?>,
                <?= json_encode($nilai40) ?>,
                <?= json_encode($nilai50) ?>,
                <?= json_encode($nilai60) ?>,
                <?= json_encode($nilai70) ?>,
                <?= json_encode($nilai80) ?>,
                <?= json_encode($nilai90) ?>,
                <?= json_encode($nilai100) ?>,
                
            ],
            backgroundColor: [ 
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

         



       