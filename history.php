<?php 
include ('./blocks/db.php');
$result = mysql_query("SELECT title,meta_d,meta_k,text 
                       FROM settings 
                       WHERE page='history'",$db);
$myrow = mysql_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title><?php echo htmlspecialchars($myrow['title']); ?></title>
	<meta name="keywords" content="<?php echo htmlspecialchars($myrow['meta_k']); ?>" />
	<meta name="description" content="<?php echo htmlspecialchars($myrow['meta_d']); ?>" />
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
				<?php echo htmlspecialchars_decode($myrow['text']); ?>
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