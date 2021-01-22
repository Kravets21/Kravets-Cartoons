<header>
<?php
        if(isset($_COOKIE['name'])  == ''):
            ?>
            <div class="first_header">
                <div class="container">
                    <div class="d-flex flex-row-reverse bd-highlight ">
                        <div class="p-2 bd-highlight"> <a id="fir_btn" class="btn mt-3 " href="reg.php">РЕГИСТРАЦИЯ</a></div>

                        <div id="auth-block" class="p-2 bd-highlight">
                            <a id="sec_btn" class="btn mt-3 ">ВХОД</a>
                            <form method="POST" class="auth-form">
                                <div class="auth_container">
                                    <input name="email" type="text" id="email" placeholder="E-mail">
                                    <input name="password" type="password" id="password" placeholder="Пароль">
                                    <input id="auth_user" type="button" value="Войти">
                                    <br>
                                    <div class ="alert alert-danger mt-2" id="errorBlock2"></div>
                                    <a href="">Не помню пароль...</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        <?php
        else:
        ?>
                <?php
                if($_COOKIE['name']  == 'admin'):
                ?>
                    <div class="first_header">
                        <div class="container">
                            <div class="profile_menu">
                            <div class="profile_link" id="exit_btn"> <a id="profile_btn" class="btn"><img src=".//img//exit.png" id="img" alt=""></a></div>
                            <div class="profile_link" id="profile_btn2"> <a id="profile_btn" class="btn" href="admin.php"><span class="admin-nav">Админка</span></a></div>
                            </div>
                        </div>
                    </div>

                    <?php
                    else:
                    ?>


            <div class="first_header">
                <div class="container">
                    <div class="profile_menu">
                        <div class="profile_link" id="exit_btn"><a id="profile_btn" class="btn"><img src=".//img//exit.png" id="img" alt=""></a></div>
                        <div class="profile_link" id="profile_btn2"><a id="profile_btn" class="btn" href="profile.php"><strong><?=$_COOKIE['name'] ?></strong><br>профиль</a>  </div>
                    </div>
                </div>

            </div>
        <?php
        endif
        ?>
        <?php
        endif
        ?>


    <div class="menu">

        <div class="container">
	    <?php 
		    $current_page = explode('?', $_SERVER['REQUEST_URI']);
		    $current_page = $current_page[0]; 
		    $current_page = substr($current_page, strrpos($current_page, '/' )+1);  // считываем адресс такущей странички, чтобы подсветить активную ссылку навбара?>
            <nav class="nav-menu">
                <img class="logo" src="./img/ya.png" alt="#">
                    <ul class="navbar-nav">
                        <li class="nav-item" <?php if ($current_page == "index.php") {echo 'id="active"';}?>>
                            <a class="nav-link" data-value="main" href="index.php">ГЛАВНАЯ</a>
			</li>
                        <li <?php if ($current_page == "catalog.php") {echo 'id="active"';}?> class="nav-item" >
                            <a class="nav-link catalog"  data-value="catalog" href="catalog.php">КАТАЛОГ</a>
                            <div class="submenu">
                                <a href="catalog.php">Каталог аниме</a>
                                <a href="news.php">Новости</a>
                                <a href="anons.php">Анонсы</a>
                            </div>
                        </li>
                        <li <?php if ($current_page == "top.php") {echo 'id="active"';}?> class="nav-item">
                            <a class="nav-link " data-value="top" href="top.php">ТОП-100</a>
                        </li>
                        <li class="nav-item" <?php if ($current_page == "help.php") {echo 'id="active"';}?>>
                            <a class="nav-link help" data-value="contact" href="help.php">ПОМОЩЬ</a>
                            <div class="submenu">
                                <a href="help.php">FAQ</a>
                                <a href="about.php">О сайте</a>
                            </div>
                        </li>
                    </ul>
	    </nav>
        </div>
	
    </div>


    </header>

<div class="container">
    <div id="input_block" class="d-flex p-2 bd-highlight mt-3 mb-3">
        <input autocomplete="off" class="search" name="word" type="text" placeholder="НАЙТИ АНИМЕ ПО НАЗВАНИЮ" value="">
    </div>
</div>