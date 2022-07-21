@extends('cms.layout.TemplateAdmin')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="">
                <div class="card-body">
                    <h3 class="card-title">Formulir Ayah</h3>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk KTP</label>
                                <input name="nik" type="number" class="form-control form-control-sm" placeholder="NIK">
                                <small id="nik-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control form-control-sm">
                                    <option value="laki laki" selected>Laki-Laki</option>
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
                                    <option value="kepala keluarga" selected>Kepala Keluarga</option>
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
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Formulir Ibu</h3>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk KTP</label>
                                <input name="nik" type="number" class="form-control form-control-sm" placeholder="NIK">
                                <small id="nik-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control form-control-sm">
                                    <option value="perempuan" selected>Perempuan</option>
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
                                    <option value="istri" selected>Istri</option>
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
                        </div>
                    </div>
                </div>
                <div class="card-body" id="form-wali">
                    <h3 class="card-title">Formulir Wali</h3>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk KTP</label>
                                <input name="nik" type="number" class="form-control form-control-sm"
                                    placeholder="NIK">
                                <small id="nik-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control form-control-sm">
                                    <option value="perempuan" selected>Perempuan</option>
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
                                    <option value="istri" selected>Istri</option>
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
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" id="btn-simpan" class="btn btn-primary"><i
                                    class="far fa-paper-plane"></i>Simpan</button>
                            <button type="button" id="btn-formwali" class="btn btn-light"><i
                                    class="fas fa-plus"></i>Tambah Wali</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#form-wali').hide();
        });
        $(document).on('click', '#btn-formwali', function() {
            $('#form-wali').fadeIn('slow').show();
            $(this).html(`<i class="fas fa-minus"></i> Hapus Wali`);
            $(this).attr('id', 'btn-removeform');
        });
    </script>
@endsection
