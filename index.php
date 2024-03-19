<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav style="display: flex;justify-content: space-between;" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
         <select style="border: none; color: grey; margin-top: 9px; width: 80px;">
           <option value="">Contact</option>
           <option value="" style=" color: black;">+627782419615 (Marshall)</option>
           <option value="" style=" color: black;">+628643215996 (Rayne)</option>
         </select>
        </li>
      </ul>
  </div>

    <!-- Right navbar links -->
    <div style="display: flex; justify-content:end;">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login.php" class="nav-link" style="color: blue;">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <select style="border: none; color: blue; margin-top: 9px; width: 100px; margin-right: 10px;">
           <option value="">Languages</option>
           <option value="" style=" color: black;">Bahasa Indonesia</option>
           <option value="" style=" color: black;">English</option>
           <option value="" style=" color: black;">Espanol</option>
         </select>
      </li>
    </div>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="logo2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Marshall Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="marshall.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">George Catlett Marshall </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sejarah
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="marshall_plan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="margin-left: 10px;"><b>Marshall Plan</b> <i class="right fas fa-angle-right"></i></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="biografi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="margin-left: 10px;"><b>Biografi Marshall</b> <i class="right fas fa-angle-right"></i></p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <div class="content-wrapper">
    <div class="bingkai" style=" border-bottom: 1px solid black; margin-top: 10px;">
    <h2 style="text-align: center; font-family:  Georgia, serif; padding-top: 10px; text-shadow: silver 3px 2px 2px;">George Catlett Marshall</h2>
    </div>
      <img src="marshall.jpg" alt="" style="width: 250px; margin-left: 40%; margin-top: 18px; border: solid black 2px; box-shadow: 4px 4px 4px gray;">
      <p style="padding-left: 10px; padding-top: 20px;">
      <b>George Catlett Marshall Jr.</b> (31 Desember 1880 – 16 Oktober 1959) adalah seorang perwira militer dan negarawan Amerika. Ia naik jabatan melalui <a href="https://en.wikipedia.org/wiki/United_States_Army">Angkatan Darat Amerika Serikat</a> menjadi <a href="https://en.wikipedia.org/wiki/Chief_of_Staff_of_the_United_States_Army">Kepala Staf Angkatan Darat AS</a> di bawah Presiden <a href="https://en.wikipedia.org/wiki/Harry_S._Truman">Franklin D. Roosevelt</a> dan <a href="https://en.wikipedia.org/wiki/United_States_Secretary_of_State">Harry S. Truman</a>, kemudian menjabat sebagai Menteri Luar Negeri dan Menteri Pertahanan di bawah pemerintahan Truman. <a href="https://en.wikipedia.org/wiki/Winston_Churchill">Winston Churchill</a> memuji Marshall sebagai "penyelenggara kemenangan" atas kepemimpinannya dalam kemenangan Sekutu dalam <a href="https://en.wikipedia.org/wiki/World_War_II">Perang Dunia II</a>. Pada tahun berikutnya, ia berusaha menghindari <a href="https://en.wikipedia.org/wiki/Chinese_Civil_War">Perang Saudara Tiongkok</a> yang akan datang, tetapi gagal. Sebagai Menteri Luar Negeri, Marshall menganjurkan komitmen ekonomi dan politik AS terhadap pemulihan Eropa pascaperang, termasuk <a href="https://en.wikipedia.org/wiki/Marshall_Plan">Marshall Plan</a> yang menggunakan namanya. Sebagai pengakuan atas karyanya, ia dianugerahi <a href="https://en.wikipedia.org/wiki/Nobel_Peace_Prize">Hadiah Nobel Perdamaian</a> pada tahun 1953, satu-satunya jenderal Angkatan Darat yang pernah menerima penghargaan tersebut.
      </p>
      <p style="padding-left: 10px;">
        Lahir di <a href="https://en.wikipedia.org/wiki/Pennsylvania">Pennsylvania</a>, Marshall lulus dari <a href="https://en.wikipedia.org/wiki/Virginia_Military_Institute">Virginia Military Institute</a> (VMI) pada tahun 1901. Ia menerima tugas sebagai letnan dua Infanteri pada bulan Februari 1902 dan segera berangkat ke Filipina. Ia bertugas di Amerika Serikat dan luar negeri dengan posisi yang semakin meningkat, termasuk pemimpin peleton dan komandan kompi di Filipina selama <a href="https://en.wikipedia.org/wiki/Philippine%E2%80%93American_War">Perang Filipina-Amerika</a>. Dia adalah peringkat teratas dari lima Lulusan Kehormatan <a href="https://en.wikipedia.org/wiki/United_States_Army_Command_and_General_Staff_College">Kursus Sekolah Infanteri-Kavaleri</a> pada tahun 1907 dan lulus pertama di kelas Sekolah <a href="https://en.wikipedia.org/wiki/United_States_Army_War_College">Staf Angkatan Darat</a> tahun 1908. Pada tahun 1916 Marshall ditugaskan sebagai ajudan <a href="https://en.wikipedia.org/wiki/J._Franklin_Bell">J. Franklin Bell</a>, komandan Departemen Barat. Setelah negara tersebut memasuki <a href="https://en.wikipedia.org/wiki/World_War_I">Perang Dunia I</a> pada tahun 1917, Marshall bertugas bersama Bell yang memimpin Departemen Timur. Dia ditugaskan menjadi staf <a href="https://en.wikipedia.org/wiki/1st_Infantry_Division_(United_States)">Divisi 1</a>; ia membantu mobilisasi dan pelatihan organisasi tersebut di Amerika Serikat, serta perencanaan operasi tempurnya di <a href="https://en.wikipedia.org/wiki/France">Prancis</a>. Selanjutnya, ditugaskan menjadi staf markas besar <a href="https://en.wikipedia.org/wiki/American_Expeditionary_Forces">Pasukan Ekspedisi Amerika</a>, dia adalah perencana utama operasi Amerika, 
        termasuk <a href="https://en.wikipedia.org/wiki/Meuse%E2%80%93Argonne_offensive">Serangan Meuse-Argonne</a>.
      </p>
      <p style="padding-left: 10px;">
        Setelah perang, Marshall menjadi <a href="https://en.wikipedia.org/wiki/Aide-de-camp">ajudan Kepala Staf</a> Angkatan Darat <a href="https://en.wikipedia.org/wiki/John_J._Pershing">John J. Pershing</a>. Marshall kemudian bertugas sebagai staf Angkatan Darat, menjadi pejabat eksekutif <a href="https://en.wikipedia.org/wiki/15th_Infantry_Regiment_(United_States)">Resimen Infantri ke-15</a> di Tiongkok dan menjadi instruktur di Sekolah <a href="https://en.wikipedia.org/wiki/United_States_Army_War_College">Perang Angkatan Darat</a>. Pada tahun 1927, ia menjadi asisten komandan <a href="https://en.wikipedia.org/wiki/15th_Infantry_Regiment_(United_States)">Sekolah Infanteri</a> Angkatan Darat, tempat ia memodernisasi proses komando dan staf, yang terbukti memberikan manfaat besar selama <a href="https://en.wikipedia.org/wiki/World_War_II">Perang Dunia II</a>. Pada tahun 1932 dan 1933 ia memimpin <a href="https://en.wikipedia.org/wiki/8th_Infantry_Regiment_(United_States)">Resimen Infantri ke-8</a> dan <a href="https://en.wikipedia.org/wiki/Tybee_Island,_Georgia">Fort Screven</a>, <a href="https://en.wikipedia.org/wiki/Tybee_Island,_Georgia">Georgia</a>. Marshall memimpin Brigade ke-5, <a href="https://en.wikipedia.org/wiki/3rd_Infantry_Division_(United_States)">Divisi Infanteri ke-3</a>, dan <a href="https://en.wikipedia.org/wiki/Vancouver_Barracks">Barak Vancouver</a> dari tahun 1936 hingga 1938; dia menerima promosi menjadi brigadir jenderal. Selama komando ini, Marshall juga bertanggung jawab atas 35 kamp <a href="https://en.wikipedia.org/wiki/Civilian_Conservation_Corps">Korps Konservasi Sipil</a> (CCC) di Oregon dan Washington Selatan. Pada bulan Juli 1938, Marshall ditugaskan ke Divisi Rencana Perang sebagai staf Departemen Perang; dia kemudian menjadi Wakil Kepala Staf Angkatan Darat. Ketika Kepala Staf <a href="https://en.wikipedia.org/wiki/Malin_Craig">Malin Craig</a> pensiun pada tahun 1939, Marshall mengambil peran Kepala Staf dalam kapasitas akting sebelum pengangkatannya pada posisi tersebut, yang dipegangnya hingga perang berakhir pada tahun 1945.
      </p>
  </div>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>
    <!-- /.content-header -->
    <!-- /.content -->
  </div>
  
  
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>