            <!-- START PAGE CONTENT -->
            <div class="page-heading">
                <h1 class="page-title">Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url('dasbor') ?>">Dasboard</a>
                    </li>
                </ol>
            </div>

            <section class="content">
                <div class="page-content fade-in-up">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="ibox bg-success color-white widget-stat">
                                <div class="ibox-body length: 10px">
                                    <h1 class="m-b-5 font-strong"><?= $total; ?></h1>
                                    <div class="m-b-5">TOTAL PENGHUNI</div><i class="ti-user widget-stat-icon"></i>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="ibox bg-info color-white widget-stat">
                                <div class="ibox-body">
                                    <h1 class="m-b-5 font-strong">Rp<?= number_format($totalpenghasilan, 0, ',', '.'); ?></h1>
                                    <div class="m-b-5">TOTAL PENGHASILAN</div><i class="ti-money widget-stat-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="ibox bg-warning color-white widget-stat">
                                <div class="ibox-body">
                                    <h1 class="m-b-5 font-strong"><?= $kamarterisi;  ?></h1>
                                    <div class="m-b-5">KAMAR TERISI</div><i class="fa fa-home widget-stat-icon"></i>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="ibox bg-danger color-white widget-stat">
                                <div class="ibox-body">
                                    <h1 class="m-b-5 font-strong"><?= $kamarkosong;  ?></h1>
                                    <div class="m-b-5">KAMAR KOSONG</div><i class="ti-home widget-stat-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="content">
                <div class="page-content fade-in-up">
                    <div class="row">
                        <div class="col-lg-8 ">
                            <div class="ibox bg-light align">
                                <div class="ibox-head bg-info">
                                    <div class="ibox-title color-white">
                                        <a > Grafik Banyak Kamar Setiap Lantai
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-body">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Lantai 1', 'Lantai 2', 'Lantai 3'],
                        datasets: [{
                            label: '',
                            data: [<?php echo $lantai1; ?>, <?php echo $lantai2; ?>, <?php echo $lantai3; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
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
            <!-- END PAGE CONTENT-->