<!DOCTYPE html>
<html>

<?php $this->load->view('public/header'); ?>

<body>
    <div class="wrapper">


        <!-- Left side column. contains the logo and sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <?php $this->load->view($content); ?>
                <!-- /.row -->
                <!-- Main row -->
                <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('public/footer');  ?>

</body>

</html>