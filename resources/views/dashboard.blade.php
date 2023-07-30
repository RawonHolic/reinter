@extends('layouts.main')

@section ('container')
<div class="wrapper wrapper-content">
  <div class="row">
    <div class="col-lg-3">
      <div class="ibox float-e-margins">
        <div class="ibox-title navy-bg">
          <h5 style="font-size: 18px">Karya</h5>
        </div>
        <div class="widget style1">
          <div class="row">
            <div class="col-xs-4 text-center">
              <i class="bx bxs-book-alt fa-5x"></i>
            </div>
            <div class="col-xs-8 text-right">
              <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" style="font-size: 14px">Fakultas <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#" class="font-bold" style="font-size: 13px">Penjas</a></li>
                  <li><a href="#" class="font-bold" style="font-size: 13px">PGSD</a></li>
                </ul>
              </div>
              <h2 class="font-bold" style="font-size: 40px">29</h2>
              <span>Jumlah Karya</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="ibox float-e-margins">
        <div class="ibox-title navy-bg">
          <h5 style="font-size: 18px">Artikel</h5>
        </div>
        <div class="widget style1">
          <div class="row">
            <div class="col-xs-4 text-center">
              <i class="bx bxs-file-find fa-5x"></i>
            </div>
            <div class="col-xs-8 text-right">
              <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" style="font-size: 14px">Fakultas <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#" class="font-bold" style="font-size: 13px">Penjas</a></li>
                  <li><a href="#" class="font-bold" style="font-size: 13px">PGSD</a></li>
                </ul>
              </div>
              <h2 class="font-bold" style="font-size: 40px">108</h2>
              <span>Jumlah Artikel</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="ibox float-e-margins">
        <div class="ibox-title navy-bg">
          <h5 style="font-size: 18px">Seminar</h5>
        </div>
        <div class="widget style1">
          <div class="row">
            <div class="col-xs-4 text-center">
              <i class="bx bxs-user-voice fa-5x"></i>
            </div>
            <div class="col-xs-8 text-right">
              <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" style="font-size: 14px">Fakultas <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#" class="font-bold" style="font-size: 13px">Penjas</a></li>
                  <li><a href="#" class="font-bold" style="font-size: 13px">PGSD</a></li>
                </ul>
              </div>
              <h2 class="font-bold" style="font-size: 40px">87</h2>
              <span>Jumlah Seminar</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="ibox float-e-margins">
        <div class="ibox-title navy-bg">
          <h5 style="font-size: 18px">Kegiatan</h5>
        </div>
        <div class="widget style1">
          <div class="row">
            <div class="col-xs-4 text-center">
              <i class="bx bxs-briefcase fa-5x"></i>
            </div>
            <div class="col-xs-8 text-right">
              <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" style="font-size: 14px">Fakultas <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#" class="font-bold" style="font-size: 13px">Penjas</a></li>
                  <li><a href="#" class="font-bold" style="font-size: 13px">PGSD</a></li>
                </ul>
              </div>
              <h2 class="font-bold" style="font-size: 40px">58</h2>
              <span>Jumlah Kegiatan</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-6">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Persentase antar Program Studi</h5>
          </div>
          <div class="ibox-content">
            <div class="text-center">
              <canvas id="pieChart" width="50"></canvas>
            </div>
            <div class="text-center" style="margin-top: 50px;">
              <div class="padding: 10px;">
                <button type="button" class="btn btn-outline btn-default" style="margin: 2px">Semua</button>
                <button type="button" class="btn btn-outline btn-primary" style="margin: 2px">Karya</button>
                <button type="button" class="btn btn-outline btn-primary" style="margin: 2px">Artikel</button>
                <button type="button" class="btn btn-outline btn-primary" style="margin: 2px">Seminar</button>
                <button type="button" class="btn btn-outline btn-primary" style="margin: 2px">Kegiatan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Perbandingan antar Program Studi</h5>
          </div>
          <div class="ibox-content">
            <div class="text-center">
              <canvas id="barChart"></canvas>
            </div>
            <div class="text-center" style="margin-top: 50px;">
              <div class="padding: 10px;">
                <button type="button" class="btn btn-outline btn-default" style="margin: 2px">Semua</button>
                <button type="button" class="btn btn-outline btn-primary" style="margin: 2px">Karya</button>
                <button type="button" class="btn btn-outline btn-primary" style="margin: 2px">Artikel</button>
                <button type="button" class="btn btn-outline btn-primary" style="margin: 2px">Seminar</button>
                <button type="button" class="btn btn-outline btn-primary" style="margin: 2px">Kegiatan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="ibox">
        <div class="ibox-content">
          <div class="tab-content">
            <div id="contact-1" class="tab-pane-active">
              <div class="row m-b-lg">
                <div class="col-md-12">
                  <div class="profile-image">
                      <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                  </div>
                  <div class="profile-info">
                      <div class="">
                          <div>
                              <h2 class="no-margins" id="profile-nama"></h2>
                              <h4 id="profile-prodi"></h4>
                              <h4 id="profile-jabatan"></h4>
                              <small id="profilr-info-description">
                                  There are many variations of passages of Lorem Ipsum available, but the majority
                                  have suffered alteration in some form Ipsum available.
                              </small>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
              <div class="">
                <div>
                  <div class="col-lg-12 m-b-md">
                    <div class="tabs-container">
                      <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#tab-1"> <i class="fa fa-laptop"></i></a></li>
                          <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-book"></i></a></li>
                          <li class=""><a data-toggle="tab" href="#tab-3"><i class="fa fa-mortar-board"></i></a></li>
                          <li class=""><a data-toggle="tab" href="#tab-4"><i class="fa fa-group"></i></a></li>
                          <li class=""><a data-toggle="tab" href="#tab-5"><i class="fa fa-briefcase"></i></a></li>
                      </ul>
                      <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                          <div class="panel-body">
                            <strong>Aktivitas Terakhir</strong>
                            <ul class="list-group clear-list">
                              <li class="list-group-item fist-item">
                                <span class="pull-right"> 10:16 am </span>
                                <br>
                                <span class="pull-right"> Sabtu 12/12/2022 </span>
                                  Karya
                              </li>
                              <li class="list-group-item">
                                <span class="pull-right"> 10:16 am </span>
                                <br>
                                <span class="pull-right"> Sabtu 12/12/2022 </span>
                                  Artikel
                              </li>
                              <li class="list-group-item">
                                <span class="pull-right"> 10:16 am </span>
                                <br>
                                <span class="pull-right"> Sabtu 12/12/2022 </span>
                                  Seminar
                              </li>
                              <li class="list-group-item">
                                <span class="pull-right"> 10:16 am </span>
                                <br>
                                <span class="pull-right"> Sabtu 12/12/2022 </span>
                                  Kegiatan
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                          <div class="panel-body">
                            <div class="ibox">
                              <strong>Karya terbaru</strong>
                              <div class="ibox-content m-t-md">
                                <a href="article.html" class="btn-link">
                                  <h2>
                                      One morning, when Gregor Samsa
                                  </h2>
                                </a>
                                <div class="small m-b-xs">
                                  <strong>Adam Novak</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> 28th Oct 2015</span>
                                </div>
                                  <p>
                                      English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                  </p>
                                <div class="row">
                                  <div class="col-md-6">
                                          <h5>Tags:</h5>
                                          <button class="btn btn-primary btn-xs" type="button">Model</button>
                                          <button class="btn btn-white btn-xs" type="button">Publishing</button>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="small text-right">
                                        <h5>Stats:</h5>
                                        <div> <i class="fa fa-comments-o"> </i> 56 comments </div>
                                        <i class="fa fa-eye"> </i> 144 views
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                          <div class="panel-body">
                            <div class="ibox">
                              <strong>Artikel terbaru</strong>
                              <div class="ibox-content m-t-md">
                                <a href="article.html" class="btn-link">
                                  <h2>
                                      One morning, when Gregor Samsa
                                  </h2>
                                </a>
                                <div class="small m-b-xs">
                                  <strong>Adam Novak</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> 28th Oct 2015</span>
                                </div>
                                  <p>
                                      English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                  </p>
                                <div class="row">
                                  <div class="col-md-6">
                                          <h5>Tags:</h5>
                                          <button class="btn btn-primary btn-xs" type="button">Model</button>
                                          <button class="btn btn-white btn-xs" type="button">Publishing</button>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="small text-right">
                                        <h5>Stats:</h5>
                                        <div> <i class="fa fa-comments-o"> </i> 56 comments </div>
                                        <i class="fa fa-eye"> </i> 144 views
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                          <div class="panel-body">
                            <div class="ibox">
                              <strong>Seminar terbaru</strong>
                              <div class="ibox-content m-t-md">
                                <a href="article.html" class="btn-link">
                                  <h2>
                                      One morning, when Gregor Samsa
                                  </h2>
                                </a>
                                <div class="small m-b-xs">
                                  <strong>Adam Novak</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> 28th Oct 2015</span>
                                </div>
                                  <p>
                                      English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                  </p>
                                <div class="row">
                                  <div class="col-md-6">
                                          <h5>Tags:</h5>
                                          <button class="btn btn-primary btn-xs" type="button">Model</button>
                                          <button class="btn btn-white btn-xs" type="button">Publishing</button>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="small text-right">
                                        <h5>Stats:</h5>
                                        <div> <i class="fa fa-comments-o"> </i> 56 comments </div>
                                        <i class="fa fa-eye"> </i> 144 views
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="tab-5" class="tab-pane">
                          <div class="panel-body">
                            <div class="ibox">
                              <strong>Kegiatan terbaru</strong>
                              <div class="ibox-content m-t-md">
                                <a href="article.html" class="btn-link">
                                  <h2>
                                      One morning, when Gregor Samsa
                                  </h2>
                                </a>
                                <div class="small m-b-xs">
                                  <strong>Adam Novak</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> 28th Oct 2015</span>
                                </div>
                                  <p>
                                      English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                  </p>
                                <div class="row">
                                  <div class="col-md-6">
                                          <h5>Tags:</h5>
                                          <button class="btn btn-primary btn-xs" type="button">Model</button>
                                          <button class="btn btn-white btn-xs" type="button">Publishing</button>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="small text-right">
                                        <h5>Stats:</h5>
                                        <div> <i class="fa fa-comments-o"> </i> 56 comments </div>
                                        <i class="fa fa-eye"> </i> 144 views
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <strong>Catatan</strong>
                  <p>Diatas adalah aktivitas terbaru beserta karya, artikel, seminar dan kegiatan yang paling akhir di upload</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Daftar Dosen</h5>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <tr>
                  <th class="col-sm-0,5">#</th>
                  <th class="col-sm-2,5">Nama Dosen</th>
                  <th class="col-sm-2">NIP</th>
                  <th class="col-sm-1">Jabatan</th>
                  <th class="col-sm-2">Prodi</th>
                  <th class="col-sm-2">Email</th>
                  <th class="col-sm-2">No. Hp</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($profils as $profil)
                <tr class="gradeX" onclick="highlightProfile(this)" data-profile-id="{{ $profil->id }}">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $profil->nama }}</td>
                  <td>{{ $profil->no_identitas }}</td>
                  <td>{{ $profil->jabatan->jabatan }}</td>
                  <td>{{ $profil->prodi->nama_prodi }}</td>
                  <td>{{ $profil->email }}</td>
                  <td>{{ $profil->no_hp }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
  