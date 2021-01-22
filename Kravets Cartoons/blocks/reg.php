<div class="container">
        <div class="flex_wrap">

            <div class="reg_field">
                        <h2>Регистрация нового пользователя</h2>
                        <p>Условия регистрации:</p>
                        <span>Все поля - обязательные <br>
Вводите только рабочий корректный e-mail, он используется для восстановления пароля<br>
Ник должен быть уникальным в пределах сайта, минимальная длина 3 символа, можно использовать нижнее подчеркивание, дефис, латиницу и кириллицу (русские буквы)<br></span><br><br>
                        <p>Регистрируясь на нашем сайте вы автоматически соглашаетесь соблюдать правила.</p>
                        <form action ="" method= "post">
                        <input name="email" id="email2" type="email" placeholder="Введите E-mail">
                        <input name="password" type="password" id="password2" placeholder="Введите Пароль">

                        <div class ="alert alert-danger mt-2" id="errorBlock"></div>
                        <div class ="alert alert-success mt-2" id="successBlock"></div>

                        <button type="button" id="reg_user" class="btn btn mt-2 ">Зарегестрироваться</button>
                        </form>
                        <h4>Что дает регистрация?</h4>
                        <span>Вы сможете вести свои списки просмотренного, того, что смотрите сейчас или планируете в будущем<br>
Ставить рейтинг аниме<br></span>

                </div>

            <?php require 'blocks/aside.php'; ?>
        </div>
</div>

