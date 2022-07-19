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
                                    <th style="width: 20px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->nik }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->jk }}</td>
                                        <td>
                                            <btn id="btn-info" data-id="{{ $d->id }}" class="link-button"><i
                                                    class="feather icon-info"></i>
                                                Detail</btn>
                                        </td>
                                        <td>
                                            <button id="btn-edit" data-id="{{ $d->id }}" type="button"
                                                class="btn btn-sm btn-secondary"><i class="far fa-edit"></i>Edit</button>
                                            <button id="btn-hapus" data-id="{{ $d->id }}"
                                                class="btn btn-sm btn-danger"><i
                                                    class="fas fa-minus-square"></i>Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach
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
                                <small id="nik-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="laki laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <small id="jk-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input name="tempat_lahir" type="text" class="form-control form-control-sm"
                                    placeholder="Tempat Lahir">
                                <small id="tempat_lahir-alert" class="text-danger"></small>
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
                                <small id="pekerjaan-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Penghasilan</label>
                                <input name="penghasilan" type="number" class="form-control form-control-sm"
                                    placeholder="Rupiah">
                                <small id="penghasilan-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control form-control-sm"
                                    placeholder="Nama lengkap">
                                <small id="nama-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input name="tgl_lahir" type="date" class="form-control form-control-sm">
                                <small id="tgl_lahir-alert" class="text-danger"></small>
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
                                <small id="agama-alert" class="text-danger"></small>
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
                                <small id="status_dalam_keluarga-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3"></textarea>
                                <small id="alamat-alert" class="text-danger"></small>
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
        let form = (data) => {
            $('#form-update').append(`
            <div class="row">
                <input type="hidden" name="id" value="${data.id}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nomor Induk KTP</label>
                        <input name="nik" type="number" class="form-control form-control-sm" placeholder="NIK" value="${data.nik}">
                        <small id="nik-alert2" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select id="jk" name="jk" class="form-control form-control-sm">
                            <option selected disabled>-Pilih-</option>
                            <option value="laki laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <small id="jk-alert2" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" class="form-control form-control-sm"
                            placeholder="Tempat Lahir" value="${data.tempat_lahir}">
                        <small id="tempat_lahir-alert2" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <select id="pekerjaan" name="pekerjaan" class="form-control form-control-sm">
                            <option selected disabled>-Pilih-</option>
                            <option value="pns guru">PNS Guru</option>
                            <option value="pns abri">PNS Abri</option>
                            <option value="pegawai kontrak">Pegawai Kontrak</option>
                            <option value="wirausaha/pedagang">Wirausaha/Pedagang</option>
                            <option value="petani">Petani</option>
                            <option value="tukang">Tukang</option>
                            <option value="tidak bekerja">Tidak Bekerja</option>
                        </select>
                        <small id="pekerjaan-alert2" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Penghasilan</label>
                        <input name="penghasilan" type="number" class="form-control form-control-sm"
                            placeholder="Rupiah" value="${data.penghasilan}">
                        <small id="penghasilan-alert2" class="text-danger"></small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control form-control-sm"
                            placeholder="Nama lengkap" value="${data.nama}">
                        <small id="nama-alert2" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control form-control-sm">
                        <small id="tgl_lahir-alert2" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select id="agama" name="agama" class="form-control form-control-sm">
                            <option selected disabled>-Pilih-</option>
                            <option value="islam">Islam</option>
                            <option value="kriten">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                        </select>
                        <small id="agama-alert2" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Status Dalam Keluarga</label>
                        <select id="status_dalam_keluarga" name="status_dalam_keluarga" class="form-control form-control-sm">
                            <option selected disabled>-Pilih-</option>
                            <option value="kepala keluarga">Kepala Keluarga</option>
                            <option value="istri">Istri</option>
                            <option value="saudara">Saudara</option>
                            <option value="wali">Wali</option>
                        </select>
                        <small id="status_dalam_keluarga-alert2" class="text-danger"></small>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3">${data.alamat}</textarea>
                        <small id="alamat-alert2" class="text-danger"></small>
                    </div>
                </div>
            </div>
            `);

            $('#jk').val(data.jk);
            $('#pekerjaan').val(data.pekerjaan);
            $('#agama').val(data.agama);
            $('#status_dalam_keluarga').val(data.status_dalam_keluarga);
            $('#tgl_lahir').val(data.tgl_lahir);
        };

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
            let data = $('#form-simpan').serialize();
            $.ajax({
                url: url,
                type: "POST",
                data: data,
                success: function(result) {
                    Swal.fire({
                        title: result.response.title,
                        text: result.response.message,
                        icon: result.response.icon,
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Oke'
                    }).then((result) => {
                        location.reload();
                    });
                },
                error: function(err) {
                    let data = err.responseJSON
                    let errorRes = data.errors
                    Swal.fire({
                        icon: data.response.icon,
                        title: data.response.title,
                        text: data.response.message,
                    });
                    if (errorRes.length >= 1) {
                        $('.miniAlert').html('');
                        $.each(errorRes.data, function(i, value) {
                            $(`#${i}-alert`).html(value);
                        });
                    }
                }
            });
        });

        $(document).on('click', '#btn-edit', function() {
            let _id = $(this).data('id');
            let url = `{{ config('app.url') }}/walimurid/${_id}`

            $.get(url, function(result) {
                $('.modal-title').html('Ubah data');
                $('#form-update').html('');
                let resdata = result.data;
                form(resdata);
                $('#modalUniv').modal('show');
            });
        });

        $(document).on('click', '#btn-update', function() {
            let _id = $('input[name="id"]').val();
            let url = `{{ config('app.url') }}/walimurid/${_id}`;
            let data = $('#form-update').serialize();
            $('#modalUniv').modal('hide');
            $.ajax({
                url: url,
                type: "PATCH",
                data: data,
                success: function(result) {
                    console.log(result);
                    Swal.fire({
                        title: result.response.title,
                        text: result.response.message,
                        icon: result.response.icon,
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Oke'
                    }).then((result) => {
                        location.reload();
                    });
                },
                error: function(err) {
                    let data = err.responseJSON
                    let errorRes = data.errors
                    Swal.fire({
                        icon: data.response.icon,
                        title: data.response.title,
                        text: data.response.message,
                        confirmButtonText: 'Oke'
                    }).then(() => {
                        $('#modalUniv').modal('show');
                        if (errorRes.length >= 1) {
                            $('.miniAlert').html('');
                            $.each(errorRes.data, function(i, value) {
                                $(`#${i}-alert2`).html(value);
                            });
                        }
                    });
                }
            });
        });

        $(document).on('click', '#btn-hapus', function() {
            let _id = $(this).data('id');
            let url = `{{ config('app.url') }}/walimurid/${_id}`;

            Swal.fire({
                title: 'Anda Yakin?',
                text: "Data ini mungkin terhubung ke tabel yang lain!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus'
            }).then((res) => {
                if (res.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'delete',
                        success: function(result) {
                            let data = result.data;
                            Swal.fire({
                                title: result.response.title,
                                text: result.response.message,
                                icon: result.response.icon,
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Oke'
                            }).then((result) => {
                                location.reload();
                            });
                        },
                        error: function(result) {
                            let data = result.responseJSON
                            Swal.fire({
                                icon: data.response.icon,
                                title: data.response.title,
                                text: data.response.message,
                            });
                        }
                    });
                }
            })
        });
    </script>
@endsection
