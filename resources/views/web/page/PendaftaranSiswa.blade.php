@extends('cms.layout.TemplateAdmin')
@section('content')
    <div class="col-md-12">
        <div class="card-alert" id="card-alert"></div>
        @if ($data)
            @include('web.layout.TableDataPendaftar')
        @else
            <div id="body-form">
                @include('web.layout.FormPendaftaran')
            </div>
        @endif
    </div>
@endsection
@section('js')
    <script>
        const hideFunc = () => {
            $('#tab-walimurid').hide();
            $('#tab-siswa').hide();
            $('#tab-preview').hide();
        }

        $(document).ready(function() {
            $('#form-wali').hide();
            hideFunc();
            $('#icon-spinner').hide()
            $('#tab-walimurid').show();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
        $(document).on('click', '#btn-formwali', function() {
            if ($('#form-wali').is(':visible')) {

                $('#form-wali').hide('1000');
                $(this).html(`<i class="fas fa-plus"></i>Tambah Wali`);

            } else {
                $('#form-wali').fadeIn('slow').show();
                $(this).html(`<i class="fas fa-minus"></i> Hapus Wali`);
            }
        });

        $(".step-icon button").click(function() {
            $(".step-icon button").removeClass('btn-primary');
            $(this).addClass('btn-primary');
            let _id = $(this).data('id');

            hideFunc();
            $(`#${_id}`).fadeIn('slow').show();
        });

        const stepButton = (params) => {
            switch (params.id) {
                case 'next-button':
                    $('#pre-button').prop('disabled', false);
                    params.disabled = true;
                    hideFunc();
                    $('#button-siswa').trigger('click');
                    break;

                default:
                    $('#next-button').prop('disabled', false);
                    params.disabled = true;
                    $('#button-walimurid').trigger('click');
                    break;
            }
        }

        $(document).on('click', '#kirim-data', function() {
            $(this).prop('disabled', true);
            $.when($('#icon-spinner').show()).then(function() {
                let url = `{{ config('app.url') }}/user/pendaftaran_process`;
                let form = document.getElementById('form-datapendaftar');
                let data = new FormData(form);
                $.ajax({
                    url: url,
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(result) {
                        $('#kirim-data').prop('disabled', false);
                        $('#icon-spinner').hide();
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
                        $('#kirim-data').prop('disabled', false);
                        $('#icon-spinner').hide();
                        $('#pre-button').trigger('click');
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
        });

        $(document).on('click', '#btn-tambah-siswa', function() {
            $('.modal-title').html('Tambah Siswa');
            $('#form-update').html(`
            <div class="card-body">
                <input name="id_ayah" value="{{ $data ? $data['walimurid']['ayah']['id'] : '' }}" type="hidden">
                <input name="id_ibu" value="{{ $data ? $data['walimurid']['ibu']['id'] : '' }}" type="hidden">
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
                            <input name="bidang_studi_digemari" type="text"
                                class="form-control form-control-sm" placeholder="Bidang Studi Yang Digemari">
                            <small id="bidang_studi_digemari-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Olah Raga Yang Digemari</label>
                            <input name="olahraga_digemari" type="text" class="form-control form-control-sm"
                                placeholder="Olah Raga Yang Digemari">
                            <small id="olahraga_digemari-alert" class="text-danger"></small>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <label>Jumlah Saudara</label>
                            </div>
                            <div class="form-group col">
                                <label>Kandung</label>
                                <input name="jumlah_saudara_kandung" type="text"
                                    class="form-control form-control-sm" placeholder="Jumlah Saudara Kandung">
                                <small id="jumlah_saudara_kandung-alert" class="text-danger"></small>
                            </div>

                            <div class="form-group col">
                                <label>Tiri</label>
                                <input name="jumlah_saudara_tiri" type="text"
                                    class="form-control form-control-sm" placeholder="Jumlah Saudara Tiri">
                                <small id="jumlah_saudara_tiri-alert" class="text-danger"></small>
                            </div>

                            <div class="form-group col">
                                <label>Angkat</label>
                                <input name="jumlah_saudara_angkat" type="text"
                                    class="form-control form-control-sm" placeholder="Jumlah Saudara Angkat">
                                <small id="jumlah_saudara_angkat-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="4"></textarea>
                            <small id="alamat-alert" class="text-danger"></small>
                        </div>
                    </div>
                </div>
            </div>
            `);
            $('#modalUniv').modal('show');
        });

        $(document).on('click', '#btn-update', function() {
            let url = `{{ config('app.url') }}/pendaftar`;
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
                            $(`#${i}-alert`).html(value);
                        });
                    }
                }
            });
        });
    </script>
@endsection
