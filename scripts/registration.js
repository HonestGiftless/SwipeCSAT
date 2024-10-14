const form = document.getElementById("form");

form.addEventListener('submit', function(event) {
    event.preventDefault();

    // Регулярки
    const login_regex = /^[a-zA-Z]{3,}[a-zA-Z0-9]*$/;
    // TODO:
    // Исправить регулярку пароля
    const password_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/;
    const phone_regex = /^(\+7|8|7)?[\s-]?\(?(\d{3})\)?[\s-]?\d{3}[\s-]?\d{2}[\s-]?\d{2}$/;

    const name = document.getElementById("name_input");
    const login = document.getElementById("login_input");
    const mail = document.getElementById("mail_input");
    const password = document.getElementById("password_input");
    const confirm_password = document.getElementById("confirm_password_input");
    const birthday = document.getElementById("birthday");
    const birthday_date = new Date(birthday.value);
    const phone = document.getElementById("phone");
    const user_type = document.getElementById("user_type");

    if (!login_regex.test(login.value)) {
        alert("Логин должен начинаться минимум на 3 английские буквы!");
        return;
    }

    if (password.value !== confirm_password.value) {
        alert("Пароли не совпадают!");
        return;
    }

    if (!password_regex.test(password.value)) {
        alert("Пароль должен включать в себя 1 заглавную букву и любой символ!");
        return;
    }
    
    if (birthday_date.getFullYear() < 1900 && birthday_date.getFullYear() > 2024) {
        alert("Дата рождения некорректная.");
        return;
    }

    if (!phone_regex.test(phone.value)) {
        alert("Номер телефона не распознан.");
        return;
    }

    var formData = new FormData(this);

    // Отправляем AJAX-запрос
    fetch('./inserts/insert_user.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json()) // Обрабатываем ответ
    .then(data => {
        if (data.status === 'success') {
            alert(data.message);
            window.location.replace('login.php');
            // Можно перенаправить пользователя или очистить форму
            this.reset(); // Очищаем форму
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Ошибка:', error);
        alert('Произошла ошибка при отправке данных.');
    });
});