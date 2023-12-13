<div class="container">
    <div class="justify-content-center">
        <h1 class="my-4"><span class="fas fa-address-card mr-2"></span>Profil Saya</h1>
        <div class="card mb-4">
        <?php if ($this->session->userdata('role_id') == 1) : ?>
            <div class="card-body">
                <div class="row detail">
                    <div class="col-md-2 col-sm-4 col-6 p-2">
                        <img class="img-thumbnail" src="<?= ($user['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $user['image'])); ?>" class="card-img" style="width:100%;">
                    </div>
                    <div class="col-md-10 col-sm-8 col-6">
                        <dl class="row">
                            <dt class="col-sm-5">Nama Lengkap:</dt>
                            <dd class="col-sm-7" id="nama_pegawai"><?= $user['nama_lengkap'] ?></dd>
                            <dt class="col-sm-5">Umur:</dt>
                            <dd class="col-sm-7"><?= $user['umur'] ?><div class="ml-1 d-inline">Tahun</div>
                            </dd>
                            <dt class="col-sm-5">Sekolah:</dt>
                            <dd class="col-sm-7 text-truncate"><?= $user['instansi'] ?></dd>
                            <dt class="col-sm-5">Posisi:</dt>
                            <dd class="col-sm-7"><?= $user['jabatan'] ?></dd>
                            <dt class="col-sm-5">Nomer Induk:</dt>
                            <dd class="col-sm-7"><?= $user['nomer_induk'] ?></dd>
                            <dt class="col-sm-5">Tempat / Tanggal Lahir:</dt>
                            <dd class="col-sm-7"><?= $user['tempat_lahir'] ?>,<?= $user['tgl_lahir'] ?></dd>
                            <dt class="col-sm-5">Jenis Kelamin:</dt>
                            <dd class="col-sm-7"><?= $user['jenis_kelamin'] ?></dd>
                            <dt class="col-sm-5">Status Akun:</dt>
                            <dd class="col-sm-7"><?= $statuspegawai = ($user['is_active'] == 1) ? '<span class="badge badge-success">Terverifikasi</span>' : '<span class="badge badge-danger">Belum Terverifikasi</span>'; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <?php elseif ($this->session->userdata('role_id') == 2) : ?>
            <div class="card-body">
                <div class="row detail">
                    <div class="col-md-2 col-sm-4 col-6 p-2">
                        <img class="img-thumbnail" src="<?= ($user['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $user['image'])); ?>" class="card-img" style="width:100%;">
                    </div>
                    <div class="col-md-10 col-sm-8 col-6">
                        <dl class="row">
                            <dt class="col-sm-5">Nama Lengkap:</dt>
                            <dd class="col-sm-7" id="nama_pegawai"><?= $user['nama_lengkap'] ?></dd>
                            <dt class="col-sm-5">Umur:</dt>
                            <dd class="col-sm-7"><?= $user['umur'] ?><div class="ml-1 d-inline">Tahun</div>
                            </dd>
                            <dt class="col-sm-5">Sekolah:</dt>
                            <dd class="col-sm-7 text-truncate"><?= $user['instansi'] ?></dd>
                            <dt class="col-sm-5">Posisi:</dt>
                            <dd class="col-sm-7"><?= $user['jabatan'] ?></dd>
                            <dt class="col-sm-5">Guru Mapel:</dt>
                            <dd class="col-sm-7"><?= $user['mapel'] ?></dd>
                            <dt class="col-sm-5">Nomer Induk Guru:</dt>
                            <dd class="col-sm-7"><?= $user['nomer_induk'] ?></dd>
                            <dt class="col-sm-5">Tempat / Tanggal Lahir:</dt>
                            <dd class="col-sm-7"><?= $user['tempat_lahir'] ?>,<?= $user['tgl_lahir'] ?></dd>
                            <dt class="col-sm-5">Jenis Kelamin:</dt>
                            <dd class="col-sm-7"><?= $user['jenis_kelamin'] ?></dd>
                            <dt class="col-sm-5">Status Akun:</dt>
                            <dd class="col-sm-7"><?= $statuspegawai = ($user['is_active'] == 1) ? '<span class="badge badge-success">Terverifikasi</span>' : '<span class="badge badge-danger">Belum Terverifikasi</span>'; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <?php elseif ($this->session->userdata('role_id') == 3) : ?>
                <div class="card-body">
                <div class="row detail">
                    <div class="col-md-2 col-sm-4 col-6 p-2">
                        <img class="img-thumbnail" src="<?= ($user['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $user['image'])); ?>" class="card-img" style="width:100%;">
                    </div>
                    <div class="col-md-10 col-sm-8 col-6">
                        <dl class="row">
                            <dt class="col-sm-5">Nama Lengkap:</dt>
                            <dd class="col-sm-7" id="nama_pegawai"><?= $user['nama_lengkap'] ?></dd>
                            <dt class="col-sm-5">Umur:</dt>
                            <dd class="col-sm-7"><?= $user['umur'] ?><div class="ml-1 d-inline">Tahun</div>
                            </dd>
                            <dt class="col-sm-5">Sekolah:</dt>
                            <dd class="col-sm-7 text-truncate"><?= $user['instansi'] ?></dd>
                            <dt class="col-sm-5">Posisi:</dt>
                            <dd class="col-sm-7"><?= $user['jabatan'] ?></dd>
                            <dt class="col-sm-5">Nomer Induk Siswa:</dt>
                            <dd class="col-sm-7"><?= $user['nomer_induk'] ?></dd>
                            <dt class="col-sm-5">Kelas:</dt>
                            <dd class="col-sm-7"><?= $user['kelas'] ?></dd>
                            <dt class="col-sm-5">Tempat / Tanggal Lahir:</dt>
                            <dd class="col-sm-7"><?= $user['tempat_lahir'] ?>,<?= $user['tgl_lahir'] ?></dd>
                            <dt class="col-sm-5">Jenis Kelamin:</dt>
                            <dd class="col-sm-7"><?= $user['jenis_kelamin'] ?></dd>
                            <dt class="col-sm-5">Status Akun:</dt>
                            <dd class="col-sm-7"><?= $statuspegawai = ($user['is_active'] == 1) ? '<span class="badge badge-success">Terverifikasi</span>' : '<span class="badge badge-danger">Belum Terverifikasi</span>'; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="card-footer">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Id : <?= $user['kode_akun'] ?></div>
                    <div class="text-muted">Akun Dibuat: <?= date('d F Y', $user['date_created']); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
