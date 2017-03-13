<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel='stylesheet' href='<?php echo base_url();?>assets/back/css/bootstrap.css'>
    <link rel='stylesheet' href='<?php echo base_url();?>assets/back/css/theme.css'>
    <link rel='stylesheet' href='<?php echo base_url();?>assets/back/css/style.css'>

    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <link href="<?php echo base_url(); ?>assets/back/favicon.ico" rel="shortcut icon">
    <link href="<?php echo base_url(); ?>assets/back/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    @javascript html5shiv respond.min
    <![endif]-->

    <title>Responsive Admin template based on Bootstrap 3</title>

    <script type="text/javascript">
        function checkDelete(){
            var chk=confirm('Are You sure To Delete This ?');
            if(chk){
                return true;
            }else{
                return false;
            }

        }
    </script>
</head>

<body>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42863888-3', 'pinsupreme.com');
    ga('send', 'pageview');

</script>

<div class="all-wrapper no-menu-wrapper">
    <div class="login-logo-w">
        <a href="index.html" class="logo">
            <i class="icon-cloud-download"></i>
            <span>Mars Admin</span>
        </a>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <div class="content-wrapper bold-shadow">
                <div class="content-inner">
                    <div class="main-content main-content-grey-gradient no-page-header">

                        <?php
                        $exception = $this->session->userdata('exception');
                        if($exception){?>
                            <div class="alert alert-danger"><?php echo $exception;?></div>
                            <?php $this->session->unset_userdata('exception');
                        }
                        ?>

                        <?php
                        $message = $this->session->userdata('message');
                        if($message){?>
                            <div class="alert alert-success"><?php echo $message;?></div>
                            <?php $this->session->unset_userdata('message');
                        }
                        ?>
                        <div class="main-content-inner">
                            <form action="<?php echo base_url();?>admin/check_login" method="post" >
                                <h3 class="form-title form-title-first"><i class="icon-lock"></i> Login Example</h3>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="admin_email_address" type="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="admin_password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>

                                <input type="submit"  class="btn btn-primary btn-lg" />
                                <a href="index.html" class="btn btn-link">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="color_settings_box hidden-xs">
    <h3>Color Settings</h3>
    <label for="wood-wrapper-checkbox" class="checkbox-w">
        <input type="checkbox" id="wood-wrapper-checkbox">
        <span class="wood-checkbox"></span> Wrap in Wood
    </label>
    <h3>Background</h3>
    <div class="color-settings-w" data-replace-element="body" data-leave-class="">
        <div class="color-box color-box-dark-blue color-tooltip" data-toggle="tooltip" data-placement="top" title="Solid Dark Blue" data-replace-with="body-dark-blue"></div>
        <div class="color-box color-box-light-blue color-tooltip" data-toggle="tooltip" data-placement="top" title="Solid Light Blue" data-replace-with="body-blue"></div>
        <div class="color-box color-box-grey color-tooltip" data-toggle="tooltip" data-placement="top" title="Solid Grey" data-replace-with="body-grey"></div>
        <div class="color-box color-box-linen-dark color-tooltip active" data-toggle="tooltip" data-placement="top" title="Dark Linen" data-replace-with="body-dark-linen"></div>
        <div class="color-box color-box-linen-light color-tooltip" data-toggle="tooltip" data-placement="top" title="Light Linen" data-replace-with="body-light-linen"></div>
    </div>
    <h3>Header</h3>
    <div class="color-settings-w" data-replace-element=".page-header" data-leave-class="page-header">
        <div class="color-box color-box-dark-blue color-tooltip" data-toggle="tooltip" data-placement="top" title="Dark Blue" data-replace-with="page-header-dark-blue"></div>
        <div class="color-box color-box-red active color-tooltip" data-toggle="tooltip" data-placement="top" title="Red" data-replace-with="page-header-red"></div>
        <div class="color-box color-box-green color-tooltip" data-toggle="tooltip" data-placement="top" title="Green" data-replace-with="page-header-green"></div>
        <div class="color-box color-box-green-sea color-tooltip" data-toggle="tooltip" data-placement="top" title="Green Sea" data-replace-with="page-header-green-sea"></div>
        <div class="color-box color-box-orange color-tooltip" data-toggle="tooltip" data-placement="top" title="Emerald" data-replace-with="page-header-orange"></div>
        <div class="color-box color-box-blue color-tooltip" data-toggle="tooltip" data-placement="top" title="Blue" data-replace-with="page-header-blue"></div>
    </div>
    <h3>Active Menu</h3>
    <div class="color-settings-w" data-replace-element=".side-menu" data-leave-class="side-menu">
        <div class="color-box color-box-dark-blue color-tooltip" data-toggle="tooltip" data-placement="top" title="Dark Blue" data-replace-with="side-menu-dark-blue"></div>
        <div class="color-box color-box-red active color-tooltip" data-toggle="tooltip" data-placement="top" title="Red (Default)" data-replace-with="side-menu-red"></div>
        <div class="color-box color-box-green color-tooltip" data-toggle="tooltip" data-placement="top" title="Green" data-replace-with="side-menu-green"></div>
        <div class="color-box color-box-green-sea color-tooltip" data-toggle="tooltip" data-placement="top" title="Green Sea" data-replace-with="side-menu-green-sea"></div>
        <div class="color-box color-box-orange color-tooltip" data-toggle="tooltip" data-placement="top" title="Orange" data-replace-with="side-menu-orange"></div>
        <div class="color-box color-box-blue color-tooltip" data-toggle="tooltip" data-placement="top" title="Blue" data-replace-with="side-menu-blue"></div>
    </div>
    <h3>Content</h3>
    <div class="color-settings-w" data-replace-element=".content-inner" data-leave-class="content-inner">
        <div class="color-box color-box-white color-tooltip" data-toggle="tooltip" data-placement="top" title="White" data-replace-with="content-inner-white"></div>
        <div class="color-box color-box-grey color-tooltip" data-toggle="tooltip" data-placement="top" title="Grey" data-replace-with="content-inner-grey"></div>
        <div class="color-box color-box-beige active color-tooltip" data-toggle="tooltip" data-placement="top" title="Beige" data-replace-with="content-inner-beige"></div>
    </div>
    <div class="toggle-color-settings">
        <i class="icon-cog"></i>
        <span>hide</span>
    </div>
</div>


<script src="<?php echo base_url();?>assets/back/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/back/js/jquery-ui.js"></script>
<script src='<?php echo base_url();?>assets/back/js/865b8229b0ce41d6b0c8e0fc7416f9f2.js'></script>

<script src='<?php echo base_url();?>assets/back/js/15a0b84663e72cbef64a7b3ee6cd86b8.js'></script>
<script>

    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };

</script>

</body>

</html>