@extends('cms.layout.TemplateAdmin')
@section('content')
<div class="col-sm-12">
    <h5 class="mt-4">Data Galeri</h5>
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
            <!-- Carousel wrapper -->
            <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center"
                data-mdb-ride="carousel">
                <!-- Inner -->
                <div class="carousel-inner py-4">
                    <!-- Single item -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                @foreach ($data as $d)
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="{{ asset($d->path_file) }}" class="card-img-top" alt="Waterfall" />
                                        <div class="card-body">
                                            <h5 class="card-title">{{$d-> jenis}}</h5>
                                            <p class="card-text">
                                                {{$d->deskripsi}}
                                            </p>
                                            <button type="button" id="btn-edit"
                                                class="btn btn-outline-success m-auto btn-md" data-toggle="modal"
                                                data-target="#modalUniv" data-id="{{ Crypt::encrypt($d->id) }}"><i
                                                    class="feather icon-edit m-auto"></i></button>
                                            <button type="button" id="btn-hapus"
                                                class="btn btn-outline-danger m-auto btn-md"
                                                data-id="{{ Crypt::encrypt($d->id) }}"><i
                                                    class="feather icon-trash-2 m-auto"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->
            </div>
            <!-- Carousel wrapper -->
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <h5>Formulir Input Data</h5>
            <hr>
            <form id="form-tambah" class="form-group">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                        <small class="text-danger" id="deskripsi-alert"></small><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <label>Foto</label>
                        <input class="mb-3 form-control" type="file" id="path_file" name="path_file">
                        <small class="text-danger" id="path_file-alert"></small><br>
                    </div>
                    <div class="col-4">
                        <label>Jenis Foto</label>
                        <select name="jenis" class="form-control">
                            <option selected disabled>Pilih</option>
                            <option value="Galeri">Galeri</option>
                            <option value="Fasilitas Ruang Kelas">Fasilitas Ruang Kelas</option>
                            <option value="Fasilitas Ruang Perpustakaan">Fasilitas Ruang Perpustakaan</option>
                            <option value="Fasilitas Ruang Tata usaha">Fasilitas Ruang Tata usaha</option>
                            <option value="Fasilitas Ruang Kepala Sekolah">Fasilitas Ruang Kepala Sekolah</option>
                            <option value="Fasilitas Ruang Guru">Fasilitas Ruang Guru</option>
                            <option value="Fasilitas Ruang Laboratorium">Fasilitas Ruang Laboratorium</option>
                            <option value="Fasilitas Ruang Keterampilan">Fasilitas Ruang Keterampilan</option>
                        </select>
                        <small class="text-danger" id="jenis-alert"></small><br>
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
                            <img src="{{ asset('${data.path_file}') }}" class="img-profile-big" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3">${data.deskripsi}</textarea>
                            <small class="text-danger" id="deskripsi-alert"></small><br>
                        </div>
                        
                        <div class="form-group">
                            <label>Jenis Foto</label>
                            <select name="jenis" id="jenis" class="form-control">
                                <option selected disabled>Pilih</option>
                                <option value="Galeri">Galeri</option>
                                <option value="Fasilitas Ruang Kelas">Fasilitas Ruang Kelas</option>
                                <option value="Fasilitas Ruang Perpustakaan">Fasilitas Ruang Perpustakaan</option>
                                <option value="Fasilitas Ruang Tata usaha">Fasilitas Ruang Tata usaha</option>
                                <option value="Fasilitas Ruang Kepala Sekolah">Fasilitas Ruang Kepala Sekolah</option>
                                <option value="Fasilitas Ruang Guru">Fasilitas Ruang Guru</option>
                                <option value="Fasilitas Ruang Laboratorium">Fasilitas Ruang Laboratorium</option>
                                <option value="Fasilitas Ruang Keterampilan">Fasilitas Ruang Keterampilan</option>
                            </select>
                            <small class="text-danger" id="jenis-alert"></small><br>
                            <div class="form-group">
                                <label>Foto</label>
                                <input class="mb-3 form-control" type="file" id="path_file" name="path_file">
                                <small class="text-danger" id="path_file-alert"></small><br>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2"><hr></div>
                    </div>
                </div>
            `);
            $('#jenis').val(data.jenis);
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#DataTable').DataTable();

        $(document).on('click', '#btn-simpan', function() {
            let url = `{{ config('app.url') }}/galeri`;
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
            let url = `{{ config('app.url') }}/galeri/data/${_id}`;

            $.get(url, function(result) {
                $('.modal-title').html('Ubah data');
                $('#form-update').html('');
                form(result.data);
                $('#modalUniv').modal('show');
            });
        });

        $(document).on('click', '#btn-update', function() {
            let _id = $('input[name="id"]').val();
            let url = `{{ config('app.url') }}/galeri/${_id}`;
            let form = document.getElementById('form-update');
            let data = new FormData(form);

            $.ajax({
                type: "POST",
                url: url,
                data: data,
                processData: false,
                contentType: false,
                success: (result) => {
                    console.log(result)
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
            let url = `{{ config('app.url') }}/galeri/${_id}`;

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