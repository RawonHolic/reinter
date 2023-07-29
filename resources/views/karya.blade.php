@extends ('layouts.main')

@section ('container')
<div class="wrapper wrapper-content">
  <div class="row">
    <div class="col-lg-4">
      <div class="ibox">
        <div class="ibox-content">
          <h2>Junk MTV quiz graced by fox whelps.</h2>
          <div class="small m-b-xs">
            <strong>alex Trebek</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> 07 Apr 2015</span>
          </div>
          <p>Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just zebra, and my wolves quack! Blowzy red vixens fight for a quick.</p>
          <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the.</p>
          <div class="row">
            <div class="col-md-6">
              <h5>Tags:</h5>
              <button class="btn btn-white btn-xs" type="button">Model</button>
            </div>
            <div class="col-md-6">
              <div class="small text-right">
                <h5>Action</h5>
                <a href="{{ url('/editkarya') }}" class="btn btn-info" type="button"><i class="fa fa-paste"></i> Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Tabel Karya</h5>
        </div>
        <div class="ibox-content">
          <div class="m-b-sm">
            <a href="{{ url('/tambahkarya') }}" class="btn btn-primary ">Tambah Baru</a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <tr>
                  <th class="col-sm-0,5">#</th>
                  <th class="col-sm-5,5">Judul</th>
                  <th class="col-sm-3">Tema</th>
                  <th class="col-sm-3,5">Url</th>
                  <th class="col-sm-0,5">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeC">
                  <td>1</td>
                  <td>Olahraga Teratur Dapat Meningkatkan Kemampuan Tubuh</td>
                  <td>Kebugaran</td>
                  <td>https://example.com/olahraga-teratur-dapat-meningkatkan-kemampuan-tubuh</td>
                  <td class="text-center"> 
                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myModal6"><i class="fa fa-trash"></i></button>
                    <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">&times;</span><span class="sr-only">Hapus</span>
                            </button>
                            <h4 class="modal-title">Hapus Karya</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              Apakah anda yakin untuk <strong>Menghapus</strong> karya yang anda pilih? Pilih batal untuk kembali ke halaman karya
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <a type="button" class="btn btn-primary" href="{{ url('/karya') }}">Hapus</a>
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
</div>
@endsection