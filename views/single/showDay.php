<?php

?>
<h2>Список дел на <?=$model->date?></h2>
<?php foreach ($model->activities as $activity) :?>
    <a class="btn btn-default""
        href="/activity/show">
        <?=$activity->title?> нажать, чтобы увидеть данную активность.
    </a></br>
<?php endforeach;?>

<!--public $date;-->
<!--public $isWeekend;-->
<!--public $hollyday;-->
<!--public $activities = [];-->