{{-- <link rel="stylesheet" href="{{ asset('snkhstyle.css') }}"> --}}
<!DOCTYPE html>
<html>
  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>IRS | Internal Repository System</title>
      <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
      <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="{{ asset('js/charts/piechart.js') }}"></script>

  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
              <div class="dropdown profile-element"> 
                <span>
                  @if (auth()->user() && auth()->user()->profil)
                    <img src="{{ asset('img/' . auth()->user()->profil->photo) }}" alt="Foto Profil">
                  @else
                    <img alt="image" class="img-circle" src="img/Tito_small.png" />
                  @endif
                </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="clear"> 
                    <span class="block m-t-xs" > 
                      <a href="{{ url('/profil') }}" class="font-bold">{{ Session::get('nama') }}</a>
                    </span>
                    <span class="text-muted text-xs block">{{ Session::get('prodi') }}</span>
                    <span class="text-muted text-xs block">{{ Session::get('jabatan') }}</span> 
                  </span> 
                </a>
              </div>
              <div class="logo-element">
                  IN+
              </div>
            </li>
            <li>
              <a href="{{ route('dashboard') }}"><i class='bx bxs-dashboard' ></i><span class="nav-label">Dashboard</span></a>
            </li>
            @if (Session::get('jabatan') == 'Dosen' || Session::get('jabatan') == 'Kaprodi' || Session::get('jabatan') == 'Dekan')
            <li class="">
              <a href="#"><i class='bx bxs-graduation'></i> 
                <span class="nav-label">Tri Dharma</span> 
                <span class="fa arrow"></span>
              </a>
              <ul class="nav nav-second-level">
                @if(Session::get('jabatan') == 'Kaprodi')
                <li><a href="{{ url('/pengajaran') }}">Pengajaran</a></li>
                @endif
                <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                <li><a href="{{ url('/seminar') }}">Seminar</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ url('/karya') }}"><i class='bx bxs-book'></i><span class="nav-label">Karya</span></a>
            </li>
            <li>
              <a href="{{ url('/kegiatan') }}"><i class='bx bxs-briefcase'></i><span class="nav-label">Kegiatan</span></a>
            </li>
            @endif
            @if(Session::get('jabatan') == 'Superadmin')
            <li>
              <a href="{{ url('/jabatan') }}"><i class='bx bxs-group'></i><span class="nav-label">Jabatan</span></a>
            </li>
            @endif
          </ul>
        </div>
      </nav>
      <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
          <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
              <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to Repo System FKIP USP</span>
              </li>
              <li>
                <a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Log out </a>
              </li>
            </ul>
          </nav>
        </div>
        @yield ('container')
        <div class="footer">
          <div class="pull-right">
            {{-- 10GB of <strong>250GB</strong> Free. --}}
          </div>
          <div>
            <strong>Internal Repo System</strong> &copy; 2023
          </div>
        </div>
      </div>   
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
      $(document).ready(function(){
          $('.dataTables-example').DataTable({
              dom: '<"html5buttons"B>lTfgitp',
              buttons: [
                  { extend: 'copy'},
                  {extend: 'csv'},
                  {extend: 'excel', title: 'ExampleFile'},
                  {extend: 'pdf', title: 'ExampleFile'},

                  {extend: 'print',
                   customize: function (win){
                          $(win.document.body).addClass('white-bg');
                          $(win.document.body).css('font-size', '10px');

                          $(win.document.body).find('table')
                                  .addClass('compact')
                                  .css('font-size', 'inherit');
                  }
                  }
              ]

          });

          /* Init DataTables */
          var oTable = $('#editable').DataTable();

          /* Apply the jEditable handlers to the table */
          oTable.$('td').editable( '../example_ajax.php', {
              "callback": function( sValue, y ) {
                  var aPos = oTable.fnGetPosition( this );
                  oTable.fnUpdate( sValue, aPos[0], aPos[1] );
              },
              "submitdata": function ( value, settings ) {
                  return {
                      "row_id": this.parentNode.getAttribute('id'),
                      "column": oTable.fnGetPosition( this )[2]
                  };
              },

              "width": "90%",
              "height": "100%"
          } );


      });

      function fnClickAddRow() {
          $('#editable').dataTable().fnAddData( [
              "Custom row",
              "New row",
              "New row",
              "New row",
              "New row" ] );

      }

      // Fungsi untuk menampilkan profil dosen pertama secara otomatis pada profile-info
      function showDefaultProfile() {
      var defaultProfile = document.querySelector('.gradeX:first-child');
      highlightProfile(defaultProfile);
      }

      // Fungsi untuk menyorot profil dosen yang dipilih
      function highlightProfile(row) {
      var nama = row.cells[1].textContent;
      var prodi = row.cells[4].textContent;
      var jabatan = row.cells[3].textContent;

      document.getElementById('profile-nama').textContent = nama;
      document.getElementById('profile-prodi').textContent = prodi;
      document.getElementById('profile-jabatan').textContent = jabatan;
      }

      // Panggil fungsi untuk menampilkan profil dosen pertama sebagai default
      showDefaultProfile();

      document.addEventListener('DOMContentLoaded', function() {
      // Ambil elemen "profile-info" dan simpan dalam variabel
      const profileInfo = document.querySelector('.profile-info');

      // Ambil semua baris tabel dosen dan tambahkan event listener
      const tableRows = document.querySelectorAll('tbody tr');
      tableRows.forEach(function(row) {
          row.addEventListener('click', function() {
            // Ambil data profil ID dari atribut data
            const profileId = this.getAttribute('data-profile-id');

            // Ganti konten pada elemen "profile-nama" dengan nama dosen yang dipilih
            document.getElementById('profile-nama').textContent = this.cells[1].textContent;

            // Ganti konten pada elemen "profile-prodi" dengan nama prodi dosen yang dipilih
            document.getElementById('profile-prodi').textContent = this.cells[4].textContent;

            // Ganti konten pada elemen "profile-jabatan" dengan jabatan dosen yang dipilih
            document.getElementById('profile-jabatan').textContent = this.cells[3].textContent;

            // Ganti konten pada elemen "profile-info-description" dengan deskripsi profil dosen
            // Gantilah bagian ini dengan data deskripsi profil dosen yang sesuai dengan profil yang dipilih
            document.getElementById('profile-info-description').textContent =
                'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form Ipsum available.';

            // Tambahkan class "highlight" ke elemen "profile-info" untuk menampilkan highlight
            profileInfo.classList.add('highlight');

            // Jalankan scrollIntoView untuk menjaga agar profil dosen yang dipilih tetap terlihat dalam viewport
            profileInfo.scrollIntoView({ behavior: 'smooth' });

            // Tampilkan atau sembunyikan elemen "profile-info" berdasarkan profil ID
            // Misalnya, Anda dapat menggunakan logika AJAX untuk mengambil detail profil dari server
            // dan menampilkannya dalam elemen "profile-info".
            // Berikut adalah contoh cara menampilkan atau menyembunyikan elemen menggunakan CSS:
            // if (profileId) {
            //     profileInfo.style.display = 'block';
            // } else {
            //     profileInfo.style.display = 'none';
            // }
            });
        });
    });
    </script>

  </body>
</html>
