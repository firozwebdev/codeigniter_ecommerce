<div id="column-left">
    <!--Bestsellers Part Start-->
    <div class="box">
        <div class="box-heading">Bestsellers</div>
        <div class="box-content">
            <div class="box-product">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slide-inner">
                                <div class="image"><a href="product.html"><img src="<?php echo base_url();?>assets/front/image/product/sony_vaio_1-45x45.jpg" alt="Friendly Jewelry" /></a></div>
                                <div class="name"><a href="product.html">Friendly Jewelry</a></div>
                                <div class="price">$1,177.00</div>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-inner">
                                <div class="image"><a href="product.html"><img src="<?php echo base_url();?>assets/front/image/product/apple_cinema_30-45x45.jpg" alt="Apple Cinema 30&quot;" /></a></div>
                                <div class="name"><a href="product.html">Apple Cinema 30&quot;</a></div>
                                <div class="price"><span class="price-old">$119.50</span> <span class="price-new">$107.75</span></div>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-inner">
                                <div class="image"><a href="product.html"><img src="<?php echo base_url();?>assets/front/image/product/ipod_classic_1-45x45.jpg" alt="iPad Classic" /></a></div>
                                <div class="name"><a href="product.html">iPad Classic</a></div>
                                <div class="price">$119.50</div>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-inner">
                                <div class="image"><a href="product.html"><img src="<?php echo base_url();?>assets/front/image/product/lotto-sports-shoes-white-45x45.jpg" alt="Lotto Sports Shoes" /></a></div>
                                <div class="name"><a href="product.html">Lotto Sports Shoes</a></div>
                                <div class="price">$589.50</div>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-inner">
                                <div class="image"><a href="product.html"><img src="<?php echo base_url();?>assets/front/image/product/Jeep-Casual-Shoes-45x45.jpg" alt="Jeep-Casual-Shoes" /></a></div>
                                <div class="name"><a href="product.html">Jeep-Casual-Shoes</a></div>
                                <div class="price">$131.25</div>
                                <div class="clear"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Bestsellers Part End-->
    <!--Latest Product Start-->
    <div class="box">
        <div class="box-heading">Latest</div>
        <div class="box-content">
            <div class="box-product">
                <div class="flexslider">
                    <ul class="slides">

                        <?php foreach($products_latest as $product){ ?>
                            <li>
                                <div class="slide-inner">
                                    <div class="image"><a href="<?php echo base_url();?>welcome/single_product/<?php echo $product->product_id; ?>"><img style="width:45px;height:45px;" src="<?php echo base_url().'assets/back/upload/medium-'.$product->product_image ;?>" alt="Lotto Sports Shoes" /></a></div>
                                    <div class="name"><a href="<?php echo base_url();?>welcome/single_product/<?php echo $product->product_id; ?>"><?php echo $product->product_name; ?></a></div>
                                    <div class="price"> $<?php echo $product->product_present_price; ?> </div>

                                    <div class="clear"></div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Latest Product End-->
    <!--Banner Start-->
    <div class="banner">
        <div><a href="product.html#"><img src="<?php echo base_url();?>assets/front/image/product/small-banner1-220x350.jpg" alt="banner" title="banner" /></a></div>
    </div>
    <!--Banner End-->
</div>