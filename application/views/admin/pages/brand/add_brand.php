
<div class="main-content">
    <div class="row">
        <div class="col-md-8">
            <div class="widget">

                <div style="border: 1px solid #ddd;box-shadow: 1px 1px 1px 0px #FFF;">
                    <div class="padded">
                        <form action="<?php echo base_url(); ?>brand/save_brand" method="post" role="form">
                            <!-- <div class="widget-controls pull-right">
                                 <a href="forms.html#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
                                 <a href="forms.html#" class="widget-link-remove"><i class="icon-remove-sign"></i></a>
                             </div>-->

                            <?php
                            $message = $this->session->userdata('message');
                            if($message){?>
                                <div class="alert alert-success"><?php echo $message;?></div>
                                <?php $this->session->unset_userdata('message');
                            }
                            ?>
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input  type="text" name="brand_name"  class="form-control" placeholder="Brand Name">
                            </div>
                            <div class="form-group">
                                <label>Brand Description</label>
                                <textarea name="brand_description"  class="form-control"  cols="39" rows="7"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Brand Status</label><br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="brand_publication_status" value="1" checked>
                                        Published
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio"  name="brand_publication_status" value="0" >
                                        Unpublished
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Add Brand</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
