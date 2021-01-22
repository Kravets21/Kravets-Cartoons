<section>
        <div class="container">

            <div class="flex_wrap">
                <div class="content_wrap catalog-section">

                    <span class="catalog-title">Каталог</span>

                    <ul class="pagination">

                        <li class="disabled next"><a href="/catalog?page=2" rel="next"> </a>
                        </li>

                        <li class="active"><a href="/catalog?page=1">1</a></li>
                        <li data-pos="1"><a href="/catalog?page=2">2</a></li>
                        <li data-pos="2"><a href="/catalog?page=3">3</a></li>
                        <li data-pos="3"><a href="/catalog?page=4">4</a></li>
                        <li data-pos="4"><a href="/catalog?page=5">5</a></li>
                        <li data-pos="5"><a href="/catalog?page=6">6</a></li>
                        <li data-pos="6"><a href="/catalog?page=7">7</a></li>
                        <li data-pos="7"><a href="/catalog?page=8">8</a></li>

                        <li class="disabled"><span>...</span></li>

                        <li data-pos="181"><a href="/catalog?page=182">182</a></li>
                        <li data-pos="182"><a href="/catalog?page=183">183</a></li>


                        <li class="next"><a href="/catalog?page=2" rel="next">></a></li>
                    </ul>

                    <div class="catalog-grid">
                    <?php
                    $user = 'root';
                    $pdo = new PDO('mysql:host=localhost;dbname=anime',$user);

                    $sql = 'SELECT * FROM `animeitem` ORDER BY `id` DESC';
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
                    

                    <ul class="pagination">

                        <li class="disabled next"><a href="/catalog?page=2" rel="next">
                                </a>
                        </li>

                        <li class="active"><a href="/catalog?page=1">1</a></li>
                        <li data-pos="1"><a href="/catalog?page=2">2</a></li>
                        <li data-pos="2"><a href="/catalog?page=3">3</a></li>
                        <li data-pos="3"><a href="/catalog?page=4">4</a></li>
                        <li data-pos="4"><a href="/catalog?page=5">5</a></li>
                        <li data-pos="5"><a href="/catalog?page=6">6</a></li>
                        <li data-pos="6"><a href="/catalog?page=7">7</a></li>
                        <li data-pos="7"><a href="/catalog?page=8">8</a></li>

                        <li class="disabled"><span>...</span></li>

                        <li data-pos="181"><a href="/catalog?page=182">182</a></li>
                        <li data-pos="182"><a href="/catalog?page=183">183</a></li>


                        <li class="next"><a href="/catalog?page=2" rel="next">></a></li>
                    </ul>
                </div>

                <?php require 'blocks/aside.php'; ?>

            </div>



        </div>

</section>
