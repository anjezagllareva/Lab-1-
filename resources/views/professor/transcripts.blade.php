<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Professor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/admin/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->
   <link href="{{asset('assets/admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

   <!-- Customized Bootstrap Stylesheet -->
   <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">

   <!-- Template Stylesheet -->
   <link href="{{asset('assets/admin/css/style.css')}} " rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ url('/professor/students')}}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">Professor</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Professor</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown">
                    <a href="{{ url('/professor/exams') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-pen-alt me-2"></i>Submits</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('/professor/english') }}" class="dropdown-item">Gjuhe Angleze per Inxhinieri</a>
                            <a href="{{ url('/professor/math') }}" class="dropdown-item">Matematike 1</a>
                            <a href="{{ url('/professor/bti') }}" class="dropdown-item">Bazat e Teknologjise Informative</a>
                            <a href="{{ url('/professor/shk1') }}" class="dropdown-item">Shkenca Kompjuterike 1</a>
                            <a href="{{ url('/professor/algo') }}" class="dropdown-item">Hyrje ne Algoritme</a>
                            <a href="{{ url('/professor/shk2') }}" class="dropdown-item">Shkenca Kompjuterike 2</a>
                            <a href="{{ url('/professor/web') }}" class="dropdown-item">Inxhinieri e Web</a>
                            <a href="{{ url('/professor/databaze') }}" class="dropdown-item">Sistemet e Bazes se te Dhenave</a>
                            <a href="{{ url('/professor/rrjeta') }}" class="dropdown-item">Rrjeta Kompjuterike dhe Komunikimi</a>
                            <a href="{{ url('/professor/lab1') }}" class="dropdown-item">Lëndë Laboratorike 1 (Programim)</a>
                            <a href="{{ url('/professor/gaming') }}" class="dropdown-item">Programimi i Lojërave</a>
                            <a href="{{ url('/professor/kripto') }}" class="dropdown-item">Kriptografia</a>
                            <a href="{{ url('/professor/dizajn') }}" class="dropdown-item">Dizajnimi i Softuerit</a>
                            <a href="{{ url('/professor/lab2') }}" class="dropdown-item">Lëndë Laboratorike 2 (Programim)</a>
                            <a href="{{ url('/professor/arkitektur') }}" class="dropdown-item">Arkitekturë Softuerike</a>
                        </div>
                    <a href="{{ url('/professor/schedule')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Schedule</a>
                    <a href="{{ url('/professor/transcripts')}}" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Transcripts</a>
                    <a href="{{ url('/professor/subjects')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Subjects</a>
                    <a href="{{ url('/professor/calendar')}}" class="nav-item nav-link"><i class="fas fa-calendar-week me-2"></i>Calendar</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Professor</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ url('/index') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Transcript </h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Anjeza</td>
                                            <td>Gllareva</td>
                                            <td>anjeza@ubt-uni.com</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Erza</td>
                                            <td>Boshnjaku</td>
                                            <td>erza@ubt-uni.com</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Vullnet</td>
                                            <td>Lipovica</td>
                                            <td>vullnet@ubt-uni.com</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Ardit</td>
                                            <td>Hoxha</td>
                                            <td>ardit@ubt-uni.com</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Average</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>7.1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->





            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/admin/lib/chart/chart.min.js"></script>
  <script src="/assets/admin/lib/easing/easing.min.js"></script>
  <script src="/assets/admin/lib/waypoints/waypoints.min.js"></script>
  <script src="/assets/admin/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/assets/admin/lib/tempusdominus/js/moment.min.js"></script>
  <script src="/assets/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="/assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="/assets/admin/js/main.js"></script>
</body>

</html>
