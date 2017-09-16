<?php
session_start();
?>

<?php if(isset($_SESSION['ok']) && $_SESSION['ok']=='done'):?>
<span style="color: green;" >მონაცემები წარმატებით ჩაიწერა ბაზაში</span>
<?php $_SESSION['ok']=FALSE; endif ?>

<?php if (isset($_SESSION['error']) && $_SESSION['error']=='wrong'):?>
<span style="color: red;"> აუცილებელია ყველა ველის შევსება</span>	
<?php $_SESSION['error']=FALSE; endif ?>

<form method="POST" action="form_db.php">
	<input type="text" name="title"> title<br>
	<textarea name="paragraph" style="width:300px; height: 200px; "></textarea><br>
	<input type="submit" name="">
</form>
