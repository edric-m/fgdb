<!DOCTYPE html>
<html>
<head>
	<title>FSDB Home</title>
	<link rel="stylesheet" href="/fsdb/web/css/samplestyle.css">
</head>
<body>
	<div class="navbar">
	<div style="float:left">
	<h1><a href="index.php">Fight Scene Database</a></h1>
	</div>

	<div style="float:right">
	  
	  <a href="#Scenes">Scenes</a>
	  <a href="#Actors">Actors</a>
	  <a href="#Movies">Movies</a>
	  <a href="#Series">Series</a>
	 </div>
	 <div style="float:right">
	<form method="post" action="/fsdb/modules/view/results.php">
		<input type="text" name="userSearch">
		<input type="submit" name="Search" value="Search">
	  </form>
	</div>
	</div>