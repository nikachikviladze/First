<?php

include ('gamotana_db.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		body{
			margin: 0;
			padding: 0;
		}

		.content{
			margin: auto;
			max-width: 700px;
			/*min-height: 300px;*/
		}
		.box{
			background-color: #eee;
			border:1px solid #666;
			margin-bottom: 10px;


		}
		h1, p{
			margin: 0;
			padding:0;
			padding: 10px;

		}
		h1{
			background-color: #fff;
			font-size: 17px;
		}
		.date{
			float: right;
			font-size: 15px;
			color: #888;
		}

	</style>
</head>
<body>

<div class="content">
	<?php  foreach ($post as $key => $p):?>
	<div class="box">
		<h1><?=$p['title']?> <span class="date"><?=$p['date']?></span></h1>
		<p><?=$p['paragraph']?></p>
	</div>
<?php endforeach ?>
</div>


</body>
</html>