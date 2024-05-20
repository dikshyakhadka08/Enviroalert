<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-EnviroAlert</title>
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
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/dashlogo.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/dashlogo.png" alt="logo" /></a>
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
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">📈 Graphical Representation in Context of Nepal. 🇳🇵</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/chartjs">Charts</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chart of Flood in Nepal</li>
                        </ol>
                    </nav>
                </div>

                <!-- Row for charts -->
                <div class="row">
                    <!-- Line chart -->
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line Chart: Total Number of Deaths Over the Decade.</h4>
                                <canvas id="lineChart" style="height:250px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Bar chart -->
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar Chart:Rain Level by Region.</h4>
                                <canvas id="barChart" style="height:230px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row for more charts -->
                <div class="row">
                    <!-- Area chart -->
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Area Chart: Annual Flood Numbers Over the Years.</h4>
                                <canvas id="areaChart" style="height:250px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Pie chart -->
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie Chart: Flood Occurrences by District.</h4>
                                <canvas id="pieChart" style="height:250px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <!-- Custom JS for this page -->
    <script>
       // Convert enviroData to JSON in Blade template
const enviroData = {!! json_encode($enviroData) !!};

// Prepare data for charts
const years = enviroData.map(data => data.year);
const deaths = enviroData.map(data => data.death);
const rainLevels = enviroData.map(data => data.rainlvl);
const regions = enviroData.map(data => data.region);
const floodNumbers = enviroData.map(data => data.floodNo);
const floodTimes = enviroData.map(data => data.floodtimes);
const districts = enviroData.map(data => data.district);

// Line Chart: Total number of deaths in the decade
const lineChartCtx = document.getElementById('lineChart').getContext('2d');
new Chart(lineChartCtx, {
    type: 'line',
    data: {
        labels: years,
        datasets: [{
            label: 'Deaths',
            data: deaths,
            borderColor: 'rgba(75, 192, 192, 1)',
            fill: false
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Bar Chart: Region and rain level
const barChartCtx = document.getElementById('barChart').getContext('2d');
new Chart(barChartCtx, {
    type: 'bar',
    data: {
        labels: regions,
        datasets: [{
            label: 'Rain Level',
            data: rainLevels,
            backgroundColor: 'rgba(75, 192, 192, 0.6)'
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Area Chart: Flood number and year
const areaChartCtx = document.getElementById('areaChart').getContext('2d');
new Chart(areaChartCtx, {
    type: 'line',
    data: {
        labels: years,
        datasets: [{
            label: 'Flood Numbers',
            data: floodNumbers,
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            fill: true
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Pie Chart: Flood times and district
const pieChartCtx = document.getElementById('pieChart').getContext('2d');
new Chart(pieChartCtx, {
    type: 'pie',
    data: {
        labels: districts,
        datasets: [{
            data: floodTimes,
            backgroundColor: [
              'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(201, 203, 207, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 205, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)'
            ]
        }]
    },
    options: {
        responsive: true
    }
});

    </script>
    <!-- End custom js for this page -->
</body>

</html>