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
      <div class="row" style="display: flex; justify-content:center;">
        <div class="col-lg-5 m-t-md">
          <div class="ibox float-e-margins">
            <div>
              <h2 class="text-center m-lg" style="font-weight: 800">Registrasi</h2>
            </div>
            <div class="ibox-content">
              <form role="form" class="form-horizontal" action="/register" method="POST">
                @csrf
                <div class="form-group m-t-md">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Kab/Kota" id="tempat_lahir" name="tempat_lahir" required>
                  </div>
                  <div class="form-group" id="data_1">
                    <div class="col-sm-5">
                      <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Kelamin</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="kelamin" name="kelamin" required>
                      <option value="">Pilih jenis kelamin</option>
                      <option value="Pria">Pria</option>
                      <option value="Wanita">Wanita</option>
                    </select>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                      <div class="row m-b-md">
                          <div class="col-md-12">
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" placeholder="Kab/Kota" class="form-control" id="alamat_kabkot" name="alamat_kabkot" required>
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Provinsi" class="form-control" id="alamat_prov" name="alamat_prov" required>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. HP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" required>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Identitas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Program Studi</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="prodi" name="prodi" required>
                      <option value="">Pilih Program Studi</option>
                      <option value="1">Pendidikan Jasmani</option>
                      <option value="2">PGSD</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="jabatan" name="jabatan" required>
                      <option value="">Pilih Jabatan</option>
                      <option value="1">Superadmin</option>
                      <option value="2">Dekan</option>
                      <option value="3">Kaprodi</option>
                      <option value="4">Dosen</option>
                    </select>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Account</label>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" placeholder="Username" class="form-control" id="username" name="username" required>
                      </div>
                      <div class="col-md-6">
                        <input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
                      </div>
                    </div>
                    <span class="help-block m-b-none">Username dan Password digunakan untuk login</span>
                  </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                  <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-white" type="button" data-toggle="modal" data-target="#myModal6">Batal</button>
                    <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">&times;</span><span class="sr-only">Batal</span>
                            </button>
                            <h4 class="modal-title">Batal Simpan</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              Apakah anda yakin untuk <strong>Membatalkan Perubahan</strong> yang telah dilakukan? Pilih batal untuk kembali ke halaman login
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Lanjut Daftar</button>
                            <a type="button" class="btn btn-primary" href="{{ url('login') }}">Batal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Daftar</button>
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
    
    <!-- Data picker -->
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script>
      $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
    </script>

  </body>
</html>
