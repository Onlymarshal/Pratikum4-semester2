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
        <img src="marshall.jpg" alt="" style="margin: 20px; width: 250px;">
       <div class="dua" style=" flex-direction: column;">
        <div class="" style="border-bottom: 1px solid black; width: 950px;">
          <h3 style="padding-top: 20px; font-family: Georgia, serif;">George C. Marshall</h3>
       </div>
          <p style="padding-right: 10px; padding-top: 10px;"><b>George Catlett Marshall Jr.</b> (31 Desember 1880 – 16 Oktober 1959) adalah seorang perwira militer dan negarawan Amerika. Ia naik jabatan melalui <a href="https://en.wikipedia.org/wiki/United_States_Army">Angkatan Darat Amerika Serikat</a> menjadi <a href="https://en.wikipedia.org/wiki/Chief_of_Staff_of_the_United_States_Army">Kepala Staf Angkatan Darat AS</a> di bawah Presiden <a href="https://en.wikipedia.org/wiki/Harry_S._Truman">Franklin D. Roosevelt</a> dan <a href="https://en.wikipedia.org/wiki/United_States_Secretary_of_State">Harry S. Truman</a>, kemudian menjabat sebagai Menteri Luar Negeri dan Menteri Pertahanan di bawah pemerintahan Truman. <a href="https://en.wikipedia.org/wiki/Winston_Churchill">Winston Churchill</a> memuji Marshall sebagai "penyelenggara kemenangan" atas kepemimpinannya dalam kemenangan Sekutu dalam <a href="https://en.wikipedia.org/wiki/World_War_II">Perang Dunia II</a>.         Lahir di <a href="https://en.wikipedia.org/wiki/Pennsylvania">Pennsylvania</a>, Marshall lulus dari <a href="https://en.wikipedia.org/wiki/Virginia_Military_Institute">Virginia Military Institute</a> (VMI) pada tahun 1901. Ia menerima tugas sebagai letnan dua Infanteri pada bulan Februari 1902 dan segera berangkat ke Filipina. Ia bertugas di Amerika Serikat dan luar negeri dengan posisi yang semakin meningkat, termasuk pemimpin peleton dan komandan kompi di Filipina selama <a href="https://en.wikipedia.org/wiki/Philippine%E2%80%93American_War">Perang Filipina-Amerika</a>.
             Setelah perang, Marshall menjadi ajudan Kepala Staf Angkatan Darat <a href="https://en.wikipedia.org/wiki/John_J._Pershing">John J. Pershing</a>. Marshall kemudian bertugas sebagai staf Angkatan Darat, menjadi pejabat eksekutif <a href="https://en.wikipedia.org/wiki/15th_Infantry_Regiment_(United_States)">Resimen Infantri ke-15</a> di Tiongkok dan menjadi instruktur di Sekolah <a href="https://en.wikipedia.org/wiki/United_States_Army_War_College">Perang Angkatan Darat</a>. Pada tahun 1927, ia menjadi asisten komandan Sekolah Infanteri Angkatan Darat, tempat ia memodernisasi proses komando dan staf, yang terbukti memberikan manfaat besar selama Perang Dunia II.</p>
       </div>
    </div>
    <div class="" style="border-bottom: 1px solid black; width: 1225px; margin-left: 20px; margin-top: 5px;">
       <h4 style="font-family: Georgia, serif;">Kehidupan awal dan pendidikan</h4>
    </div>
       <p style="padding-left: 22px; padding-right: 10px; padding-top: 10px;">
          George Catlett Marshall Jr lahir di Uniontown, Pennsylvania , anak bungsu dari tiga bersaudara yang lahir dari pasangan George Catlett Marshall dan Laura Emily (née Bradford) Marshall. Kedua belah pihak keluarganya sudah lama berasal dari Kentucky , namun tetap menghargai asal usul Virginia mereka . Ia juga merupakan sepupu pertama, tiga kali dicopot, mantan Hakim Agung John Marshall . Ayah Marshall aktif di bisnis batu bara dan kokas . Belakangan, ketika ditanya tentang kesetiaan politiknya, Marshall sering bercanda bahwa ayahnya adalah seorang Demokrat dan ibunya seorang Republikan , sedangkan ia adalah seorang Episkopal.
          Marshall dididik di sekolah swasta Miss Alcinda Thompson di Uniontown dan menghabiskan satu tahun di Sekolah Pusat Uniontown. Setelah memutuskan di awal kehidupannya bahwa ia ingin berkarir di militer, tetapi kemungkinan besar tidak akan diterima di Akademi Militer Amerika Serikat karena nilainya yang rata-rata, ia beralih ke Institut Militer Virginia (VMI) untuk mendapatkan pendidikan formal. Saudara laki-laki Marshall, Stuart, seorang alumni VMI, percaya bahwa George tidak akan berhasil dan berpendapat bahwa ibu mereka tidak boleh mengizinkan George hadir karena khawatir dia akan "mempermalukan nama keluarga". Bertekad untuk "menghapus wajah saudaranya," Marshall mendaftar pada usia enam belas tahun pada bulan Desember 1897. Untuk membayar uang sekolah dan pengeluarannya, ibu Marshall menjual sebidang tanah miliknya di Uniontown dan Augusta, Kentucky .
       </p>
       <div class="kehidupan" style="display: flex;">
          <img src="marshall2.jpg" alt="" style="margin-left: 22px; width: 250px;">
          <p style="padding-left: 20px; padding-right: 14px;">
             Pada awal karir kuliahnya, Marshall menjadi sasaran insiden perpeloncoan di mana kakak kelasnya meletakkan bayonet terhunus dengan ujung menghadap ke atas dan mengarahkannya untuk berjongkok di atasnya. Setelah dua puluh menit, Marshall pingsan dan terjatuh. Ketika dia terbangun, dia mengalami luka robek yang dalam di salah satu pantatnya. Saat dirawat karena cederanya, Marshall menolak memberi tahu teman-teman sekelasnya. Terkesan dengan keberaniannya, para hazer tidak pernah mengganggunya lagi.
             Selama bertahun-tahun di VMI, Marshall selalu menempati peringkat pertama dalam disiplin militer dan berada di peringkat pertengahan akademis. Ia mencapai pangkat kapten pertama, pangkat tertinggi yang bisa dicapai seorang kadet, dan lulus ke-15 dari 34 angkatan di Angkatan 1901. Marshall menerima diploma, bukan gelar. Pada saat kelulusannya, lima atau enam lulusan VMI teratas menerima gelar sarjana. Sisanya menerima ijazah yang membuktikan status mereka sebagai lulusan. Dia memainkan tekel ofensif di tim sepak bola dan pada tahun 1900 dia terpilih untuk penghargaan All-Southern. 
          </p>
       </div>
      <div class="" style="border-bottom: 1px solid black; width: 1225px; margin-left: 20px; margin-top: 5px; padding-top: 10px;">
         <h4 style="font-family: Georgia, serif;">Karier infanteri awal dan Filipina</h4>
      </div>
      <p style="padding-left: 22px; padding-right: 10px; padding-top: 10px;">
        Setelah lulus dari VMI, Marshall menjabat sebagai Komandan Mahasiswa di Institut Militer Danville di Danville, Virginia . [24] Ia mengikuti ujian kompetitif untuk sebuah komisi di Angkatan Darat Amerika Serikat, yang telah berkembang pesat untuk menangani Perang Spanyol-Amerika dan Perang Filipina-Amerika . [25] Marshall menyetujui dan menggunakan dukungan yang diperoleh ayahnya dari kedua Senator AS di Pennsylvania untuk mendukung lamarannya. [25] Inspektur VMI Scott Shipp juga mendukung lamaran Marshall, dan dalam sebuah surat kepada Presiden William McKinley membandingkannya dengan lulusan VMI lainnya yang bertugas di Angkatan Darat, dengan mengatakan bahwa Marshall "Sepenuhnya setara dengan yang terbaik." [26] Ia ditugaskan menjadi letnan dua Infanteri pada bulan Februari 1902. [25] Dalam hitungan hari ia menikah, mengundurkan diri dari pekerjaannya di Danville, dan dikirim untuk bertugas di Resimen Infantri ke-30 di Filipina.
      </p>
      <p style="padding-left: 22px; padding-right: 10px;">
        Sebelum Perang Dunia I , Marshall menerima berbagai jabatan di Amerika Serikat dan Filipina, termasuk menjabat sebagai pemimpin peleton infanteri dan komandan kompi selama Perang Filipina-Amerika dan pemberontakan gerilya lainnya. [5] Ia dididik dalam peperangan modern, termasuk tur dari tahun 1906 hingga 1910 sebagai siswa dan instruktur. [29] Ia menduduki peringkat pertama dari lima Lulusan Kehormatan Kursus Sekolah Infanteri-Kavaleri (sekarang Sekolah Staf Umum dan Komando Angkatan Darat Amerika Serikat ) pada tahun 1907 dan lulus pertama di Sekolah Staf Angkatan Darat tahun 1908 (sekarang Sekolah Tinggi Perang Angkatan Darat Amerika Serikat ) kelas. [5] Setelah lulus pada tahun 1908, Marshall ditugaskan sebagai instruktur di Sekolah Infanteri-Kavaleri.
      </p>
      <p style="padding-left: 22px; padding-right: 10px;">
        Setelah menjalankan tugas lainnya di Filipina yang dimulai pada tahun 1913, Marshall kembali pada tahun 1916 untuk bertugas sebagai ajudan Mayor Jenderal J. Franklin Bell , komandan Departemen Barat dan mantan Kepala Staf Angkatan Darat , di Presidio San Fransiskus . [32] Pada musim panas dan musim gugur tahun 1916, Marshall bertanggung jawab mengorganisir beberapa Kamp Pelatihan Militer Warga Departemen Barat . [33] [34] Setelah Amerika masuk ke dalam Perang Dunia I pada bulan April 1917, Marshall pindah bersama Bell ke Pulau Gubernur , New York, ketika Bell ditugaskan kembali sebagai komandan Departemen Timur . [31] Tak lama kemudian, Marshall ditugaskan untuk membantu mengawasi mobilisasi Divisi 1 untuk bertugas di Prancis. 
      </p>
      <div class="" style="border-bottom: 1px solid black; width: 1225px; margin-left: 20px; margin-top: 5px; padding-top: 10px;">
         <h4 style="font-family: Georgia, serif;">Perang Dunia I dan II</h4>
      </div>
       <div class="perang" style="">
          <img src="dunia1.jpg" alt="" style="width: 250px; margin: 20px; float: right;">
          <p style="padding-left: 22px; padding-right: 10px; padding-top: 10px;">
             Tak lama setelah Amerika masuk ke dalam Perang Dunia I pada bulan April 1917, Marshall berperan sebagai perencana pelatihan dan operasi. [5] Pada musim panas, ia ditugaskan sebagai asisten kepala staf operasi staf Divisi 1 yang baru dibentuk , dipimpin oleh Mayor Jenderal William L. Sibert , seorang perwira insinyur berusia lima puluh enam tahun. [31] Setelah mengawasi mobilisasi dan organisasi divisi di Texas, ia berangkat ke Prancis bersama staf divisi pada pertengahan tahun 1917. [5] Dalam perjalanan laut yang jauh, teman sekamarnya adalah asisten kepala staf divisi untuk pelatihan, Mayor Lesley J. McNair ; [35] keduanya membentuk ikatan pribadi dan profesional yang mereka pertahankan selama sisa karir mereka. [35] Marshall adalah penumpang pertama dari kapal pertama yang mengangkut tentara Pasukan Ekspedisi Amerika (AEF) yang menginjakkan kaki di Eropa, dan salah satu orang pertama yang memasuki parit Front Barat . 
          </p>
       </div>
       <div class="perang" style="display: flex;">
          <img src="dunia2.jpg" alt="" style="width: 250px; margin-left: 22px;">
          <p style="padding-left: 22px; padding-right: 10px; padding-top: 10px;">
          Sebagai Kepala Staf, Marshall mengorganisir ekspansi militer terbesar dalam sejarah Amerika, mewarisi pasukan 189.000 orang yang sudah ketinggalan zaman dan memiliki perlengkapan yang buruk dan, sebagian memanfaatkan pengalamannya mengajar dan mengembangkan teknik peperangan modern sebagai instruktur di Army War College , mengoordinasikan ekspansi besar-besaran dan modernisasi Angkatan Darat AS. Di bawah namanya dihasilkan karya-karya doktrin yang penting seperti Field Manual 100-5 . Selama minggu pertamanya menjabat, ia menyarankan Roosevelt untuk mengeluarkan perintah eksekutif yang memperluas Tentara Reguler menjadi 227.000 tentara dan Garda Nasional menjadi 235.000 cadangan, meskipun Presiden tidak dapat segera bertindak karena Kongres Amerika Serikat masih menyukai isolasionisme.
          Upaya Marshall untuk memperluas Angkatan Bersenjata Amerika Serikat mulai lebih berhasil setelah kekuatan Poros menaklukkan sebagian besar Eropa Barat dalam Pertempuran Prancis . Mulai bulan Juli 1940, ia sangat terbantu dalam upaya ini oleh Menteri Perang yang baru diangkat Henry Stimson, yang secara bertahap akan digantikan oleh Marshall sebagai pemimpin paling signifikan dari aparat militer AS dalam penyimpangan dari tradisi kendali sipil Amerika Serikat atas wilayah tersebut .
          </p>
       </div>
       <div class="" style="border-bottom: 1px solid black; width: 1225px; margin-left: 20px; margin-top: 5px; padding-top: 10px;">
         <h4 style="font-family: Georgia, serif;">Kehidupan keluarga</h4>
      </div>
      <p style="padding-left: 22px; padding-right: 10px; padding-top: 10px;">
         George Marshall adalah anak bungsu dari tiga bersaudara. Kakak laki-lakinya Stuart Bradford Marshall (1875–1956) adalah lulusan Institut Militer Virginia dan menjadi manajer dan eksekutif di beberapa perusahaan produksi logam, termasuk Perusahaan Manufaktur Mangan Amerika. Ia kemudian bekerja sebagai ahli metalurgi dan insinyur konsultan yang mengkhususkan diri dalam produksi dan pengoperasian tanur sembur, oven kokas, dan pengecoran logam. George dan Stuart Marshall sudah lama berpisah karena George menikah dengan Lily Coles, yang beberapa tahun sebelumnya telah menolak lamaran Stuart. Ketika Stuart mengetahui George bertunangan dengan Lily, Stuart melontarkan komentar tidak baik tentang Lily, dan George "mengeluarkannya dari daftar saya". Adik Marshall, Marie Louise (1876–1962) adalah istri Dr. John Johnson Singer, seorang dokter Angkatan Darat yang meninggal pada tahun 1934.
      </p>
      <div class="perang" style="">
          <img src="nikah.jpg" alt="" style="width: 250px; height: 200px; margin-right: 20px; margin-left: 10px; float: right; margin-top: 10px;">
          <p style="padding-left: 22px; ">
             Pada tanggal 15 Oktober 1930, Marshall menikah dengan Katherine Boyce Tupper (8 Oktober 1882 – 18 Desember 1978); Mereka tidak memiliki anak, tetapi dia adalah ibu dari tiga anak dengan pengacara Baltimore Clifton Stevenson Brown. [132] Dia dibunuh oleh klien yang tidak puas pada tahun 1928. Nyonya Marshall yang kedua adalah lulusan American Academy of Dramatic Arts ; dia kemudian belajar di Comédie-Française dan melakukan tur dengan English Shakespearean Company milik Frank Benson . Dia menulis memoar pada tahun 1946, Together: Annals of an Army Wife . 
             Salah satu anak tiri Marshall, Allen Tupper Brown, adalah seorang letnan Angkatan Darat yang terbunuh di Italia pada tanggal 29 Mei 1944. Anak tiri lainnya adalah Mayor Clifton Stevenson Brown Jr. Putri tiri Molly Brown Winn, ibu dari aktris Kitty Winn , menikah dengan Kolonel James Julius Winn, yang pernah menjadi ajudan Marshall. Molly Winn aktif melestarikan warisan Marshall, termasuk melestarikan Dodona Manor dan menerbitkan memoar Marshall tentang Perang Dunia I. Marshall bertemu Lily setelah mendengarkan dia bermain piano di seberang jalan dari VMI. Marshall, yang langsung jatuh cinta, akan "menjalankan blok", atau meninggalkan barak setelah jam kerja, untuk menemaninya
          </p>
       </div>
       <div class="" style="border-bottom: 1px solid black; width: 1225px; margin-left: 20px; margin-top: 5px; padding-top: 10px;">
         <h4 style="font-family: Georgia, serif;">Kematian dan penguburan</h4>
      </div>
      <div class="perang" style="">
          <img src="makam.jpg" alt="" style="width: 250px; height: 230px; margin:20px; float: right; ">
          <p style="padding-left: 22px; padding-top: 10px;">
             Setelah serangkaian stroke, Marshall meninggal di Rumah Sakit Walter Reed di Washington, DC, pada tanggal 16 Oktober 1959. Meskipun ia berhak atas proses resmi, Marshall lebih menyukai kesederhanaan, sehingga ia menerima pemakaman militer khusus yang tidak memerlukan banyak pemakaman militer. aktivitas biasa. Upacara tersebut termasuk berbaring di Katedral Nasional Washington selama 24 jam, dijaga oleh perwakilan dari setiap angkatan bersenjata AS dan seorang kadet VMI.
             Presiden Eisenhower memerintahkan pengibaran bendera setengah tiang dan termasuk di antara 200 tamu yang diundang untuk upacara pemakaman yang diadakan di Fort Myer . Pejabat lainnya termasuk mantan Presiden Truman, Menteri Luar Negeri Christian A. Herter , mantan Menteri Luar Negeri Dean Acheson, mantan Gubernur W. Averell Harriman dan Jenderal Omar N. Bradley, Alfred M. Gruenther , dan Matthew B. Ridgway. Pastor parokinya, Franklin Moss Jr., dari Gereja Episkopal St. James di Leesburg memimpin kapel dan kebaktian di samping kuburan, dibantu oleh mantan kepala pendeta dan Kanon Katedral Nasional, Pendeta Luther Miller . Sesuai dengan keinginan Marshall, tidak ada pidato. Setelah upacara pemakaman, baterai artileri melepaskan tembakan hormat dengan 19 senjata dan pemain terompet memainkan ketukan. Bendera yang menutupi peti mati Marshall dilipat dan diberikan kepada Nyonya Marshall oleh seorang taruna VMI.
          </p>
          <p style="padding-left: 22px;">Marshall dimakamkan di Pemakaman Nasional Arlington , Bagian 7, Makam 8198, di samping istri pertamanya dan ibunya, Elizabeth Pendleton Coles (1849–1929). [138] [140] Istri keduanya juga dimakamkan bersamanya setelah dia meninggal pada tanggal 18 Desember 1978. [141] Di sisi sebaliknya, nisan marmer mencantumkan posisi yang dipegang Jenderal Marshall: "Kepala Staf Angkatan Darat AS, Sekretaris Negara, Presiden Palang Merah Amerika, Menteri Pertahanan." Pangkat bintang lima menghiasi kedua sisi batu.</p>
       </div>
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