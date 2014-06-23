<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'caitlin', 'delinda');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$limit = 4;
$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
$numPages = ceil($count / $limit);

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$nextPage = $page + 1;
$prevPage = $page - 1;


function getParks($dbc) {

	return $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . getOffset())->fetchAll(PDO::FETCH_ASSOC);
}

function getOffset () {

	if (isset($_GET['page'])) {
	   $page = $_GET['page'];
	} else {
	   $page = 1;
	} return ($page - 1) * 4;
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<title>National Parks</title>
</head>
<body>
	
	<!-- Table -->
	<div class="container">
	<h1>National Parks</h1>	
		<table class="table table-hover table-bordered">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Location</td>
			<td>Date Established</td>
			<td>Acres</td>
		<tr/>
		<? foreach (getParks($dbc) as $rows) : ?>
		<tr>	
			<? foreach ($rows as $park) : ?>
			<td><?= "{$park}"?></td>
			<? endforeach; ?>
		</tr>		
		<? endforeach; ?>
		</table>

	<!-- Pagination -->
	<ul class="pager">
		<?if($page == 1): ?>
  			<li class="active"><a href="/national_parks.php?page=<?= $nextPage; ?>">Next</a></li>
  		<? endif; ?>	
  		<?if ($page < $numPages && $page != 1) : ?>
  			<li class="active"><a href="/national_parks.php?page=<?= $prevPage; ?>">Previous</a></li>
  			<li class="active"><a href="/national_parks.php?page=<?= $nextPage; ?>">Next</a></li>
  		<? endif; ?>	
  		<? if ($page == $numPages) : ?>
  			<li class="active"><a href="/national_parks.php?page=<?= $prevPage; ?>">Previous</a></li>
		<?endif; ?>
  	</ul>
	</div>	
</body>
</html>


