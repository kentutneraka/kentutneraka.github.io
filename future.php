<!DOCTYPE html>
<html lang="en" data-ng-app="Wagnaria">
<head>
  <title>Wagnaria!/KN - Future</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/pure-min.css" rel="stylesheet" media="screen">
  <link href="css/glyphs.min.css" rel="stylesheet" media="screen">
  <link href="css/main.css" rel="stylesheet" media="screen">
  <link rel="shortcut icon" href="http://puu.sh/kjiKX/97d5bb4118.png"/>
  <style type="text/css">
<!--
.style4 {color: #FFFFFF}
.style5 {color: #fbd3c3}
.style6 {color: #2f7ab9}
.style8 {color: #000000; }
-->
  </style>
</head>
<body>

<div id="basket" class="pure-g-r">
  <div id="parasol" class="pure-u">
    <div class="pure-menu pure-menu-open">
      <a class="pure-menu-heading" href="http://www.kentutneraka.org">Kentutneraka</a>
      <ul ng-controller="StatusCtrl">
        <li id="nav_airing" ng-if="counts.airing > 0"><a href="http://wagnaria-kn.zz.mu/">Airing (6) </a></li>
        <li id="nav_incomplete" ng-if="counts.incomplete > 0"><a href="http://wagnaria-kn.zz.mu/incomplete.php">Incomplete (10)</a></li>
        <li id="nav_complete" ng-if="counts.complete > 0"><a href="http://wagnaria-kn.zz.mu/completed.php">Completed (29)</a></li>
		<li id="nav_complete" ng-if="counts.complete > 0"><a href="http://wagnaria-kn.zz.mu/future.php">Future (4)</a></li>
        <li id="nav_staff" class="menu-item-divided"><a href="http://wagnaria-kn.zz.mu/staff.php">Staff</a></li>
		<li id="nav_complete" ng-if="counts.complete > 0"><a href="http://wagnaria-kn.zz.mu/recruitment.html">Recruitment?</a></li>
		  <li id="nav_staff" class="menu-item-divided"><a href="http://wagnaria-kn.zz.mu/showtimes">Ruang Staff KN</a></li>
      </ul>
    </div>
  </div>
  <div id="???" class="pure-u" data-ui-view></div>
</div>  
  <!-- JavaScript -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular.min.js"></script>
  <script src="lib/angular-ui-router.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular-resource.min.js"></script>
  <script src="lib/angular-piwik.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/ja.js"></script>
  <script src="js/main.js"></script>

    <!-- Templates -->
  <style type="text/css">
<!--
.style31 {color: 0000}
-->
</style>
</head>
<style type="text/css">
<!--
body {
	margin-top: -20px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	background-color: #fffff;
}

-->
</style>
<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
</head>
<body hola-ext-player="1">
<div class="pure-g-r" id="basket"><span class="pure-menu-toggle" id="toggle" pbzloc="66">?</span>
<div class="pure-u" data-ui-view="" id="?H???">
<div class="ng-scope" data-ui-view="" id="muffinbox">
<table class="pure-table pure-table-horizontal ng-scope">
<thead>
<tr><th width="30%">Series</th>
<th width="12%">Will Air</th>
<th width="12%">Translator</th>
<th width="12%">Timer</th>
<th width="12%">Editor</th>
<th width="12%">Typesetter</th>
</tr></thead>
   <!-- tanda -->
  <tbody>
    <tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td class="title"></b> <a id="show_shinmai" onclick="document.getElementById('spoiler_shinmai').style.display=''; document.getElementById('show_shinmai').style.display='none';" class="link">Shinmai Maou no Testament Burst</a><span id="spoiler_shinmai" style="display: none"><a onclick="document.getElementById('spoiler_shinmai').style.display='none'; document.getElementById('show_shinmai').style.display='';" class="link">Shinmai Maou no Testament Burst</a><br> 
<b>Airtime (local):</b> 
<br>?<br>
<b>Channel:</b> 
<br>Crunchyroll (?)<br><br>
<a href="http://myanimelist.net/anime/30363/Shinmai_Maou_no_Testament_Burst">Info MAL.<br>
</td>
      <td><div align="left">Oct 10, 2015</div></td>
      <td><div align="left">?</div></td>
      <td><div align="left">HSedit</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">rakaosd</div></td>
    </tr>
	<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td class="title"></b> <a id="show_sakurako" onclick="document.getElementById('spoiler_sakurako').style.display=''; document.getElementById('show_sakurako').style.display='none';" class="link">A Corpse is Buried Under Sakurako's Feet</a><span id="spoiler_sakurako" style="display: none"><a onclick="document.getElementById('spoiler_sakurako').style.display='none'; document.getElementById('show_sakurako').style.display='';" class="link">A Corpse is Buried Under Sakurako's Feet</a><br> 
<b>Airtime (local):</b> 
<br>?<br>
<b>Channel:</b> 
<br>Crunchyroll (?)<br><br>
<a href="http://myanimelist.net/anime/30187/Sakurako-san_no_Ashimoto_ni_wa_Shitai_ga_Umatteiru">Info MAL.<br>
      <td><div align="left">Oct 8, 2015</div></td>
      <td><div align="left">titidus</div></td>
      <td><div align="left">HSedit</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td></tr>
	  
<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td class="title"></b> <a id="show_kagewani" onclick="document.getElementById('spoiler_kagewani').style.display=''; document.getElementById('show_kagewani').style.display='none';" class="link">Kagewani</a><span id="spoiler_kagewani" style="display: none"><a onclick="document.getElementById('spoiler_kagewani').style.display='none'; document.getElementById('show_kagewani').style.display='';" class="link">Kagewani</a><br> 
<b>Airtime (local):</b> 
<br>?<br>
<b>Channel:</b> 
<br>Crunchyroll (?)<br><br>
<a href="http://myanimelist.net/anime/30524/Kagewani">Info MAL.<br>
      <td><div align="left">Oct 2, 2015</div></td>
      <td><div align="left">OmBobby</div></td>
      <td><div align="left">?</div></td>
      <td><div align="left">?</div></td>
      <td><div align="left">?</div></td></tr>
	  
<tr ng-repeat="show in shows" ng-click="$state.go('shows.detail', {'showId': show._id.$oid})">
      <td class="title"></b> <a id="show_Kowabon" onclick="document.getElementById('spoiler_Kowabon').style.display=''; document.getElementById('show_Kowabon').style.display='none';" class="link">Kowabon</a><span id="spoiler_Kowabon" style="display: none"><a onclick="document.getElementById('spoiler_Kowabon').style.display='none'; document.getElementById('show_Kowabon').style.display='';" class="link">Kowabon</a><br> 
<b>Airtime (local):</b> 
<br>?<br>
<b>Channel:</b> 
<br>Crunchyroll (?)<br><br>
<a href="http://myanimelist.net/anime/30948/Kowabon">Info MAL.<br>
      <td><div align="left">Oct 4, 2015</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td>
      <td><div align="left">rakaosd</div></td></tr>
	  
	  
 
</tbody></table></div></body></html>
  <p align="right"><br><br>&nbsp; &nbsp;<span class="style6">Halaman ini cuma proyek rencana mendatang.&nbsp;&nbsp;<br>
Tidak 100% akan kami garap.&nbsp;&nbsp;<br>
&nbsp; &nbsp;Saat ini sedang mencari staf untuk mengisi posisi yang kosong.&nbsp;&nbsp;<br>
</div>

