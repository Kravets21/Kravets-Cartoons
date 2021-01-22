<div class="container profile_section">
        <div class="flex_wrap">

            <div class="profile_section_wrap profile-tab open">
		    <div class="block_header">
			<div id="header_block" class="d-flex bd-highlight "><b>Ваш профиль, <?=$_COOKIE['name']?></b></div>
		    </div>
		    <div class="block_header">
		    <div id="header_block" class="d-flex bd-highlight "><b>Ваши Закладки</b></div>
		    </div>
		<div class="bookmarks">
		    <div class="bookmark_block">
			<div class="bookmark-wrap">
			    <img class="bookmark_img" src="./img/poster1.jpg" alt="">
			    <span>Король Лев</span>
			</div>
			<button class="profile-delete-btn"></button>
		    </div>
		    <div class="bookmark_block">
			<div class="bookmark-wrap">
			    <img class="bookmark_img" src="./img/poster1.jpg" alt="">
			    <span>LOh</span>
			</div>
			<button class="profile-delete-btn"></button>
		    </div>
		</div>
		    <div class="block_header">
			<div id="header_block" class="d-flex bd-highlight "><b>Ваши Комментарии</b></div>
		    </div>
		<div class="profile_comments">
		    
		    <div class="comment_block">
			<div class="comments-wrap">
			    <span class="comment-title">Король Лев</span>
			    <span class="comment-date">18-01-2021</span>
			    <span class="comment-text">Это пример комментария. Тут я пишу о мультике который мне понравлся или задаю вопросы.</span>
			</div>
			<button class="profile-delete-btn"></button>
		    </div>
		    
		    <div class="comment_block">
			<div class="comments-wrap">
			    <span class="comment-title">Король Лев</span>
			    <span class="comment-date">19-01-2021</span>
			    <span class="comment-text">Это пример комментария. Тут я пишу о мультике который мне понравлся или задаю вопросы.</span>
			</div>
			<button class="profile-delete-btn"></button>
		    </div>

		</div>
            </div>
	    
	    <div class="profile_section_wrap settings-tab">
		<h1>Настройки</h1>
		<div id="successBlock"></div>
                <div id="errorBlock"></div>
                <form class='change-pas-form'>	
                    <label  for="formGroupExampleInput">Смена пароля</label>
                    <input placeholder="Новый пароль" type="text" class="form-control" id="new-password">
                    <input placeholder="Повторите пароль" type="text" class="form-control" id="password-repeat">
		    <button class="btn btn-secondary mt-3 " type="button">Сменить</button>
		</form>
	    </div>

            <aside>
	    <div class="block_header">
		<div id="header_block" class="d-flex bd-highlight"><b>МЕНЮ</b></div>
	    </div>
	    <div class="bookmarks">
		<div class="settings_block profile-tab-btn">
			<img src="./img/account.png" alt="">
			<span>Профиль</span>
		</div>
		<div class="settings_block settings-tab-btn">
			<img src="./img/settings.png" alt="">
			<span>Настройки</span>
		</div>
	    </div>
	    </aside>
        </div>
    

</div>



	

	





