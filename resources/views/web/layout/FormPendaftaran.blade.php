<div class="card form-regist">
    <div class="card-header mb-4 text-center">
        <h3 class="card-title">FORMULIR PENDAFTARAN SISWA BARU</h3>
        <p class="text-muted">SD Muhammadiyah 3 Palu</p>
        <div class="step-icon mt-2">
            <button disabled type="button" id="button-walimurid" data-id="tab-walimurid"
                class="btn btn-primary ml-3">Wali</button>
            <button disabled type="button" id="button-siswa" data-id="tab-siswa" class="btn">Calon
                Siswa</button>
            <button disabled type="button" id="button-preview" data-id="tab-preview" class="btn mr-3">Preview</button>
        </div>
    </div>
    <form id="form-walimurid">
        <div id="tab-walimurid">
            <div class="card-body">
                <h5 class="card-title">Ayah</h3>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk KTP</label>
                                <input name="ayah['nik']" type="number" class="form-control form-control-sm"
                                    placeholder="NIK">
                                <small id="ayah.nik-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="ayah['jk']" class="form-control form-control-sm">
                                    <option value="laki laki" selected>Laki-Laki</option>
                                </select>
                                <small id="ayah.jk-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input name="ayah['tempat_lahir']" type="text" class="form-control form-control-sm"
                                    placeholder="Tempat Lahir">
                                <small id="ayah.tempat_lahir-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <select name="ayah['pekerjaan']" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="pns guru">PNS Guru</option>
                                    <option value="pns abri">PNS Abri</option>
                                    <option value="pegawai kontrak">Pegawai Kontrak</option>
                                    <option value="wirausaha/pedagang">Wirausaha/Pedagang</option>
                                    <option value="petani">Petani</option>
                                    <option value="tukang">Tukang</option>
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                </select>
                                <small id="ayah.pekerjaan-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Penghasilan</label>
                                <input name="ayah['penghasilan']" type="number" class="form-control form-control-sm"
                                    placeholder="Rupiah">
                                <small id="ayah.penghasilan-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="ayah['nama']" type="text" class="form-control form-control-sm"
                                    placeholder="Nama lengkap">
                                <small id="ayah.nama-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input name="ayah['tgl_lahir']" type="date" class="form-control form-control-sm">
                                <small id="ayah.tgl_lahir-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="ayah['agama']" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="islam">Islam</option>
                                    <option value="kriten">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                                <small id="ayah.agama-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Status Dalam Keluarga</label>
                                <select name="ayah['status_dalam_keluarga']" class="form-control form-control-sm">
                                    <option value="kepala keluarga" selected>Kepala Keluarga</option>
                                </select>
                                <small id="ayah.status_dalam_keluarga-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="ayah['alamat']" class="form-control" rows="3"></textarea>
                                <small id="ayah.alamat-alert" class="text-danger"></small>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Ibu</h3>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk KTP</label>
                                <input name="ibu['nik']" type="number" class="form-control form-control-sm"
                                    placeholder="NIK">
                                <small id="ibu.nik-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="ibu['jk']" class="form-control form-control-sm">
                                    <option value="perempuan" selected>Perempuan</option>
                                </select>
                                <small id="ibu.jk-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input name="ibu['tempat_lahir']" type="text" class="form-control form-control-sm"
                                    placeholder="Tempat Lahir">
                                <small id="ibu.tempat_lahir-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <select name="ibu['pekerjaan']" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="pns guru">PNS Guru</option>
                                    <option value="pns abri">PNS Abri</option>
                                    <option value="pegawai kontrak">Pegawai Kontrak</option>
                                    <option value="wirausaha/pedagang">Wirausaha/Pedagang</option>
                                    <option value="petani">Petani</option>
                                    <option value="tukang">Tukang</option>
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                </select>
                                <small id="ibu.pekerjaan-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Penghasilan</label>
                                <input name="ibu['penghasilan']" type="number" class="form-control form-control-sm"
                                    placeholder="Rupiah">
                                <small id="ibu.penghasilan-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="ibu['nama']" type="text" class="form-control form-control-sm"
                                    placeholder="Nama lengkap">
                                <small id="ibu.nama-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input name="ibu['tgl_lahir']" type="date" class="form-control form-control-sm">
                                <small id="ibu.tgl_lahir-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="ibu['agama']" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="islam">Islam</option>
                                    <option value="kriten">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                                <small id="ibu.agama-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Status Dalam Keluarga</label>
                                <select name="ibu['status_dalam_keluarga']" class="form-control form-control-sm">
                                    <option value="istri" selected>Istri</option>
                                </select>
                                <small id="ibu.status_dalam_keluarga-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="ibu['alamat']" class="form-control" rows="3"></textarea>
                                <small id="ibu.alamat-alert" class="text-danger"></small>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-body" id="form-wali">
                <h5 class="card-title">Wali</h5>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nomor Induk KTP</label>
                            <input name="wali['nik']" type="number" class="form-control form-control-sm"
                                placeholder="NIK">
                            <small id="nik.3-alert" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="wali['jk']" class="form-control form-control-sm">
                                <option disabled selected>-Pilih-</option>
                                <option value="laki laki" selected>Laki Laki</option>
                                <option value="perempuan" selected>Perempuan</option>
                            </select>
                            <small id="jk.3-alert" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input name="wali['tempat_lahir']" type="text" class="form-control form-control-sm"
                                placeholder="Tempat Lahir">
                            <small id="tempat_lahir.3-alert" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <select name="wali['pekerjaan']" class="form-control form-control-sm">
                                <option selected disabled>-Pilih-</option>
                                <option value="pns guru">PNS Guru</option>
                                <option value="pns abri">PNS Abri</option>
                                <option value="pegawai kontrak">Pegawai Kontrak</option>
                                <option value="wirausaha/pedagang">Wirausaha/Pedagang</option>
                                <option value="petani">Petani</option>
                                <option value="tukang">Tukang</option>
                                <option value="tidak bekerja">Tidak Bekerja</option>
                            </select>
                            <small id="pekerjaan.3-alert" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Penghasilan</label>
                            <input name="wali['penghasilan']" type="number" class="form-control form-control-sm"
                                placeholder="Rupiah">
                            <small id="penghasilan.3-alert" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input name="wali['nama']" type="text" class="form-control form-control-sm"
                                placeholder="Nama lengkap">
                            <small id="nama.3-alert" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input name="wali['tgl_lahir']" type="date" class="form-control form-control-sm">
                            <small id="tgl_lahir.3-alert" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select name="wali['agama']" class="form-control form-control-sm">
                                <option selected disabled>-Pilih-</option>
                                <option value="islam">Islam</option>
                                <option value="kriten">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                            </select>
                            <small id="agama.3-alert" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Status Dalam Keluarga</label>
                            <select name="wali['status_dalam_keluarga']" class="form-control form-control-sm">
                                <option value="istri" selected>Istri</option>
                            </select>
                            <small id="status_dalam_keluarga.3-alert" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="wali['alamat']" class="form-control" rows="3"></textarea>
                            <small id="alamat.3-alert" class="text-danger"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" id="btn-formwali" class="btn btn-light"><i
                                class="fas fa-plus"></i>Tambah
                            Wali</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form id="form-siswa">
        <div id="tab-siswa">
            <div class="card-body">
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
                                <input name="jumlah_saudara_tiri" type="text" class="form-control form-control-sm"
                                    placeholder="Jumlah Saudara Tiri">
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
                    <div class="col-md-12 mt-4">
                        <button type="button" id="kirim-data" class="btn btn-success col-md-12">Kirim Data</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="tab-preview"></div>
    <div class="card-footer">
        <div class="row">
            <div class="col-md-12">
                <button disabled onclick="stepFunc(this)" type="button" id="pre-button"
                    class="btn btn-secondary float-left" value="1">Sebelumnya</button>

                <button onclick="stepFunc(this)" type="button" id="next-button" class="btn btn-primary float-right"
                    value="1">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>
