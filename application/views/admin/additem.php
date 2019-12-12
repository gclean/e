<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">




                <form class="form-horizontal form-label-left" action="<?= base_url('') ?>admin/news/additem" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Berita
                        </label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" name="nama_berita" value="">
                            <small class="form-text text-danger"><?= form_error('nama_berita'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Gambar
                        </label>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <input type="file" class="form-control col-md-7 col-xs-12" name="gambar">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                            <p class="help-text">* Ukuran Gambar Maximal 2 Mb.</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Deskripsi</label>
                        <div class="col-md-9 col-sm-6">
                            <textarea class="form-control" rows="4" name="deskripsi"></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
                            <a href="<?= base_url('') ?>/admin/news" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>