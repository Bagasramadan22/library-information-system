<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= $totalanggota ?></h3>

                    <p>Data Anggota</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-users"></i>
                </div>
                <a href="<?= base_url('Anggota') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3><?= $totalbuku ?></h3>

                    <p>Data Buku</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-book"></i>
                </div>
                <a href="<?= base_url('Buku') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= $totalpeminjaman1 ?></h3>
                    <p>Transaksi</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-money-bill"></i>
                </div>
                <a href="<?= base_url('Peminjaman') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?= $totalhilang ?></h3>
                    <p>Buku Hilang</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-book"></i>
                </div>
                <a href="<?= base_url('Hilang') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?= $totaldenda ?></h3>
                    <p>Denda</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-money-bill-wave"></i>
                </div>
                <a href="<?= base_url('Denda') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3><?= $totallaporan ?></h3>
                    <p>Laporan</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-address-book"></i>
                </div>
                <a href="<?= base_url('Peminjaman/Laporantrans') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
                <div class="inner">
                    <h3><?= $totalkelas ?></h3>
                    <p>Kelas</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-landmark"></i>
                </div>
                <a href="<?= base_url('Kelas') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
                <div class="inner">
                    <h3><?= $totalkategori ?></h3>
                    <p>Kategori</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-list"></i>
                </div>
                <a href="<?= base_url('Kategori') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3><?= $totalrak ?></h3>
                    <p>Rak</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-table"></i>
                </div>
                <a href="<?= base_url('Rak') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
                <div class="inner">
                    <h3><?= $totalpenerbit ?></h3>
                    <p>Penerbit</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-book-open"></i>
                </div>
                <a href="<?= base_url('Penerbit') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3><?= $totalpenulis ?></h3>
                    <p>Penulis</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-pen"></i>
                </div>
                <a href="<?= base_url('Penulis') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-olive">
                <div class="inner">
                    <h3><?= $totaluser ?></h3>
                    <p>User</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-user"></i>
                </div>
                <a href="<?= base_url('User') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>