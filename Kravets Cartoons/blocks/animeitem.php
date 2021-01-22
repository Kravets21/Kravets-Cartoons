<?php
    $pdo = new PDO('mysql:host=localhost;dbname=anime','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $url = $_SERVER['REQUEST_URI'];
    $parts = parse_url($url); 
    parse_str($parts['query'], $get_arguments); // получаем айди мультика из url
    $id = $get_arguments['id'];
    $sql = 'SELECT * FROM `animeitem` WHERE `id` = :id';
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
    $anime = $query->fetch(PDO::FETCH_OBJ);
    $anime_title = $anime -> title;
    $anime_year = $anime -> year;
    $anime_genre = $anime -> genre;
    $anime_rating = $anime -> rating;
    $anime_author = $anime -> author;
    $anime_description = $anime -> description;
?>

<section class="animeitem">
        <div class="container">

            <div class="flex_wrap">
                <div class="content_wrap anime-section">

                    <div class="anime-img-block">
                        <img src="<?=$anime->poster_url?>" alt="">
                    </div>

                    <span class="catalog-title"><?=$anime_title?></span>
                    <div class="rating item_rating mt-2 mb-2">
                        <img src="./img/starfull.png" alt="">
                        <div class="rating_info">
                            <span class="rat_dig">0.00</span>
                            <span>(0 голосов)</span>
                        </div>
                    </div>
                    <ul class="alt-names-list">
                        <li><?=$anime_title?></li>
                    </ul>
                    <p>Год: <?=$anime_year?></p>
                    <p>Сезон: Осень</p>
                    <p>Возрастной рейтинг: <?=$anime_rating?></p>
                    <p>Жанр:
                        <?=$anime_genre?>
                    </p>
                    <p>Тип: Сериал</p>
                    <p>Режиссер: <?=$anime_author?></p>
                    <p> Перевод:
                        Многоголосый Двухголосый Субтитры</p>
                    <p>Серии: 24<br></p>
                    <span><br><?=$anime_description?></span>

                    <div class="block_header mt-5">
                        <div class="label_block">ВИДЕО</div>
                        <div id="header_block" class="d-flex p-2 bd-highlight "></div>
                    </div>

                    <div class="ss-single-selected">
                        <span class="placeholder">Озвучка AniDUB (24 эп.)</span><span
                            class="ss-deselect ss-hide"></span><span class="ss-arrow"><span
                                class="arrow-down"></span></span>
                    </div>
                    <div class="block-episodes show" data-id="696">
                        <div data-id="1"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=1"
                            class="video-button">1</div>
                        <div data-id="2"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=2"
                            class="video-button">2</div>
                        <div data-id="3"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=3"
                            class="video-button">3</div>
                        <div data-id="4"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=4"
                            class="video-button">4</div>
                        <div data-id="5"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=5"
                            class="video-button">5</div>
                        <div data-id="6"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=6"
                            class="video-button">6</div>
                        <div data-id="7"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=7"
                            class="video-button">7</div>
                        <div data-id="8"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=8"
                            class="video-button">8</div>
                        <div data-id="9"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=9"
                            class="video-button">9</div>
                        <div data-id="10"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=10"
                            class="video-button">10</div>
                        <div data-id="11"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=11"
                            class="video-button">11</div>
                        <div data-id="12"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=12"
                            class="video-button">12</div>
                        <div data-id="13"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=13"
                            class="video-button">13</div>
                        <div data-id="14"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=14"
                            class="video-button">14</div>
                        <div data-id="15"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=15"
                            class="video-button">15</div>
                        <div data-id="16"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=16"
                            class="video-button">16</div>
                        <div data-id="17"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=17"
                            class="video-button">17</div>
                        <div data-id="18"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=18"
                            class="video-button">18</div>
                        <div data-id="19"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=19"
                            class="video-button">19</div>
                        <div data-id="20"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=20"
                            class="video-button">20</div>
                        <div data-id="21"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=21"
                            class="video-button">21</div>
                        <div data-id="22"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=22"
                            class="video-button">22</div>
                        <div data-id="23"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=23"
                            class="video-button">23</div>
                        <div data-id="24"
                            data-href="//aniqit.com/serial/19353/1d4f5409a7676ee593107e3aad9861b4/720p?season=1&amp;only_episode=true&amp;episode=24"
                            class="video-button">24</div>
                    </div>

                    <div class="block_header mt-5">
                        <div class="label_block">КОММЕНТАРИИ</div>
                        <div id="header_block" class="d-flex p-2 bd-highlight "></div>
                    </div>
                    <div class="content_btn mt-5">
                        <div class="show-more_btn">Загрузить</div>
                    </div>

                </div>


                <?php require 'blocks/aside.php'; ?>


            </div>


</section>