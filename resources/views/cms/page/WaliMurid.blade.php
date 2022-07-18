@extends('cms.layout.TemplateAdmin')
@section('content')
    <div class="col-sm-12">
        <h5 class="mt-4">Data Wali Murid</h5>
        <hr>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-table-tab" data-toggle="pill" href="#pills-table" role="tab"
                    aria-controls="pills-table" aria-selected="true">Tabel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-form-tab" data-toggle="pill" href="#pills-form" role="tab"
                    aria-controls="pills-form" aria-selected="false">Form</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab">
                <div class="col-md-12">
                    <h5>Tabel Data Wali Murid</h5>
                    <div class="table-responsive">
                        <table class="table table-inverse" id="DataTable">
                            <thead>
                                <tr>
                                    <th style="width: 5px;">#</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Jk</th>
                                    <th style="width: 30px;">info</th>
                                    <th style="width: 25px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>5530332393</td>
                                    <td>Irwandi Paputungan</td>
                                    <td>Laki laki</td>
                                    <td>
                                        <a href="#" class="link-button"><i class="feather icon-info"></i> Detail</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary"><i
                                                class="far fa-edit"></i>Edit</button>
                                        <button class="btn btn-sm btn-danger"><i
                                                class="fas fa-minus-square"></i>Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab">
                <blockquote class="blockquote mb-4">
                    <p class="mb-2">Tambahkan data yang sesuai.
                    </p>
                    <footer class="blockquote-footer">Formulir Inputan
                    </footer>
                </blockquote>
                <form id="form-simpan">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk KTP</label>
                                <input name="nik" type="number" class="form-control form-control-sm" placeholder="NIK">
                                <small id="nik-alert" class="text-alert"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="laki laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <small id="jk-alert" class="text-alert"></small>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input name="tempat_lahir" type="text" class="form-control form-control-sm"
                                    placeholder="Tempat Lahir">
                                <small id="tempat_lahir-alert" class="text-alert"></small>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <select name="pekerjaan" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="pns guru">PNS Guru</option>
                                    <option value="pns abri">PNS Abri</option>
                                    <option value="pegawai kontrak">Pegawai Kontrak</option>
                                    <option value="wirausaha/pedagang">Wirausaha/Pedagang</option>
                                    <option value="petani">Petani</option>
                                    <option value="tukang">Tukang</option>
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                </select>
                                <small id="pekerjaan-alert" class="text-alert"></small>
                            </div>
                            <div class="form-group">
                                <label>Penghasilan</label>
                                <input name="penghasilan" type="number" class="form-control form-control-sm"
                                    placeholder="Rupiah">
                                <small id="penghasilan-alert" class="text-alert"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control form-control-sm"
                                    placeholder="Nama lengkap">
                                <small id="nama-alert" class="text-alert"></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input name="tgl_lahir" type="date" class="form-control form-control-sm">
                                <small id="tgl_lahir-alert" class="text-alert"></small>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="islam">Islam</option>
                                    <option value="kriten">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                                <small id="agama-alert" class="text-alert"></small>
                            </div>
                            <div class="form-group">
                                <label>Status Dalam Keluarga</label>
                                <select name="status_dalam_keluarga" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="kepala keluarga">Kepala Keluarga</option>
                                    <option value="istri">Istri</option>
                                    <option value="saudara">Saudara</option>
                                    <option value="wali">Wali</option>
                                </select>
                                <small id="status_dalam_keluarga-alert" class="text-alert"></small>
                            </div>
                            <div class="form-group">
                                <label>Upload Foto</label>
                                <input name="path_img" type="file" class="form-control form-control-sm"
                                    placeholder="Rupiah">
                                <small id="path_img-alert" class="text-alert"></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="button" id="btn-simpan" class="btn btn-primary mt-2"><i
                                    class="far fa-paper-plane"></i>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#DataTable').DataTable();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $(document).on('click', '#btn-simpan', function() {
            let url = `{{ config('app.url') }}/walimurid`;
            let data = new FormData($('#form-simpan')[0]);
            $.ajax({
                url: url,
                type: "POST",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(result) {
                    console.log(result);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    </script>
@endsection
