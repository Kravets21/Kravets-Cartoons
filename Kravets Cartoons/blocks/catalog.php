<section>
        <div class="container">

            <div class="flex_wrap">
                <div class="content_wrap catalog-section">

                    <span class="catalog-title">Каталог</span>

                    <ul class="pagination">
			<?php 
			$pdo = new PDO('mysql:host=localhost;dbname=anime','root');
			$url = $_SERVER['REQUEST_URI'];
			$parts = parse_url($url); 
			if(isset($parts['query']))
			{
			    parse_str($parts['query'], $get_arguments);
			    $page = $get_arguments['page']; // получаем номер странички из url, так как через обычный ГЕТ будет null 
			}
			else
			{
			    $page = 1;
			}
			
			$items_on_page = 16; // сколько на одной страничке будет мультиков
			$from = ($page - 1) * $items_on_page; // формула для показа С КАКОГО мультика начинать на след страничке
			$sql = "SELECT COUNT(*) as count FROM `animeitem`"; 
			$query = $pdo->prepare($sql);
			$query->execute();
			$count = $query->fetch(PDO::FETCH_ASSOC); // кол-во мультиков ВСЕГО
			$page_numbers = ceil($count['count']/ $items_on_page); // сколько у нас будет страничек для пагинации
			$prev = $page-1;
			$next = $page+1;
			if($page != 1)
			{
			    echo "<li class=\"disabled next\"><a href=\"catalog.php?page=$prev\"> < </a></li>";
			}
			for($i = 1; $i <= $page_numbers; $i++)
			{
			    if($page == $i)
			    {
				$class = ' class="active"';
			    }
			    else
			    {
				$class = '';
			    }
			    echo "<li$class><a href=\"catalog.php?page=$i\">$i</a></li>";
			}
			if($page != $page_numbers)
			{
			   echo "<li class=\"disabled next\"><a href=\"catalog.php?page=$next\"> > </a></li>"; 
			}
			?>		    
                    </ul>

                    <div class="catalog-grid">
                    <?php
                    

                    $sql = "SELECT * FROM `animeitem` ORDER BY `id` DESC LIMIT $from, $items_on_page"; 
                    $query = $pdo->prepare($sql);
                    $query->execute();
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
                    

                     ?>
                    </div>
                    

                    <ul class="pagination">
			<?php 
			if($page != 1)
			{
			    echo "<li class=\"disabled next\"><a href=\"catalog.php?page=$prev\"> < </a></li>";
			}
			for($i = 1; $i <= $page_numbers; $i++)
			{
			    if($page == $i)
			    {
				$class = ' class="active"';
			    }
			    else
			    {
				$class = '';
			    }
			    echo "<li$class><a href=\"catalog.php?page=$i\">$i</a></li>";
			}
			if($page != $page_numbers)
			{
			   echo "<li class=\"disabled next\"><a href=\"catalog.php?page=$next\"> > </a></li>"; 
			}
			?>
                    </ul>
                </div>

                <?php require 'blocks/aside.php'; ?>

            </div>



        </div>

</section>
