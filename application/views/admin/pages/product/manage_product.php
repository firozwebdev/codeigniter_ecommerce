
<div class="main-content">
    <div class="widget">
        <h3 class="section-title first-title"><i class="icon-table"></i> Product List</h3>
        <?php $this->load->view('admin/partials/success_message'); ?>
        <div class="widget-content-white glossed">
            <div class="padded">
                <table class="table table-striped table-bordered table-hover datatable">
                    <thead>
                    <tr>
                        <th style="width:35px;">ID</th>
                        <th  style="width:110px;"> Name</th>
                        <th> Category</th>
                        <th  style="width:50px;"> Brand</th>

                        <th  style="width:85px !important;">status</th>
                        <th class="remove_icon" style="width:65% !important;">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $i = 1;
                    foreach($products as $product){;?>

                        <tr>

                            <td><?php echo $i; ?></td>
                            <td><?php echo $product->product_name; ?></td>

                            <td style="width:230px;"><?php echo $product->category_name ; ?></td>
                            <td style="width:230px;"><?php echo $product->brand_name ; ?></td>



                            <td>
                                <?php if($product->product_status == '1'){
                                    echo '<button class="btn btn-success btn-xs">Published</button>';
                                }else{
                                    echo '<button class="btn btn-warning  btn-xs">Unpublished</button>';
                                } ?>
                            </td>

                           
                            <td class="text-right">


                                <?php if($product->product_status == '1'){; ?>
                                    <a href="<?php echo base_url();?>product/unpublished_product/<?php echo $product->product_id; ?>" class="btn btn-default btn-xs"><i class="icon-pencil"></i> Unpublished</a>
                                <?php }else{ ;?>
                                    <a href="<?php echo base_url();?>product/published_product/<?php echo $product->product_id; ?>" class="btn btn-default btn-xs" ><i class="icon-pencil"></i> Published</a>
                                <?php };?>



                                <a href="<?php echo base_url();?>product/edit_product/<?php echo $product->product_id; ?>" class="btn btn-default btn-xs"><i class="icon-pencil"></i> Edit</a>

                                <a href="<?php echo base_url();?>product/delete_product/<?php echo $product->product_id; ?>" class="btn btn-danger btn-xs" onclick="return checkDelete();"><i class="icon-remove"></i> Delete</a>


                            </td>

                        </tr>
                        <?php
                        $i++;
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>