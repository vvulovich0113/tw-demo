
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gentelella Alela! | </title>

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">

<link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">

<link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">

</head>
<body class="nav-md">

<div class="x_content">
<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
<div class="profile_img">
<div id="crop-avatar">

<img class="img-responsive avatar-view" src="{{ asset('picture.jpg') }}" alt="Avatar" title="Change the avatar">
</div>
</div>
<h3>Samuel Doe</h3>
<ul class="list-unstyled user_data">
<li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
</li>
<li>
<i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
</li>
<li class="m-top-xs">
<i class="fa fa-external-link user-profile-icon"></i>
<a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
</li>
</ul>
<a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
<br>

<h4>Skills</h4>
<ul class="list-unstyled user_data">
<li>
<p>Web Applications</p>
 <div class="progress progress_sm">
<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="50" style="width: 50%;"></div>
</div>
</li>
<li>
<p>Website Design</p>
<div class="progress progress_sm">
<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70" aria-valuenow="69" style="width: 70%;"></div>
</div>
</li>
<li>
<p>Automation &amp; Testing</p>
<div class="progress progress_sm">
<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" aria-valuenow="29" style="width: 30%;"></div>
</div>
</li>
<li>
<p>UI / UX</p>
<div class="progress progress_sm">
<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="50" style="width: 50%;"></div>
</div>
</li>
</ul>

</div>
<div class="col-md-9 col-sm-9 col-xs-12">
<div class="profile_title">
<div class="col-md-6">
<h2>User Activity Report</h2>
</div>
<div class="col-md-6">
<div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
<span>January 13, 2019 - February 11, 2019</span> <b class="caret"></b>
</div>
</div>
</div>

<div id="graph_bar" style="width: 100%; height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="359" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.140625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël @@VERSION</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="46.90625" y="211.1588852435625" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.0026352435625085" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M59.40625,211.1588852435625H334" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="46.90625" y="164.61916393267188" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.009788932671881" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">750</tspan></text><path fill="none" stroke="#aaaaaa" d="M59.40625,164.61916393267188H334" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="46.90625" y="118.07944262178125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.001317621781254" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M59.40625,118.07944262178125H334" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="46.90625" y="71.53972131089063" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.008471310890627" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2,250</tspan></text><path fill="none" stroke="#aaaaaa" d="M59.40625,71.53972131089063H334" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="46.90625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M59.40625,25H334" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="320.2703125" y="223.6588852435625" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-83.6604,238.5846)"><tspan dy="4.0026352435625085" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Other</tspan></text><text x="292.8109375" y="223.6588852435625" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-111.0701,238.5488)"><tspan dy="4.0026352435625085" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">iPhone 6S Plus</tspan></text><text x="237.8921875" y="223.6588852435625" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-117.7132,204.7436)"><tspan dy="4.0026352435625085" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">iPhone 6 Plus</tspan></text><text x="182.9734375" y="223.6588852435625" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-119.2288,167.3536)"><tspan dy="4.0026352435625085" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">iPhone 5S</tspan></text><text x="128.0546875" y="223.6588852435625" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-132.8653,138.4507)"><tspan dy="4.0026352435625085" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">iPhone 3GS</tspan></text><text x="73.1359375" y="223.6588852435625" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-135.8222,102.0645)"><tspan dy="4.0026352435625085" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">iPhone 4</tspan></text><rect x="62.838671875" y="187.57875977937792" width="20.594531250000003" height="23.58012546418459" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="90.298046875" y="170.51419529871802" width="20.594531250000003" height="40.64468994484449" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="117.757421875" y="194.0943207629026" width="20.594531250000003" height="17.064564480659897" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="145.216796875" y="113.6736823376836" width="20.594531250000003" height="97.48520290587891" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="172.676171875" y="170.51419529871802" width="20.594531250000003" height="40.64468994484449" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="200.135546875" y="77.49680563868463" width="20.594531250000003" height="133.66207960487787" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="227.594921875" y="140.17029700401736" width="20.594531250000003" height="70.98858823954515" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="255.054296875" y="64.03131293940027" width="20.594531250000003" height="147.12757230416224" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="282.513671875" y="119.87897851246902" width="20.594531250000003" height="91.27990673109349" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="309.97304687499997" y="126.08427468725444" width="20.594531250000003" height="85.07461055630807" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 254.273px; top: 111px; display: none;"><div class="morris-hover-row-label">iPhone 5S</div><div class="morris-hover-point" style="color: #26B99A">
  Geekbench:
  655
</div></div></div>

<div class="" role="tabpanel" data-example-id="togglable-tabs">
<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
</li>
<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
</li>
<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
</li>
</ul>
<div id="myTabContent" class="tab-content">
<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

<ul class="messages">
<li>
<img src="images/img.jpg" class="avatar" alt="Avatar">
<div class="message_date">
<h3 class="date text-info">24</h3>
<p class="month">May</p>
</div>
<div class="message_wrapper">
<h4 class="heading">Desmond Davison</h4>
<blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
<br>
 <p class="url">
<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
<a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
</p>
</div>
</li>
<li>
<img src="images/img.jpg" class="avatar" alt="Avatar">
<div class="message_date">
<h3 class="date text-error">21</h3>
<p class="month">May</p>
</div>
<div class="message_wrapper">
<h4 class="heading">Brian Michaels</h4>
<blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
<br>
<p class="url">
<span class="fs1" aria-hidden="true" data-icon=""></span>
<a href="#" data-original-title="">Download</a>
</p>
</div>
</li>
<li>
<img src="images/img.jpg" class="avatar" alt="Avatar">
<div class="message_date">
<h3 class="date text-info">24</h3>
<p class="month">May</p>
</div>
<div class="message_wrapper">
<h4 class="heading">Desmond Davison</h4>
<blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
<br>
<p class="url">
<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
<a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
</p>
</div>
</li>
<li>
<img src="images/img.jpg" class="avatar" alt="Avatar">
<div class="message_date">
<h3 class="date text-error">21</h3>
<p class="month">May</p>
</div>
<div class="message_wrapper">
<h4 class="heading">Brian Michaels</h4>
<blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
<br>
<p class="url">
<span class="fs1" aria-hidden="true" data-icon=""></span>
<a href="#" data-original-title="">Download</a>
</p>
</div>
</li>
</ul>

</div>
<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

<table class="data table table-striped no-margin">
<thead>
<tr>
<th>#</th>
<th>Project Name</th>
<th>Client Company</th>
<th class="hidden-phone">Hours Spent</th>
<th>Contribution</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>New Company Takeover Review</td>
<td>Deveint Inc</td>
<td class="hidden-phone">18</td>
<td class="vertical-align-mid">
<div class="progress">
<div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
</div>
</td>
</tr>
<tr>
<td>2</td>
<td>New Partner Contracts Consultanci</td>
<td>Deveint Inc</td>
<td class="hidden-phone">13</td>
<td class="vertical-align-mid">
<div class="progress">
<div class="progress-bar progress-bar-danger" data-transitiongoal="15" aria-valuenow="15" style="width: 15%;"></div>
</div>
</td>
</tr>
<tr>
<td>3</td>
<td>Partners and Inverstors report</td>
<td>Deveint Inc</td>
<td class="hidden-phone">30</td>
<td class="vertical-align-mid">
<div class="progress">
<div class="progress-bar progress-bar-success" data-transitiongoal="45" aria-valuenow="45" style="width: 45%;"></div>
</div>
</td>
</tr>
<tr>
<td>4</td>
<td>New Company Takeover Review</td>
<td>Deveint Inc</td>
<td class="hidden-phone">28</td>
<td class="vertical-align-mid">
<div class="progress">
<div class="progress-bar progress-bar-success" data-transitiongoal="75" aria-valuenow="75" style="width: 75%;"></div>
</div>
</td>
</tr>
</tbody>
</table>

</div>
<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
<p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
photo booth letterpress, commodo enim craft beer mlkshk </p>
</div>
</div>
</div>
</div>
</div>



<script src="../vendors/jquery/dist/jquery.min.js"></script>

<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../vendors/fastclick/lib/fastclick.js"></script>

<script src="../vendors/nprogress/nprogress.js"></script>

<script src="../vendors/raphael/raphael.min.js"></script>
<script src="../vendors/morris.js/morris.min.js"></script>

<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="../build/js/custom.min.js"></script>


</body>
</html>