<?php

/**
* @var Activity $model
    */

?>
<h2>
    Список пользователей.
</h2>
<?php foreach ($model as $user):?>
    <p>
        <a href="../activity/showall?id=<?=$user->id?>" class="btn btn-light" role="button">
            <?php echo $user->email?> >>Нажать, чтобы увидеть активности<<
        </a>
    </p>
<?php endforeach;?>
