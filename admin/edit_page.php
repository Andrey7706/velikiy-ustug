<?php 
include ('./lock.php');
include ('./blocks/db.php');
if (isset($_GET['id'])) $id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Редактирование страниц</title>
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
			<p><strong>Выберите страницу для редактирования:</strong></p>
			
<?php 
    if (!isset($id))
    {
        $result = mysql_query("SELECT `title`, `id` FROM `settings`"); 

        while ($myrow = mysql_fetch_assoc($result))
        {
            print '<p><a href="edit_page.php?id='. (int)$myrow["id"] .'">'
                . htmlspecialchars($myrow["title"]) .'</a></p>';
        }
    }
    else
    {
        $result = mysql_query("SELECT * FROM `settings` WHERE `id` = ". (int)$id );      
        $myrow  = mysql_fetch_assoc($result);
?>
			
				<form name="form1" method="POST" action="update_page.php">
                    <p>
                        <label>Ввеcти индекс страницы<br>
                            <input  class="input" value="<?php 
     echo htmlspecialchars($myrow['page']) ?>" type="text" name="page" id="page">
                        </label>
                    </p>
                    <p>
                        <label>Ввеcти название страницы <br>
                            <input  class="input" value="<?php 
     echo htmlspecialchars($myrow['title']) ?>" type="text" name="title" id="title">
                        </label>
                    </p>
                    <p>
                        <label>Ввеcти краткое описание страницы<br>
                            <input  class="input" value="<?php 
     echo htmlspecialchars($myrow['meta_d']) ?>" type="text" name="meta_d" id="meta_d">
                        </label>
                    </p>
                    <p>
                        <label>Ввеcти ключевые слова для страницы<br>
                            <input  class="input" value="<?php 
     echo htmlspecialchars($myrow['meta_k']) ?>" type="text" name="meta_k" id="meta_k">
                        </label>
                    </p> 
                        <p><label>Ввеcти полный текст страницы с тегами<br>
                            <textarea name="text" id="text" cols="50" rows="20"><?php 
     echo htmlspecialchars($myrow['text']) ?></textarea>
                        </label></p>
                    <p>
                    <input name="id" type="hidden" value="<?php echo (int)$myrow['id'] ?>"> 
                        <label>
                            <input type="submit" class="button" name="submit" id="submit" value="Сохранить изменения">
                        </label>
                    </p>
                </form>
<?php } ?>  
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