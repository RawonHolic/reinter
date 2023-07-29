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
                  <img alt="image" class="img-circle" src="img/Tito_small.png" />
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
              <a href="{{ url('/') }}"><i class='bx bxs-dashboard' ></i><span class="nav-label">Dashboard</span></a>
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
    </script>

  </body>
</html>
