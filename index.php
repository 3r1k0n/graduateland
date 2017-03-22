<?php
require 'vendor/autoload.php';

$domain='https://www.spotify.com';
$url = '/es/jobs/opportunities/all/all/singapore-singapore/';
/*$url = '/es/jobs/opportunities/all/all/boston-ma-united-states/';*/
?>

<html>
	<head>
		<title>Prva Stranica</title>
		<meta name="viewport" content="width=device-width">
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<nav class="menu-left">
			<a href="#" class="option">
				<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
				<p>Home</p>
			</a>
			<a href="#" class="option active">
				<span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>
				<p>Jobs</p>
				<div class="notification">8</div>
			</a>
			<a href="#" class="option">
				<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
				<p>Prices</p>
			</a>
			<a href="#" class="option">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<p>Profile</p>
			</a>
			<a href="#" class="option">
				<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				<p>Events</p>
			</a>
			<a href="#" class="option">
				<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
				<p>Articles</p>
			</a>
			<a href="#" class="option">
				<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
				<p>Followers</p>
			</a>
			<a href="#" class="option">
				<span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
				<p>Insights</p>
			</a>
			<a href="#" class="option">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				<p>Settings</p>
			</a>
		</nav>
		<div class="page">
			<nav class="navbar navbar-dark top">
				<div class="container">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-left" href="#">
				      	<img src="images/logo-small.png" alt="" class="logo logo-small">
				      	<img src="images/logo.png" alt="" class="logo logo-big">
				      </a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      
				      <ul class="nav navbar-nav navbar-right">
				      	<li class="nav-item">
				        	<a href="#" class="inbox-btn">
				        		<span class="label">Inbox</span>
				        		<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
				        	</a>
				        </li>
				        <li class="nav-item dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					          <span>Hi Georgij</span> 
					          <span class="profile-picture"><img src="images/profile-picture.jpg" alt=""></span><span class="caret"></span>
				          </a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Account setting</a></li>
				            <li><a href="#">FAQ</a></li>
				            <li><a href="#">Log out</a></li>
				          </ul>
				        </li>
						<li class="nav-item">
				        	<button class="btn btn-primary">Post a job</button>
				        </li>
				        <li class="nav-item">
				        	<a href="#" class="language"><span class="label">Language</span><img src="images/gb.png" alt=""></a>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</div>
			</nav>
			<ol class="breadcrumb">
				<div class="container">
			 		<li class="active">Jobs</li>
			 	</div>
			</ol>
			
			<div class="container">	
				<h2>Jobs</h2>
				
				<div>
					<ul class="nav nav-tabs nav-justified">
	  					<li role="presentation" class="active"><a href="#"><span>13</span> Online</a></li>
	  					<li role="presentation"><a href="#"><span>0</span> Pending</a></li>
	  					<li role="presentation"><a href="#"><span>10</span> Draft</a></li>
	  					<li role="presentation"><a href="#"><span>12</span> Declined</a></li>
	  					<li role="presentation"><a href="#"><span>51</span> Expired</a></li>
					</ul>
					<div class="tab-content">
	  					<div class="table">
	  						<div class="table-row header">
								<div class="table-cell">Title</div>
								<div class="table-cell">Url</div>
								<div class="table-cell">Column 3</div>
								<div class="table-cell">Column 4</div>
							</div>
	  					<?php
	  						foreach (html5qp($domain.$url, '.job-listing') as $listing) {
								$title = $listing->children('.job-title')->text();
								$link = $listing->children('.job-title')->find('a')->attr('href');
								$description = $listing->children('p')->text();
						?>
							<div class="table-row">
								<div class="table-cell"><?= $title ?></div>
								<div class="table-cell"><a href="<?= $domain.$link ?>"><?= $domain.$link ?></a></div>
								<div class="table-cell"><?= $description ?></div>
								<div class="table-cell">Static text</div>
							</div>
							<?php
								}
							?>
	  					</div>
					</div>
				</div>
			</div>
		</div>
		<script src="vendor/jQuery/jquery-3.1.1.min.js"></script>
		<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="assets/js/script.js"></script>
	</body>
</html>