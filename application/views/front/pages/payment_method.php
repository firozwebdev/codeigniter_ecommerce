<div class="container" style="overflow:hidden">
    <div class="row">
        <form action="<?php echo base_url(); ?>welcome/order_place" method="post">
            <div class="col-md-6">
                <div class="form-group">

                    <label for="Cash on Delivery">Cash on Delivery</label> <input type="radio" class="form-control" name="payment_method" >
                    <label for="paypal">paypal</label>  <input type="radio" name="payment_method"   class="form-control" >
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Place Order</button>
                </div>
        </form>
    </div>
</div>