    <!--nav-main / fixed / a fixed, responsive, justified menu is not supported in bootstrap as per http://getbootstrap.com/components/#navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid padding-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img class="img-responsive" src="img/logo-md.png" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse text-center">
          <ul class="nav nav-justified text-size-main-menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="solutions.php">Solutions</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="blog-events.php">Blog &amp; Events</a></li>
            <li><a href="support-contact.php">Support &amp; Contact</a></li>
            <li><button class="btn btn-danger btn-lg">FREE TRIAL</button></li>
            <!--<li class="text-right"><button class="btn btn-danger btn-lg">FREE TRIAL</button></li> justifies button to the right, but when the menu is collapsed it isn't centered-->
          </ul>
        </div>
      </div>
    </nav>
    <!--/nav-main-->
