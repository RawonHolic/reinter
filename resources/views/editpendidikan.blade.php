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
  <body class="gray-bg">
    <div id="wrapper">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
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
      <div class="row" style="display: flex; justify-content:center;">
        <div class="col-lg-5 m-t-md">
          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <h5 class="pull-right" style="font-size: 15px">Edit Riwayat Pendidikan</h5>
            </div>
            <div class="ibox-content">
              <form method="POST" action="{{ route('update.pendidikan') }}" class="form-horizontal">
                @csrf
                <div class="form-group"><label class="col-sm-2 control-label">SMA</label>
                  <div class="col-sm-10"><input type="text" placeholder="Nama Sekolah" class="form-control" name="sma" value="{{ $profil->sma }}" required></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Sarjana</label>
                  <div class="col-sm-10">
                    <div class="row m-b-md">
                      <div class="col-md-12"><input type="text" placeholder="Jurusan" class="form-control" name="s_jurusan" value="{{ $profil->s_jurusan }}" required></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><input type="text" placeholder="Nama Perguruan Tinggi" class="form-control" name="sarjana" value="{{ $profil->sarjana }}" required></div>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Magister</label>
                  <div class="col-sm-10">
                    <div class="row m-b-md">
                      <div class="col-md-12"><input type="text" placeholder="Jurusan" class="form-control" name="m_jurusan" value="{{ $profil->m_jurusan }}" required></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><input type="text" placeholder="Nama Perguruan Tinggi" class="form-control" name="magister" value="{{ $profil->magister }}" required></div>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Doktoral</label>
                  <div class="col-sm-10">
                    <div class="row m-b-md">
                      <div class="col-md-12"><input type="text" placeholder="Jurusan" class="form-control" name="d_jurusan" value="{{ $profil->d_jurusan }}" required></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><input type="text" placeholder="Nama Perguruan Tinggi" class="form-control" name="doktoral" value="{{ $profil->doktoral }}" required></div>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Keahlian</label>
                  <div class="col-sm-10">
                    <div class="row m-b-md">
                      <div class="col-md-12"><input type="text" placeholder="Jurusan" class="form-control" name="k_jurusan" value="{{ $profil->k_jurusan }}" required></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><input type="text" placeholder="Nama Perguruan Tinggi" class="form-control" name="keahlian" value="{{ $profil->keahlian }}" required></div>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                @elseif (session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
                @endif
                <div class="form-group">
                  <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-white" type="button" data-toggle="modal" data-target="#myModal6">Batal</button>
                    <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span>
                            </button>
                            <h4 class="modal-title">Batal Simpan</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              Apakah anda yakin untuk <strong>Membatalkan Perubahan</strong> yang telah dilakukan? Pilih batal untuk kembali ke halaman profil
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Lanjut Edit</button>
                            <a type="button" class="btn btn-primary" href="{{ url('/profil') }}">Batal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

  </body>
</html>
