
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah3').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>



<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="widget">
                <div style="border: 1px solid #ddd;box-shadow: 1px 1px 1px 0px #FFF;">
                    <div class="padded">
                        <form enctype="multipart/form-data" action="<?php echo base_url(); ?>product/save_product" method="post" role="form">
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
                                <label>Product Name</label>
                                <input   type="text" name="product_name"  class="form-control" placeholder="Product Name">
                            </div>


                            <div class="form-group">
                                <label>Product Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category...</option>
                                    <?php foreach($all_category as $v_category){?>

                                        <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                    <?php } ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Product Brand Name</label>
                                <select name="brand_id" class="form-control">
                                    <option value="">Select Brand...</option>
                                    <?php foreach($all_brand as $v_brand){?>

                                        <option value="<?php echo $v_brand->brand_id; ?>"><?php echo $v_brand->brand_name; ?></option>
                                    <?php } ?>

                                </select>
                            </div>


                            <div class="form-group" style="margin-bottom: 25px;">
                                <label>Product Description</label>
                                <textarea id="ck_editor" name="product_description"></textarea><?php echo display_ckeditor($editor['ckeditor']) ;?>
                            </div>

                            <div class="form-group">
                                <label>Product Price (Previous)</label>
                                <input   type="text" name="product_previous_price"  class="form-control" placeholder="Product Previous Price">
                            </div>
                            <div class="form-group">
                                <label>Product Price (Present)</label>
                                <input   type="text" name="product_present_price"  class="form-control" placeholder="Product Present Price">
                            </div>
                            <div class="form-group">
                                <label>Product Color</label>
                                <select name="product_color" class="form-control">
                                    <option value="">Select Color...</option>
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="black">Black</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Type</label>
                                <select name="product_type" class="form-control">
                                    <option value="">Select Product Type...</option>
                                    <option selected value="normal">Normal</option>
                                    <option value="featured">Featured</option>
                                    <option value="special">Special</option>


                                </select>
                            </div>
                            <!--
                            <div class="form-group">
                                <label for="exampleInputFile">Image Upload:</label>
                                <input type="file" id="exampleInputFile">
                                <p style="margin-left:154px;" class="help-block">Please upload an image.</p>
                            </div>-->
                            <label for="exampleInputFile">Upload Image</label>


                            <div class="form-group">

                               <div class="col-md-5">
                                   <input required  type="file" name="product_image" onchange="readURL(this);" />
                                   <p  class="help-block">Please upload an image Upto 5MB</p>

                                   <div id="more_img">

                                   </div>
                                   <input id="add_more" type="button" value="Add More" onClick="addInput('dynamicInput');">
                               </div>
                                <div class="col-md-7">
                                    <img  id="blah1" style ="width: 100px;height: 80px;float: right;" src="http://placehold.it/100x80?text=Preview" alt="" />
                                    <img  id="blah2" style ="width: 100px;height: 80px;float: right;margin-right:10px;" src="http://placehold.it/100x100?text=Preview" alt="" />
                                    <img  id="blah3" style ="width: 100px;height: 80px;float: right;margin-right:10px;" src="http://placehold.it/100x100?text=Preview" alt="" />
                                </div>
                            </div>




                            <!--<button style="margin-left:51px;" type="button" onclick="changeIT()">Add Images</button>-->



                              <div class="form-group">
                                <div id="my_div">

                                </div>
                            </div>

                            <div style="clear:both"></div>
                            <div class="form-group" style="margin-top:50px;">
                                <label>Product Quantity (Available)</label>
                                <input name="product_quantity"   type="text"   class="form-control" placeholder="Product Quantity">
                            </div>
                            <div class="form-group" style="margin-top:50px;">
                                <label>Product Reorder Level</label>
                                <input name="product_reorder_level"   type="text"   class="form-control" placeholder="Product Reorder Level">
                            </div>





                            <button style="margin-top: 20px;" type="submit" class="btn btn-success">Add Product</button>

                            <a href="<?php echo base_url();?>product/manage_product" style=" margin-left: 5px;margin-top:20px;"   class="btn btn-danger">Return</a>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var counter = 1;
    var limit = 3;
    function addInput(divName){
        if (counter == limit)  {
            alert("You have reached the limit of adding " + counter + " images");
            $('#add_more').fadeOut();
        }
        else {
            var newdiv;

            if(counter == 1){
                newdiv =  " <div><input  type='file' name='product_images[]' onchange='readURL1(this);'  ></div><p  class=\"help-block\">Please upload an image Upto 5MB</p>";
            }
            if(counter == 2){
                newdiv =  " <div><input  type='file' name='product_images[]' onchange='readURL2(this);'  ></div><p  class=\"help-block\">Please upload an image Upto 5MB</p>";
            }


            $('#more_img').append(newdiv);
           // console.log(counter);
            counter++;
        }
    }
</script>