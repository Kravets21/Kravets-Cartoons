<section>
    <div class="container">

        <div class="flex_wrap">
            <div class="content_wrap catalog-section">

            <span class="catalog-title">Топ-100 аниме</span>
            
                <div class="catalog-grid">
                <?php
                    $user = 'root';
                    $db = 'anime';
                    $host = 'localhost';

                    $pdo = new PDO('mysql:host=localhost;dbname=anime',$user);

                    $sql = 'SELECT * FROM `animeitem` ORDER BY `id`';
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    for($i=0;$i<=3;$i++){
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
                    }

                     ?>

                </div>
            </div>

            <?php require 'blocks/aside.php'; ?>

        </div>



    </div>


</section>
