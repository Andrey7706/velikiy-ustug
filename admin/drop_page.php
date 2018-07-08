<?php 
include ('./lock.php');
include ('./blocks/db.php');
if (isset($_POST['id'])) {$id = $_POST['id'];}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Обработчик удаления страниц</title>
	<link href="style.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>

<body>

<?php include('./blocks/header.php'); ?>
<!-- .header-->

<div class="wrapper">
	
	<div class="middle">

		<div class="container">
			<main class="content">
			<p><a class="target-site" href="../index.php" target="_blank">Перейти на сайт</a></p>
			
<?php 
if (isset ($id))
{
$result = mysql_query ("DELETE FROM settings WHERE id='$id'");
    if ($result) {echo "<p>Ваша страница успешно удалена!</p>";}
    else {echo "<p>Ваша страница не удалена!</p>";}
}
else 
{
    echo "<p>Вы не выбрали радиокнопку и поэтому, удалить страницу невозможно.</p>";
}
?>
			</main><!-- .content -->
		</div><!-- .container-->
        
        <?php  include('./blocks/left_sidebar.php');  ?>
        <!-- .left-sidebar -->
		
	</div><!-- .middle-->

</div><!-- .wrapper -->

<?php  include('./blocks/footer.php'); ?>
<!-- .footer -->

</body>
</html>