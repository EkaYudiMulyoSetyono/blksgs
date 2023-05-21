<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Jurusan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active">Jurusan</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Jurusan</h3>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambah-jurusan"><i class="fas fa-plus"></i> Tambah Jurusan</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>Jurusan</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jurusans as $j) : ?>
                        <tr>
                            <td><?php echo $j['jurusan'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-jurusan<?php echo $j['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-jurusan<?php echo $j['id'] ?>"><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>

<div class="modal fade" id="tambah-jurusan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Jurusan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('admin/jurusan/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Nama Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($jurusans as $j) : ?>
    <div class="modal fade" id="edit-jurusan<?php echo $j['id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Jurusan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('admin/jurusan/ubah/' . $j['id']) ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Nama Jurusan" value="<?php echo $j['jurusan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"><?php echo $j['deskripsi'] ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="hapus-jurusan<?php echo $j['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Jurusan</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin akan menghapus jurusan <strong><?php echo $j['jurusan'] ?></strong> ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                    <a href="<?php echo site_url('admin/jurusan/hapus/' . $j['id']) ?>" class="btn btn-outline-light">Ya, saya yakin</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>