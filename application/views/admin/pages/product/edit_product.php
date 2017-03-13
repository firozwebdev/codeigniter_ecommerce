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
                        <form enctype="multipart/form-data" action="<?php echo base_url(); ?>product/update_product" method="post">
                            <!-- <div class="widget-controls pull-right">
                                 <a href="forms.html#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
                                 <a href="forms.html#" class="widget-link-remove"><i class="icon-remove-sign"></i></a>
                             </div>-->


                            <div class="form-group">
                                <input type="hidden" class="form-control" name="product_id"  value="<?php echo $product_info->product_id; ?>">
                                <input type="hidden" class="form-control" name="image_two_id"  value="<?php if(! empty($product_images[0]->img_id)){ echo $product_images[0]->img_id ; }?>">
                                <input type="hidden" class="form-control" name="image_three_id"  value="<?php if(! empty($product_images[0]->img_id)){ echo $product_images[1]->img_id ; }?>">

                                <label>product Name</label>
                                <input value="<?php echo $product_info->product_name; ?>" name="product_name"  type="text"   class="form-control" >
                            </div>




                                <!--test-->

                                <div class="form-group">
                                    <label>Product Category</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Select Category...</option>
                                        <?php foreach($categories as $category){?>
                                            <?php if($category->category_id==$product_info->category_id){; ?>

                                                <option value="<?php echo $category->category_id; ?>" selected><?php echo $category->category_name; ?></option>
                                            <?php } else{ ?>

                                                <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                                            <?php } ?>

                                        <?php } ?>

                                    </select>
                                </div>
                                <!--test-->

                            <div class="form-group">
                                <label>Product Brand Name</label>
                                <select name="brand_id" class="form-control">
                                    <option value="">Select Brand...</option>
                                    <?php foreach($brands as $brand){?>
                                        <?php if($brand->brand_id==$product_info->brand_id){; ?>

                                            <option value="<?php echo $brand->brand_id; ?>" selected><?php echo $brand->brand_name; ?></option>
                                        <?php } else{ ?>

                                            <option value="<?php echo $brand->brand_id; ?>"><?php echo $brand->brand_name; ?></option>
                                        <?php } ?>

                                    <?php } ?>

                                </select>
                            </div>


                            <div class="form-group" style="margin-bottom: 25px;">
                                <label>Product Description</label>
                                <textarea id="ck_editor" name="product_description"><?php echo $product_info->product_description; ?></textarea><?php echo display_ckeditor($editor['ckeditor']) ;?>
                            </div>
                            <div class="form-group">
                                <label>Product Price (Previous)</label>
                                <input   type="text" name="product_previous_price"  class="form-control" value="<?php echo $product_info->product_previous_price; ?>">
                            </div>
                            <div class="form-group">
                                <label>Product Price (Present)</label>
                                <input   type="text" name="product_present_price"  class="form-control"  value="<?php echo $product_info->product_present_price; ?>">
                            </div>

                            <div class="form-group">
                                <label>Product Color</label>
                                <select name="product_color" class="form-control">
                                    <option value="">Select Color...</option>
                                    <?php if($product_info->product_color=='red'){ ?>
                                        <option selected value="red">Red</option>
                                        <option value="blue">Blue</option>
                                        <option value="black">Black</option>
                                    <?php } ?>

                                    <?php if($product_info->product_color=='blue'){ ?>
                                        <option value="red">Red</option>
                                        <option elected value="blue">Blue</option>
                                        <option value="black">Black</option>
                                    <?php } ?>

                                    <?php if($product_info->product_color=='black'){ ?>
                                        <option value="red">Red</option>
                                        <option value="blue">Blue</option>
                                        <option  elected  value="black">Black</option>
                                    <?php } ?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Type</label>
                                <select name="product_type" class="form-control">
                                    <option value="">Select Product Type...</option>
                                    <?php if($product_info->product_type=='normal'){ ?>
                                        <option selected value="normal">Normal</option>
                                        <option value="featured">Featured</option>
                                        <option value="special">Special</option>
                                    <?php } ?>

                                    <?php if($product_info->product_type=='featured'){ ?>
                                        <optionvalue="normal">Normal</option>
                                        <option  selected  value="featured">Featured</option>
                                        <option value="special">Special</option>
                                    <?php } ?>

                                    <?php if($product_info->product_type=='special'){ ?>
                                        <optionvalue="normal">Normal</option>
                                        <option value="featured">Featured</option>
                                        <option   selected  value="special">Special</option>
                                    <?php } ?>



                                </select>
                            </div>
                            <!--<div class="form-group">
                                <label for="exampleInputFile">Image Upload:</label>
                                <input  value="" type="file" name="blog_image" id="exampleInputFile">
                                <p style="margin-left:154px;" class="help-block">Please upload an image.</p>
                            </div>
                            <!--<label for="exampleInputFile">Image Upload:</label>
                            <input style="margin-left:54px;" id="uploadFile" placeholder="Choose File"/>
                            <div class="fileUpload btn btn-primary">
                                <span>Upload</span>
                                <input id="uploadBtn" type="file" class="upload" />
                            </div>-->
                            <label for="exampleInputFile">Edit Images</label>


                            <div class="form-group">

                                <div class="col-md-5">
                                    <?php if($this->uri->segment(2)=='edit_product'){ ?>
                                        <input   type="file" name="product_image" onchange="readURL(this);" />
                                        <p  class="help-block">Please upload an image Upto 5MB</p>
                                        <input id="imageTwo"  type="file" name="product_image_two" onchange="readURL1(this);" />
                                        <p  class="help-block">Please upload an image Upto 5MB</p>
                                        <input id="imageThree"  type="file" name="product_image_three" onchange="readURL2(this);" />
                                    <?php } ?>

                                    <?php if(! $this->uri->segment(2)=='edit_product'){ ?>
                                        <input required  type="file" name="product_image" onchange="readURL(this);" />

                                    <?php } ?>

                                    <p  class="help-block">Please upload an image Upto 5MB</p>

                                    <div id="more_img">

                                    </div>

                                </div>
                                <div class="col-md-7">
                                    <?php if($product_info->product_image){ ?>
                                        <img  id="blah1" style ="width: 100px;height: 80px;float: right;" src="<?php echo base_url().'assets/back/upload/small-'.$product_info->product_image ;?>" alt="" />

                                    <?php } ?>


                                    <?php if($product_images){ ?>
                                        <?php $i=2; ?>
                                        <?php foreach($product_images as $multiple_image) { ?>
                                            <img  id="blah<?php echo $i; ?>" style ="width: 100px;height: 80px;float: right;margin-right:10px;" src="<?php echo base_url().'assets/back/upload/small-'.$multiple_image->product_image ;?>" alt="" />
                                            <?php $i++; ?>
                                        <?php } ?>

                                    <?php } ?>

                                </div>
                            </div>



                            <div class="form-group">
                                <div id="my_div">

                                </div>
                            </div>




                            <div style="clear:both;margin-bottom:30px;"></div>
                            <label>product Status</label>

                            <?php if($product_info->product_status==1){;?>

                                <label style="margin-left:72px;">
                                    <input type="radio" name="product_status" value="1" checked>
                                    Published
                                </label>
                            <?php }else{?>
                                <label style="margin-left:72px;">
                                    <input type="radio" name="product_status" value="1" >
                                    Published
                                </label>
                            <?php }?>

                            <?php if($product_info->product_status==0){; ?>

                                <label style="margin-left:20px;">
                                    <input type="radio"  name="product_status" value="0" checked>
                                    Unpublished
                                </label><br/>

                            <?php }else{;?>
                                <label style="margin-left:20px;">
                                    <input type="radio"  name="product_status" value="0" >
                                    Unpublished
                                </label><br/>
                            <?php } ?>


                            <button style="margin-top: 20px;" type="submit" class="btn btn-success">Update product</button>

                            <a href="<?php echo base_url();?>product/manage_product" class="btn btn-danger" style=" margin-left: 5px;margin-top:20px;">Back</a>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!--
<script>
    $(document).ready(function(){

        //second Image are taking to php with ajax call
        $('#imageTwo').on('change',function() {
            var myFile = $('#imageTwo').prop('files');
            var imageName = myFile[0].name;
            var imgId = '<?php echo $product_images[0]->img_id ; ?>';
            var productId = '<?php echo $product_info->product_id; ?>';


            $.post("<?php echo base_url();?>product/update_product_multiple_image", {imgId:imgId,productId:productId,imageName:imageName}, function(result){

            });


        });
        //Third Image are taking to php with ajax call
        $('#imageThree').on('change',function() {
            var myFile = $('#imageThree').prop('files');
            var imageName = myFile[0].name;
            var imgId = '<?php echo $product_images[1]->img_id ; ?>';
            var productId = '<?php echo $product_info->product_id; ?>';


            $.post("<?php echo base_url();?>product/update_product_multiple_image", {imgId:imgId,productId:productId,imageName:imageName}, function(result){

            });


        });





           // var img = $('change_edit').attr('src');
            //alert(img);
            // var product_images = 'yes';
           // $.post("<?php echo base_url();?>product/update_product", {product_images: product_images}, function(result){

           // });

    });

</script>
<!--
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
                newdiv =  " <div><input required  type='file' name='product_images[]' onchange='readURL1(this);'  ></div><p  class=\"help-block\">Please upload an image Upto 5MB</p>";
            }
            if(counter == 2){
                newdiv =  " <div><input  type='file' name='product_images[]' onchange='readURL2(this);'  ></div><p  class=\"help-block\">Please upload an image Upto 5MB</p>";
            }


            $('#more_img').append(newdiv);
            // console.log(counter);
            counter++;
        }
    }
</script> -->
