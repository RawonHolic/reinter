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
          <table class="table table-striped table-bordered table-hover " id="editable" >
            <thead>
              <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-6">Nama</th>
                <th class="col-sm-3">Prodi</th>
                <th class="col-sm-3">Jabatan</th>
              </tr>
            </thead>
            <tbody>
              <tr class="gradeX">
                <td>1</td>
                <td>Tito Pangesti Adji</td>
                <td>Penjas</td>
                <td>Kaprodi</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection