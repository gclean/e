<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <!-- <h3 class="box-title">User List</h3> -->
                <!-- <hr>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');
                                                        ?>"></div> -->
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
                <a href="<?= base_url('') ?>admin/news/addItem" class="btn btn-primary">Add News</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama Berita</th>
                            <th>Deskripsi</th>
                            <th width="19%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($item as $produk) : ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $produk['nama_berita'] ?></td>
                                <td><?php echo $produk['deskripsi'] ?></td>
                                <td>
                                    <!-- <a href="<?= base_url('') ?>admin/item/detailItem/<?= $produk['id_item'] ?>" class="btn btn-primary">Detail</a> -->
                                    <!-- <a href="<?= base_url('') ?>admin/item/updateItem/<?= $produk['id_item'] ?>" class="btn btn-warning">Ubah</a> -->
                                    <a href="<?= base_url('') ?>admin/news/deleteItem/<?= $produk['id_berita'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>