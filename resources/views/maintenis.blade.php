<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">

  <title>In Development - Doremi Music Indonesia</title>

  <!-- Bootstrap -->
  <link href="{{URL::asset('maintenis/assets/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{URL::asset('maintenis/assets/css/bootstrap-theme.css')}}" rel="stylesheet">
  <link href="{{URL::asset('maintenis/assets/css/font-awesome.css')}}" rel="stylesheet">

  <!-- siimple style -->
  <link href="{{URL::asset('maintenis/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: WeBuild
    Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>In Development - Doremi Music Indonesia</h1>
          <h2 class="subtitle">We're working hard to improve our website and we'll ready to launch after</h2>
          <div id="countdown"></div>
          {{-- <form class="form-inline signup" role="form">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
            </div>
            <button type="submit" class="btn btn-theme">Get notified!</button>
          </form> --}}

          {{-- <div class="social">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div> --}}
        </div>
      </div>

      {{-- <div class="row contctform">
        <div class="col-md-8 col-md-offset-2">
          <h3>Contact Us</h3>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
        </div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-4 col-md-offset-2">
            <div class="form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-theme">Send Message</button></div>
            </div>
          </div>
        </form>

      </div> --}}

      <div class="row" style="padding-bottom: 100px;">
        <div class="col-lg-6 col-lg-offset-3">
          <p class="copyright">&copy; Doremi Music Indonesia - All Rights Reserved</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact. 
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=WeBuild
            -->
            Designed by <a href="https://bootstrapmade.com/">WayOut Development</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="{{URL::asset('maintenis/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('maintenis/assets/js/jquery.countdown.min.js')}}"></script>
  <script type="text/javascript">
    $('#countdown').countdown('2018/10/01', function(event) {
      $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
    });
  </script>

  <script src="{{URL::asset('maintenis/contactform/contactform.js')}}"></script>

</body>

</html>
