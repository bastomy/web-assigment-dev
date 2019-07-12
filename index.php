<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/advotics_logo.png" type="image/ico" />
    <title>Advotics </title>
    <!-- Bootstrap -->
    <link href="./asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="./asset/bootstrap-daterangepicker/daterangepickers.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="./asset/build/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <style>
      canvas {
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      }
    </style>
  </head>
  <body class="nav-sm">
    <div class="container">
      <div class="row">
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a href="./index.php">
                  <img src="./asset/images/cropped-logo-6.jpg" style="width: 128.82px;height: 32px; margin-left: 32px;">
                </a>
                <div style="font-family: 'Open Sans';font-size: 11px; display: inline-block; margin-left: 15px; vertical-align: bottom;">
                  powered by  <img src="./asset/images/cropped-logo-6.jpg" style="width: 72.46px; height: 18px;">
                </div>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <div class="profile_info new_font">
                    <span>Username</span>
                    <h2>Company Name</h2>
                  </div>
                  <div class="profile_pic">
                    <a href="javascript:void(0)">
                    <img src="./asset/images/Profile.svg" alt="..." class="img-circle profile_img">
                    </a>
                    <a href="javascript:void(0)">
                    <img src="./asset/images/logout@2x.png" style="height: 15px; width: 15px; margin-top: 23px; margin-left: 20px;">
                    </a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <div class="navbar nav_title" style="border: 0; background-color: #D2D2D2;">
              <a href="./index.php" class="site_title"><img src="./asset/images/Dashboard icon.svg" style="height: 16.93px; padding-left: 12px;"> <span>Advotics</span></a>
            </div>
          </div>
        </div>
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-8 col-sm-4 col-xs-6 tile_stats_count">
              <div class="count new_font">Dashboard</div>
            </div>
            <div class="col-md-4">
              <div class="x_panel">
                <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; width: 100%; font-size:15px;">
                  <i class="fa fa-calendar"></i>&nbsp;&nbsp; &nbsp;  Period &nbsp; &nbsp; 
                  <span></span> <i class="fa fa-caret-down"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- /top tiles -->
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel" style="background: #37B04C !important;">
                <span style="color: #FFFFFF; font-size: 20px;" class="new_font">MARKET INSIGHT</span>
                <div class="pull-right" style="color: #FFFFFF;">
                  <a href="javascript:void(0)" style="color: #FFFFFF">
                  <img src="./asset/images/Help.png">
                  <span style="text-decoration: underline;" class="new_font">
                  Click here for help?   
                  <i class="fa fa-angle-up fa-2x"></i>
                  </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="x_panel">
                <div class="x_title">
                  <span>Sales Turnover</span>
                  <ul class="nav navbar-right panel_toolbox" style="min-width: 0px !important">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="col-md-9">
                    <div class="title_left" style="color: #000000">
                      <h3><b>Rp 3,600,000</b></h3>
                    </div>
                    <span style="color: red; font-size: 10px;"><i class="fa fa-arrow-down"></i>13,8%</span><span style="font-size: 10px;"> last period in product sold</span>
                  </div>
                  <div class="col-md-3">
                    <img src="./asset/images/Sales Turnover.svg" style="width: 48px;height: 42px;">
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
              <div class="x_panel">
                <div class="x_title">
                  <div class="col-md-8">
                    <span style="color: #707070; font-size: 20px;">AVERAGE PURCHASE VALUE</span>                  
                  </div>
                  <div class="col-md-3">
                    <select class="form-control" style="display: inline-block; font-size: 10px;" onchange="UpdateBar()">
                      <?php for ($i=1; $i <=12 ; $i++) { ?>
                        <option>Last <?php echo $i; ?> months</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                    <ul class="nav navbar-right panel_toolbox" style="min-width: 0px !important">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <canvas id="canvas"></canvas>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="x_panel" style="height:444px;">
                <div class="x_title">
                  <span style="color: #707070; font-size: 20px;">BEST SELLING SKU</span>
                  <ul class="nav navbar-right panel_toolbox" style="min-width: 0px !important">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="list-unstyled top_profiles scroll-view" style="padding-top: 10px;">
                    <li class="media event" style="background-color: #FFE7BD;">
                      <a href="" class="pull-left">
                      <img src="./asset/images/danone.png" style="width: 80px; height: 80px; display: inline-block;">
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">[Nama Product]</a>
                        <div class="row" style="padding-top: 10px;">
                          <div class="col-xs-6">
                            Rp XXX
                          </div>
                          <div class="col-xs-6">
                            [jml terjual]
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php for ($i=0; $i <4 ; $i++) { ?>
                    <li class="media event borderlist">
                      <a href="" class="pull-left">
                      <img src="./asset/images/Product  Competitor.png" style="width: 60px; display: inline-block;">
                      </a>
                      <div class="media-body" style="padding-top: 10px;">
                        <a class="title" href="#">[Nama Product]</a>
                        <div class="row" style="padding-top: 10px;">
                          <div class="col-xs-6">
                            Rp XXX
                          </div>
                          <div class="col-xs-6">
                            [jml terjual]
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php }?>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="x_panel"  style="height:444px;">
                <div class="x_title">
                  <span style="color: #707070; font-size: 20px;">TOP KOMPETITOR SKU</span>
                  <ul class="nav navbar-right panel_toolbox" style="min-width: 0px !important">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="list-unstyled top_profiles scroll-view" style="padding-top: 10px;">
                    <li class="media event" style="background-color: #FFE7BD;">
                      <a href="" class="pull-left">
                      <img src="./asset/images/Product  Competitor.png" style="width: 80px; height: 80px; display: inline-block;">
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">[Nama Product]</a>
                        <div class="row" style="padding-top: 10px;">
                          <div class="col-xs-6">
                            Rp XXX
                          </div>
                          <div class="col-xs-6">
                            [jml terjual]
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php for ($i=0; $i <4 ; $i++) { ?>
                    <li class="media event borderlist">
                      <a href="" class="pull-left">
                      <img src="./asset/images/Product  Competitor.png" style="width: 60px; display: inline-block;">
                      </a>
                      <div class="media-body" style="padding-top: 10px;">
                        <a class="title" href="#">[Nama Product]</a>
                        <div class="row" style="padding-top: 10px;">
                          <div class="col-xs-6">
                            Rp XXX
                          </div>
                          <div class="col-xs-6">
                            [jml terjual]
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->
    <!-- jQuery -->
    <script src="./asset/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./asset/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="./asset/moment/moment.js"></script>
    <script src="./asset/bootstrap-daterangepicker/daterangepickers.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="./asset/build/js/custom.min.js"></script>
    <script src="./asset/Chart.js/dist/chart.js"></script>
    <script src="./asset/Chart.js/dist/utils.js"></script>
  </body>
  <script type="text/javascript">
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();
        var max = moment().subtract(1, 'days');
        function cb(start, end) {
            $('#reportrange span').html(start.format('DD MMMM YYYY') + ' - ' + end.format('DD MMMM YYYY'));
        }
    
        $('#reportrange').daterangepicker({
            maxDate: max,
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
    
        cb(start, end);
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            chartData.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return getRandomInt(50);
              });
            });
            window.myMixedChart.update();
        });
    });
  </script>
  <script>
    function getRandomInt(max) {
       return Math.floor(Math.random() * Math.floor(max));
    }
    var chartData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        type: 'line',
        label: 'Dataset 1',
        borderColor: 'rgba(255, 232, 84, 1)',
        borderWidth: 2,
        fill: false,
        data: [
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50)
        ]
      }, {
        type: 'bar',
        label: 'Dataset 2',
        backgroundColor: 'rgba(55, 176, 76, 1)',
        data: [
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50),
          getRandomInt(50)
        ],
        borderColor: 'white',
        borderWidth: 2
      }]
    
    };
    window.onload = function() {
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myMixedChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
          responsive: true,
          title: {
            display: false,
            text: 'Chart.js Combo Bar Line Chart'
          },
          tooltips: {
            mode: 'index',
            intersect: false
          }
        }
      });
    };

    function UpdateBar() {
      chartData.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
          return getRandomInt(50);
        });
      });
      window.myMixedChart.update();
    }
  </script>
</html>