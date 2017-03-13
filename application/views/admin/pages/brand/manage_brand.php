

<div class="main-content">
    <div class="widget">
        <h3 class="section-title first-title"><i class="icon-table"></i> Brand List</h3>
        <?php $this->load->view('admin/partials/success_message'); ?>

        <div class="widget-content-white glossed">
            <div class="padded">
                <table   class="table table-striped table-bordered table-hover  datatable display">
                    <thead>
                    <tr>


                        <th style="width:35px;">ID</th>
                        <th style="width:110px;">Name</th>
                        <th>Description</th>
                        <th style="width:13%;">Status</th>

                        <th class="remove_icon" style="width:31%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php
                    $i = 1;

                    foreach($all_brand as $v_brand){?>

                        <tr>

                            <td><?php echo $i; ?></td>

                            <td><?php echo $v_brand->brand_name; ?></td>

                            <td ><?php echo $v_brand->brand_description; ?></td>


                            <td>
                                <?php if($v_brand->brand_publication_status == '1'){

                                    echo '<button class="btn btn-success btn-xs">Published</button>';
                                }else{

                                    echo '<button class="btn btn-warning  btn-xs">Unpublished</button>';
                                } ?>
                            </td>
                            <td class="text-right" >

                                <?php if($v_brand->brand_publication_status == '1'){; ?>
                                    <a href="<?php echo base_url();?>brand/unpublished_brand/<?php echo $v_brand->brand_id; ?>" class="btn btn-default btn-xs"><i class="icon-pencil"></i> Unpublished</a>
                                <?php }else{ ;?>
                                    <a href="<?php echo base_url();?>brand/published_brand/<?php echo $v_brand->brand_id; ?>" class="btn btn-default btn-xs" ><i class="icon-pencil"></i> Published</a>
                                <?php };?>


                                <a href="<?php echo base_url(); ?>brand/edit_brand/<?php echo $v_brand->brand_id; ?>" class="btn btn-default btn-xs"><i class="icon-pencil"></i> Edit</a>
                                <a href="<?php echo base_url();?>brand/delete_brand/<?php echo $v_brand->brand_id; ?>" class="btn btn-danger btn-xs" onclick="return checkDelete();"><i class="icon-remove"></i> Delete</a>


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


