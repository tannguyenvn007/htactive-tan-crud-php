<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HT Active</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/docs.theme.min.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <?php include("./config/db.php");?>
    <?php include_once("./data.php");?>
    
    <div class="wrapper">
        <!-- header-top -->
        <?php include_once("components/header_top.php") ?>
        <!-- end header-top -->
        <!-- header -->
        <?php include_once("components/header.php") ?>
        <!-- end header -->
        <!-- banner -->
        <div class="banner">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active carousel-item-cus">
                        <img src="http://www.htactive.com/assets/voc/images/slider-1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://www.htactive.com/assets/voc/images/slider-background.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://www.htactive.com/assets/voc/images/slider-3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end banner -->
        <!-- page-top -->
        <div class="page-top pt-5 pb-5">
            <div class="container">
                <div class="text-center">
                    <p class="lead lead-cus">We strive to offer the best solution for your business.</p>
                    <a class="btn btn-outline-danger btn-cus" href="">Read more <i class="fas fa-info"></i></a>
                    <a class="btn btn-danger  btn-cus" href="">Contact <i class="fas fa-phone"></i></a>
                </div>
            </div>
        </div>
        <!-- end page-top -->
        <!-- service -->
        <?php include("components/service.php") ?>
        <!-- end service -->
        <!-- About us -->
        <?php include_once("components/about.php") ?>
        <!-- end About us -->
        <!-- Contact -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h1 class="text-center">DON'T MISS OUT, CONTACT US NOW!</h1>
                        <p class="text-center">We will reply your message as soon as possible.</p>
                    </div>
                    <div class="col-4 text-center">
                            <a class="btn btn-danger  btn-cus" href="">CONTACT</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact -->
        <!-- why choose us -->
        <?php include_once("components/why_choose.php") ?>
        <!-- end why choose -->
        <!-- footer top -->
        <?php include_once("components/footer_top.php") ?>
        <!-- end footer top -->
        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row ">
                    <div class="col-6">
                        <div class="footer-center">
                            <div class="logo-bottom mb-3">
                                <a href="">
                                    <img src="http://www.htactive.com/assets/voc/images/logo_footer.png" alt="">
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>Your satisfaction is our success!</p>
                                </div>
                                <div class="col-6">
                                    <ul class="list-icons">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> 
                                            <span>63 Phan Dang Luu<br><span style="margin-left: 30px;">Da Nang, Viet Nam</span>
                                        </li>
                                        <li><i class="fas fa-phone"></i></i> (+84) 905 610 229</li>
                                        <li><i class="fas fa-mobile-alt"></i></i> (+84) 1227 423 919</li>
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <a href="mailto:recruit@htactive.com" class="link-color">
                                                recruit@htactive.com
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                            <div class="page-footer">
                                    <h2>Links</h2>
                                    <ul>
                                        <li><a href="">HOME</a></li>
                                        <li><a href="">SERVICE</a></li>
                                        <li><a href="">PORTFOLIOS</a></li>
                                        <li><a href="">CONTACT</a></li>
                                        <li><a href="">BLOGS</a></li>
                                    </ul>
                            </div>
                    </div>
                    <div class="col-4">
                        <div class="connect-face">
                            <h2>CONNECT WITH US</h2>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhtactive%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1780445882280832" width="340" height="214" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright footer-border-top">
                <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <p>Copyright © 2016 by HT Active. All Rights Reserved.</p>
                            </div>
                            <div class="col-6">
                            
                            </div>
                        </div>
                </div>
                    
            </div>
            </footer>
        <!-- end footer -->
    </div>
    <a href="javascript:" id="return-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
    }
</script>
<script src="assets/js/script.js"></script>

<!-- javascript -->
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>
<script src="assets/vendors/highlight.js"></script>
<script src="assets/js/app.js"></script>
<script>
    var owl = $('.owl-carousel');

    owl.owlCarousel({
      margin: 10,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  </script>

</html>