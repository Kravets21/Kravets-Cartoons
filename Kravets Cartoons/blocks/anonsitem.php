<section class="help">
    <div class="container">
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=anime','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $url = $_SERVER['REQUEST_URI'];
    $parts = parse_url($url); 
    parse_str($parts['query'], $get_arguments);
    $id = $get_arguments['id'];
    $sql = 'SELECT * FROM `anons` WHERE `id` = :id';
	try {
	    $query = $pdo->prepare($sql);
		if (!$query) {
		echo "\nPDO::errorInfo():\n";
		print_r($pdo->errorInfo());
		}
	    $query->execute(['id' => $id]);
	    } catch (PDOException $e) {
		if ($e->getCode() != '00000')
		echo "Error: ".$e->getMessage();
	    }
    $news = $query->fetch(PDO::FETCH_OBJ);
?>
        <div class="flex_wrap">
	    <div class="content_wrap catalog-section">
		<h1 class="newsitem-title"><?=$news->title?></h1>
	    <br>
	    <p><?=nl2br($news->text);?></p>


        

	    </div>
	    <?php require 'blocks/aside.php'; ?>
	</div>


</section>
