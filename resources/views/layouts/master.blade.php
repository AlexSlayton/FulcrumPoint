
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">

    <!-- Font Raleway -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

  </head>

  <body>

  <div id="navi">

    @include ('layouts.nav')
    </div>

    <header class="masthead">
    <div class="blub">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">A Cool Title</h1>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus. Proin ac dapibus felis, hendrerit semper purus. In at condimentum augue. Vivamus ligula tortor, posuere vitae velit ut, luctus suscipit urna. Aliquam quis arcu suscipit, condimentum dolor a, tincidunt velit. Nulla tempor quis quam ac bibendum.</p>
          <div class="btn-hero">
          <a class="btn btn-primary btn-xl" href="/contact">Contact Us</a>
          </div>
          <div class="btn-hero">
          <a class="btn btn-primary btn-xl" href="/services">Services</a>
          </div>
          <div class="ScrollDown">
          <img src="/img/ScrollDownIcon.png" height="75">
        </div>
      </div>
      </div>
      </div>
    </header>

    <section id="services">
      <div class="container">
        <div class="row">
        <div id="serviceMain">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Why Choose Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus. Proin ac dapibus felis, hendrerit semper purus. In at condimentum augue. Vivamus ligula tortor, posuere vitae velit ut, luctus suscipit urna. Aliquam quis arcu suscipit, condimentum dolor a, tincidunt velit. Nulla tempor quis quam ac bibendum.</p>           
          </div>
        </div>
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 text-center">
          
            <div class="service-box">
            <span class="glyphicon glyphicon-hdd"></span>
              <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
              <h3>Service One</h3>
              <p class="text-muted">Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Service Two</h3>
              <p class="text-muted">Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus.</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
              <h3>Service Three</h3>
              <p class="text-muted">Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus.</p>
            </div>
            </div>

          </div>
        </div>
      </div>
    
      <div class="viewMoreBtn">
      <a class="btn btn-primary btn-xl" href="/services">View More</a>
      </div>

    <div class="connectMain">
      <div class="col-lg-12 text-center">
            <h2 class="section-heading">Let's Connect Today</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus. Proin ac dapibus felis, hendrerit semper purus. </p>
            <div class="viewMoreBtn">
      <a class="btn btn-primary btn-xl" href="/contact">Contact</a>
      </div>        
          </div>
          </div>
    </section>
    
    <!-- Footer -->
    <div class="footerBottom">
    @include ('layouts.footer')
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->



    <script src="/js/frontEnd.js" ></script>
    

    

    

    <!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!- IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script> --> 
  </body>
</html>
