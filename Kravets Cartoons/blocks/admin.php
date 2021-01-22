<section class="admin">
        <div class="btn-cntl"> 
            <button type="button" class="btn btn-secondary btn-lg ml-5 mr-1 add_anime">Добавить аниме в БД</button>
            <button type="button" class="btn btn-secondary btn-lg mr-1 delete_anime">Удалить аниме из БД</button>
            <button type="button" class="btn btn-secondary btn-lg mr-1 ban_user">Бан Пользователя</button>
	    <button type="button" class="btn btn-secondary btn-lg mr-1 aside_edit">Редактировать видео в боковом меню</button>
	    <button type="button" class="btn btn-secondary btn-lg mr-1 slider_edit">Редактировать Слайдер</button>
	    <button type="button" class="btn btn-secondary btn-lg mr-1 news_edit">Редактировать ленту новостей</button>
        </div>
        <div class="container">

            <div class="admin-menu">
                <div id="successBlock"></div>
                <div id="errorBlock"></div>
                <form class='add_anime_form' enctype=multipart/form-data>
                    <label>Постер</label>
                    <input type="file" accept="image/jpeg,image/png" id="poster">
		    <br>
                    <label  for="formGroupExampleInput">Название</label>
                    <input type="text" class="form-control" id="title">
                    <label  for="formGroupExampleInput">Год</label>
                    <input type="text" class="form-control" id="year">
                    <label   for="formGroupExampleInput">Жанр</label>
                    <input type="text" class="form-control" id="genre">
                    <label   for="formGroupExampleInput">Режиссер</label>
                    <input type="text" class="form-control" id="author">
                    <label   for="formGroupExampleInput">Возрастной рейтинг</label>
                    <input type="text" class="form-control" id="rating">
                    <label for="exampleFormControlTextarea1">Описание</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                    <button class="btn btn-secondary mt-3 " type="button">Добавить</button>
                </form>
                <form class='delete_anime_form'>
                    <label for="formGroupExampleInput">Название</label>
                    <input  class="form-control" id="titledel">
                    <button class="btn btn-secondary mt-3" type="button">Удалить</button>
                </form>
                <form class='ban_user_form'>
                    <label for="formGroupExampleInput">Имя пользователя</label>
                    <input type="text" class="form-control" id="name">
                    <button class="btn btn-secondary mt-3" type="button">Удалить</button>
                </form>
                <form class='aside_edit_form'>
                    <label for="formGroupExampleInput">Название Аниме</label>
                    <input  class="form-control" id="titledel">
                    <button class="btn btn-secondary mt-3" type="button">Удалить</button>
                </form>
                <form class='slider_edit_form'>
                    <label for="formGroupExampleInput">Название Аниме</label>
                    <input  class="form-control" id="titledel">
                    <button class="btn btn-secondary mt-3" type="button">Удалить</button>
                </form>
                <form class='news_edit_form'>
                    <label for="formGroupExampleInput">Название Аниме</label>
                    <input  class="form-control" id="titledel">
                    <button class="btn btn-secondary mt-3" type="button">Удалить</button>
                </form>
            </div>

        </div>


</section>

