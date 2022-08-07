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
                    <div class="table-responsive" style="margin-top: 25px;">
                        <table class="table table-inverse" id="DataTablePendaftar">
                            <thead>
                                <tr>
                                    <th style="width: 5px;">#</th>
                                    <th>Nama Lengkap/Panggilan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Tgl Lahir</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Foto</th>
                                    <th style="width: 15px;">Info Lanjut</th>
                                    <th style="width: 20px;">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data['pendaftar'] as $d)
                                   <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        {{ $d->nama_lengkap }}
                                        <br>
                                        {{ $d->nama_panggilan }}
                                    </td>
                                    <td>{{ $d->jk }}</td>
                                    <td>{{ $d->tempat_lahir }} {{ $d->tgl_lahir }}</td>
                                    <td>{{ $d->tahun_ajaran }}</td>
                                    <td>
                                        <img src="{{ asset($d->path_img) }}" class="img-profile" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('paper', $d->id) }}"
                                            onclick="window.open(this.href, 'mywin',
                                        'left=20,top=20,width=800,height=1200,toolbar=1,resizable=1'); return false;"
                                            id="btn-info" data-id="{{ $d->id }}" class="link-button"><i
                                                class="feather icon-info"></i>
                                            Bukti Pendaftaran</a>
                                    <td>
                                        <button id="btn-edit" data-id="{{ $d->id }}" type="button"
                                            class="btn btn-sm btn-secondary"><i class="far fa-edit"></i>Edit</button>
                                        <button id="btn-hapus" data-id="{{ $d->id }}"
                                            class="btn btn-sm btn-danger"><i class="fas fa-minus-square"></i>Hapus</button>
                                    </td>
                                   </tr>
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
                        <div class="col-md-6" style="padding-right: 3%;">
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
                        <div class="col-md-6" style="padding-left: 3%;">
                            <div class="form-group">
                                <label>Anak Ke</label>
                                <input name="anak_ke" type="text" class="form-control form-control-sm"
                                    placeholder="Anak Ke">
                                <small id="anak_ke-alert" class="text-danger"></small>
                            </div>

                            <div class="form-group">
                                <label>Hobi</label>
                                <input name="hobi" type="text" class="form-control form-control-sm"
                                    placeholder="Hobi">
                                <small id="hobi-alert" class="text-danger"></small>
                            </div>

                            <div class="form-group">
                                <label>Bidang Studi Yang Digemari</label>
                                <input name="bidang_studi_digemari" type="text" class="form-control form-control-sm"
                                    placeholder="Bidang Studi Yang Digemari">
                                <small id="bidang_studi_digemari-alert" class="text-danger"></small>
                            </div>

                            <div class="form-group">
                                <label>Olah Raga Yang Digemari</label>
                                <input name="olahraga_digemari" type="text" class="form-control form-control-sm"
                                    placeholder="Olah Raga Yang Digemari">
                                <small id="olahraga_digemari-alert" class="text-danger"></small>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label>Saudara Kandung</label>
                                    <input name="jumlah_saudara_kandung" type="text"
                                        class="form-control form-control-sm" placeholder="Jumlah Saudara Kandung">
                                    <small id="jumlah_saudara_kandung-alert" class="text-danger"></small>
                                </div>

                                <div class="form-group col">
                                    <label>Saudara Tiri</label>
                                    <input name="jumlah_saudara_tiri" type="text" class="form-control form-control-sm"
                                        placeholder="Jumlah Saudara Tiri">
                                    <small id="jumlah_saudara_tiri-alert" class="text-danger"></small>
                                </div>

                                <div class="form-group col">
                                    <label>Saudara Angkat</label>
                                    <input name="jumlah_saudara_angkat" type="text"
                                        class="form-control form-control-sm" placeholder="Jumlah Saudara Angkat">
                                    <small id="jumlah_saudara_angkat-alert" class="text-danger"></small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label>Ayah</label>
                                    <select name="id_ayah" class="form-control form-control-sm">
                                        <option selected disabled>-Pilih-</option>
                                        @foreach ($data['walimurid'] as $d)
                                            @if ($d->status_dalam_keluarga == 'kepala keluarga')
                                                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <small id="id_ayah-alert" class="text-danger"></small>
                                </div>

                                <div class="form-group col">
                                    <label>Ibu</label>
                                    <select name="id_ibu" class="form-control form-control-sm">
                                        <option selected disabled>-Pilih-</option>
                                        @foreach ($data['walimurid'] as $d)
                                            @if ($d->status_dalam_keluarga == 'istri')
                                                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <small id="id_ibu-alert" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3"></textarea>
                                <small id="alamat-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="button" id="btn-simpan" class="btn btn-primary mt-2 float-right"><i
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

                        <div class="form-group">
                            <label>Anak Ke</label>
                            <input name="anak_ke" type="text" class="form-control form-control-sm"
                                placeholder="Anak Ke" value="${data.detail.anak_ke}">
                            <small id="anak_ke-alert2" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Hobi</label>
                            <input name="hobi" type="text" class="form-control form-control-sm"
                                placeholder="Hobi"  value="${data.detail.hobi}">
                            <small id="hobi-alert2" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Bidang Studi Yang Digemari</label>
                            <input name="bidang_studi_digemari" type="text" class="form-control form-control-sm"
                                placeholder="Bidang Studi Yang Digemari" value="${data.detail.bidang_studi_digemari}">
                            <small id="bidang_studi_digemari-alert2" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Olah Raga Yang Digemari</label>
                            <input name="olahraga_digemari" type="text" class="form-control form-control-sm"
                                placeholder="Olah Raga Yang Digemari" value="${data.detail.olahraga_digemari}">
                            <small id="olahraga_digemari-alert2" class="text-danger"></small>
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
                            <label>Saudara Kandung</label>
                            <input name="jumlah_saudara_kandung" type="text"
                                class="form-control form-control-sm" placeholder="Jumlah Saudara Kandung" value="${data.detail.jumlah_saudara_kandung}">
                            <small id="jumlah_saudara_kandung-alert2" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Saudara Tiri</label>
                            <input name="jumlah_saudara_tiri" type="text" class="form-control form-control-sm"
                                placeholder="Jumlah Saudara Tiri" value="${data.detail.jumlah_saudara_tiri}">
                            <small id="jumlah_saudara_tiri-alert2" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Saudara Angkat</label>
                            <input name="jumlah_saudara_angkat" type="text"
                                class="form-control form-control-sm" placeholder="Jumlah Saudara Angkat" value="${data.detail.jumlah_saudara_angkat}">
                            <small id="jumlah_saudara_angkat-alert2" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Ganti Foto</label>
                            <input type="file" name="path_img" id="" class="form-control">
                            <small id="path_img-alert2" class="text-danger"></small>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label>Ayah</label>
                                <select id="ayah" name="id_ayah" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    @foreach ($data['walimurid'] as $d)
                                        @if ($d->status_dalam_keluarga == 'kepala keluarga')
                                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <small id="id_ayah-alert2" class="text-danger"></small>
                            </div>

                            <div class="form-group col">
                                <label>Ibu</label>
                                <select id="ibu" name="id_ibu" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    @foreach ($data['walimurid'] as $d)
                                        @if ($d->status_dalam_keluarga == 'istri')
                                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <small id="id_ibu-alert2" class="text-danger"></small>
                            </div>

                            <div class="form-group col">
                                <label>Wali</label>
                                <select id="wali" name="id_wali" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="">Tidak ada</option>
                                    @foreach ($data['walimurid'] as $d)
                                        @if ($d->status_dalam_keluarga != 'kepala keluarga' and $d->status_dalam_keluarga != 'istri')
                                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <small id="id_wali-alert2" class="text-danger"></small>
                            </div>
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
            $('#ayah').val(data.detail.id_ayah);
            $('#ibu').val(data.detail.id_ibu);
            $('#wali').val(data.detail.id_wali);
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
                    $('#modalUniv').modal('hide');
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
