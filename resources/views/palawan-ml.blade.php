<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  </style>
  <title>Map</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


  <link rel="stylesheet" href="/css/app.css">
  <style media="screen">
  .card{
    margin-bottom: 15px;
  }
  .back-btn{
    font-size: 20px;
    padding-top:20px;
    padding-bottom:20px;
  }
  a{
    color: #fff;
    font-weight: bold;
  }
  a:hover,a:focus{
    color: #e4e4e4;
  }
  body{
    background: #e12522;
  }
  @media(max-width:767px){
    body{
      overflow:auto !important;
    }
    .responsiveData{
      height: auto !important;
    }
  }
  </style>
</head>
<body style="overflow:hidden;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 responsiveData" style="overflow-y: scroll; height: 100vh;">
        <div class="row" style="overflow:auto;">
          <div class="col-lg-6">
            <a href="/"><i class="fas fa-chevron-left back-btn"></i> HOME</a>
          </div>
          <div class="col-lg-6 back-btn" style="font-weight:bolder;color:#ffffff;">
            COMPETITORS
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4">
                    <center>
                      <h5 class="card-title">M Lhuillier</h5>
                      <br>
                      <!-- <h6 class="card-subtitle mb-2 text-muted">used in this analysis</h6> -->
                      <h1 class="card-text">1,665</h1>
                      <br>
                      <h6 class="card-subtitle mb-2 text-muted">As of October 2016</h6>

                    </center>
                  </div>
                  <div class="col-lg-4">
                    <center>
                      <h5 class="card-title">Palawan Pawnshop</h5>
                      <!-- <h6 class="card-subtitle mb-2 text-muted">used in this analysis</h6> -->
                      <h1 class="card-text">2,206</h1>
                      <br>
                      <h6 class="card-subtitle mb-2 text-muted">As of April 2016 <br> (including PEPP)</h6>

                    </center>
                  </div>
                  <div class="col-lg-4">
                    <center>
                      <h5 class="card-title">Cebuana Lhuillier</h5>
                      <!-- <h6 class="card-subtitle mb-2 text-muted">used in this analysis</h6> -->
                      <h1 class="card-text">2,923</h1>
                      <br>
                      <h6 class="card-subtitle mb-2 text-muted">As of October 2018 <br>(including RAs)</h6>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">

                <center>
                  <h5 class="card-title">M. Lhuillier Top 5 Location</h5>
                  <h6 class="card-subtitle mb-2 text-muted">with highest number of branches</h6>
                  <div id="loc-div"></div>
                  <?= Lava::render('ColumnChart', 'Location', 'loc-div') ?>
                </center>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <center><h5 class="card-title">M. Lhuillier</h5></center>
                <div class="row">
                  <div class="col-lg-6">
                    <center>
                      <h1 class="card-text">157</h1>
                      <h4 class="card-text">24 hours Branches</h4>
                    </center>
                  </div>
                  <div class="col-lg-6">
                    <center>
                      <h1 class="card-text">12.17</h1>
                      <h4 class="card-text">Average operating hours</h4>
                    </center>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <center>
                  <h5 class="card-title">Top 5 Branch Partner (Palawan Express)</h5>
                  <div id="pro-div"></div>
                  <?= Lava::render('ColumnChart', 'Partners', 'pro-div') ?>
                </center>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <center>
                      <h5 class="card-title">Palawan Pawnshop</h5>
                      <h1 class="card-text">1,031</h1>
                      <h4 class="card-text">branches</h4>

                    </center>
                  </div>
                  <div class="col-lg-6">
                    <center>
                      <h5 class="card-title">Palawan Express</h5>
                      <h1 class="card-text">1,178</h1>
                      <h4 class="card-text">branches</h4>
                    </center>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <center><h5 class="card-title">Palawan Pawnshop</h5></center>
                <div class="row">
                  <div class="col-lg-6">
                    <center>
                      <h1 class="card-text">8:30 PM</h1>
                      <h4 class="card-text">Latest closing hours</h4>
                    </center>
                  </div>
                  <div class="col-lg-6">
                    <center>
                      <h1 class="card-text">9.64</h1>
                      <h4 class="card-text">Average operating hours</h4>
                    </center>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8" style="padding:0px;">
        <iframe style="height:100vh;width:100%;"scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col1+from+1TBiSqERM9AK2X2GPs9tvMU9LIfEzTzrEwKo3X6uK&amp;viz=MAP&amp;h=false&amp;lat=13.222027366873043&amp;lng=121.39842662893147&amp;t=1&amp;z=5&amp;l=col1&amp;y=2&amp;tmplt=2&amp;hml=GEOCODABLE"></iframe>
      </div>
    </div>
  </div>
</body>
</html>
<script src="/js/app.js" charset="utf-8"></script>
