<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Polishop eCommerce HTML Template</title>
    <link href="<?php echo base_url();?>assets/front/image/favicon.png" rel="icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="clean modern and elegant corporate look eCommerce html template">
    <meta name="author" content="">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/slideshow.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/flexslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/js/colorbox/colorbox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/carousel.css" media="screen" />
    <!-- CSS Part End-->
    <!-- JS Part Start-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.easing-1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/colorbox/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/tabs.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/cloud_zoom.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.dcjqaccordion.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/html5.js"></script>
    <!-- JS Part End-->
    <!-- Google Fonts (Droid Sans) Start -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans&amp;v1' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=&amp;v1' rel='stylesheet' type='text/css'>
    <!-- Google Fonts (Droid Sans) End -->
</head>
<body>
<div class="wrapper-box">
    <div class="main-wrapper">
        <!--Header Part Start-->
        <header id="header">
            <div class="htop">
                <div id="language"> <span>Language<b></b></span>
                    <ul>
                        <li><a title="English"><img src="<?php echo base_url();?>assets/front/image/flags/gb.png" alt="English" />English</a></li>
                        <li><a title="Türkçe"><img src="<?php echo base_url();?>assets/front/image/flags/tr.png" alt="Türkçe" />Türkçe</a></li>
                    </ul>
                </div>
                <div id="currency"> <span>Currency<b></b></span>
                    <ul>
                        <li> <a title="Euro">€ - Euro</a> </li>
                        <li> <a title="Pound Sterling">£ - Pound Sterling</a> </li>
                        <li> <a title="US Dollar"><b>$ - US Dollar</b></a> </li>
                    </ul>
                </div>
                <div class="links"> <a href="login.html">Login</a> <a href="register.html">Register</a> <a href="index.html#" id="wishlist-total">Wish List (0)</a> <a href="index.html#">My Account</a> <a href="checkout.html">Checkout</a> </div>
            </div>
            <section class="hsecond">
                <div id="logo"><a href="index.html"><img src="<?php echo base_url();?>assets/front/image/logo.png" title="Polishop" alt="Polishop" /></a></div>
                <div id="search">
                    <div class="button-search"></div>
                    <input type="text" name="search" placeholder="Search" value="" />
                </div>
                <!--Mini Shopping Cart Start-->
                <section id="cart">
                    <div class="heading">
                        <h4><img width="32" height="32" alt="" src="<?php echo base_url();?>assets/front/image/cart-bg.png"></h4>
                        <a><span id="cart-total">2 item(s) - $710.18</span></a> </div>
                    <div class="content">
                        <div class="mini-cart-info">
                            <table>
                                <tr>
                                    <td class="image"><a href="product.html"><img src="<?php echo base_url();?>assets/front/image/product/lotto-sports-shoes-white-47x47.jpg" alt="Lotto Sports Shoes" title="Lotto Sports Shoes" /></a></td>
                                    <td class="name"><a href="product.html">Lotto Sports Shoes</a></td>
                                    <td class="quantity">x&nbsp;1</td>
                                    <td class="total">$589.50</td>
                                    <td class="remove"><img src="<?php echo base_url();?>assets/front/image/remove-small.png" alt="Remove" title="Remove" /></td>
                                </tr>
                                <tr>
                                    <td class="image"><a href="product.html"><img src="<?php echo base_url();?>assets/front/image/product/iphone_1-47x47.jpg" alt="iPhone 4s" title="iPhone 4s" /></a></td>
                                    <td class="name"><a href="product.html">iPhone 4s</a></td>
                                    <td class="quantity">x&nbsp;1</td>
                                    <td class="total">$120.68</td>
                                    <td class="remove"><img src="<?php echo base_url();?>assets/front/image/remove-small.png" alt="Remove" title="Remove" /></td>
                                </tr>
                            </table>
                        </div>
                        <div class="mini-cart-total">
                            <table>
                                <tr>
                                    <td class="right"><b>Sub-Total:</b></td>
                                    <td class="right">$601.00</td>
                                </tr>
                                <tr>
                                    <td class="right"><b>Eco Tax (-2.00):</b></td>
                                    <td class="right">$4.00</td>
                                </tr>
                                <tr>
                                    <td class="right"><b>VAT (17.5%):</b></td>
                                    <td class="right">$105.18</td>
                                </tr>
                                <tr>
                                    <td class="right"><b>Total:</b></td>
                                    <td class="right">$710.18</td>
                                </tr>
                            </table>
                        </div>
                        <div class="checkout"><a class="button" href="cart.html">View Cart</a> &nbsp; <a class="button" href="checkout.html">Checkout</a></div>
                    </div>
                </section>
                <!--Mini Shopping Cart End-->
                <div class="clear"></div>
            </section>
            <!--Top Menu(Horizontal Categories) Start-->
            <nav id="menu">
                <ul>
                    <li><a target="_blank" href="<?php echo base_url(); ?>">Home</a></li>

                    <li><a target="_blank" href="index.html#">Category</a>
                        <div>
                            <ul>
                                <?php foreach($all_category as $category){ ?>
                                    <li><a href="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>

                    <li><a target="_blank" href="index.html#">Headers</a>
                        <div>
                            <ul>
                                <li><a href="index.html">Header Style 1</a></li>
                                <li><a href="header-footer-2.html">Header Style 2</a></li>
                                <li><a href="header-footer-3.html">Header Style 3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a target="_blank" href="index.html#">Menus</a>
                        <div>
                            <ul>
                                <li><a href="index.html">Horizontal Categories</a></li>
                                <li><a href="header-footer-2.html">Vertical Categories</a></li>
                                <li><a href="header-footer-3.html">Simple Categories</a></li>
                            </ul>
                        </div>
                    </li>


                    <li><a>My Account</a>
                        <div>
                            <ul>
                                <li><a href="index.html#">My Account</a></li>
                                <li><a href="index.html#">Order History</a></li>
                                <li><a href="index.html#" id="wishlist-total">Wish List (0)</a></li>
                                <li><a href="index.html#">Newsletter</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a>Information</a>
                        <div>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="about-us.html">Delivery Information</a></li>
                                <li><a href="about-us.html">Privacy Policy</a></li>
                                <li><a href="elements.html">Elements</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </nav>
            <!--Top Menu(Horizontal Categories) End-->
            <!-- Mobile Menu Start-->
            <nav id="menu" class="m-menu"> <span>Menu</span>
                <ul>
                    <li class="categories"><a>Categories</a>
                        <div>
                            <div class="column"> <a href="category.html">Electronics</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Laptops (0)</a></li>
                                        <li><a href="category.html">Desktops (0)</a></li>
                                        <li><a href="category.html">Components (1)</a></li>
                                        <li><a href="category.html">Software (1)</a></li>
                                        <li><a href="category.html">Phones &amp; PDAs (4)</a></li>
                                        <li><a href="category.html">Cameras (2)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"> <a href="category.html">Jewellery</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Children's Jewellery (0)</a></li>
                                        <li><a href="category.html">Men's Jewellery (1)</a></li>
                                        <li><a href="category.html">Women's Jewellery (0)</a></li>
                                        <li><a href="category.html">Sample Test (0)</a></li>
                                        <li><a href="category.html">Sample Test11 (0)</a></li>
                                        <li><a href="category.html">Sample Test12 (0)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"> <a href="category.html">Shoes</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Children's Shoes (1)</a></li>
                                        <li><a href="category.html">Men's Shoes (2)</a></li>
                                        <li><a href="category.html">Women's Shoes (1)</a></li>
                                        <li><a href="category.html">Test Sample (0)</a></li>
                                        <li><a href="category.html">Test Sample1 (0)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"> <a href="category.html">Clothing</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Men (1)</a></li>
                                        <li><a href="category.html">Women (1)</a></li>
                                        <li><a href="category.html">Boys (0)</a></li>
                                        <li><a href="category.html">Girls (0)</a></li>
                                        <li><a href="category.html">Accessories (0)</a></li>
                                        <li><a href="category.html">Sample Test21 (0)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"> <a href="category.html">Kids</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Toys Kids (0)</a></li>
                                        <li><a href="category.html">Games (1)</a></li>
                                        <li><a href="category.html">Sample Test22 (0)</a></li>
                                        <li><a href="category.html">Sample Test15 (1)</a></li>
                                        <li><a href="category.html">Sample Kids (1)</a></li>
                                        <li><a href="category.html">Sample Test6 (0)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"> <a href="category.html">Watches</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Women's Watches (1)</a></li>
                                        <li><a href="category.html">Men's Watches (0)</a></li>
                                        <li><a href="category.html">Children's Watches (1)</a></li>
                                        <li><a href="category.html">Sample16 (0)</a></li>
                                        <li><a href="category.html">Sample17 (0)</a></li>
                                        <li><a href="category.html">test 18 (0)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"> <a href="category.html">Sports</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Women's Sports (1)</a></li>
                                        <li><a href="category.html">Children's Sports (0)</a></li>
                                        <li><a href="category.html">Men's Sports (1)</a></li>
                                        <li><a href="category.html">test 7 (0)</a></li>
                                        <li><a href="category.html">Sample 8 (0)</a></li>
                                        <li><a href="category.html">test 9 (0)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"> <a href="category.html">Health</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Sample Test1 (1)</a></li>
                                        <li><a href="category.html">Sample Test2 (0)</a></li>
                                        <li><a href="category.html">test 20 (0)</a></li>
                                        <li><a href="category.html">test 21 (0)</a></li>
                                        <li><a href="category.html">test 22 (0)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"> <a href="category.html">Furniture</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Bedrooms Furniture (0)</a></li>
                                        <li><a href="category.html">Kidsrooms furniture (0)</a></li>
                                        <li><a href="category.html">Kitchen Furniture (1)</a></li>
                                        <li><a href="category.html">Showcase Furniture (0)</a></li>
                                        <li><a href="category.html">Table Furniture (1)</a></li>
                                        <li><a href="category.html">Wall Furniture (0)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column"><a href="category.html">Books</a>
                                <div>
                                    <ul>
                                        <li><a href="category.html">Audio Books (1)</a></li>
                                        <li><a href="category.html">Comedy Book (1)</a></li>
                                        <li><a href="category.html">Comics Books (0)</a></li>
                                        <li><a href="category.html">Computer Book (1)</a></li>
                                        <li><a href="category.html">Cookies Books (0)</a></li>
                                        <li><a href="category.html">English Books (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- Mobile Menu End-->
        </header>
        <!--Header Part End-->
        <?php echo $main_content; ?>
    </div>
    <!--Footer Part Start-->
    <footer id="footer">
        <div class="fpart-inner">
            <div class="social-part">
                <!-- Custom Column Part Start-->
                <div class="custom_column part3">
                    <h3>Custom Column</h3>
                    <p>You can insert any content here.<br>
                        <br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
                        <br>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic. <br><br>It has survived not only five centuries, but also the leap into electronic.</p>
                </div>
                <!-- Custom Column Part End-->
                <!-- Twitter Feeds Part Start-->
                <div id="twitter_footer" class="part3">
                    <h3>Twitter Feed</h3>
                    <div class="twitter_footer">
                        <a class="twitter-timeline" href="https://twitter.com/harnishdesign" data-chrome="noheader nofooter noborders noscrollbar transparent" data-theme="dark" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">Tweets by @harnishdesign</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                </div>
                <!-- Twitter Feeds Part End-->
                <!-- Facebook Box Part Start-->
                <div id="facebook" class="part3">
                    <h3>Join us on Facebook</h3>
                    <div class="facebook-outer">
                        <div class="facebook-inner">
                            <div class="line"></div>
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-like-box" data-href="http://www.facebook.com/160281810726316" data-width="370" data-show-faces="true" data-stream="false" data-header="false" data-colorscheme="dark" data-connections="16" data-color-scheme="dark" data-border-color="#222222"></div>
                        </div></div></div>
                <!-- Facebook Box Part End-->
            </div>
            <div class="column">
                <h3>Information</h3>
                <ul>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="about-us.html">Delivery Information</a></li>
                    <li><a href="about-us.html">Privacy Policy</a></li>
                    <li><a href="elements.html">Elements</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Customer Service</h3>
                <ul>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="index.html#">Returns</a></li>
                    <li><a href="sitemap.html">Site Map</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Extras</h3>
                <ul>
                    <li><a href="index.html#">Brands</a></li>
                    <li><a href="index.html#">Gift Vouchers</a></li>
                    <li><a href="index.html#">Affiliates</a></li>
                    <li><a href="index.html#">Specials</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>My Account</h3>
                <ul>
                    <li><a href="index.html#">My Account</a></li>
                    <li><a href="index.html#">Order History</a></li>
                    <li><a href="index.html#">Wish List</a></li>
                    <li><a href="index.html#">Newsletter</a></li>
                </ul>
            </div>
            <!-- Contact Details Start-->
            <div class="contact contact_icon">
                <h3>Contact Us</h3>
                <ul>
                    <li class="address">Central Square, 22 Hoi Wing Road, Tuen Mun, New Delhi, India</li>
                    <li class="mobile">+91 9896989598</li>
                    <li class="fax">+91 9896989598</li>
                    <li class="email"><a href="mailto:info@contact.com">info@contact.com</a></li>
                </ul>
            </div>
            <!-- Contact Details End-->
            <div class="clear"></div>
            <div id="powered">
                <!-- Payment Images Icon Start-->
                <div class="payments_types part3"> <img src="<?php echo base_url();?>assets/front/image/payment_paypal.png" alt="paypal" title="PayPal"> <img src="<?php echo base_url();?>assets/front/image/payment_american.png" alt="american-express" title="American Express"> <img src="<?php echo base_url();?>assets/front/image/payment_2checkout.png" alt="2checkout" title="2checkout"> <img src="<?php echo base_url();?>assets/front/image/payment_maestro.png" alt="maestro" title="Maestro"> <img src="<?php echo base_url();?>assets/front/image/payment_discover.png" alt="discover" title="Discover"> </div>
                <!-- Payment Images Icon End-->
                <!-- Powered by Text Start-->
                <div class="powered_text part3">
                    <p>Polishop Html Template © 2013<br />
                        Template By <a target="_blank" href="http://harnishdesign.net">Harnish Design</a></p>
                </div>
                <!-- Powered by Text End-->
                <!-- Follow Social Icons Start-->
                <div class="social part3"> <a href="http://facebook.com/harnishdesign" target="_blank"><img src="<?php echo base_url();?>assets/front/image/facebook.png" alt="Facebook" title="Facebook"></a> <a href="https://twitter.com/#!/harnishdesign" target="_blank"><img src="<?php echo base_url();?>assets/front/image/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="index.html#" target="_blank"> <img src="<?php echo base_url();?>assets/front/image/googleplus.png" alt="Google+" title="Google+"> </a> <a href="index.html#" target="_blank"> <img src="<?php echo base_url();?>assets/front/image/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="index.html#" target="_blank"> <img src="<?php echo base_url();?>assets/front/image/rss.png" alt="RSS" title="RSS"> </a> <a href="http://www.vimeo.com/#" target="_blank"> <img src="<?php echo base_url();?>assets/front/image/vimeo.png" alt="Vimeo" title="Vimeo"> </a> </div>
                <!-- Follow Social Icons End-->
                <div class="clear"></div>
            </div>
            <!-- Back to Top Button Start-->
            <div class="back-to-top" id="back-top"><a title="Back to Top" href="javascript:void(0)" class="backtotop">Top</a></div>
            <!-- Back to Top Button End-->
        </div>
    </footer>
    <!--Footer Part End-->
</div>

<script>
    $('#tabs li a').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href") // activated tab
        alert(target);
    })
    // $('.mytab').on('change',fucntion(e){
    // var target = $(e.target).attr("href");
    // alert(target);
    // });
</script>
</body>
</html>