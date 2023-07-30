@extends ('layouts.main')

@section ('container')
<div class="wrapper wrapper-content">
  <div class="row animated fadeInRight">
    <div class="col-md-4">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Detail Profil</h5>
        </div>
        <div>
          <div class="ibox-content no-padding border-left-right">
            <img alt="image" class="img-responsive" src="img/Tito_big.png">
          </div>
          <div class="ibox-content profile-content">
            <h4><strong>{{ Session::get('nama') }}</strong></h4>
            <p><i class="fa fa-map-marker"></i> {{ Session::get('alamat_kabkot') }}, {{ Session::get('alamat_prov') }}</p>
            <h5>Tentang saya</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="tabs-container">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#tab-1"> Data diri</a></li>
          <li class=""><a data-toggle="tab" href="#tab-2">Tentang Saya</a></li>
         </ul>
        <div class="tab-content">
          <div id="tab-1" class="tab-pane active">
            <div class="panel-body">
              <div class="ibox">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="m-b-md">
                      <dl class="dl-horizontal">
                        </dt> <dd><div class="btn-group pull-right">
                          <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" style="font-size: 14px">Edit Informasi <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="{{ route('edit.biodata') }}" class="font-bold" style="font-size: 13px">Biodata</a></li>
                            <li><a href="{{ route('edit.pendidikan') }}" class="font-bold" style="font-size: 13px">Pendidikan</a></li>
                            <li><a href="{{ route('edit.pengalaman') }}" class="font-bold" style="font-size: 13px">Pengalaman</a></li>
                          </ul>
                        </div></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <dl class="dl-horizontal" style="font-size: 15px">
                      <div class="row">
                        <div class="col-lg-6">
                          <dl class="dl-horizontal">
                            <div class="m-b-md">
                              <dt><h2>Biodata</h2></dt>
                            </div>
                          </dl>
                        </div>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Nama Lengkap</dt> <dd>{{ Session::get('nama') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Tempat Lahir</dt> <dd>{{ Session::get('tempat_lahir') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Tanggal Lahir</dt> <dd>{{ Session::get('tanggal_lahir') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Kelamin</dt> <dd>{{ Session::get('kelamin') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Alamat</dt> <dd>{{ Session::get('alamat') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>No. HP</dt> <dd>{{ Session::get('no_hp') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Email</dt> <dd>{{ Session::get('email') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>No. Identitas</dt> <dd>{{ Session::get('no_identitas') }}</dd>
                      </div>
                    </dl>
                  </div>
                  <div class="col-lg-6" id="cluster_info">
                    <dl class="dl-horizontal" style="font-size: 15px" >
                      <div class="row">
                        <div class="col-lg-6">
                          <dl class="dl-horizontal">
                            <div class="m-b-md">
                              <dt><h2>Pendidikan</h2></dt>
                            </div>
                          </dl>
                        </div>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>SMA</dt> <dd>{{ Session::get('sma') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Sarjana</dt> <dd>{{ Session::get('sarjana') }}</dd>
                        <dt>Jurusan</dt> <dd>{{ Session::get('s_jurusan') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Magister</dt> <dd>{{ Session::get('magister') }}</dd>
                        <dt>Jurusan</dt> <dd>{{ Session::get('m_jurusan') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Doktoral</dt> <dd>{{ Session::get('doktoral') }}</dd>
                        <dt>Jurusan</dt> <dd>{{ Session::get('d_jurusan') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Keahlian</dt> <dd>{{ Session::get('k_jurusan') }}</dd>
                        <dt>Perguruan Tinggi</dt> <dd>{{ Session::get('keahlian') }}</dd>
                      </div>
                    </dl>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <dl class="dl-horizontal" style="font-size: 15px">
                      <div class="row">
                        <div class="col-lg-6">
                          <dl class="dl-horizontal">
                            <div class="m-b-md">
                              <dt><h2>Pengalaman</h2></dt>
                            </div>
                          </dl>
                        </div>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Organisasi</dt> <dd>{{ Session::get('organisasi') }}</dd>
                        <dt>Jabatan</dt> <dd>{{ Session::get('o_jabatan') }}</dd>
                        <dt>Deskripsi</dt> <dd>{{ Session::get('o_deskripsi') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Intansi</dt> <dd>{{ Session::get('instansi') }}</dd>
                        <dt>Jabatan</dt> <dd>{{ Session::get('i_jabatan') }}</dd>
                        <dt>Deskripsi</dt> <dd>{{ Session::get('i_deskripsi') }}</dd>
                      </div>
                      <div style="padding-bottom: 5px">
                        <dt>Perusahaan</dt> <dd>{{ Session::get('perusahaan') }}</dd>
                        <dt>Jabatan</dt> <dd>{{ Session::get('p_jabatan') }}</dd>
                        <dt>Deskripsi</dt> <dd>{{ Session::get('p_deskripsi') }}</dd>
                      </div>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2" class="tab-pane">
            <div class="panel-body">
              <strong>Donec quam felis</strong>
              <p>
                Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insectsand flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath
              </p>
              <p>
                I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisitesense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection