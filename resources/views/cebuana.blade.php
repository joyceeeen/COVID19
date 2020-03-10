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
    background: #0b3d66;
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
            TRUE MONEY
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <center><h5 class="card-title">Number of True Money Centers</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Based on their website</h6>
                      <h1 class="card-text">18,874</h1>
                    </center>
                  </div>
                  <div class="col-lg-6">
                    <center>
                      <h5 class="card-title">Number of our Remittance Agents</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Cebuana Lhuillier</h6>
                      <h1 class="card-text">544</h1>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <center><h5 class="card-title">True Money Top 5 Locations</h5>
                  <h6 class="card-subtitle mb-2 text-muted">with highest number of centers</h6>
                  <div id="loc-div"></div>
                  <?= Lava::render('ColumnChart', 'Location', 'loc-div') ?>

                </center>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <center><h5 class="card-title">Approximately</h5>
                <h2>70%</h2>
                <h4 class="card-subtitle mb-2 text-muted">of True Money centers are in Luzon</h4>
              </center>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <center>
                <h5 class="card-title">International Remittance</h5>

                </center>
                <div id="in-div"></div>
                <?= Lava::render('PieChart', 'Remittance', 'in-div') ?>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <center>
                <h2>3,558</h2>
                <h4 class="card-subtitle mb-2 text-muted">offers International Remittance up to P10,000 cash pick up per transaction</h4>
                </center>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <center>
                <h2>3,498</h2>
                <h4 class="card-subtitle mb-2 text-muted">offers International Remittance up to P 50,000 cash pick up per transaction</h4>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8" style="padding:0px;">
        <iframe style="height:100vh;width:100%;" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col12+from+1tHGAvcsWGfqcAxht3i1IboPt4L36H54-Tl3p2hoU&amp;viz=MAP&amp;h=false&amp;lat=13.823512917167278&amp;lng=124.2768680751874&amp;t=1&amp;z=5&amp;l=col12&amp;y=2&amp;tmplt=2&amp;hml=GEOCODABLE"></iframe>
      </div>
    </div>
  </div>
</body>
</html>
<script src="/js/app.js" charset="utf-8"></script>
