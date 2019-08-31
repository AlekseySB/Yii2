<?php

?>

<div>
    <h2>
        Страница администратора
    </h2>
    <a href="/admin/users" class="btn btn-light" role="button">
        >>Посмотреть пользователей<< (Нажать)
    </a>
    <?=\app\widgets\LogInWidget\LogInWidget::widget()?>
</div>
