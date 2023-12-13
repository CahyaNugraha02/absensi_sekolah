<div class="row detail">
    <div class="col-md-2 col-sm-4 col-6 p-2">
        <img class="img-thumbnail" src="<?= ($datapegawai['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $datapegawai['image'])); ?>" class="card-img">
    </div>
    <div class="col-md-10 col-sm-8 col-6">
        <dl class="row">
            <dt class="col-sm-5">Nama Lengkap:</dt>
            <dd class="col-sm-7"><?= $datapegawai['nama_lengkap'] ?></dd>
            <dt class="col-sm-5">Umur:</dt>
            <dd class="col-sm-7"><?= $datapegawai['umur'] ?><div class="ml-1 d-inline">Tahun</div>
            </dd>
            <dt class="col-sm-5">Sekolah:</dt>
            <dd class="col-sm-7 text-truncate"><?= $datapegawai['instansi'] ?></dd>
            <dt class="col-sm-5">Posisi:</dt>
            <dd class="col-sm-7"><?= $datapegawai['jabatan'] ?></dd>
            <dt class="col-sm-5">Nomer Induk:</dt>
            <dd class="col-sm-7"><?= $datapegawai['nomer_induk'] ?></dd>
            <dt class="col-sm-5">Guru mapel:</dt>
            <dd class="col-sm-7"><?= $datapegawai['mapel'] ?></dd>
            <dt class="col-sm-5">Kelas Siswa:</dt>
            <dd class="col-sm-7"><?= $datapegawai['kelas'] ?></dd>
            <dt class="col-sm-5">Tempat / Tanggal Lahir:</dt>
            <dd class="col-sm-7"><?= $datapegawai['tempat_lahir'] ?>,<?= $datapegawai['tgl_lahir'] ?></dd>
            <dt class="col-sm-5">Jenis Kelamin:</dt>
            <dd class="col-sm-7"><?= $datapegawai['jenis_kelamin'] ?></dd>
        </dl>
    </div>
</div>