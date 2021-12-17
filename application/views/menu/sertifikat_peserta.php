        <div class="content-page">
           <!-- Start content -->
           <div class="content">
              <div class="container-fluid">

                 <div class="row">
                    <div class="col-xl-3 col-md-6">
                       <div class="card-box">

                          <h4 class="header-title mb-3">Total Survei</h4>
                          <div class="widget-box-2">
                             <div class="widget-detail-2">
                                <div class="pull-left dsha"><i class="mdi mdi-note-multiple-outline"></i></div>
                                <h2 class="mb-0"> 148 </h2>
                             </div>
                          </div>
                       </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                       <div class="card-box">

                          <h4 class="header-title mb-3">Tikungan Kondisi Baik</h4>
                          <div class="widget-box-2">
                             <div class="widget-detail-2">
                                <div class="pull-left dsha"><i class="mdi mdi-approval"></i></div>
                                <h2 class="mb-0"> 100 </h2>
                             </div>
                          </div>
                       </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                       <div class="card-box">

                          <h4 class="header-title mb-3">Tikungan Kondisi Kurang Baik</h4>
                          <div class="widget-box-2">
                             <div class="widget-detail-2">
                                <div class="pull-left dsha"><i class="mdi mdi-alert-octagon"></i></div>
                                <h2 class="mb-0"> 48 </h2>
                             </div>
                          </div>
                       </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                       <div class="card-box">

                          <h4 class="header-title mb-3">Tanjakan Kondisi Baik</h4>
                          <div class="widget-box-2">
                             <div class="widget-detail-2">
                                <div class="pull-left dsha"><i class="mdi mdi-approval"></i></div>
                                <h2 class="mb-0"> 100 </h2>
                             </div>
                          </div>
                       </div>
                    </div><!-- end col -->
                 </div>
                 <!-- end row -->

                 <div class="row">
                    <div class="col-xl-8">
                       <div class="card-box">
                          <h4 class="header-title mt-0">Trend Angka Kecelakaan Nasional</h4>
                          <div>
                             <canvas id="myChart"></canvas>
                          </div>
                          <div id="morris-line-example" style="height: 300px;"></div> -->
                          <div class="text-center">

                             <ul class="list-inline chart-detail-list mb-0 mt-3">
                                <li class="list-inline-item">
                                   <h5 style="color: #740a8f;"><i class="mdi mdi-album m-r-5"></i>Tanjakan</h5>
                                </li>
                                <li class="list-inline-item">
                                   <h5 style="color: #5b69bc;"><i class="mdi mdi-album m-r-5"></i>Tikungan</h5>
                                </li>
                             </ul>
                          </div>
                       </div>
                    </div><!-- end col -->
                    <div class="col-xl-4">
                       <div class="card-box">
                          <h4 class="header-title mt-0 m-b-30">Grafik Angka Kecelakaan Nasional</h4>
                          <!-- <div>
                                        <canvas id="bar_diagram"></canvas>
                                    </div> -->

                          <div id="morris-bar-chart"></div>

                       </div>
                    </div><!-- end col -->
                 </div>
                 <!-- end row -->

              </div>

              <!-- end row -->

           </div> <!-- container -->
        </div> <!-- content -->

        <!-- <footer class="footer text-right">
           2021 - EWS Keselamatan Transportasi
        </footer> -->
        </div>

        <script>
           const labels = [
              '2016',
              '2017',
              '2018',
              '2019',
              '2020',
           ];
           const data = {
              labels: labels,
              datasets: [{
                 label: 'Jumlah Kecelakaan',
                 backgroundColor: 'red',
                 borderColor: 'red',
                 data: [106.644, 104.327, 109.215, 116.411, 100.028],

              }]


           };



           const config = {
              type: 'line',
              data: data,
              options: {
                 plugins: {
                    title: {
                       font: {
                          weight: 'bold'
                       }
                    }
                 }
              }
           };

           const myChart = new Chart(
              document.getElementById('myChart'),
              config
           );
        </script>