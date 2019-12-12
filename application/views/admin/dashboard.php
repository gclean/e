<!-- <?php var_dump($pelanggan); ?> -->
<?php
if ($user) {
    foreach ($user as $total) {
        ?>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-orange">
                    <div class="inner">

                        <h3><?php echo $total->total ?></h3>

                        <p>Data User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= base_url() ?>admin/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
    <?php
        }
    }
    ?>

    <?php
    if ($karyawan) {
        foreach ($karyawan as $total) {
            ?>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $total->total ?></h3>
                        <p>Data Karyawan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url() ?>admin/employee" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
<?php
    }
}
?>