@extends('cms.layout.TemplateAdmin')
@section('content')
<div class="col-sm-12">
    <h5 class="mt-4">Data Jumlah Siswa</h5>
    <hr>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">Data Tabel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">Formulir</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="col-md-12">
                <h5>Tabel Jumlah Data Siswa</h5>
                <div class="table-responsive">
                    <table class="table table-inverse" id="DataTable">
                        <thead>
                            <tr>
                                <th rowspan="2" style="width: 5px;">No</th>
                                <th rowspan="2" style="text-align: center">Tahun</th>
                                <th colspan="2" style="text-align: center">Siswa</th>
                                <th rowspan="2" style="width: 10px;">Opsi</th>
                            </tr>
                            <tr>
                                <th style="text-align: center">Laki-Laki</th>
                                <th style="text-align: center">Perempuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($data as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td style="text-align: center">{{ $d-> tahun}}</td>
                                <td style="text-align: center">{{ $d-> lakilaki}}</td>
                                <td style="text-align: center">{{ $d-> perempuan}}</td>
                                <td>
                                    <button type="button" id="btn-edit" class="btn btn-outline-success m-auto btn-md"
                                        data-toggle="modal" data-target="#modalUniv"
                                        data-id="{{ Crypt::encrypt($d->id) }}"><i
                                            class="feather icon-edit m-auto"></i></button>
                                    <button type="button" id="btn-hapus" class="btn btn-outline-danger m-auto btn-md"
                                        data-id="{{ Crypt::encrypt($d->id) }}"><i
                                            class="feather icon-trash-2 m-auto"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <h5>Formulir Input Data</h5>
            <hr>
            <form id="form-simpan" class="form-group">
                <div class="row">
                    @csrf
                    <div class="col-md-6">
                        <label>Tahun</label>
                        <input class="mb-3 form-control" type="year" id="tahun" name="tahun">
                        <small class="text-danger" id="tahun-alert"></small><br>
                        <label>Jumlah Laki-Laki</label>
                        <input class="mb-3 form-control" type="number" id="lakilaki" name="lakilaki">
                        <small class="text-danger" id="lakilaki-alert"></small>
                    </div>
                    <div class="col-md-6">
                        <label>Jumlah Perempuan</label>
                        <input class="mb-3 form-control" type="number" id="perempuan" name="perempuan">
                        <small class="text-danger" id="perempuan-alert"></small><br>
                        <div class="ml-3 mt-4">
                            <button type="button" id="btn-simpan" class="btn btn-primary"><i
                                    class="feather icon-save"></i>Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#DataTable').DataTable();

        $(document).on('click', '#btn-simpan', function() {
            let url = `{{ config('app.url') }}` + "/data-siswa";
            let data = $('#form-simpan').serialize();
            $('#btn-simpan').prop('disabled', true);
            $.ajax({
                url: url,
                method: "POST",
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
                error: function(result) {
                    $('#btn-simpan').prop('disabled', false);
                    let data = result.responseJSON
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
                        })
                    }
                }
            });
        });

        $(document).on('click', '#btn-edit', function() {
            let _id = $(this).data('id');
            let url = `{{ config('app.url') }}/data-siswa/${_id}`;

            $.ajax({
                url: url,
                method: "GET",
                success: function(result) {
                    $('.modal-title').html('Form Ubah Data');
                    $('#form-update').html('');
                    $('#form-update').append(`
                    <div class="col-md-12">
                        <input type="hidden" id="idSiswa" value="${_id}">
                        <label>Tahun</label>
                        <input class="mb-3 form-control" type="year" name="tahun" value="${result.data.tahun}">
                        <label>Jumlah Laki-Laki</label>
                        <input class="mb-3 form-control" type="number" name="lakilaki" value="${result.data.lakilaki}">
                        <label>Jumlah Perempuan</label>
                        <input class="mb-3 form-control" type="number" id="perempuan" name="perempuan" value="${result.data.perempuan}">
                    </div>
                    `);
                    $('#modalUniv').modal('show');
                },
                error: function(result) {
                    let data = result.responseJSON
                    let errorRes = data.errors
                    console.log(result);
                    Swal.fire({
                        icon: data.response.icon,
                        title: data.response.title,
                        text: data.response.message,
                    });
                }
            });
        });

        $(document).on('click', '#btn-update', function() {
            let _id = $('#idSiswa').val();
            let url = `{{ config('app.url') }}/data-siswa/${_id}`;
            let data = $('#form-update').serialize();
            $('#btn-edit').prop('disabled', true);
            $('#modalUniv').modal('hide');
            $.ajax({
                url: url,
                method: "PATCH",
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
                error: function(result) {
                    $('#btn-edit').prop('disabled', false);
                    let data = result.responseJSON
                    let errorRes = data.errors
                    Swal.fire({
                        icon: data.response.icon,
                        title: data.response.title,
                        text: data.response.message,
                    });
                    if (errorRes.length >= 1) {
                        $('.miniAlert').html('');
                        $('#tahun-alert').html(errorRes.data.tahun);
                        $('#lakilaki-alert').html(errorRes.data.lakilaki);
                        $('#perempuan-alert').html(errorRes.data.perempuan);
                    }
                }
            });
        });

        $(document).on('click', '#btn-hapus', function() {
            let _id = $(this).data('id');
            let url = `{{ config('app.url') }}/data-siswa/${_id}`;
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
    } );
</script>
@endsection