<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-EnviroAlert</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function fetchSensorData() {
            $.ajax({
                url: "{{ route('sensor.data') }}", // URL to fetch sensor data
                type: 'GET', // HTTP method
                dataType: 'json', // Expected data type
                success: function(data) { // Success callback function
                    if (data) {
                        console.log('Data fetched:', data); // Log the data for debugging

                        // Update HTML elements with sensor data
                        $('#temperature').text(data.temperature);
                        $('#humidity').text(data.humidity);
                        $('#rain').text(data.rain);
                        $('#water-level').text(data.water_level);
                    }
                },
                error: function(xhr, status, error) { // Error callback function
                    console.error('Error fetching data:', xhr.responseText); // Log error message to console
                }
            });
        }

        fetchSensorData(); // Fetch data initially
        setInterval(fetchSensorData, 1000); // Fetch data every second
    });
</script>

    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
         
            <div class="ps-lg-1">
              
            </div>
            
          </div>
       
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/admindash"><img src="assets/images/dashlogo.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/admindash"><img src="assets/images/dashlogo.png" alt="logo" /></a>
        </div>
        <ul class="nav">
        
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/admindash">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="/chartjs">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          
              
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="/admindash"><img src="assets/images/dashlogo.png" alt="logo" /></a>
          </div>
         
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="admin/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                     
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row"id="sensor-data">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                    
                        <h3 class="mb-0">Temperature:<span id="temperature"></span></h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Temperature  ☀️</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Humidity: <span id="humidity"></span></h3>
                        
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Humidity 💧</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Rain: <span id="rain"></span></h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Rainfall Rate 🌧️</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
               
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
              
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <h3 class="mb-0">Water Level: <span id="water-level"></span></h3>
            
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                          
                        </div>
                        <h6 class="text-muted font-weight-normal">Water Level 🎚️</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              
              
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                
                    <div class="row">
                     
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Users Review</h4>
                    </div>
                    <div class="preview-list">
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="admin/assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Ganesh Chaturbedi</h6>
                              <p class="text-muted text-small">5 minutes ago</p>
                            </div>
                            <p class="text-muted">I am very greatful for the team for such app.</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="admin/assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Hari Rana</h6>
                              <p class="text-muted text-small">10 Minutes Ago</p>
                            </div>
                            <p class="text-muted">Great App.</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="admin/assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Subesha Karki</h6>
                              <p class="text-muted text-small">2 Hours Ago</p>
                            </div>
                            <p class="text-muted">Very helpful for data monitoring.</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="admin/assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Binti Tiwari</h6>
                              <p class="text-muted text-small">4 Hours Ago</p>
                            </div>
                            <p class="text-muted">Excellent App.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">EnviroALert</h4>
                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                      <div class="item">
                        <img src="admin/assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                      <div class="item">
                        <img src="admin/assets/images/dashboard/Img_5.jpg" alt="">
                      </div>
                      <div class="item">
                        <img src="admin/assets/images/dashboard/img_6.jpg" alt="">
                      </div>
                    </div>
                    <div class="d-flex py-4">
                      <div class="preview-list w-100">
                        <div class="preview-item p-0">
                          <div class="preview-thumbnail">
                            <img src="admin/assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Dikshya Khadka</h6>
                                <p class="text-muted text-small">4 Hours Ago</p>
                              </div>
                              <p class="text-muted">Presenting you EnviroAlert App.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted">Hope it's helpful for everyone. </p>
                    <div class="progress progress-md portfolio-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">To do list</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                      <button class="add btn btn-primary todo-list-add-btn">Add</button>
                    </div>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Drink 2 litre of water. </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Planted a tree. </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Apply Sunscreen. </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Wore mask before going out.</label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Carry Umbrella. </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Flood in various Countries</h4>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                  <i>Flags</i>
                                </td>
                                <td>Country</td>
                                <td class="text-right">Flood Case in Decade</td>
                                <td class="text-right font-weight-medium">Flood Rate </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-np"></i>
                                </td>
                                <td>Nepal</td>
                                <td class="text-right"> 5 </td>
                                <td class="text-right font-weight-medium"> 3% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-bd"></i>
                                </td>
                                <td>Bangladesh</td>
                                <td class="text-right"> 8 </td>
                                <td class="text-right font-weight-medium"> 3.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-in"></i>
                                </td>
                                <td>India</td>
                                <td class="text-right"> 7 </td>
                                <td class="text-right font-weight-medium"> 2.75% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-cn"></i>
                                </td>
                                <td>China</td>
                                <td class="text-right"> 9 </td>
                                <td class="text-right font-weight-medium"> 3.35% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-vn"></i>
                                </td>
                                <td>Vietnam</td>
                                <td class="text-right"> 6 </td>
                                <td class="text-right font-weight-medium"> 1.85% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-id"></i>
                                </td>
                                <td>Indonesia</td>
                                <td class="text-right"> 8 </td>
                                <td class="text-right font-weight-medium"> 3.25% </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
 
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>

