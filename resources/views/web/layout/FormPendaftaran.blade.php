<div class="card form-regist">
    <div class="card-header mb-4 text-center">
        <h3 class="card-title">FORMULIR PENDAFTARAN SISWA BARU</h3>
        <p class="text-muted">SD Muhammadiyah 3 Palu</p>
        <div class="step-icon mt-2">
            <button disabled type="button" id="button-walimurid" data-id="tab-walimurid"
                class="btn btn-primary ml-3">Wali</button>
            <button disabled type="button" id="button-siswa" data-id="tab-siswa" class="btn">Calon
                Siswa</button>
        </div>
    </div>
    <form id="form-datapendaftar">
        <div id="tab-walimurid">
            <div class="card-body">
                <h5 class="card-title">Formulir Ayah</h3>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk KTP</label>
                                <input name="nik_ayah" type="number" class="form-control form-control-sm"
                                    placeholder="NIK">
                                <small id="nik_ayah-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk_ayah" class="form-control form-control-sm">
                                    <option value="laki laki" selected>Laki-Laki</option>
                                </select>
                                <small id="jk_ayah-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input name="tempat_lahir_ayah" type="text" class="form-control form-control-sm"
                                    placeholder="Tempat Lahir">
                                <small id="tempat_lahir_ayah-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <select name="pekerjaan_ayah" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="pns guru">PNS Guru</option>
                                    <option value="pns abri">PNS Abri</option>
                                    <option value="pegawai kontrak">Pegawai Kontrak</option>
                                    <option value="wirausaha/pedagang">Wirausaha/Pedagang</option>
                                    <option value="petani">Petani</option>
                                    <option value="tukang">Tukang</option>
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                </select>
                                <small id="pekerjaan_ayah-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Penghasilan</label>
                                <input name="penghasilan_ayah" type="number" class="form-control form-control-sm"
                                    placeholder="Rupiah">
                                <small id="penghasilan_ayah-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="nama_ayah" type="text" class="form-control form-control-sm"
                                    placeholder="Nama lengkap">
                                <small id="nama_ayah-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input name="tgl_lahir_ayah" type="date" class="form-control form-control-sm">
                                <small id="tgl_lahir_ayah-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama_ayah" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="islam">Islam</option>
                                    <option value="kriten">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                                <small id="agama_ayah-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Status Dalam Keluarga</label>
                                <select name="status_dalam_keluarga_ayah" class="form-control form-control-sm">
                                    <option value="kepala keluarga" selected>Kepala Keluarga</option>
                                </select>
                                <small id="status_dalam_keluarga_ayah-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat_ayah" class="form-control" rows="3"></textarea>
                                <small id="alamat_ayah-alert" class="text-danger"></small>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="card-body">
                <h5 class="card-title">Formulir Ibu</h3>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Induk KTP</label>
                                <input name="nik_ibu" type="number" class="form-control form-control-sm"
                                    placeholder="NIK">
                                <small id="nik_ibu-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk_ibu" class="form-control form-control-sm">
                                    <option value="perempuan" selected>Perempuan</option>
                                </select>
                                <small id="jk_ibu-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input name="tempat_lahir_ibu" type="text" class="form-control form-control-sm"
                                    placeholder="Tempat Lahir">
                                <small id="tempat_lahir_ibu-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <select name="pekerjaan_ibu" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="pns guru">PNS Guru</option>
                                    <option value="pns abri">PNS Abri</option>
                                    <option value="pegawai kontrak">Pegawai Kontrak</option>
                                    <option value="wirausaha/pedagang">Wirausaha/Pedagang</option>
                                    <option value="petani">Petani</option>
                                    <option value="tukang">Tukang</option>
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                </select>
                                <small id="pekerjaan_ibu-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Penghasilan</label>
                                <input name="penghasilan_ibu" type="number" class="form-control form-control-sm"
                                    placeholder="Rupiah">
                                <small id="penghasilan_ibu-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="nama_ibu" type="text" class="form-control form-control-sm"
                                    placeholder="Nama lengkap">
                                <small id="nama_ibu-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input name="tgl_lahir_ibu" type="date" class="form-control form-control-sm">
                                <small id="tgl_lahir_ibu-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama_ibu" class="form-control form-control-sm">
                                    <option selected disabled>-Pilih-</option>
                                    <option value="islam">Islam</option>
                                    <option value="kriten">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                                <small id="agama_ibu-alert" class="text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label>Status Dalam Keluarga</label>
                                <select name="status_dalam_keluarga_ibu" class="form-control form-control-sm">
                                    <option value="istri" selected>Istri</option>
                                </select>
                                <small id="status_dalam_keluarga_ibu-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat_ibu" class="form-control" rows="3"></textarea>
                                <small id="alamat_ibu-alert" class="text-danger"></small>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div id="tab-siswa">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6" style="padding-right: 3%;">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input name="nama_lengkap_siswa" type="text" class="form-control form-control-sm"
                                placeholder="Nama Lengkap">
                            <small id="nama_lengkap_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input name="nama_panggilan_siswa" type="text" class="form-control form-control-sm"
                                placeholder="Nama Panggilan">
                            <small id="nama_panggilan_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk_siswa" class="form-control form-control-sm">
                                <option selected disabled>-Pilih-</option>
                                <option value="laki laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <small id="jk_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input name="tempat_lahir_siswa" type="text" class="form-control form-control-sm"
                                placeholder="Tempat Lahir">
                            <small id="tempat_lahir_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input name="tgl_lahir_siswa" type="date" class="form-control form-control-sm">
                            <small id="tgl_lahir_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama_siswa" class="form-control form-control-sm">
                                <option selected disabled>-Pilih-</option>
                                <option value="islam">Islam</option>
                                <option value="kriten">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                            </select>
                            <small id="agama_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" name="path_img_siswa" id="" class="form-control">
                            <small id="path_img_siswa-alert" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-left: 3%;">
                        <div class="form-group">
                            <label>Anak Ke</label>
                            <input name="anak_ke_siswa" type="text" class="form-control form-control-sm"
                                placeholder="Anak Ke">
                            <small id="anak_ke_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Hobi</label>
                            <input name="hobi_siswa" type="text" class="form-control form-control-sm"
                                placeholder="Hobi">
                            <small id="hobi_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Bidang Studi Yang Digemari</label>
                            <input name="bidang_studi_digemari_siswa" type="text"
                                class="form-control form-control-sm" placeholder="Bidang Studi Yang Digemari">
                            <small id="bidang_studi_digemari_siswa-alert" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label>Olah Raga Yang Digemari</label>
                            <input name="olahraga_digemari_siswa" type="text" class="form-control form-control-sm"
                                placeholder="Olah Raga Yang Digemari">
                            <small id="olahraga_digemari_siswa-alert" class="text-danger"></small>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <label>Jumlah Saudara</label>
                            </div>
                            <div class="form-group col">
                                <label>Kandung</label>
                                <input name="jumlah_saudara_kandung_siswa" type="text"
                                    class="form-control form-control-sm" placeholder="Jumlah Saudara Kandung">
                                <small id="jumlah_saudara_kandung_siswa-alert" class="text-danger"></small>
                            </div>

                            <div class="form-group col">
                                <label>Tiri</label>
                                <input name="jumlah_saudara_tiri_siswa" type="text"
                                    class="form-control form-control-sm" placeholder="Jumlah Saudara Tiri">
                                <small id="jumlah_saudara_tiri_siswa-alert" class="text-danger"></small>
                            </div>

                            <div class="form-group col">
                                <label>Angkat</label>
                                <input name="jumlah_saudara_angkat_siswa" type="text"
                                    class="form-control form-control-sm" placeholder="Jumlah Saudara Angkat">
                                <small id="jumlah_saudara_angkat_siswa-alert" class="text-danger"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat_siswa" class="form-control" rows="4"></textarea>
                            <small id="alamat_siswa-alert" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <button type="button" id="kirim-data" class="btn btn-success col-md-12"><span
                                id="icon-spinner"><i class="fa fa-spinner fa-spin mr-2"></i></span>
                            Kirim
                            Data</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="card-footer">
        <div class="row">
            <div class="col-md-12">
                <button onclick="stepButton(this)" disabled type="button" id="pre-button"
                    class="btn btn-secondary float-left">Sebelumnya</button>

                <button onclick="stepButton(this)" type="button" id="next-button"
                    class="btn btn-primary float-right">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>
