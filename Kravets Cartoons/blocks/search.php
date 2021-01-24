<section class="help">
    <div class="container">

        <div class="flex_wrap">
	    <div class="content_wrap catalog-section">
	    <?php
		$url = $_SERVER['REQUEST_URI'];
		$parts = parse_url($url); 
		parse_str($parts['query'], $get_arguments); // получаем search из url, так как через обычный ГЕТ будет null
		$search = $get_arguments['word'];
		$count = 0;
		$pdo = new PDO('mysql:host=localhost;dbname=anime','root');
                    $sql = "SELECT COUNT(*) as count FROM `animeitem` WHERE `title` LIKE '%$search%'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
		    $count = $query->fetch(PDO::FETCH_ASSOC);
		    $cnt = $count['count'];
		    echo "<h4>Найдено $cnt мультик(ов).</h1>";
                    $sql = "SELECT * FROM `animeitem` WHERE `title` LIKE '%$search%'"; 
                    $query = $pdo->prepare($sql);
                    $query->execute();
		    echo "<div class=\"catalog-grid\">";
                        while($row = $query->fetch(PDO::FETCH_OBJ)) {
                            echo "
                                <div class='catalog-content_block'>
                                <div class='catalog_image'><a href='animeitem.php?id=$row->id'><img class='catalog_img' src='$row->poster_url' alt=''></a></div>
                                <div class='catalog_info'>
                                    <a href='animeitem.php?id=$row->id' class='catalog-anime-title'><b> $row->title </b></a>
                                    <div class='rating mt-2 mb-2'>
                                        <img src='./img/starfull.png' alt=''>
                                        <div class='rating_info'>
                                            <span class='rat_dig'>0.00</span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                ";
                        }
                    
		    if($cnt == 0)
		    {
			echo "<p>К сожалению, по вашему запросу ничего не найдено. Попробуйте указать другое название.</p>";
		    }
                     ?>	    
		</div>
	    </div>
	    <?php require 'blocks/aside.php'; ?>
</div>


</section>


    

