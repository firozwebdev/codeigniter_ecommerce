<div id="container">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product_price</th>
                        <th>Product Quantity</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    echo '<pre>';
                    print_r($this->cart->contents()); ?>
                    <?php foreach($this->cart->contents() as $content){ ?>
                        <tr>
                            <td><img style="width:60px;height:40px;" src="<?php echo base_url(); ?>assets/back/upload/<?php echo $content['options']['image']; ?>"> </td>
                            <td><?php echo $content['name']; ?></td>
                            <td><?php echo $content['price']; ?></td>
                            <td><input type="number" value="<?php echo $content['qty']; ?>"/></td>
                            <td>
                                <a href="#" class="btn btn-success">Update</a>
                                <a href="#" class="btn btn-danger">Remove</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>