<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Jurusan Terbuka</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active">Jurusan Terbuka</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Jurusan Terbuka</h3>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambah-jurusan-terbuka"><i class="fas fa-plus"></i> Tambah Jurusan Terbuka</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>Jurusan</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Tanggal Awal Pendaftaran</th>
                        <th>Tanggal Akhir Pendaftaran</th>
                        <th>Status</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jurusanterbukas as $jt) : 
                                $jurusan = "";
                                foreach ($jurusans as $j){
                                    if($j['id'] == $jt['id_jurusan']) {
                                        $jurusan = $j['jurusan'];
                                    }
                                }
                        ?>
                        <tr>
                            <td><?php echo $jurusan ?></td>
                            <td><?php echo $jt['tgl_kegiatan'] ?></td>
                            <td><?php echo $jt['tgl_mulai'] ?></td>
                            <td><?php echo $jt['tgl_selesai'] ?></td>
                            <td><?php echo $jt['status']==1 ? "Aktif" : "Tidak Aktif" ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-jurusan<?php echo $jt['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-jurusan<?php echo $jt['id'] ?>"><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Jurusan</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Tanggal Awal Pendaftaran</th>
                        <th>Tanggal Akhir Pendaftaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>

<div class="modal fade" id="tambah-jurusan-terbuka">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Jurusan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('admin/jurusanterbuka/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="id_jurusan" id="id_jurusan" class="form-control select2">
                            <option value="" selected disabled>Pilih Jurusan</option>
                            <?php foreach($jurusans as $j) :?>
                                <option value="<?php echo $j['id']?>"><?php echo $j['jurusan']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_kegiatan">Tanggal Pelaksanaan</label>
                        <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="tgl_mulai">Tanggal Awal Pendaftaran</label>
                        <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
                    </div>
                    <div class="form-group">
                        <label for="tgl_selesai">Tanggal Akhir Pendaftaran</label>
                        <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
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

<?php foreach ($jurusanterbukas as $jt) : 
    $jurusan = "";
    foreach ($jurusans as $j){
        if($j['id'] == $jt['id_jurusan']) {
            $jurusan = $j['jurusan'];
        }
    }
    ?>
    <div class="modal fade" id="edit-jurusan<?php echo $jt['id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Jurusan Terbuka</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('admin/jurusanterbuka/ubah/' . $jt['id']) ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="id_jurusan" id="id_jurusan" class="form-control select2">
                                <option value="" selected disabled>Pilih Jurusan</option>
                                <?php foreach($jurusans as $j) :?>
                                    <option value="<?php echo $j['id']?>" <?php echo $j['id']==$jt['id_jurusan']? "selected" : "" ?>><?php echo $j['jurusan']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_kegiatan">Tanggal Pelaksanaan</label>
                            <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value="<?php echo $jt['tgl_kegiatan']?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_mulai">Tanggal Awal Pendaftaran</label>
                            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?php echo $jt['tgl_mulai']?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tanggal Akhir Pendaftaran</label>
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?php echo $jt['tgl_selesai']?>">
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
    <div class="modal fade" id="hapus-jurusan<?php echo $jt['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Jurusan</h4>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin akan menghapus jadwal jurusan <strong><?php echo $jurusan ?></strong> Pada Tanggal <strong><?php echo $jt['tgl_kegiatan']?></strong> ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                    <a href="<?php echo site_url('admin/jurusanterbuka/hapus/' . $jt['id']) ?>" class="btn btn-outline-light">Ya, saya yakin</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>