@extends('cms.layout.TemplateAdmin')
@section('content')
    <div class="col-sm-12">
        <h5 class="mt-4">Data Pendaftar</h5>
        <hr>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-table-tab" data-toggle="pill" href="#pills-table" role="tab"
                    aria-controls="pills-table" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-form-tab" data-toggle="pill" href="#pills-form" role="tab"
                    aria-controls="pills-form" aria-selected="false">Profile</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <h5>Tabel Data</h5>
                        </div>
                        <div class="col-md-4 float-right">
                            <input type="text" id="years-regist" class="form-control form-filter"
                                placeholder="Pilih Tahun Ajaran: {{ date('Y') }}">
                        </div>
                    </div>
                    <div class="" style="margin-top: 25px;">
                        <table class="table table-inverse" id="DataTablePendaftar">
                            <thead>
                                <tr>
                                    <th style="width: 5px;">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Panggilan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Agama</th>
                                    <th>Foto</th>
                                    <th style="width: 15px;">Info Lanjut</th>
                                    <th style="width: 20px;">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $d)
                                    <th>{{ $no++ }}</th>
                                    <th>{{ $d->nama_lengkap }}</th>
                                    <th>{{ $d->nama_panggilan }}</th>
                                    <th>{{ $d->jk }}</th>
                                    <th>{{ $d->tempat_lahir }}</th>
                                    <th>{{ $d->tgl_lahir }}</th>
                                    <th>{{ $d->agama }}</th>
                                    <th>
                                        <img src="{{ asset($d->path_img) }}" class="img-profile" alt="">
                                    </th>
                                    <th>
                                        <btn id="btn-info" data-id="{{ $d->id }}" class="link-button"><i
                                                class="feather icon-info"></i>
                                            Detail</btn>
                                    <th>
                                        <button id="btn-edit" data-id="{{ $d->id }}" type="button"
                                            class="btn btn-sm btn-secondary"><i class="far fa-edit"></i>Edit</button>
                                        <button id="btn-hapus" data-id="{{ $d->id }}"
                                            class="btn btn-sm btn-danger"><i class="fas fa-minus-square"></i>Hapus</button>
                                    </th>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab"
                style="padding: 3% 4%;">
                <blockquote class="blockquote mb-4">
                    <p class="mb-2">Tambahkan data yang sesuai.
                    </p>
                    <footer class="blockquote-footer">Formulir Inputan
                    </footer>
                </blockquote>
                <form style="margin-top: 25px;" id="form-tambah">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="nama_lengkap" type="text" class="form-control form-control-sm"
                                    placeholder="Nama Lengkap">
                                <small id="nama_lengkap-alert" class="text-danger"></small>
                            </div>

                            <div class="form-group">
                                <label>Nama Panggilan</label>
                                <input name="nama_panggilan" type="text" class="form-control form-control-sm"
                                    placeholder="Nama Panggilan">
                                <small id="nama_panggilan-alert" class="text-danger"></small>
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
                        </div>
                        <div class="col-md-6">
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
                                <label>Upload Foto</label>
                                <input type="file" name="path_img" id="" class="form-control">
                                <small id="path_img-alert" class="text-danger"></small>
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
        const form = (data) => {
            $('#form-update').append(`
                <div class="row">
                    <input name="id" value="${data.id}" type="hidden">
                    <div class="col-md-4">  
                        <div class="form-group">
                            <img src="{{ asset('${data.path_img}') }}" class="img-profile-big" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input name="nama_lengkap" type="text" class="form-control form-control-sm"
                                placeholder="Nama Lengkap" value="${data.nama_lengkap}">
                            <small id="nama_lengkap-alert2" class="text-danger"></small>
                        </div>
                        
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input name="nama_panggilan" type="text" class="form-control form-control-sm"
                                placeholder="Nama Panggilan" value="${data.nama_panggilan}">
                            <small id="nama_panggilan-alert2" class="text-danger"></small>
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
                    </div>
                    <div class="col-md-12 mb-2"><hr></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input name="tempat_lahir" type="text" class="form-control form-control-sm"
                                placeholder="Tempat Lahir" value="${data.tempat_lahir}">
                            <small id="tempat_lahir-alert2" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" class="form-control form-control-sm"
                                value="${data.tgl_lahir}">
                            <small id="tgl_lahir-alert2" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                            <label>Ganti Foto</label>
                            <input type="file" name="path_img" id="" class="form-control">
                            <small id="path_img-alert2" class="text-danger"></small>
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
            $('#agama').val(data.agama);
        }

        $(document).ready(function() {
            let table = $('#DataTablePendaftar').DataTable();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#years-regist').yearpicker({
                autoHide: true,
                year: null,
                startYear: null,
                endYear: null,
                itemTag: 'li',
                selectedClass: 'selected',
                disabledClass: 'disabled',
                hideClass: 'hide',
                highlightedClass: 'highlighted',
                onHide: (value) => {
                    table.clear().draw();
                    let url = `{{ config('app.url') }}/pendaftar/filter/${value}`;
                    $.get(url, function(result) {
                        $.each(result.data, function(i, item) {
                            table.row.add([
                                i + 1,
                                item.nama_lengkap,
                                item.nama_panggilan,
                                item.jk,
                                item.tempat_lahir,
                                item.tgl_lahir,
                                item.agama,
                                `<img src="{{ asset('${item.path_img}') }}" class="img-profile" alt="">`,
                            ]).draw();
                        });
                    });
                }
            });
        });

        $(document).on('click', '#btn-simpan', function() {
            let url = `{{ config('app.url') }}/pendaftar`;
            let form = document.getElementById('form-tambah');
            let data = new FormData(form);

            $.ajax({
                url: url,
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: (result) => {
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
                error: (err) => {
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
            let url = `{{ config('app.url') }}/pendaftar/data/${_id}`;

            $.get(url, function(result) {
                $('.modal-title').html('Ubah data');
                $('#form-update').html('');
                form(result.data);
                $('#modalUniv').modal('show');
            });
        });

        $(document).on('click', '#btn-update', function() {
            let _id = $('input[name="id"]').val();
            let url = `{{ config('app.url') }}/pendaftar/${_id}`;
            let form = document.getElementById('form-update');
            let data = new FormData(form);

            $.ajax({
                type: "POST",
                url: url,
                data: data,
                processData: false,
                contentType: false,
                success: (result) => {
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
                error: (err) => {
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
                            $(`#${i}-alert2`).html(value);
                        });
                    }
                }
            });
        });

        $(document).on('click', '#btn-hapus', function() {
            let _id = $(this).data('id');
            let url = `{{ config('app.url') }}/pendaftar/${_id}`;

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
