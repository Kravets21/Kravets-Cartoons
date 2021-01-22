<main>
    <div class="container">

        <div class="block_header">
            <div id="header_block" class="d-flex p-2 bd-highlight mt-3"><p>НОВОГОДНИЕ МУЛЬТФИЛЬМЫ</p></div>
        </div>
        <div class="slider">
	    <?php
                            $pdo = new PDO('mysql:host=localhost;dbname=anime','root');
                            $sql = 'SELECT `anime_id`, `animeitem`.`id`, `animeitem`.`title`, `animeitem`.`poster_url`  FROM `slider` INNER JOIN `animeitem` ON `animeitem`.`id` = `slider`.`anime_id`;';
                            $query = $pdo->prepare($sql);
                            $query->execute();

                                while($row = $query->fetch(PDO::FETCH_OBJ)) {

                                    echo "
                    <div class='slider_block'><a href='animeitem.php?id=$row->anime_id'><img src='$row->poster_url' alt=''><div class='span-warp'><span class='li_span'>$row->title</span></div></a></div>
                                        ";

                                }
            ?>
        </div>

        <div class="row news_row">
            <div class="col block_header">
                  <div id="header_block" class="d-flex p-2 bd-highlight"><p>НОВОСТИ</p></div>
                  <div class="update_list"><ul>
			<?php
                            $sql = 'SELECT * FROM `news` ORDER BY `id` DESC LIMIT 6';
                            $query = $pdo->prepare($sql);
                            $query->execute();
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    echo "
                    <li><span class='li_date'>$row->date</span><span class='li_span3'> <a href='newsitem.php?id=$row->id'>$row->title</a> </span></li>
                                        ";
                                }
                        ?>
                  </ul></div>
	    </div>
	    
	    <div class="col block_header">
                  <div id="header_block" class="d-flex p-2 bd-highlight"><p>АНОНСЫ</p></div>
                  <div class="update_list"><ul>
			<?php
                            $sql = 'SELECT * FROM `anons` ORDER BY `id` DESC LIMIT 6';
                            $query = $pdo->prepare($sql);
                            $query->execute();
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    echo "
                    <li><span class='li_date'>$row->date</span><span class='li_span3'> <a href='anonsitem.php?id=$row->id'>$row->title</a> </span></li>
                                        ";
                                }
                        ?>
                  </ul></div>
		  
	    </div>
        </div>

    </div>
</main>

<section>
    <div class="container">

        <div class="flex_wrap">
            <div class="content_wrap">

                <div class="block_header">
                    <div class="label_block">НОВОЕ НА САЙТЕ</div>
                    <div id="header_block" class="d-flex p-2 bd-highlight " ></div>
                </div>

                <div id="for_show_more" class="content_block">
                        <?php
                            $sql = 'SELECT * FROM `animeitem` ORDER BY `id` LIMIT 16';
                            $query = $pdo->prepare($sql);
                            $query->execute();
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    echo "
                                            <div class='prev_block '>
                                                <div class='prev_img'><a href='animeitem.php?id=$row->id'><img src='$row->poster_url' alt=''></a></div>
                                                <div class='prev_info'>
                                                <a href='animeitem.php?id=$row->id'><b>$row->title</b></a>
                                                <div class='rating mt-2 mb-2'>
                                                    <img src='./img/starfull.png' alt=''>
                                                    <div class='rating_info'>
                                                        <span class='rat_dig'>0.00</span>
                                                        <span>(0 голосов)</span>
                                                    </div>
                                                </div>
                                                <ul class='content_info'>
                                                    <li class='prev_li mb-2'>$row->year | Полнометражный фильм</li>
                                                    <li class='prev_li mb-2'><span><b>Жанры:</b> </span> <i>$row->genre</i></li>
                                                    <li class='prev_li mb-2'><span><b>Возврастной рейтинг:</b> </span>$row->rating</li>
                                                </ul>
                                                </div>
                                            </div>
                                        ";
                                }
                            

                        ?>

                </div>

                <div class="content_btn">
		    <form method="POST">
			<input type="button" value="Показать все" class="show-more_btn" onclick="this.style.visibility='hidden';"></input>
		    </form>
                </div>


            </div>

            <?php require 'blocks/aside.php'; ?>

        </div>

    </div>
</section>