<?php 
include ('./lock.php');
include ('./blocks/db.php');
if (!empty($_POST['page']))       
    {
        $page = $_POST['page']; 
    }
    if (!empty($_POST['title'])) $title = $_POST['title']; 
    if (!empty($_POST['meta_d'])) $meta_d = $_POST['meta_d']; 
    if (!empty($_POST['meta_k'])) $meta_k = $_POST['meta_k']; 
    if (!empty($_POST['text'])) $text   = $_POST['text']; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Обработчик редактирования страниц</title>
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
if (isset ($page, $title, $meta_d, $meta_k, $text))
{
$result = mysql_query ("UPDATE settings SET page='$page', title='$title', meta_d='$meta_d', meta_k='$meta_k', text='$text' WHERE id='$id'");
    if ($result) {echo "<p>Ваша страница успешно обновлена</p>";}
    else {echo "<p>Ваша страница не обновлена!</p>";}
}
else 
{
    echo "<p>Вы ввели не всю информацию, поэтому страница в базе не может быть обновлена.</p>";
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