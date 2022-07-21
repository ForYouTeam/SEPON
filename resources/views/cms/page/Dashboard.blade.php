@extends('cms.layout.TemplateAdmin')
@section('content')
<div class="row">
    <div class="col-12 mb-3">
        <img src="{{ asset('img/2.jpeg') }}" alt="" style="width: 100%;">
    </div>
    <!-- sessions-section start -->
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Profil SD Muhammadiyah 3 Palu</h5>
            </div>
            <ol type="A">
                <li class="mt-3 mb-4">Identitas Sekolah
                    <div class="card-body px-0 py-0 mb-5">
                        <form class="form-group mt-4 mb-3" class="m-4 p-2" id="form-simpan">
                            @csrf
                            <ol type="1" style="margin-left: -30px;">
                                <li>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Sekolah</label>
                                        <div class="col-sm-8">
                                            <input type="hidden" class="form-control" name="id"
                                                value="{{$data['profile']->id ? $data['profile']->id : ""}}">
                                            <input type="text" class="form-control" name="nama_sekolah"
                                                value="{{$data['profile'] ? $data['profile']->nama_sekolah : ""}}">
                                            <small class="text-danger" id="nama_sekolah-alert"></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="alamat"
                                                aria-label="With textarea">{{$data['profile'] ? $data['profile']->alamat : ""}}</textarea>
                                            <small class="text-danger" id="alamat-alert"></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Desa</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="desa"
                                                value="{{$data['profile'] ? $data['profile']->desa : ""}}">
                                            <small class="text-danger" id="desa-alert"></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kecamatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="kecamatan"
                                                value="{{$data['profile'] ? $data['profile']->kecamatan : ""}}">
                                            <small class="text-danger" id="kecamatan-alert"></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kabupaten</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="kabupaten"
                                                value="{{$data['profile'] ? $data['profile']->kabupaten : ""}}">
                                            <small class="text-danger" id="kabupaten-alert"></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Provinsi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="provinsi"
                                                value="{{$data['profile'] ? $data['profile']->provinsi : ""}}">
                                            <small class="text-danger" id="provinsi-alert"></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="telepon"
                                                value="{{$data['profile'] ? $data['profile']->telepon : ""}}">
                                            <small class="text-danger" id="telepon-alert"></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Yayasan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nama_yayasan"
                                                value="{{$data['profile'] ? $data['profile']->nama_yayasan : ""}}">
                                            <small class="text-danger" id="nama_yayasan-alert"></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status Sekolah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="status_sekolah"
                                                value="{{$data['profile'] ? $data['profile']->status_sekolah : ""}}">
                                            <small class="text-danger" id="status_sekolah-alert"></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Kepala Sekolah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{$data['guru'] ? $data['guru']->nama : ""}}">
                                            <input type="hidden" name="nama_kepala_sekolah"
                                                value="{{$data['guru'] ? $data['guru']->id : ""}}">
                                            <small class="text-danger" id="nama_kepala_sekolah-alert"></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Visi</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="visi"
                                                aria-label="With textarea">{{$data['profile'] ? $data['profile']->visi : ""}}</textarea>
                                            <small class="text-danger" id="visi-alert"></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Misi</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="misi"
                                                aria-label="With textarea">{{$data['profile'] ? $data['profile']->misi : ""}}</textarea>
                                            <small class="text-danger" id="misi-alert"></small>
                                        </div>
                                    </div>
                                    <div class="mt-2 float-right mr-5 mb-5 ">
                                        <button type="button" id="btn-simpan" class="btn btn-primary mr-4"><i
                                                class="feather icon-save"></i>Simpan</button>
                                    </div>
                                </li>
                            </ol>
                        </form>
                    </div>
                </li>
            </ol>
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
            let url = `{{ config('app.url') }}` + "/profile";
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
                        });
                    }
                }
            });
        });
    } );
</script>
@endsection