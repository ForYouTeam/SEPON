<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Siswa</h3>

    </div>
    <div class="card-body">
        @foreach ($data['siswa'] as $d)
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <img style="height: 210px; width: auto;" src="{{ asset($d->pendaftar->path_img) }}" alt="Error">
                </div>
                <div class="col-md-4" style="padding: 5px 10px">
                    <div class="form-group">
                        <p class="text-muted">Nama lengkap</p>
                        <h5 class="mt-min-2">{{ $d->pendaftar->nama_lengkap }}</h5>

                    </div>
                    <div class="form-group">
                        <p class="text-muted">Panggilan</p>
                        <h5 class="mt-min-2">{{ $d->pendaftar->nama_panggilan }}</h5>

                    </div>
                    <div class="form-group">
                        <p class="text-muted">Jenis kelamin</p>
                        <h5 class="mt-min-2">{{ $d->pendaftar->jk }}</h5>

                    </div>
                    <div class="form-group">
                        <p class="text-muted">Tahun ajaran</p>
                        <h5 class="mt-min-2">{{ $d->pendaftar->tahun_ajaran }}</h5>

                    </div>
                </div>
                <div class="col-md-4" style="padding: 0px 10px">
                    <div class="form-group">
                        <p class="text-muted">Tempat tgl lahir</p>
                        <h5 class="mt-min-2">{{ $d->pendaftar->tempat_lahir }} {{ $d->pendaftar->tgl_lahir }}</h5>

                    </div>
                    <div class="form-group">
                        <p class="text-muted">Agama</p>
                        <h5 class="mt-min-2">{{ $d->pendaftar->agama }}</h5>

                    </div>
                    <div class="form-group">
                        <p class="text-muted">Status</p>
                        <h5 class="mt-min-2 text-success">Terdaftar</h5>
                        <i class="fas fa-check-circle text-success"></i>
                    </div>
                    <div class="form-group">
                        <a href="{{ route('paper', $d->id) }}"
                            onclick="window.open(this.href, 'mywin',
                        'left=20,top=20,width=800,height=1200,toolbar=1,resizable=1'); return false;"
                            id="btn-info" data-id="{{ $d->id }}" class="link-button"><i
                                class="feather icon-info"></i>
                            Bukti Pendaftaran</a>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
        <div class="row mb-4">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <button id="btn-tambah-siswa" type="button" class="btn btn-sm btn-primary mt-4 mb-4">Tambah
                    Siswa</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="padding: 0px 10px">
                <div class="form-group">
                    <p class="text-muted">Nam ayah</p>
                    <h5 class="mt-min-2">
                        {{ $data['walimurid']['ayah'] ? $data['walimurid']['ayah']['nama'] : 'Data belum diinput' }}
                    </h5>
                </div>
                <div class="form-group mt-4">
                    <p class="text-muted">Pekerjaan</p>
                    <h5 class="mt-min-2">
                        {{ $data['walimurid']['ayah'] ? $data['walimurid']['ayah']['pekerjaan'] : 'Data belum diinput' }}
                    </h5>
                </div>
            </div>
            <div class="col-md-4" style="padding: 0px 10px">
                <div class="form-group">
                    <p class="text-muted">Nama ibu</p>
                    <h5 class="mt-min-2">
                        {{ $data['walimurid']['ibu'] ? $data['walimurid']['ibu']['nama'] : 'Data belum diinput' }}
                    </h5>
                </div>
                <div class="form-group mt-4">
                    <p class="text-muted">Pekerjaan</p>
                    <h5 class="mt-min-2">
                        {{ $data['walimurid']['ibu'] ? $data['walimurid']['ibu']['pekerjaan'] : 'Data belum diinput' }}
                    </h5>
                </div>
            </div>
        </div>
    </div>

</div>
