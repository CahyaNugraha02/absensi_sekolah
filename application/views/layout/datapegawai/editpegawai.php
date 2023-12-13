<?= form_open_multipart('#', ['id' => 'editpegawai']) ?>
<input type="hidden" name="id_pegawai_edit" id="id_pegawai_edit" value="<?= $datapegawai['id_pegawai'] ?>">
<div class="form-group row">
    <label for="nama_pegawai_edit" class="col-sm-4 col-form-label">Nama</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="nama_pegawai_edit" name="nama_pegawai_edit" value="<?= $datapegawai['nama_lengkap'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="username_pegawai_edit" class="col-sm-4 col-form-label">Username</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="username_pegawai_edit" name="username_pegawai_edit" value="<?= $datapegawai['username'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="password_pegawai_edit" class="col-sm-4 col-form-label">Password</label>
    <div class="col-sm-8">
        <div class="input-group" id="sh_hd_pass">
            <input type="password" class="form-control" id="password_pegawai_edit" name="password_pegawai_edit">
            <div class="input-group-append">
                <button class="input-group-text" type="button" tabindex="-1"><span class="fas fa-eye-slash" aria-hidden="false"></span></button>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="kode_akun_edit" class="col-sm-4 col-form-label">Kode</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="kode_akun_edit" name="kode_akun_edit" value="<?= $datapegawai['kode_akun'] ?>" title="Kode telah otomatis digenerate secara acak pada saat penambahan pegawai" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="jabatan_pegawai_edit" class="col-sm-4 col-form-label">Posisi</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="jabatan_pegawai_edit" name="jabatan_pegawai_edit" value="<?= $datapegawai['jabatan'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="instansi_pegawai_edit" class="col-sm-4 col-form-label">Sekolah</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="instansi_pegawai_edit" name="instansi_pegawai_edit" value="<?= $nameinstansiset = (empty($dataapp['nama_instansi'])) ? '[Nama Instansi Belum Disetting]' : $dataapp['nama_instansi']; ?>" data-toggle="tooltip" data-placement="top" title="Untuk mengubah nama instansi ini silakan buka pada bagian setting aplikasi" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="nomer_induk_edit" class="col-sm-4 col-form-label">Nomer Induk</label>
    <div class="col-sm-8">
        <div class="input-group">
            <input type="text" class="form-control" id="nomer_induk_edit" name="nomer_induk_edit" value="<?= $datapegawai['nomer_induk'] == 'Tidak Ada' ? '' : $datapegawai['nomer_induk'] ?>">
            <div class="input-group-append">
                <div class="input-group-text">Wajib</div>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="mata_pelajaran_edit" class="col-sm-4 col-form-label">Guru Mapel</label>
    <div class="col-sm-8">
        <div class="input-group">
            <input type="text" class="form-control" id="mata_pelajaran_edit" name="mata_pelajaran_edit" value="<?= $datapegawai['mapel'] ?>">
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="kelas_siswa_edit" class="col-sm-4 col-form-label">Kelas Siswa</label>
    <div class="col-sm-8">
        <div class="input-group">
            <input type="text" class="form-control" id="kelas_siswa_edit" name="kelas_siswa_edit" value="<?= $datapegawai['kelas'] ?>">
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="umur_pegawai_edit" class="col-sm-4 col-form-label">Umur</label>
    <div class="col-sm-8">
        <div class="input-group">
            <input type="text" class="form-control" id="umur_pegawai_edit" name="umur_pegawai_edit" value="<?= $datapegawai['umur'] ?>" maxlength="2">
            <div class="input-group-append">
                <div class="input-group-text">Tahun</div>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="tempat_lahir_pegawai_edit" class="col-sm-4 col-form-label">Tempat Lahir</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="tempat_lahir_pegawai_edit" name="tempat_lahir_pegawai_edit" value="<?= $datapegawai['tempat_lahir'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="tgl_lahir_pegawai_edit" class="col-sm-4 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-8">
        <input type="date" class="form-control" id="tgl_lahir_pegawai_edit" name="tgl_lahir_pegawai_edit" value="<?= $datapegawai['tgl_lahir'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="role_pegawai_edit" class="col-sm-4 col-form-label">Role Akun</label>
    <div class="col-sm-8">
        <?= form_dropdown('role_pegawai_edit', ['' => 'Select Role', 1 => 'Administrator', 2 => 'Guru', 3 => 'Siswa'], set_value('role_pegawai_edit', $datapegawai['role_id']), 'class="form-control" id="role_pegawai_edit"'); ?>
    </div>
</div>
<div class="form-group row">
    <label for="jenis_kelamin_pegawai" class="col-sm-4 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-8">
        <div class="form-check form-check-inline">
            <?= form_radio('jenis_kelamin_pegawai_edit', 'Laki - Laki', set_value('jenis_kelamin_pegawai_edit[]', ($datapegawai['jenis_kelamin'] == "Laki - Laki") ? true : false), 'id="jenis_kelamin_pegawai_edit" class="form-check-input"'); ?>
            <label class="form-check-label" for="jenis_kelamin_pegawai_edit1">Laki - Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('jenis_kelamin_pegawai_edit', 'Perempuan', set_value('jenis_kelamin_pegawai_edit[]', ($datapegawai['jenis_kelamin'] == "Perempuan") ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="jenis_kelamin_pegawai_edit2">Perempuan</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="verifikasi_pegawai_edit" class="col-sm-4 col-form-label">Status Akun</label>
    <div class="col-sm-8">
        <div class="form-check form-check-inline">
            <?= form_radio('verifikasi_pegawai_edit', 0, set_value('verifikasi_pegawai_edit[]', ($datapegawai['is_active'] == 0) ? true : false), 'id="verifikasi_pegawai_edit" class="form-check-input"'); ?>
            <label class="form-check-label" for="verifikasi_pegawai_edit1">Belum Terverifikasi</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('verifikasi_pegawai_edit', 1, set_value('verifikasi_pegawai_edit[]', ($datapegawai['is_active'] == 1) ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="verifikasi_pegawai_edit2">Terverifikasi</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-2">Pas Foto</div>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-3">
                <img src="<?= $foto_source = (empty($datapegawai['image'])) ? base_url('assets/img/default-profile.png') : (($datapegawai['image'] == 'default.png') ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $datapegawai['image'])); ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input edit-pas-pegawai" id="foto_pegawai_edit" name="foto_pegawai_edit">
                    <label class="custom-file-label edit-pas-pegawai-label" for="foto_pegawai_edit">Choose file. Max 2 MB</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-2" id="info-edit"></div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Batal</button>
    <button type="submit" class="btn btn-primary" id="editpgw-btn"><span class="fas fa-pen mr-1"></span>Edit</button>
</div>
</form>

<script>
    $("#sh_hd_pass button").on('click', function(event) {
        event.preventDefault();
        if ($('#sh_hd_pass input').attr("type") == "text") {
            $('#sh_hd_pass input').attr('type', 'password');
            $('#sh_hd_pass span').addClass("fa-eye-slash");
            $('#sh_hd_pass span').removeClass("fa-eye");
        } else if ($('#sh_hd_pass input').attr("type") == "password") {
            $('#sh_hd_pass input').attr('type', 'text');
            $('#sh_hd_pass span').removeClass("fa-eye-slash");
            $('#sh_hd_pass span').addClass("fa-eye");
        }
    });

    $('.edit-pas-pegawai').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.edit-pas-pegawai-label').addClass("selected").html(fileName);
    });
</script>