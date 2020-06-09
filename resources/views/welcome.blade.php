<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Monitor</title>

  <!-- Custom fonts for this template-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">




  <style>
    
    #reporte_filter{
      display:none;
    }

  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Monitor</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


    </ul>
    <!-- End of Sidebar -->



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <!-- Begin Page Content -->
        <div class="container container-fluid">

            <!-- Page Heading -->
            
            <div class="row mt-4">
                <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
            </div>
          

            <div class="row">
                                                       
                <div class="col-lg-10">
                    <form class="form-inline" method="post" action="filtro">
                      @csrf
                        
                              <div class="form-group mr-sm-4">
                                

                                <div class="input-group date" id="fecha1_control" data-target-input="nearest">
                                    
                                    <input type="text" class="form-control datetimepicker-input" 
                                        data-target="#fecha1_control" 
                                        name="fecha1"
                                        id="fecha1"
                                         value="{{ $fecha1 }}"/>

                                    <div class="input-group-append" data-target="#fecha1_control" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>

                                </div>

                              </div>

                              <div class="form-group mr-sm-4">
                          
                                
                                <div class="input-group date" id="fecha2_control" data-target-input="nearest">
                                    
                                    <input type="text" class="form-control datetimepicker-input" 
                                        data-target="#fecha2_control" 
                                        name="fecha2"
                                        id="fecha2"
                                         value="{{ $fecha2 }}"/>

                                    <div class="input-group-append" data-target="#fecha2_control" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>

                                </div>
                            </div>
                        

                        <div class="form-group mr-sm-3">
                            <label for="">&nbsp;</label><br>
                            <input type="submit" class="btn btn-primary" value="Filtrar">
                        </div>
                    </form>
                </div>
                

            </div>

            <br>

            <div class="row">

          
                <div class="col-xl-4 col-md-7 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Temperatura
                          </div>
                          
                            <div class="mb-0 text-gray-800">
                              min:{{ number_format($datos->min('temperatura'),2) }} 
                              avg:{{ number_format($datos->avg('temperatura'),2) }} 
                              max:{{ number_format($datos->max('temperatura'),2) }} 
                            </div>
                        </div>
                        <div class="col-auto">
                          <i class="fa fa-thermometer fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-md-7 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Humedad Relativa %
                          </div>
                          
                            <div class="mb-0 text-gray-800">
                              min:{{ number_format($datos->min('humedad'),2) }} 
                              avg:{{ number_format($datos->avg('humedad'),2) }} 
                              max:{{ number_format($datos->max('humedad'),2) }} 
                            </div>
                        </div>
                        <div class="col-auto">
                          <i class="fa fa-tint fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-md-7 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            H2
                          </div>
                          
                            <div class="mb-0 text-gray-800">
                              min:{{ number_format($datos->min('h2'),2) }} 
                              avg:{{ number_format($datos->avg('h2'),2) }} 
                              max:{{ number_format($datos->max('h2'),2) }} 
                            </div>
                        </div>
                        <div class="col-auto">
                          <i class="fa fa-gas fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-md-7 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            LPG
                          </div>
                          
                            <div class="mb-0 text-gray-800">
                              min:{{ number_format($datos->min('lpg'),2) }} 
                              avg:{{ number_format($datos->avg('lpg'),2) }} 
                              max:{{ number_format($datos->max('lpg'),2) }} 
                            </div>
                        </div>
                        <div class="col-auto">
                          <i class="fa fa-gas fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-md-7 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            CO
                          </div>
                          
                            <div class="mb-0 text-gray-800">
                              min:{{ number_format($datos->min('co'),2) }} 
                              avg:{{ number_format($datos->avg('co'),2) }} 
                              max:{{ number_format($datos->max('co'),2) }} 
                            </div>
                        </div>
                        <div class="col-auto">
                          <i class="fa fa-gas fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-xl-4 col-md-7 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Alcohol
                          </div>
                          
                            <div class="mb-0 text-gray-800">
                              min:{{ number_format($datos->min('al'),2) }} 
                              avg:{{ number_format($datos->avg('al'),2) }} 
                              max:{{ number_format($datos->max('al'),2) }} 
                            </div>
                        </div>
                        <div class="col-auto">
                          <i class="fa fa-gas fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-xl-4 col-md-7 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Propano
                          </div>
                          
                            <div class="mb-0 text-gray-800">
                              min:{{ number_format($datos->min('pro'),2) }} 
                              avg:{{ number_format($datos->avg('pro'),2) }} 
                              max:{{ number_format($datos->max('pro'),2) }} 
                            </div>
                        </div>
                        <div class="col-auto">
                          <i class="fa fa-gas fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

          </div>

   
            
            <br>


          <canvas id="myChart"></canvas>


            <br>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lecturas del periodo seleccionado</h6>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                
            
          
              
                <table class="table table-striped table-bordered" id="reporte">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Temp</th>
                            <th>Humedad</th>
                            <th>H2</th>
                            <th>LPG</th>
                            <th>CO</th>
                            <th>Alcohol</th>
                            <th>Propano</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $medicion)
                            <tr>
                                <td>{{ $medicion->fecha}}</td>
                                <td>{{ $medicion->temperatura}}</td>
                                <td>{{ $medicion->humedad}}</td>
                                <td>{{ $medicion->h2}}</td>
                                <td>{{ $medicion->lpg}}</td>
                                <td>{{ $medicion->co}}</td>
                                <td>{{ $medicion->al}}</td>
                                <td>{{ $medicion->pro}}</td>
                            </tr>
                        @endforeach
                    </tbody>
              </table>


                </div>
            </div>
        </div>
  

         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Humberto Duarte m036421</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  
  <!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="/js/jquery.easing.min.js"></script>

  <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>



    <script>
      
        $(document).ready(function() {
        
            $('#fecha1').datetimepicker({

            });

            $('#fecha2').datetimepicker({
                
            });
            

            // DataTable
            var table = $('#reporte').DataTable({
                
            });


            $('#filtro_query').change( function() {
                table.search($('#filtro_query').val()).draw();
            } );
        



            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: [

                      @foreach ($datos as $medicion)
                        '{{ $medicion->fecha }}',
                      @endforeach

                    ],
                    datasets: [

                    {
                        label: 'Temperatura',
                        borderColor: 'rgb(255, 99, 132)',
                        backgroundColor: 'rgb(255, 99, 132)',

                        fill: false,
                        data: [

                          @foreach ($datos as $medicion)
                            {{ $medicion->temperatura }},
                          @endforeach

                        ]
                    },
                    {
                        label: 'CO',
                        borderColor: 'rgb(255, 99, 0)',
                        backgroundColor: 'rgb(255, 99, 0)',

                        fill: false,
                        data: [

                          @foreach ($datos as $medicion)
                            {{ $medicion->co }},
                          @endforeach

                        ]
                    },

                    {
                        label: 'H2',
                        borderColor: 'rgb(10, 100, 100)',
                        backgroundColor: 'rgb(10, 100, 100)',

                        fill: false,
                        data: [

                          @foreach ($datos as $medicion)
                            {{ $medicion->h2 }},
                          @endforeach

                        ]
                    },

                    {
                        label: 'Alcohol',
                        borderColor: 'rgb(50, 50, 200)',
                        backgroundColor: 'rgb(50, 50, 200)',

                        fill: false,
                        data: [

                          @foreach ($datos as $medicion)
                            {{ $medicion->al }},
                          @endforeach

                        ]
                    },


                    {
                        label: 'Propano',
                        borderColor: 'rgb(75, 12, 126)',
                        backgroundColor: 'rgb(75, 12, 126)',

                        fill: false,
                        data: [

                          @foreach ($datos as $medicion)
                            {{ $medicion->pro }},
                          @endforeach

                        ]
                    },

                    {
                        label: 'Humedad',
                        borderColor: 'rgb(10, 200, 255)',
                        backgroundColor: 'rgb(10, 200, 255)',

                        fill: false,
                        data: [

                          @foreach ($datos as $medicion)
                            {{ $medicion->humedad }},
                          @endforeach

                        ]
                    },


                    ]
                },

                // Configuration options go here
                options: {
                  
                },
                
            });
            
            
            
        
        } );


        
    </script>
</body>

</html>
