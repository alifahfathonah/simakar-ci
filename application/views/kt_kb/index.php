<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aturan</h2>
            <p class="section-lead">
                Disini Anda dapat manajemen data kota dan kabupaten.
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Kota dan Kabupaten</h4>
                        <div class="card-header-form">
                            <a href="<?= base_url('kt_kb/tambah') ?>" class="btn btn-icon btn-dark"><i class="fas fa-plus-circle"></i> Tambah Data</a>
                        </div>
                        <div id="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-md table-striped" id="mytable">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Nama Kota / Kabupaten</th>
                                        <th>Kode Pos</th>
                                        <th>Dibuat Tanggal</th>
                                        <th>Dirubah Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($kota as $kt) : ?>
                                        <tr align="center">
                                            <td><?= $no ?></td>
                                            <td><?= $kt['nama_kt_kb']; ?></td>
                                            <td><?= $kt['kode_pos']; ?></td>
                                            <td><?php
                                                $create = substr($kt['created_at'], 0, 10);
                                                echo longdate_indo($create);
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $update = substr($kt['updated_at'], 0, 10);
                                                echo longdate_indo($update);
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('kt_kb/ubah/') ?><?= $kt['id'] ?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i> Ubah</a>
                                                <a href="<?= base_url('kt_kb/hapus/') ?><?= $kt['id'] ?>" class="btn btn-sm btn-danger" id="hapus"><i class="far fa-trash-alt"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>