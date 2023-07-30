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
              <form method="POST" action="{{ route('update.pengalaman') }}" class="form-horizontal">
                @csrf
                <div class="form-group"><label class="col-sm-2 control-label">Organisasi</label>
                  <div class="col-sm-10">
                    <div class="row m-b-md">
                      <div class="col-md-8"><input type="text" placeholder="Nama Organisasi" class="form-control" name="organisasi" value="{{ $profil->organisasi }}" required></div>
                      <div class="col-md-4"><input type="text" placeholder="Jabatan" class="form-control" name="o_jabatan" value="{{ $profil->o_jabatan }}" required></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><input type="text" placeholder="Deskripsi" class="form-control" name="o_deskripsi" value="{{ $profil->o_deskripsi }}" required></div>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Instansi</label>
                  <div class="col-sm-10">
                    <div class="row m-b-md">
                      <div class="col-md-8"><input type="text" placeholder="Nama Instansi" class="form-control" name="instansi" value="{{ $profil->instansi }}" required></div>
                      <div class="col-md-4"><input type="text" placeholder="Jabatan" class="form-control" name="i_jabatan" value="{{ $profil->i_jabatan }}" required></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><input type="text" placeholder="Deskripsi" class="form-control" name="i_deskripsi" value="{{ $profil->i_deskripsi }}" required></div>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Perusahaan</label>
                  <div class="col-sm-10">
                    <div class="row m-b-md">
                      <div class="col-md-8"><input type="text" placeholder="Nama Perusahaan" class="form-control" name="perusahaan" value="{{ $profil->perusahaan }}" required></div>
                      <div class="col-md-4"><input type="text" placeholder="Jabatan" class="form-control" name="p_jabatan" value="{{ $profil->p_jabatan }}" required></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><input type="text" placeholder="Deskripsi" class="form-control" name="p_deskripsi" value="{{ $profil->p_deskripsi }}" required></div>
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
                    <button class="btn btn-white" type="button" data-toggle="modal" data-target="#myModal6">Cancel</button>
                    <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title">Batal Simpan</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              Apakah anda yakin untuk <strong>Membatalkan Perubahan</strong> yang telah dilakukan? Pilih batal untuk kembali ke halaman profil
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Kembali</button>
                            <a type="button" class="btn btn-primary" href="{{ url('/profil') }}">Batal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save changes</button>
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
