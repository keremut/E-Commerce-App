<?php require_once('nedmin/netting/conn_.php');
$companyInfo = $db->prepare("select * from settings where settingId = 1");
$companyInfo->execute();
$company = $companyInfo->fetch(PDO::FETCH_ASSOC);
?>

<div class="f-widget"><!--footer Widget-->
    <div class="container">
        <div class="row">
            <div class="col-md-4"><!--footer twitter widget-->
                <div class="title-widget-bg">
                    <div class="title-widget">Twitter Updates</div>
                </div>
                <ul class="tweets">
                    <li>Check out this great #themeforest item for you
                        'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
                        <span>2 hours ago</span>
                    </li>
                    <li class="lastone">Check out this great #themeforest item for you
                        'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
                        <span>2 hours ago</span>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <a href="#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i>
                    <div>Follow us on twitter</div>
                </a>
            </div><!--footer twitter widget-->
            <div class="col-md-4"><!--footer newsletter widget-->
                <div class="title-widget-bg">
                    <div class="title-widget">Newsletter Signup</div>
                </div>
                <div class="newsletter">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <form role="form">
                        <div class="form-group">
                            <label>Your Email address</label>
                            <input type="email" class="form-control newstler-input" id="exampleInputEmail1"
                                placeholder="Enter email">
                            <button class="btn btn-default btn-red btn-sm">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div><!--footer newsletter widget-->
            <div class="col-md-4"><!--footer contact widget-->
                <div class="title-widget-bg">
                    <div class="title-widget-cursive">Shopping</div>
                </div>
                <ul class="contact-widget">
                    <li class="fphone"><?php echo "+" . $company['settingPhone'] ?> <br>
                        <?php echo "+" . $company['settingGsm'] ?>
                        <br> <?php echo "+" . $company['settingFaks'] ?>
                    </li>
                    <li class="fmail lastone"><?php echo "+" . $company['settingMail'] ?></li>
                </ul>
            </div><!--footer contact widget-->
        </div>
        <div class="spacer"></div>
    </div>
</div><!--footer Widget-->
<div class="footer"><!--footer-->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="footermenu"><!--footer nav-->
                    <li><a href="index-1.htm">Home</a></li>
                    <li><a href="cart.htm">My Cart</a></li>
                    <li><a href="checkout.htm">Checkout</a></li>
                    <li><a href="order.htm">Completed Orders</a></li>
                    <li><a href="contact.htm">Contact us</a></li>
                </ul><!--footer nav-->
                <div class="f-credit">&copy;All rights reserved by <a href="#">yoursite.com</a></div>
                <a href="">
                    <div class="payment visa"></div>
                </a>
                <a href="">
                    <div class="payment paypal"></div>
                </a>
                <a href="">
                    <div class="payment mc"></div>
                </a>
                <a href="">
                    <div class="payment nh"></div>
                </a>
            </div>
            <div class="col-md-3"><!--footer Share-->
                <div class="followon">Follow us on</div>
                <div class="fsoc">
                    <a href="<?php echo $company['settingTwitter'] ?>" class="ftwitter" target="_blank">twitter</a>
                    <a href="<?php echo $company['settingInstagram'] ?>" class="ftwitter" target="_blank">">twitter</a>
                    <a href="<?php echo $company['settingFacebook'] ?>" class="ffacebook" target="_blank">facebook</a>
                    <a href="<?php echo $company['settingGoogle'] ?>" class="fflickr" target="_blank">flickr</a>
                    <a href="<?php echo $company['settingYoutube'] ?>" class="ftwitter" target="_blank">twitter</a>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div><!--footer Share-->
        </div>
    </div>
</div><!--footer-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap\js\bootstrap.min.js"></script>

<!-- map -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js\jquery.ui.map.js"></script>
<script type="text/javascript" src="js\demo.js"></script>

<!-- owl carousel -->
<script src="js\owl.carousel.min.js"></script>

<!-- rating -->
<script src="js\rate\jquery.raty.js"></script>
<script src="js\labs.js" type="text/javascript"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js\product\lib\jquery.mousewheel-3.0.6.pack.js"></script>

<!-- fancybox -->
<script type="text/javascript" src="js\product\jquery.fancybox.js?v=2.1.5"></script>

<!-- custom js -->
<script src="js\shop.js"></script>
</div>
</body>

</html>