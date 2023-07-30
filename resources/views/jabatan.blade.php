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
              @foreach ($jabatanDosen as $jabatan)
              <tr class="gradeX">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jabatan->nama }}</td>
                <td>
                  @if ($jabatan->prodi)
                    {{ $jabatan->prodi->nama_prodi }}
                  @else
                    Tidak ada prodi
                  @endif
                </td>
                <td>
                  @if ($jabatan->jabatan)
                    {{ $jabatan->jabatan->jabatan }}
                  @else
                    Tidak ada jabatan
                  @endif
                </td>
                <td class="text-center"> 
                  <button class="btn btn-info btn-edit-jabatan" type="button" data-toggle="modal" data-target="#myModal6" data-jabatan-id="{{ $jabatan->jabatan_id }}"><i class="fa fa-paste"></i></button>
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
                              <select class="form-control jabatan-select" id="jabatan_{{ $jabatan->id }}" name="jabatan" required>
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatanOptions as $jabatanOption)
                                <option value="{{ $jabatanOption->jabatan_id }}">{{ $jabatanOption->jabatan }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                          <a type="button" class="btn btn-primary btn-save-jabatan" data-jabatan-id="{{ $jabatan->id }}" href="{{ url('/jabatan') }}">Simpan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
  // Inisialisasi DataTables
  $('.dataTables-example').DataTable();

  // Ketika tombol modal dibuka, isi nilai jabatan saat ini dari atribut data-jabatan-id
  $(document).on('click', '.btn-edit-jabatan', function() {
    var jabatanId = $(this).data('jabatan-id'); // Ambil nilai ID jabatan dari atribut data-jabatan-id
    $('#jabatan_' + jabatanId).val(jabatanId); // Set nilai jabatan pada dropdown select modal
    $('#myModal6_' + jabatanId).modal('show'); // Tampilkan modal
  });

  // Ketika tombol "Simpan" di klik dalam modal, kirim data jabatan yang telah diubah ke server
  $(document).on('click', '.btn-save-jabatan', function() {
    var jabatanId = $(this).data('jabatan-id'); // Ambil nilai ID jabatan dari atribut data-jabatan-id
    var jabatanVal = $('#jabatan_' + jabatanId).val(); // Ambil nilai ID jabatan yang dipilih dari dropdown select modal

    // Lakukan AJAX request untuk mengirim data jabatan ke server
    $.ajax({
      type: 'POST',
      url: '/update-jabatan', // Ganti dengan URL endpoint untuk mengupdate jabatan
      data: {
        _token: '{{ csrf_token() }}', // Jangan lupa sertakan CSRF token jika menggunakan Laravel
        jabatanId: jabatanId, // Kirim ID jabatan yang baru dipilih
        jabatan: jabatanVal // Kirim nilai jabatan yang dipilih
        // ... (jika ada data lain yang ingin dikirim ke server)
      },
      success: function(response) {
        // Handle response dari server (jika diperlukan)
        // Misalnya, tampilkan pesan sukses atau reload halaman untuk melihat perubahan
        location.reload(); // Contoh: reload halaman untuk melihat perubahan
      },
      error: function(xhr, status, error) {
        // Handle error jika terjadi masalah dalam request
        console.error(error); // Contoh: log error ke console
      }
    });
  });
});
</script>
@endsection