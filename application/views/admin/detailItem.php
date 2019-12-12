<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Details Item</h3>
                <hr>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php foreach ($details as $detail) : ?>
                    <div class="col-md-5 col-sm-6">
                        <img src="<?= base_url('') ?>assets/front/images/<?= $detail['gambar'] ?>" width="350px" height="350px">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <table class="table table-striped">
                            <tr>
                                <td>Kategori</td>
                                <td>: <?= $detail['nama_kategori'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Desain</td>
                                <td>: <?= $detail['nama_desain'] ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>: <?= $detail['deskripsi'] ?></td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                    <a href="#" class="btn btn-default" onclick="window.history.go(-1)">Kembali</a>
                    <a href="<?= base_url('') ?>admin/item/updateItem/<?= $detail['id_item'] ?>" class="btn btn-warning">Edit</a>
                    </div>
            </div>
        </div>
    </div>
</div>