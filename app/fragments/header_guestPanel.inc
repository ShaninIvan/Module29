<div class="user-panel__guest">
    Вы не авторизованы.
    <input type="button" id='openAuth' value="Войдите или зарегистрируйтесь">
</div>

<div class="modalAuth">
    <div class="modalAuth__inputs">
        <label for="userLogin">Имя пользователя:</label>
        <input type="text" id="userLogin" name="userLogin">
        <label for="userPassword">Пароль:</label>
        <input type="password" id="userPassword" name="userPassword">
    </div>
    <div class="modalAuth__buttons">
        <button type="submit" name="submit" value="signIn">Вход</button>
        <button type="submit" name="submit" value="signUp">Регистрация</button>
    </div>

    <a href="http://oauth.vk.com/authorize?client_id=<?= VK_ID ?>&display=page&redirect_uri=<?= VK_URL ?>&response_type=code" class="modalAuth__VK">Или войдите через ВКонтакте</a>

</div>


<script>
    const openAuth = document.querySelector('#openAuth');
    const modalAuth = document.querySelector('.modalAuth');

    openAuth.addEventListener('click', ()=>{
        modalAuth.classList.toggle('modalShow');
    })

</script>