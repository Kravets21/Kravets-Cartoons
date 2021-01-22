<section>
        <div class="container">

            <div class="flex_wrap">
                <div class="content_wrap catalog-section">

                    <span class="catalog-title">Новости</span>

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
                    $pdo = new PDO('mysql:host=localhost;dbname=anime','root');

                    $sql = 'SELECT * FROM `news` ORDER BY `id` DESC';
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    for($i=0;$i<=3;$i++){
                        while($row = $query->fetch(PDO::FETCH_OBJ)) {
                            echo "
                                <div class='news-content_block'>
				    <a class='news-title' href='newsitem.php?id=$row->id'><b>$row->title </b></a>
				    <p>Дата: $row->date</p>
				    <span class='news-text mb-1'>$row->text</span>
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
