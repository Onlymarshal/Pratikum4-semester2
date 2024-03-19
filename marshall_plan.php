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
    <div class="satu" style="display: flex;">
      <img src="plan.jpg" alt="" style="margin: 20px; width: 250px;">
      <div class="dua" style=" flex-direction: column;">
       <div class="" style="border-bottom: 1px solid black; width: 950px;">
        <h2 style="padding-top: 20px; font-family: Georgia, serif;">Marshall Plan</h2>
       </div>
        <p style="padding-right: 10px; padding-top: 10px;"><b>Marshall Plan</b> (resminya Program Pemulihan Eropa , ERP ) adalah inisiatif Amerika yang diberlakukan pada tahun 1948 untuk memberikan bantuan luar negeri ke <a href="">Eropa Barat</a> . Amerika Serikat mentransfer $13,3 miliar (setara dengan $173 miliar pada tahun 2023) dalam program pemulihan ekonomi ke perekonomian Eropa Barat setelah berakhirnya <a href="">Perang Dunia II</a> . Menggantikan proposal sebelumnya untuk <a href="">Rencana Morgenthau</a> , rencana ini berlaku selama empat tahun mulai tanggal 3 April 1948, meskipun pada tahun 1951, Rencana Marshall sebagian besar digantikan oleh <a href="">Undang-Undang Keamanan Bersama</a> . Tujuan Amerika Serikat adalah membangun kembali wilayah yang dilanda perang, menghilangkan <a href="">hambatan perdagangan</a> , memodernisasi <a href="">industri</a> , meningkatkan kesejahteraan Eropa dan mencegah penyebaran <a href="">komunisme</a> . Marshall Plan mengusulkan pengurangan hambatan antarnegara dan integrasi ekonomi Benua <a href="">Eropa</a> sekaligus mendorong peningkatan produktivitas serta penerapan prosedur bisnis modern. Bantuan Marshall Plan dibagi di antara negara-negara peserta secara kasar berdasarkan basis per kapita. Jumlah yang lebih besar diberikan kepada negara-negara industri besar, karena pendapat umum adalah bahwa penyadaran mereka penting untuk kebangkitan Eropa secara umum.</p>
      </div>
    </div>
    <p style="padding-left: 22px; padding-right: 10px;">Bantuan per kapita yang lebih besar juga ditujukan kepada negara-negara Sekutu , dan lebih sedikit untuk negara-negara yang menjadi bagian dari Poros atau tetap netral . Penerima dana Marshall Plan terbesar adalah <a href="">Inggris</a> (menerima sekitar 26% dari total). Kontribusi tertinggi berikutnya diberikan kepada <a href="">Perancis</a> (18%) dan <a href="">Jerman Barat</a> (11%). Sekitar delapan belas negara Eropa menerima manfaat Program ini. [4] Meskipun ditawarkan partisipasi, <a href="">Uni Soviet</a> menolak manfaat Rencana dan juga memblokir manfaat bagi negara-negara Blok <a href="">Timur</a> , seperti <a href="">Rumania</a> dan <a href="">Polandia</a>. [5] Amerika Serikat memberikan program bantuan serupa di Asia, namun hal tersebut bukan bagian dari Marshall Plan. [A]
       Perannya dalam pemulihan yang cepat masih diperdebatkan. Penghitungan Marshall Plan mencerminkan bahwa bantuan menyumbang sekitar 3% dari gabungan pendapatan nasional negara-negara penerima antara tahun 1948 dan 1951, [6] yang berarti peningkatan pertumbuhan PDB kurang dari setengah persen. [7]
       Graham T. Allison menyatakan bahwa "Rencana Marshall telah menjadi analogi favorit bagi para pembuat kebijakan. Namun hanya sedikit yang tahu banyak tentang hal itu." [8] Beberapa penelitian baru menyoroti tidak hanya peran kerjasama ekonomi tetapi mendekati Marshall Plan sebagai kasus mengenai pemikiran strategis untuk menghadapi beberapa tantangan khas dalam kebijakan, seperti definisi masalah, analisis risiko, pendukung keputusan perumusan kebijakan, dan implementasi program. [9]
       Pada tahun 1947, dua tahun setelah berakhirnya perang, industrialis <a href="">Lewis H. Brown menulis</a>, atas permintaan Jenderal <a href="">Lucius D. Clay</a> , Laporan tentang Jerman , yang berfungsi sebagai rekomendasi terperinci untuk rekonstruksi Jerman pascaperang dan berfungsi sebagai dasar Marshall Plan. Inisiatif ini dinamai Menteri Luar Negeri Amerika Serikat <a href="">George C. Marshall</a> . Rencana tersebut mendapat dukungan bipartisan di Washington, di mana Partai Republik menguasai Kongres dan Demokrat menguasai Gedung Putih ditenggelamkan <a href="">Harry S. Truman</a> sebagai presiden. Beberapa pengusaha takut akan Marshall Plan, karena tidak yakin apakah membangun kembali perekonomian Eropa dan mendorong persaingan asing merupakan kepentingan terbaik AS. [10] Rencana tersebut sebagian besar dibuat oleh pejabat Departemen Luar Negeri , terutama <a href="">William L. Clayton</a> dan <a href="">George F. Kennan</a> , dengan bantuan dari Brookings Institution , seperti yang diminta oleh Senator <a href="">Arthur Vandenberg</a> , ketua Komite Hubungan Luar Negeri Senat Amerika Serikat . [11] Marshall berbicara tentang kebutuhan mendesak untuk membantu pemulihan Eropa dalam pidatonya di <a href="">Universitas Harvard</a> pada bulan Juni 1947. [12] Tujuan dari Rencana Marshall adalah untuk membantu pemulihan ekonomi negara-negara setelah <a href="">Perang Dunia II</a> dan mengamankan geopolitik AS. pengaruhnya terhadap Eropa Barat. [13] Untuk melawan dampak Rencana Marshall, Uni Soviet mengembangkan program pemulihan ekonominya sendiri, yang dikenal sebagai <a href="">Rencana Molotov</a> . Namun, rencana tersebut dikatakan tidak berjalan dengan baik karena Uni Soviet sangat terpukul oleh dampak Perang Dunia II. 
    </p>
    <div class="" style="border-bottom: 1px solid black; width: 1225px; margin-left: 20px; margin-top: 5px;">
    <h3 style="font-family: Georgia, serif; ">Kehancuran masa perang</h3>
    </div>
    <p style="padding-left: 22px; padding-right: 10px; padding-top: 10px;">Pada <a href="">akhir Perang Dunia II</a>, sebagian besar wilayah Eropa hancur. Pengeboman udara yang terus-menerus <a href="">selama perang</a> telah menyebabkan kerusakan parah pada sebagian besar kota-kota besar, dan fasilitas industrilah yang paling terkena dampaknya. Jutaan pengungsi berada di kamp sementara. [27] Arus perdagangan di kawasan ini telah terganggu sepenuhnya; jutaan orang berada di kamp-kamp pengungsi dan hidup dengan bantuan dari Amerika Serikat, yang disediakan oleh <a href="">Administrasi Bantuan dan Rehabilitasi</a> PBB dan lembaga-lembaga lainnya. Kekurangan pangan sangat parah, terutama pada <a href="">musim dingin yang keras pada tahun 1946–1947</a> . Dari bulan Juli 1945 hingga Juni 1946, Amerika Serikat mengirimkan 16,5 juta ton makanan, terutama gandum, ke Eropa dan Jepang. Jumlah tersebut mencakup seperenam pasokan pangan Amerika dan menyediakan 35 triliun kalori, cukup untuk menyediakan 400 kalori sehari selama satu tahun kepada 300 juta orang. [28]
       Yang paling terkena dampaknya adalah infrastruktur transportasi, karena jalur kereta api, jembatan, dan dermaga secara khusus menjadi sasaran serangan udara, sementara banyak kapal dagang ditenggelamkan. Meskipun sebagian besar kota-kota kecil dan desa-desa tidak mengalami kerusakan yang parah, kehancuran transportasi membuat mereka terisolasi secara ekonomi. Tak satu pun dari masalah-masalah ini dapat dengan mudah diatasi, karena sebagian besar negara yang terlibat perang telah menghabiskan perbendaharaan mereka dalam proses tersebut. [29]
       Satu-satunya negara besar yang infrastrukturnya tidak mengalami kerusakan signifikan selama Perang Dunia II adalah Amerika Serikat dan Kanada. Mereka jauh lebih makmur dibandingkan sebelum perang, namun ekspor merupakan faktor kecil dalam perekonomian mereka. Sebagian besar bantuan Marshall Plan akan digunakan oleh negara-negara Eropa untuk membeli barang-barang manufaktur dan bahan mentah dari Amerika Serikat dan Kanada.
    </p>
    <div class="" style="border-bottom: 1px solid black; width: 1225px; margin-left: 20px; margin-top: 5px;">
    <h3 style="font-family: Georgia, serif; ">Pidato Marshall</h3>
    </div>
    <p style="padding-left: 22px; padding-right: 10px; padding-top: 10px;">
       Setelah konferensi Moskow ditunda setelah enam minggu diskusi yang gagal dengan Soviet mengenai potensi rekonstruksi Jerman, Amerika Serikat menyimpulkan bahwa solusinya tidak bisa menunggu lebih lama lagi. Untuk memperjelas posisi Amerika, pidato utama Menteri Luar Negeri <a href="">George Marshall</a> telah direncanakan. Marshall memberikan pidatonya di Universitas Harvard pada tanggal 5 Juni 1947. Dia menawarkan bantuan Amerika untuk mendorong pemulihan dan rekonstruksi Eropa. Pidato tersebut menggambarkan disfungsi ekonomi Eropa dan memberikan alasan bantuan AS:
       Sistem pembagian kerja modern yang mendasari pertukaran produk berada dalam bahaya kehancuran. Selain dampak demoralisasi terhadap dunia secara luas dan kemungkinan timbulnya kekacauan sebagai akibat dari keputusasaan masyarakat yang bersangkutan, dampaknya terhadap perekonomian Amerika Serikat harus jelas bagi semua orang. Adalah logis bahwa Amerika Serikat harus melakukan apa pun yang mampu mereka lakukan untuk membantu mengembalikan kesehatan ekonomi dunia menjadi normal, yang tanpanya tidak akan ada stabilitas politik dan perdamaian yang terjamin. Kebijakan kami tidak ditujukan terhadap negara mana pun, namun terhadap kelaparan, kemiskinan, keputusasaan, dan kekacauan. Pemerintah mana pun yang bersedia membantu pemulihan akan mendapatkan kerja sama penuh dari Amerika Serikat. Tujuannya adalah untuk menghidupkan kembali perekonomian yang berfungsi di dunia sehingga memungkinkan munculnya kondisi politik dan sosial di mana lembaga-lembaga bebas dapat eksis. [49]
       Marshall yakin bahwa stabilitas ekonomi akan memberikan stabilitas politik di Eropa. Ia menawarkan bantuan, namun negara-negara Eropa harus menyelenggarakan programnya sendiri.
    </p>
    <p style="padding-left: 22px; padding-right: 10px;">
       Pidato tersebut, yang ditulis atas permintaan dan bimbingan Marshall oleh <a href="">Charles Bohlen</a> [50] hampir tidak memuat rincian dan angka. Lebih merupakan usulan daripada rencana, hal ini merupakan tantangan bagi para pemimpin Eropa untuk bekerja sama dan berkoordinasi. Ia meminta negara-negara Eropa untuk membuat rencana mereka sendiri untuk membangun kembali Eropa, yang mengindikasikan bahwa Amerika Serikat kemudian akan mendanai rencana ini. Pemerintah merasa bahwa rencana tersebut kemungkinan besar tidak populer di kalangan banyak orang Amerika, dan pidato tersebut terutama ditujukan kepada audiens Eropa. Dalam upaya untuk menyembunyikan pidato tersebut dari surat kabar Amerika, jurnalis tidak dihubungi, dan pada hari yang sama, Truman mengadakan konferensi pers untuk menghapus berita utama. Sebaliknya, <a href="">Dean Acheson</a> , Wakil Menteri Luar Negeri, diutus untuk menghubungi media Eropa, khususnya media Inggris, dan pidatonya dibacakan secara keseluruhan di <a href="">BBC </a>. [51]
       Salah satu audiensi di Harvard adalah mahasiswa pascasarjana Hukum dan Diplomasi Internasional Malcolm Crawford, yang baru saja menulis tesis Masternya yang berjudul "Cetak Biru Pembiayaan Bisnis dan Industri Pasca Perang di Inggris dan Republik Prancis." Tesis Crawford dibacakan oleh calon Hakim Agung Abe Fortas dan disampaikan kepada Presiden Truman sebagai solusi atas usulan Marshall. Tesis Crawford-lah yang memberikan kunci untuk menjual Marshall Plan kepada Kongres dengan memaparkan gagasan "kemitraan strategis". Daripada pemerintah Federal memberikan uang langsung ke Eropa, perusahaan-perusahaan Amerika akan memberikan teknologi, keahlian, dan material kepada Eropa sebagai mitra strategis, dan sebagai imbalannya, pemerintah Federal akan membeli saham perusahaan-perusahaan Amerika untuk mengganti biaya mereka. Dengan cara ini, Eropa akan menerima bantuan yang dibutuhkan, bisnis Amerika akan menerima investasi modal, dan pemerintah federal akan memperoleh keuntungan ketika saham tersebut dijual.
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