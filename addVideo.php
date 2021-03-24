<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="font/all.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="font/fontawesome.min.css">
  <link rel="stylesheet" href="css/scss.css">
  <script type="text/javascript" src="js/rss_render.js"></script>
</head>
<body>
<nav>
    <header class="header">
      <i style="margin-top: -8px;height: 30px;width: 20px;" class="fas fa-bars"></i>
      <a href="#">
        <img src="img/logo.png"
          alt="YouTube Logo" class="youtube-logo" />
      </a>
      <form class="search-bar">
        <input id="myInput" class="search-input" onkeyup="searchVideo()" type="search" placeholder="Search"
          aria-label="Search" />
        <button type="submit" class="search-btn">
          <img src="img/magnify.svg" />
        </button>
      </form>
      <div class="menu-icons">
        <a href="#">
          <img src="img/video-plus.svg" alt="Upload Video" />
        </a>
        <a href="#">
          <img src="img/apps.svg" alt="Apps" />
        </a>
        <a href="#">
          <img src="img/bell.svg" alt="Notifications" />
        </a>
        <a href="#">
          <img class="menu-channel-icon" src="http:///unsplash.it/36/36?gravity=center" alt="Your Channel" />
        </a>
      </div>
    </header>
  </nav>
  <div id="main">
    <div id="sidebar">
      <div class="sidebar-sub">
        <ul>
          <li class="sidebar-clickable"><i class="fas fa-home"></i>	<a href="/ProjectXML">Home</a></li>
          <li class="sidebar-clickable"><i class="fas fa-fire"></i><a href="#">Trending</a></li>
          <li class="sidebar-clickable"><i class="fas fa-archive"></i><a href="#">Subscriptions</a></li>
          <hr>
          <li class="sidebar-section"><a href="#">Library</a></li>
          <li class="sidebar-clickable"><i class="fas fa-upload"></i>
            <a href="">Add Video</a>
          </li>
          <li class="sidebar-clickable"><i class="fas fa-clock"></i><a href="#">Watch Later</a></li>
          <li class="sidebar-clickable"><i class="fas fa-tag"></i><a href="#">Purchases</a></li>
          <li class="sidebar-clickable"><i class="fas fa-thumbs-up"></i><a href="#">Liked Videos</a></li>
          <li class="sidebar-clickable"><i class="fas fa-list"></i><a href="#">Playlist</a></li>
          <hr>
          <li class="sidebar-section"><a href="#">Subscriptions</a></li>
          <li class="sidebar-clickable">
            <img
              src="https://yt3.ggpht.com/-bonZt347bMc/AAAAAAAAAAI/AAAAAAAAAAA/lR8QEKnqqHk/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg"
              alt="">
            <a class="sidebar-sub-li" href="#">TED Ed</a>
          </li>
          <li class="sidebar-clickable">
            <img
              src="https://yt3.ggpht.com/-NQZMtMiadmY/AAAAAAAAAAI/AAAAAAAAAAA/rV22WK-z9GA/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg"
              alt="">
            <a class="sidebar-sub-li" href="#">Andrew Holmes</a>
          </li>
          <li class="sidebar-clickable"><img
              src="https://yt3.ggpht.com/ytc/AAUvwng1fnpaZgnnArQUjFw4uJWUGvLeEcDspLfvUWYu=s88-c-k-c0x00ffffff-no-rj"
              alt=""><a href="#">Trực Tiếp Game</a></li>
          <li class="sidebar-clickable"><img
              src="https://yt3.ggpht.com/ytc/AAUvwni9b1f0B7V_Wy4UGanrNSzfdzjFAhqNlJgJUqeIaQ=s88-c-k-c0x00ffffff-no-rj"
              alt=""><a href="#">Phê Phim</a></li>
          <li class="sidebar-clickable"><img
              src="https://yt3.ggpht.com/ytc/AAUvwnhz870a9F2a6bcMs5pFeD4frzJQXiGe3i_rqCZOqQ=s88-c-k-c0x00ffffff-no-rj"
              alt=""><a href="#">Đen Vâu Official</a></li>
          <li class="sidebar-clickable"><img
              src="https://yt3.ggpht.com/ytc/AAUvwniMp9B92K9eZPgS9F-kGsrxQHKAg2a1AhgwsLr3=s88-c-k-c0x00ffffff-no-rj"
              alt=""><a href="#">Cảm Bóng Đá</a></li>
          <li class="sidebar-clickable"><img
              src="https://yt3.ggpht.com/ytc/AAUvwniZSx-0kc9C_n8DFdLjcXzzoMFtXQpx6gS1SNu6OQ=s88-c-k-c0x00ffffff-no-rj"
              alt=""><a href="#">Bùi Anh Tuấn</a></li>
          <br>
          <hr>
          <li class="sidebar-section"><a href="#">MORE FROM YOUTUBE</a></li>
          <li class="sidebar-clickable"><i class="fas fa-history"></i><a href="#">History</a></li>
          <li class="sidebar-clickable"><i class="fas fa-clock"></i><a href="#">Watch Later</a></li>
          <li class="sidebar-clickable"><i class="fas fa-tag"></i><a href="#">Purchases</a></li>
          <hr>
          <li class="sidebar-section"><a href="#">MORE FROM YOUTUBE</a></li>
          <li class="sidebar-clickable"><i class="fas fa-history"></i><a href="#">History</a></li>
          <li class="sidebar-clickable"><i class="fas fa-clock"></i><a href="#">Watch Later</a></li>
          <li class="sidebar-clickable"><i class="fas fa-tag"></i><a href="#">Purchases</a></li>
          <li class="sidebar-clickable"><i class="fas fa-tag"></i><a href="#">Purchases</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- <div class="categories">
      <section class="category-section">
        <button class="category active">All</button>
        <button class="category">Music</button>
        <button class="category">Game</button>
        <button class="category">Agular</button>
        <button class="category">Coder</button>
        <button class="category">Bright Tone</button>
      </section>
    </div> -->
  
  <div class="videos">
    <section class="video-section">
	 
    </section>
  </div>
  <div id = "form">
    <h1 style="text-align:center">Add More Video Here</h1>
  <form method = "POST" action = "addVideo.php">
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Name of Song</label>
    <input type="text" class="form-control" name="v_song" placeholder="Enter song">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Channel</label>
    <input type="text" class="form-control" name="v_channel" placeholder="Enter Channel">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">URL of Youtube</label>
    <input type="text" class="form-control" name="v_url" placeholder="https://www.youtube.com/embed/Q0bnAmfGQC8">
    <small>https://www.youtube.com/embed/{id}</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image of Channel</label>
    <input type="text" class="form-control" name="v_img" placeholder="Enter imgChannel">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">View</label>
    <input type="text" class="form-control" name="v_view" placeholder="Enter View">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Time</label>
    <input type="text" class="form-control" name="v_time" placeholder="Enter Time">
  </div>
  <button type="submit" name = "insert" value = "add" class="btn btn-primary">Submit</button>
</form>
</div>
  <script>
    $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toUpperCase();
                $(".listItem").filter(function () {
                    $(this).toggle($(this).text().toUpperCase().indexOf(value) > -1);
                });
            });
        });
  </script>
	<?php
if (isset($_POST['insert']))
{
	$xml = new DomDocument("1.0","UTF-8");
	$xml->load('rss.xml');
	
	$vsong = $_POST['v_song'];
	$vchannel = $_POST['v_channel'];
	$vurl = $_POST['v_url'];
	$vimg = $_POST['v_img'];
	$vview = $_POST['v_view'];
	$vtime = $_POST['v_time'];
	
	// $videostoreTag = $xml->getElementsByTagName("videostore")->item(0);
	$categoryTag = $xml->getElementsByTagName("category")->item(0);

	$videoTag = $xml->createElement("video");
		$songTag = $xml->createElement("song", $vsong);
		$channelTag = $xml->createElement("channelname", $vchannel);
		$urlTag = $xml->createElement("url", $vurl);
		$imgTag = $xml->createElement("img", $vimg);
		$viewTag = $xml->createElement("views", $vview);
		$timeTag = $xml->createElement("time", $vtime);
		
		$videoTag->appendChild($songTag);
		$videoTag->appendChild($channelTag);
		$videoTag->appendChild($urlTag);
		$videoTag->appendChild($imgTag);
		$videoTag->appendChild($viewTag);
		$videoTag->appendChild($timeTag);
		
	$categoryTag ->appendChild($videoTag);
	$xml->save('rss.xml');
}
?>
</body>
</html>




