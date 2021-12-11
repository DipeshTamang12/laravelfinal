<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('user.css')
    <title>Dipesh Jewelery</title>


</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        @include('user.navbar')
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>our company</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Background</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Who we are &amp; What we do?</h4>
                        <p>Dutch jeweler LEEN HEYNE creates unique pieces that unlock the natural forces embedded in the
                            precious materials he uses. In his hands, gold and platinum are folded, forced and twisted
                            to create a tension that evokes the inherent rhythm of the metal.
                            <br>
                            Diamonds are dynamic: encircled by the curving lines of each piece, they are part of an
                            action that speaks of movement and growth. Although not directly influenced by the natural
                            world, LEEN HEYNE jewels harness the complexity of organic forms. At once ephemeral and
                            strong, they invoke a powerful calm. His diamond and gold rings may remind you of the
                            exposed roots of a tree winding around a rock. The simple elegance of his designs - soft but
                            never silent - are intended to leave the door wide open to interpretation, allowing the
                            beauty of storytelling to unfold in the mind of each wearer.
                            <br>
                        </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





    @include('user.footer')

    @include('user.script')


</body>

</html>