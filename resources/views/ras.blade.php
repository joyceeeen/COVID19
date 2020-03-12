<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <script type="text/javascript"
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPtHDerXAert82F9Gf-Yltf3lq-WonuVQ&libraries=visualization">
 </script>
 <style>
 html, body {
   height: 100%;
   margin: 0;
   padding: 0;
 }
 </style>

 <title>COVID19</title>

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

 .floating-panel {
   position: absolute;
   top: 10px;
   left: 25%;
   z-index: 5;
   padding-left: 10px;
 }

 @media(max-width:767px){
   body{
     overflow:auto !important;
   }
   .responsiveData{
     height: auto !important;
   }

   .floating-panel {
     position: absolute;
     top: 10%;
     left: 0%;
     z-index: 5;
     padding-left: 10px;
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
         <div class="col-lg-6 back-btn float-right" style="font-weight:bolder;color:#ffffff;text-align:right">
           COVID19
         </div>
         <nav style="width:100%;">
           <div class="nav nav-tabs" id="nav-tab" role="tablist">
             <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overall</a>
             <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Philippines</a>
             <a class="nav-item nav-link" id="nav-cebuana-tab" data-toggle="tab" href="#nav-cebuana" role="tab" aria-controls="nav-profile" aria-selected="false">Potential Affected Branches</a>
               <a class="nav-item nav-link" id="nav-sources-tab" data-toggle="tab" href="#nav-sources" role="tab" aria-controls="nav-profile" aria-selected="false">Sources</a>
           </div>
         </nav>
         <div class="col-lg-12">

           <div class="tab-content" id="nav-tabContent">
             <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
               <div class="col-lg-12 mt-3">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-lg-12">
                         <center>
                           <h2 class="card-title">Global</h2>
                         </center>
                       </div>
                       <div class="col-lg-6">
                         <center>
                           <h5 class="card-title">Confirmed</h5>
                           <h1 class="card-text">118,326</h1>
                         </center>
                       </div>
                       <div class="col-lg-6">
                         <center>
                           <h5 class="card-title">Recovered</h5>
                           <h1 class="card-text">64,315</h1>
                         </center>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-lg-12">
                         <center>
                           <h2 class="card-title">Philippines</h2>
                         </center>
                       </div>
                       <div class="col-lg-6">
                         <center>
                           <h5 class="card-title">Confirmed</h5>
                           <h1 class="card-text">52</h1>
                         </center>
                       </div>
                       <div class="col-lg-6">
                         <center>
                           <h5 class="card-title">Recovered</h5>
                           <h1 class="card-text">2</h1>
                         </center>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-lg-12">
                         <center>
                           <h2 class="card-title">Mortality Rate</h2>
                         </center>
                       </div>
                       <div class="col-lg-6">
                         <center>
                           <h5 class="card-title">Global</h5>
                           <h1 class="card-text">3.64%</h1>
                         </center>
                       </div>
                       <div class="col-lg-6">
                         <center>
                           <h5 class="card-title">Philippines</h5>
                           <h1 class="card-text">3.03%</h1>
                         </center>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

             </div>
             <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

               <div class="col-lg-12 mt-3">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-lg-12">
                         <center>
                           <h5 class="card-title">Total # of Cases</h5>
                           <h6 class="card-subtitle mb-2 text-muted"> per date</h6>
                           <div id="loc-div"></div>
                           <?= Lava::render('LineChart', 'Location', 'loc-div') ?>
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
                       <h5 class="card-title">Rate</h5>
                       <h6 class="card-subtitle mb-2 text-muted"></h6>
                       <div id="pro-div"></div>
                       <?= Lava::render('ColumnChart', 'Province', 'pro-div') ?>
                     </center>
                   </div>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <center>
                       <h5 class="card-title">Travel history</h5>

                     </center>
                     <div id="in-div"></div>
                     <?= Lava::render('PieChart', 'Region', 'in-div') ?>
                   </div>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <center>
                       <h5 class="card-title">Nationality</h5>

                     </center>
                     <div id="np-div"></div>
                     <?= Lava::render('PieChart', 'Nationality', 'np-div') ?>
                   </div>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <center>
                       <h5 class="card-title">Age</h5>

                     </center>
                     <div id="age-div"></div>
                     <?= Lava::render('PieChart', 'Age', 'age-div') ?>
                   </div>
                 </div>
               </div>
             </div>
             <div class="tab-pane fade" id="nav-cebuana" role="tabpanel" aria-labelledby="nav-home-tab">
               <div class="col-lg-12 mt-3">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-lg-12">
                         <table class="table">
                           <thead>
                             <tr>
                               <th scope="col">Branch Name</th>
                               <th scope="col">Town</th>
                               <th scope="col">Province/City</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <td style="font-weight:bold">CLH Palico - Imus</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Millennium Aguinaldo Imus</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH CityMall - Imus</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLRB MBO Imus</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Imus Robinson's Site</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>

                             <tr>
                               <td style="font-weight:bold">CLH Imus 1</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Imus 2</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Terminus Plaza - Nueno</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Golden City - Imus</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Malagasang II A, Imus Cavite</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Golden City Ext - Greengate</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Bucandala</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Bucandala Ext.</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Buhay na Tubig - Imus</td>
                               <td>Imus</td>
                               <td>Cavite</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Caypombo Sta. Maria</td>
                               <td>Sta.Maria</td>
                               <td>Bulacan</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Sta. Maria 2</td>
                               <td>Sta.Maria</td>
                               <td>Bulacan</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Sta. Maria</td>
                               <td>Sta.Maria</td>
                               <td>Bulacan</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Bonny Serrano Ave. - Crame</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Camp Crame</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Road 3</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Roosevelt - Del Monte</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH West Avenue 3</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Frisco 2</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Frisco 3</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Del Monte Avenue</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Scout Borromeo</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Panay Avenue</td>
                               <td>Quezon City</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH West Crame - San Juan</td>
                               <td>San Juan</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Wilson Greenhills</td>
                               <td>San Juan</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH San Juan 2</td>
                               <td>San Juan</td>
                               <td>Metro Manila</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Karangalan</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Kabisig Floodway</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Saint Joseph</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Greenpark</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Puregold Cainta Junction</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Junction 2</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH San Roque - Cainta</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH A. Bonifacio Cainta</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                             <tr>
                               <td style="font-weight:bold">CLH Cainta</td>
                               <td>Cainta</td>
                               <td>Rizal</td>
                             </tr>
                           </tbody>
                         </table>
                       </div>

                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="tab-pane fade" id="nav-sources" role="tabpanel" aria-labelledby="nav-sources-tab">
               <div class="col-lg-12 mt-3">
                 <div class="card" style="width: 100%;">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-lg-12" style="color:black;">
                         <center>
                           <h2 class="card-title">Sources</h2>
                         </center>
                         <a href="https://en.wikipedia.org/wiki/2020_coronavirus_outbreak_in_the_Philippines" style="color:black;">Wikipedia</a><br>
                         <a href="https://www.scmp.com/news/china/science/article/3074351/coronavirus-can-travel-twice-far-official-safe-distance-and-stay" style="color:black;">South China Morning Post</a><br>
                         <a href="https://www.who.int/philippines" style="color:black;">World Health Organization</a><br>
                         <a href="#" style="color:black;">ERM Report</a>



                       </div>

                     </div>
                   </div>
                 </div>
               </div>


             </div>
           </div>

         </div>


       </div>
     </div>
     <div class="col-lg-8" style="padding:0px;">
       <div class="col-8 floating-panel">
         <div class="row">
           <div class="col">
             <button id="drop" class="form-control" onclick="drop()">6KM radius</button>
           </div>
           <div class="col">
             <button id="drop" class="form-control" onclick="dropMarker()">CL Branches</button>
           </div>
         </div>

       </div>
       <div class=""  id="map" style="height:100vh">

       </div>
     </div>
   </div>
 </div>
</body>
</html>
<script src="/js/app.js" charset="utf-8"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="/js/covidMap.js" charset="utf-8"></script>
