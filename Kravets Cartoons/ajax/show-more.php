<?php
    $pdo = new PDO('mysql:host=localhost;dbname=anime','root');
    $sql = 'SELECT * FROM `animeitem` ORDER BY `id`';
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
		
	    

