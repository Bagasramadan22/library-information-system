<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal"
                    data-target="#modal-sm">
                    <i class="fas fa-plus"> Tambah</i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo ' <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>ID Anggota</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($anggota as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td><?= $value['id_anggota'] ?></option>
                        </td>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['tgl_lahir'] ?></td>
                        <td><?= $value['kelas'] ?></td>
                        <td><?= $value['jenis_kelamin'] ?></td>
                        <td><?= $value['no_hp'] ?></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-flat btn-sm" data-toggle="modal"
                                data-target="#modal-edit<?= $value['id_anggota'] ?>">
                                <i class="fas fa-edit"> </i>
                            </button>
                            <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal"
                                data-target="#modal-delete<?= $value['id_anggota'] ?>">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>



        </div>
        <!-- /.card-body -->
    </div>
</div>


<!-- modal tambah -->
<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah <?= $judul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open(base_url('Anggota1/Add')) ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal lahir"
                                required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kelas</label>
                            <select name="kelas" class="form-control" required>
                                <option value="">Pilih Kelas</option>
                                <?php foreach ($kelas as $k): ?>
                                <option value="<?= $k['nama_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>No Hp</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="No Hp" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal edit -->
<?php foreach ($anggota as $key => $value) { ?>
<div class="modal fade" id="modal-edit<?= $value['id_anggota'] ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit <?= $judul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open(base_url('Anggota1/UpdateData/' . $value['id_anggota'])) ?>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?= $value['nama'] ?>" name="nama" placeholder="Nama"
                        required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" value="<?= $value['tgl_lahir'] ?>" name="tgl_lahir"
                        placeholder="Tanggal Lahir" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="laki-laki" <?= $value['jenis_kelamin'] == 'laki-laki' ? 'selected' : '' ?>>
                            Laki-laki</option>
                        <option value="perempuan" <?= $value['jenis_kelamin'] == 'perempuan' ? 'selected' : '' ?>>
                            Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control">
                        <?php foreach ($kelas as $kelas_item) { ?>
                        <option value="<?= $kelas_item['nama_kelas'] ?>"
                            <?= $value['kelas'] == $kelas_item['nama_kelas'] ? 'selected' : '' ?>>
                            <?= $kelas_item['nama_kelas'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" class="form-control" value="<?= $value['no_hp'] ?>" name="no_hp"
                        placeholder="No HP" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>


<!-- modal hapus -->
<?php foreach ($anggota as $key => $value) { ?>

<div class="modal fade" id="modal-delete<?= $value['id_anggota'] ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus <?= $judul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open(base_url('Anggota1/DeleteData/' . $value['id_anggota'])) ?>
                <div class="form-group">
                    Yakin Hapus Data <b><?= $value['nama'] ?>: <?= $value['kelas'] ?></b> ?

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger btn-flat">Hapus</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php } ?>