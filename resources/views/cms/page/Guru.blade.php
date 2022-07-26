@extends('cms.layout.TemplateAdmin')
@section('content')
<div class="col-sm-12">
    <h5 class="mt-4">Data Guru</h5>
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
                                <th style="width: 5px; text-align: center">No</th>
                                <th style="text-align: center">Foto</th>
                                <th style="text-align: center">Gol.</th>
                                <th style="text-align: center">Jenis Kelamin</th>
                                <th style="text-align: center">Jabatan</th>
                                <th style="text-align: center">Status Nikah</th>
                                <th style="width: 10px; text-align: center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($data as $d)
                            <tr>
                                <td style="text-align: center">{{$no++}}</td>
                                <td style="text-align: center">
                                    <img src="{{ asset($d->path_img) }}" alt="" style="height: 50px; margin-left: 5px;"
                                        class="img-thumbnail">
                                    <h6 style="margin-bottom: -5px; text-decoration-line: underline"><span>{{
                                            $d->nama}}</span>
                                    </h6>
                                    <p style="margin-bottom: -5px;">NIP. {{ $d-> nip}}</p>
                                </td>
                                <td style="width: 10px; text-align: center">
                                    <h6><span>{{ $d-> gol}}</span></h6>
                                </td>
                                <td style="text-align: center">{{ $d-> jk}}</td>
                                <td style="text-align: center">{{ $d-> jabatan}}</td>
                                <td style="text-align: center">{{ $d-> status_nikah}}</td>
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
            <form id="form-tambah" class="form-group">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <label>Nama Lengkap</label>
                        <input class="mb-3 form-control" type="text" id="nama" name="nama">
                        <small class="text-danger" id="nama-alert"></small><br>
                    </div>

                    <div class="col-4">
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option selected disabled>Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <small class="text-danger" id="jk-alert"></small><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <label>NIP</label>
                        <input class="mb-3 form-control" type="number" id="nip" name="nip">
                        <small class="text-danger" id="nip-alert"></small><br>
                    </div>
                    <div class="col-4">
                        <label>Golongan</label>
                        <select name="gol" class="form-control">
                            <option selected disabled>Pilih Golongan</option>
                            <option value="GTT">GTT</option>
                            <option value="GBN">GBN</option>
                            <option value="GHD">GHD</option>
                            <option value="IV/e">IV/e</option>
                            <option value="IV/d">IV/d</option>
                            <option value="IV/c">IV/c</option>
                            <option value="IV/b">IV/b</option>
                            <option value="IV/a">IV/a</option>
                            <option value="III/d">III/d</option>
                            <option value="III/c">III/c</option>
                            <option value="III/b">III/b</option>
                            <option value="III/a">III/a</option>
                            <option value="II/d">II/d</option>
                            <option value="II/c">II/c</option>
                            <option value="II/b">II/b</option>
                            <option value="II/a">II/a</option>
                            <option value="I/d">I/d</option>
                            <option value="I/c">I/c</option>
                            <option value="I/b">I/b</option>
                            <option value="I/a">I/a</option>
                        </select>
                        <small class="text-danger" id="gol-alert"></small><br>
                    </div>

                </div>
                <div class="row">
                    <div class="col-8">
                        <label>Status Nikah</label>
                        <select name="status_nikah" class="form-control">
                            <option selected disabled>Pilih</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                        <small class="text-danger" id="status_nikah-alert"></small><br>
                    </div>
                    <div class="col-4">
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control">
                            <option selected disabled>Pilih Jabatan</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakil Sekolah">Wakil Sekolah</option>
                            <option value="Guru Kelas 1">Guru Kelas 1</option>
                            <option value="Guru Kelas 2">Guru Kelas 2</option>
                            <option value="Guru Kelas 3">Guru Kelas 3</option>
                            <option value="Guru Kelas 4">Guru Kelas 4</option>
                            <option value="Guru Kelas 5">Guru Kelas 5</option>
                            <option value="Guru Kelas 6">Guru Kelas 6</option>
                            <option value="Guru PENJASORKES">Guru PENJASORKES</option>
                            <option value="Guru PAI">Guru PAI</option>
                            <option value="Guru">Guru</option>
                            <option value="Operator">Operator</option>
                            <option value="Perpustakaan">Perpustakaan</option>
                            <option value="Staff TU">Staff TU</option>
                        </select>
                        <small class="text-danger" id="jabatan-alert"></small><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label>Foto</label>
                        <input class="mb-3 form-control" type="file" id="path_img" name="path_img">
                        <small class="text-danger" id="path_img-alert"></small><br>
                    </div>
                </div>
                <button type="button" id="btn-simpan" class="btn btn-primary float-right"><i
                        class="feather icon-save"></i>Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready( function () {
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
                            <input name="nama" type="text" class="form-control form-control-sm" value="${data.nama}">
                            <small id="nama-alert2" class="text-danger"></small>
                        </div>
                        
                        <div class="form-group">
                            <label>NIP</label>
                            <input name="nip" type="text" class="form-control form-control-sm" value="${data.nip}">
                            <small id="nip-alert2" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select id="jk" name="jk" class="form-control form-control-sm">
                                <option selected disabled>-Pilih-</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <small id="jk-alert2" class="text-danger"></small>
                        </div>
                        
                        <div class="col-md-12 mb-2"><hr></div>
                    </div>
                    <div class="col-8">
                        <label>Status Nikah</label>
                        <select name="status_nikah" id="status_nikah" class="form-control">
                            <option selected disabled>Pilih</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                        <small class="text-danger" id="status_nikah-alert"></small><br>
                    </div>
                    
                    <div class="col-4">
                        <label>Golongan</label>
                        <select name="gol" id="gol" class="form-control">
                            <option selected disabled>Pilih Golongan</option>
                            <option value="GTT">GTT</option>
                            <option value="GBN">GBN</option>
                            <option value="GHD">GHD</option>
                            <option value="IV/e">IV/e</option>
                            <option value="IV/d">IV/d</option>
                            <option value="IV/c">IV/c</option>
                            <option value="IV/b">IV/b</option>
                            <option value="IV/a">IV/a</option>
                            <option value="III/d">III/d</option>
                            <option value="III/c">III/c</option>
                            <option value="III/b">III/b</option>
                            <option value="III/a">III/a</option>
                            <option value="II/d">II/d</option>
                            <option value="II/c">II/c</option>
                            <option value="II/b">II/b</option>
                            <option value="II/a">II/a</option>
                            <option value="I/d">I/d</option>
                            <option value="I/c">I/c</option>
                            <option value="I/b">I/b</option>
                            <option value="I/a">I/a</option>
                        </select>
                        <small class="text-danger" id="gol-alert"></small><br>
                    </div>
                    <div class="col-8">
                        <label>Foto</label>
                        <input class="mb-3 form-control" type="file" id="path_img" name="path_img">
                        <small class="text-danger" id="path_img-alert"></small><br>
                    </div>
                    <div class="col-4">
                        <label>Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option selected disabled>Pilih Jabatan</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakil Sekolah">Wakil Sekolah</option>
                            <option value="Guru Kelas 1">Guru Kelas 1</option>
                            <option value="Guru Kelas 2">Guru Kelas 2</option>
                            <option value="Guru Kelas 3">Guru Kelas 3</option>
                            <option value="Guru Kelas 4">Guru Kelas 4</option>
                            <option value="Guru Kelas 5">Guru Kelas 5</option>
                            <option value="Guru Kelas 6">Guru Kelas 6</option>
                            <option value="Guru PENJASORKES">Guru PENJASORKES</option>
                            <option value="Guru PAI">Guru PAI</option>
                            <option value="Guru">Guru</option>
                            <option value="Operator">Operator</option>
                            <option value="Perpustakaan">Perpustakaan</option>
                            <option value="Staff TU">Staff TU</option>
                        </select>
                        <small class="text-danger" id="jabatan-alert"></small><br>
                    </div>
                </div>
            `);
            $('#jk').val(data.jk);
            $('#gol').val(data.gol);
            $('#jabatan').val(data.jabatan);
            $('#status_nikah').val(data.status_nikah);
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#DataTable').DataTable();

        $(document).on('click', '#btn-simpan', function() {
            let url = `{{ config('app.url') }}/guru`;
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
            let url = `{{ config('app.url') }}/guru/data/${_id}`;

            $.get(url, function(result) {
                $('.modal-title').html('Ubah data');
                $('#form-update').html('');
                form(result.data);
                $('#modalUniv').modal('show');
            });
        });

        $(document).on('click', '#btn-update', function() {
            let _id = $('input[name="id"]').val();
            let url = `{{ config('app.url') }}/guru/${_id}`;
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
                    console.log(data)
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
            let url = `{{ config('app.url') }}/guru/${_id}`;

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