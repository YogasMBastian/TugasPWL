@extends('layout/main')
@extends('layout/blog')

@section('Title', 'Ini Halaman Profil')

@section('container')
@section('blog')
<!-- Breadcrumbs -->

  <div class="timer mt-5">
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <!-- Countdown dashboard start -->
          <div id="countdown_dashboard">
            <div class="countDown">
              <div class="dash days_dash">
                <span class="dash_title">days</span>
                <div class="digit">0</div>
                <div class="digit">0</div>
              </div>

              <div class="dash hours_dash">
                <span class="dash_title">hours</span>
                <div class="digit">0</div>
                <div class="digit">0</div>
              </div>

              <div class="dash minutes_dash">
                <span class="dash_title">minutes</span>
                <div class="digit">0</div>
                <div class="digit">0</div>
              </div>

              <div class="dash seconds_dash">
                <span class="dash_title">seconds</span>
                <div class="digit">0</div>
                <div class="digit">0</div>
              </div>
            </div>
          </div>
          <!-- Countdown dashboard end -->
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-lg-12">
      <form class="form-horizontal">
        <div class="text-center">
          <div class="subscribe">
            <form action="" method="POST" id="subscribe_form">
              <input type="text" name="email" id="email_field" class="faded" value="your@email.com" /> <input type="submit" id="subscribe_button" value="Send" />
            </form>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="social-icon">
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<!--/ End Single News -->

<!-- Footer Area -->

<!--/ End Footer Area -->

<!-- jquery Min JS -->


@endsection


@endsection

