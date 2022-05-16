<?= $this->extend('layout/layout'); ?>

<?= $this->section('judul') ?>
<?= $judul ?>
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>
<?= $subjudul ?>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>



<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" id="tambahWilayah"><i class="fas fa-plus-circle"></i>
                Tambah Mahasiswa</button>
        </div>
        <div class="card-body mt-1">
            <div class="table-responsive">

                <table style="width: 100%;" id="dataMahasiswa" class="table table-sm table-bordered table-hover dataTable dtr-inline collapsed">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tampildata->getResultArray() as $row) :
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nim']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['tgl_lahir']; ?></td>
                                <td><?= $row['jk']; ?></td>
                                <td><?= $row['jurusan']; ?></td>
                                <td>Aksi</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<script>
    function listDataMahasiswa() {
        var table = $('#dataMahasiswa').dataTable({
            destroy: true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "/mahasiswa/listData",
                "type": "POST",
            },
            "colomnDefs": [{
                "targets": [0, 6],
                "orderable": false,
            }, ],
        });
    }
    $(document).ready(function() {
        listDataMahasiswa();
    });
</script>

<?= $this->endSection('isi') ?>