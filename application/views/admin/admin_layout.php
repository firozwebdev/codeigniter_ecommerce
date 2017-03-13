<?php require_once('partials/header.php'); ?>


            <?php require_once('partials/sidebar.php'); ?>
        </div>
        <div class="col-md-9">

            <div class="content-wrapper wood-wrapper">
                <div class="content-inner">
                    <div class="page-header">
                        <div class="header-links hidden-xs">
                            <a href="notifications.html"><i class="icon-comments"></i> User Alerts</a>
                            <a href="index.html#"><i class="icon-cog"></i> Settings</a>
                            <a href="<?php echo base_url();?>superadmin/logout"><i class="icon-signout"></i> Logout</a>
                        </div>
                        <h1><i class="icon-bar-chart"></i><?php echo $title; ?></h1>
                    </div>
                    <?php echo $main_content; ?>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once('partials/footer.php'); ?>
