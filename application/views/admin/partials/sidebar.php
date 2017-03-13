<style>
    .current{

        background-color: #2a2e3a !important;
    }
    .mydrop{
        display:block !important;
    }

</style>




<div class="side-bar-wrapper collapse navbar-collapse navbar-ex1-collapse">

    <div class="search-box">
        <input type="text" placeholder="SEARCH" class="form-control">
    </div>
    <ul class="side-menu">
        <li>
            <a href="notifications.html">
                <span class="badge badge-notifications pull-right alert-animated">5</span>
                <i class="icon-flag"></i> Notifications
            </a>
        </li>
    </ul>
    <div class="relative-w">
        <ul class="side-menu">
            <li <?php if($this->uri->segment(2)=='dashboard'){echo ' class="active"';} else {echo '';}?>>
                <a  href="<?php echo base_url();?>superadmin/dashboard">
                    <span class="badge pull-right">17</span>
                    <i class="icon-dashboard"></i> Ecommerce
                </a>
            </li>

            <li <?php if($this->uri->segment(2)=='add_brand' || $this->uri->segment(2)=='manage_brand'){echo ' class="active"';} else {echo '';}?>>
                <a href="#" class="is-dropdown-menu">
                    <span class="badge pull-right">24</span>
                    <i class="icon-th"></i> Brand
                </a>
                <ul <?php if($this->uri->segment(2)=='add_brand' || $this->uri->segment(2)=='manage_brand'){echo ' class="mydrop"';} else {echo '';}?>>
                    <li <?php if($this->uri->segment(2)=='add_brand'){echo ' class="current"';} else {echo '';}?>>
                        <a href="<?php echo base_url(); ?>brand/add_brand">
                            <i class="icon-list-alt"></i>
                            Add Brand
                        </a>
                    </li>
                    <li <?php if($this->uri->segment(2)=='manage_brand'){echo ' class="current"';} else {echo '';}?>>
                        <a href="<?php echo base_url(); ?>brand/manage_brand">
                            <i class="icon-table"></i>
                            Manage Brand
                        </a>
                    </li>
                </ul>
            </li>

            <li <?php if($this->uri->segment(2)=='add_category' || $this->uri->segment(2)=='manage_category'){echo ' class="active"';} else {echo '';}?>>
                <a href="#" class="is-dropdown-menu">
                    <span class="badge pull-right">24</span>
                    <i class="icon-th"></i> Category
                </a>
                <ul <?php if($this->uri->segment(2)=='add_category' || $this->uri->segment(2)=='manage_category'){echo ' class="mydrop"';} else {echo '';}?>>
                    <li <?php if($this->uri->segment(2)=='add_category'){echo ' class="current"';} else {echo '';}?>>
                        <a href="<?php echo base_url(); ?>category/add_category">
                            <i class="icon-list-alt"></i>
                            Add Category
                        </a>
                    </li>
                    <li <?php if($this->uri->segment(2)=='manage_category'){echo ' class="current"';} else {echo '';}?>>
                        <a href="<?php echo base_url(); ?>category/manage_category">
                            <i class="icon-table"></i>
                            Manage Category
                        </a>
                    </li>
                </ul>
            </li>
            <li <?php if($this->uri->segment(2)=='add_product' || $this->uri->segment(2)=='manage_product' || $this->uri->segment(2)=='manage_comment'){echo ' class="active"';} else {echo '';}?>>
                <a href="#" class="is-dropdown-menu">
                    <span class="badge pull-right">24</span>
                    <i class="icon-th"></i> Product
                </a>
                <ul <?php if($this->uri->segment(2)=='add_product' || $this->uri->segment(2)=='manage_product'){echo ' class="mydrop"';} else {echo '';}?>>
                    <li <?php if($this->uri->segment(2)=='add_product'){echo ' class="current"';} else {echo '';}?>>
                        <a href="<?php echo base_url(); ?>product/add_product">
                            <i class="icon-list-alt"></i>
                            Add Product
                        </a>
                    </li>
                    <li <?php if($this->uri->segment(2)=='manage_product'){echo ' class="current"';} else {echo '';}?>>
                        <a href="<?php echo base_url(); ?>product/manage_product">
                            <i class="icon-table"></i>
                            Manage Product
                        </a>
                    </li>
                    <li <?php if($this->uri->segment(2)=='manage_comment'){echo ' class="current"';} else {echo '';}?>>
                        <a href="<?php echo base_url(); ?>product/manage_comment">
                            <i class="icon-table"></i>
                            Manage Comment
                        </a>
                    </li>
                </ul>
            </li>
          

            <li>
                <a href="calendar.html">
                    <span class="badge pull-right">11</span>
                    <i class="icon-calendar"></i> Calendar
                </a>
            </li>
            <!--<li>
                <a href="login.html">
                    <span class="badge pull-right"></span>
                    <i class="icon-signin"></i> Login Page
                </a>
            </li>-->

        </ul>


    </div>
</div><!--end sidebar-->