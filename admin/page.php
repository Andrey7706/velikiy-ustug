<?php 
include ('./lock.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Администраторская часть сайта</title>
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
			<p><strong>Заполните все поля для создания страницы:</strong></p>
			
				<form name="form1" method="POST" action="add_page.php">
                    <p>
                        <label>Ввеcти индекс страницы<br>
                            <input class="input" type="text" name="page" id="page">
                        </label>
                    </p>
                    <p>
                        <label>Ввеcти название страницы <br>
                            <input  class="input" type="text" name="title" id="title">
                        </label>
                    </p>
                    <p>
                        <label>Ввеcти краткое описание страницы<br>
                            <input  class="input" type="text" name="meta_d" id="meta_d">
                        </label>
                    </p>
                    <p>
                        <label>Ввеcти ключевые слова для страницы<br>
                            <input  class="input" type="text" name="meta_k" id="meta_k">
                        </label>
                    </p> 
                        <p><label>Ввеcти полный текст страницы с тегами<br>
                            <textarea name="text" id="text" cols="50" rows="20"></textarea>
                        </label></p>
                    <p> 
                        <label>
                            <input type="submit" class="button" name="submit" id="submit" value="Занести данные страницы в базу">
                        </label>
                    </p>
                </form>
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