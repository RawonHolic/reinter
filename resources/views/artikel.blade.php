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
                <a href="{{ url('/editartikel') }}" class="btn btn-info" type="button"><i class="fa fa-paste"></i> Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Tabel Artikel</h5>
        </div>
        <div class="ibox-content">
          <div class="m-b-sm">
            <a href="{{ url('/tambahartikel') }}" class="btn btn-primary ">Tambah Baru</a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <tr>
                  <th class="col-sm-0,5">#</th>
                  <th class="col-sm-4">Judul</th>
                  <th class="col-sm-2">Tema</th>
                  <th class="col-sm-2">Indeks</th>
                  <th class="col-sm-3">Url</th>
                  <th class="col-sm-0,5">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeC">
                  <td class="text-center">1</td>
                  <td>Lorem Ipsum Dolor Amet</td>
                  <td>Olahraga</td>
                  <td>Scopus</td>
                  <td>https://example.com/lorem-ipsum-dolor-amet</td>
                  <td class="text-center"> 
                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myModal6"><i class="fa fa-trash"></i></button>
                    <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">&times;</span><span class="sr-only">Hapus</span>
                            </button>
                            <h4 class="modal-title">Hapus Artikel</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              Apakah anda yakin untuk <strong>Menghapus</strong> artikel yang anda pilih? Pilih batal untuk kembali ke halaman artikel
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <a type="button" class="btn btn-primary" href="{{ url('/artikel') }}">Hapus</a>
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