<?php
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$footer = $this->db->get_where('settings', array('type' => 'footer'))->row()->description;
$loginType           =    $this->session->userdata('login_type');

?>
<?php
include 'css.php';
?>

<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper" class="block5">


    <?php

    include 'header.php';

    ?>
    <?php include $loginType . '/navigation.php'; ?>
    <?php include 'page_info.php'; ?>
    <?php include $loginType . '/' . $page_name . '.php'; ?>


    <?php // include 'dashboard.php'; 
    ?>




    <!-- .right-sidebar -->
    <div class="right-sidebar" style="background:url(<?php echo base_url(); ?>assets/images/10.png); opacity: 0.9;">
        <div class="slimscrollright">
            <div class="rpanel-title">Current Mesage Thread<span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">

                <ul class="m-t-20 chatonline">

                    <li>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- /.right-sidebar -->
</div>
<!-- /.container-fluid -->


<!-- Floating Action Button starts here -->
<?php if ($text_align == 'right-to-left') { ?>
    <div class="fixed-action-btn" style="bottom: 50px; right: 0px;">
        <a class="btn-floating btn-large">
            <i class="fa fa-gear"></i>
        </a>
        <ul style="right: 0px; padding-bottom:0px; padding-right:0px">


            <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/message" class="btn-floating btn-red btn-circle"><i class="fa fa-envelope"></i></a></li>


            <?php if ($this->session->userdata('login_type') == 'admin') { ?>
                <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/invoice" class="btn-floating btn-green btn-circle"><i class="fa fa-money"></i></a></li>
            <?php } ?>

            <?php if ($this->session->userdata('login_type') == 'student') { ?>
                <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/invoice" class="btn-floating btn-green btn-circle"><i class="fa fa-money"></i></a></li>
            <?php } ?>

            <?php if ($this->session->userdata('login_type') == 'accountant') { ?>
                <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/invoice" class="btn-floating btn-green btn-circle"><i class="fa fa-money"></i></a></li>
            <?php } ?>


            <?php if ($this->session->userdata('login_type') == 'admin') { ?>
                <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/attendance_report" class="btn-floating btn-yellow btn-circle"><i class="fa fa-calendar"></i></a></li>
            <?php } ?>


            <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/manage_profile" class="btn-floating btn-blue btn-circle"><i class="fa fa-gears"></i></a></li>


        </ul>
    </div>
<?php } else { ?>

    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
        <a class="btn-floating btn-large">
            <i class="fa fa-gear"></i>
        </a>
        <ul style="right: 19px; padding-bottom:0px; padding-left:7px">


            <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/message" class="btn-floating btn-red btn-circle"><i class="fa fa-envelope"></i></a></li>


            <?php if ($this->session->userdata('login_type') == 'admin') { ?>
                <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/invoice" class="btn-floating btn-green btn-circle"><i class="fa fa-money"></i></a></li>
            <?php } ?>

            <?php if ($this->session->userdata('login_type') == 'student') { ?>
                <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/invoice" class="btn-floating btn-green btn-circle"><i class="fa fa-money"></i></a></li>
            <?php } ?>

            <?php if ($this->session->userdata('login_type') == 'accountant') { ?>
                <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/invoice" class="btn-floating btn-green btn-circle"><i class="fa fa-money"></i></a></li>
            <?php } ?>


            <?php if ($this->session->userdata('login_type') == 'admin') { ?>
                <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/attendance_report" class="btn-floating btn-yellow btn-circle"><i class="fa fa-calendar"></i></a></li>
            <?php } ?>


            <li style="color:transparent"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('login_type'); ?>/manage_profile" class="btn-floating btn-blue btn-circle"><i class="fa fa-gears"></i></a></li>


        </ul>
    </div>
<?php } ?>



<?php include 'footer.php'; ?>



</div>
<!-- /#page-wrapper -->
</div>
<?php include 'modal.php'; ?>
<?php include 'js.php'; ?>