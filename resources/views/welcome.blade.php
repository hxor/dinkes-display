<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Informasi Dinas Kesehatan Kota Cirebon">
    <meta name="author" content="IDStack">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

    <title>Display | Dinas Kesehatan Kota Cirebon</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sticky-footer-navbar.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../..{{ asset('assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
    <script src="{{ asset('assets/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
  </head>

  <body>

    <div class="example3">
        <nav class="navbar navbar navbar-static-top" style="background:#69ca86;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="padding-top: 0px;" href="{{ url('/') }}"><img src="{{ asset('assets/img/logo-kemenkes.png') }}" height="80" alt="Dispute Bills">
                </a>
                </div>
                <div id="navbar3" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><div class="clock" style="color:white; font-size: 4em;"></div></li>
                </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>

    <!-- Begin page content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <video id="idle_video" onended="onVideoEnded();" controls="" src="http://devel.cirebonkota.go.id/display/files/shares/sample-video.mp4"></video>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    <strong>Graha 1</strong>
                                </h1>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                </p>
                                <p>
                                    <a class="btn" href="#">View details »</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    <strong>Graha 2</strong>
                                </h1>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                </p>
                                <p>
                                    <a class="btn" href="#">View details »</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer" style="background:#121238;">
      <div class="container-fluid">
        <marquee behavior="scroll" direction="left" style="color: #ffffff; font-size:28px">
            <b>
                Tenaga kesehatan di Kota Cirebon masih sangat kurang. Dengan peningkatan jumlah pasien yang berobat ke puskesmas, tidak diimbangi dengan penambahan tenaga kesehatan.<span> </span>
            </b>
        </marquee>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ asset('assets/js/sticky-footer-navbar.js') }}"></script>


  </body>
</html>
