<aside class="aside_class">

    <div class="block_header">
        <div id="header_block" class="d-flex p-2 bd-highlight filter_title"><p>ФИЛЬТР</p></div>
    </div>

    <div class="filter_block">
	<form class="filter-form" action="filter.php" method="post">
        <div class="filter_container">

            <div class="filter_cell">
                <label>Выбрать жанр</label>
                <select name='genre' id="genre">

                     <option value="">По каким жанрам искать</option>
                     <option class="select_option" value="2">Детектив</option>
                     <option class="select_option" value="3">Комедия</option>
                     <option class="select_option" value="4">Фєнтези</option>
                     <option class="select_option" value="5">Альтернативная вселенная</option>
                     <option class="select_option" value="6">Монстры</option>
                     <option class="select_option" value="7">Ангелы</option>
                     <option class="select_option" value="8">Детектив</option>
                    <option class="select_option" value="9">Комедия</option>
                    <option class="select_option" value="10">Фєнтези</option>
                    <option class="select_option" value="11">Альтернативная вселенная</option>
                    <option class="select_option" value="12">Монстры</option>
                    <option class="select_option" value="13">Ангелы</option>

                </select>

            </div>

            <div class="filter_cell">
                <label>Тип аниме</label>
                <select name='type' id="genre">

                    <option value="" disabled selected hidden>Какой тип аниме искать</option>
                    <option class="select_option" value="2">Сериал</option>
                    <option class="select_option" value="3">Фильм</option>
                    <option class="select_option" value="4">ОВА</option>
                    <option class="select_option" value="5">Спешл</option>

                </select>
            </div>

            <div class="filter_cell">
                <label>Год</label><br>
                <input class="year_input mr-2" type="text" name='from' placeholder="от"><input class="year_input" type="text" name='to' placeholder="до">
            </div>

            <div class="filter_cell">
                <label>Возрастной рейтинг</label>
                <select name='rating' id="genre">

                    <option value="" disabled selected hidden>PG(для детей)</option>
                    <option class="select_option" value="2">Сериал</option>
                    <option class="select_option" value="3">Фильм</option>
                    <option class="select_option" value="4">ОВА</option>
                    <option class="select_option" value="5">Спешл</option>

                </select>
            </div>

            <div class="filter_cell">
                <label>Сортировать по</label>
                <select name='sort' id="genre">
                    <option value="" disabled selected hidden>Рейтингу</option>
                    <option class="select_option" value="2">Сериал</option>
                    <option class="select_option" value="3">Фильм</option>
                    <option class="select_option" value="4">ОВА</option>
                    <option class="select_option" value="5">Спешл</option>
                </select>
            </div>

        </div>
	    </div>
	    <div class="filter_footer"><input value="ИСКАТЬ" type="submit" class="filter_btn"></div>
	</form>

    <div class="video_block">
        <div class="block_header">
            <div id="header_block" class="d-flex p-2 bd-highlight mt-3"><p>РЕКОМЕНДУЕМ ВИДЕО</p></div>
        </div>
                    <?php
                    $pdo = new PDO('mysql:host=localhost;dbname=anime','root');

                    $sql = 'SELECT * FROM `recommended-video`';
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    for($i=0;$i<=3;$i++){
                        while($row = $query->fetch(PDO::FETCH_OBJ)) {
                            echo "
				<div class='video_el'><a href='$row->url'><img src='$row->img_url' alt=''></a></div>
                                ";
                        }
                    }

                     ?>
        
    </div>
    <script>
        // $('#genre').click(function(){
        //     $('div.filter_submenu').toggle();
        // });
    </script>
</aside>
