@extends ('layouts.main')

@section ('container')
<div class="wrapper wrapper-content">
  <div class="row">
    <div class="col-lg-6">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5> Tabel jabatan </h5>
        </div>
        <div class="ibox-content">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-3">Jabatan</th>
                <th class="col-sm-8">Deskripsi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Dekan</td>
                <td>Lorem ipsum dolor amet</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Kaprodi</td>
                <td>Lorem ipsum dolor amet</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Dosen</td>
                <td>Lorem ipsum dolor amet</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Superadmin</td>
                <td>Lorem ipsum dolor amet</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Tabel Jabatan Dosen</h5>
        </div>
        <div class="ibox-content">
          <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
              <tr>
                <th class="col-sm-0,5">#</th>
                <th class="col-sm-6">Nama</th>
                <th class="col-sm-3">Prodi</th>
                <th class="col-sm-3">Jabatan</th>
                <th class="col-sm-0,5">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="gradeX">
                <td>1</td>
                <td>Tito Pangesti Adji</td>
                <td>Penjas</td>
                <td>Kaprodi</td>
                <td class="text-center"> 
                  <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal6"><i class="fa fa-paste"></i></button>
                  <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Edit</span>
                          </button>
                          <h4 class="modal-title">Ubah Jabatan</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <div class="col-sm-12">
                              <select class="form-control" id="jabatan" name="jabatan" required>
                                <option value="">Pilih Jabatan</option>
                                <option value="1">Superadmin</option>
                                <option value="2">Dekan</option>
                                <option value="3">Kaprodi</option>
                                <option value="4">Dosen</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                          <a type="button" class="btn btn-primary" href="{{ url('/jabatan') }}">Simpan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection