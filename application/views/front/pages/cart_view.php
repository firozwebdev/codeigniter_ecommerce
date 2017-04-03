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
                        <th>Price</th>
                        <th>Action</th>
                    </tr>

                    <?php echo '<pre>';print_r( $this->cart->contents()); ?>
                    <?php $subtotal=0; ?>
                    <?php foreach($this->cart->contents() as $content){ ?>
                        <tr>
                            <td><img style="width:60px;height:40px;" src="<?php echo base_url(); ?>assets/back/upload/<?php echo $content['options']['image']; ?>"> </td>
                            <td><?php echo $content['name']; ?></td>
                            <td><?php echo $content['price']; ?></td>
                            <form action="<?php echo base_url();?>welcome/update_cart" method="post">
                                <input type="hidden" name="rowid" value="<?php echo $content['rowid'] ?>">
                                <td><input type="number" name="quantity" value="<?php echo $content['qty']; ?>"/></td>
                                <td><?php echo $content['subtotal']; ?></td>
                                <td>

                                    <input type="submit" class="btn btn-success" value="update">
                            </form>
                            <a href="<?php echo base_url(); ?>welcome/remove_cart/<?php echo $content['rowid']; ?>" class="btn btn-danger">Remove</a>

                            </td>
                            <?php
                                $subtotal += $content['subtotal'];
                            ?>
                        </tr>


                    <?php } ?>


                   <tr>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td style="font-weight:bold;">Subtotoal</td>
                       <td><?php echo $subtotal; ?></td>
                       <td></td>
                   </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="font-weight:bold;">Tax</td>
                        <td>12%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="font-weight:bold; color:red">Total</td>
                        <?php
                            $total = $subtotal + $subtotal*.12;

                        ?>
                        <td><?php echo $total; ?></td>
                        <td></td>
                    </tr>
                </table>

                <a href="<?php echo base_url(); ?>welcome/billing_address" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </div>
</div>