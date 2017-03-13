
<div class="main-content">
    <div class="row">
        <div class="col-md-8">
            <div class="widget">
                <div style="border: 1px solid #ddd;box-shadow: 1px 1px 1px 0px #FFF;">
                    <div class="padded">
                        <form action="<?php echo base_url(); ?>brand/update_brand" method="post" role="form">
                            <!-- <div class="widget-controls pull-right">
                                 <a href="forms.html#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
                                 <a href="forms.html#" class="widget-link-remove"><i class="icon-remove-sign"></i></a>
                             </div>-->

                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?php echo $brand_info->brand_id; ?>" name="brand_id">
                                <label>brand Name</label>
                                <input class="form-control" type="text" value="<?php echo $brand_info->brand_name; ?>" name="brand_name"  class="form-control" placeholder="brand Name">
                            </div>
                            <div class="form-group">
                                <label>brand Description</label>
                                <textarea   class="form-control"  name="brand_description" cols="39" rows="7"><?php echo $brand_info->brand_description; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>brand Status</label><br>
                                <?php if($brand_info->brand_publication_status == 1){;?>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="brand_publication_status" value="1" checked>
                                            Published
                                        </label>
                                    </div>

                                <?php } else {;?>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="brand_publication_status" value="1" >
                                            Published
                                        </label>
                                    </div>

                                <?php } ?>
                                <?php if($brand_info->brand_publication_status == 0){;?>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="brand_publication_status" value="0" checked >
                                            Unpublished
                                        </label>
                                    </div>


                                <?php } else {;?>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="brand_publication_status" value="0" >
                                            Unpublished
                                        </label>
                                    </div>

                                <?php } ?>




                            </div>
                            <button type="submit" class="btn btn-success">Update brand</button>
                            <a href="<?php echo base_url();?>superadmin/manage_brand" class="btn btn-danger" >Back</a>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
