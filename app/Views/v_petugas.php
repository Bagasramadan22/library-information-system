<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= $totalanggota ?></h3>

                    <p>Anggota</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-users"></i>
                </div>
                <a href="<?= base_url('Anggota1') ?>" class="small-box-footer">Lihat <i
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
                    <i class="nav-icon fas fa-swatchbook"></i>
                </div>
                <a href="<?= base_url('Peminjaman1') ?>" class="small-box-footer">Lihat <i
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
                    <i class="nav-icon fas fa-swatchbook"></i>
                </div>
                <a href="<?= base_url('Hilang1') ?>" class="small-box-footer">Lihat <i
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
                    <i class="nav-icon fas fa-swatchbook"></i>
                </div>
                <a href="<?= base_url('Denda1') ?>" class="small-box-footer">Lihat <i
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
                <a href="<?= base_url('Peminjaman/Laporantrans1') ?>" class="small-box-footer">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>