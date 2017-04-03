<div class="container" style="overflow:hidden">
    <div class="row">
        <form action="<?php echo base_url(); ?>welcome/save_billing_info" method="post">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" name="name" style="width:100%" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email_address"  class="form-control"  placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="name">Country</label>
                    <select name="country" id="" class="form-control">
                        <option value="">Select Country....</option>
                        <option>Bangladesh</option>
                        <option>India</option>
                        <option>Pakistan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mobile">Email Address</label>
                    <input type="text" name="mobile"  class="form-control"  style="width:100%"  placeholder="Mobile">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Go Ahead</button>
                </div>
            </div>
        </form>
    </div>
</div>