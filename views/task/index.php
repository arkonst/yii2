<?php

use yii\widgets\ListView;

echo ListView::widget([
    'dataProvider' => $listDataProvider,
    'itemView' => '_task-card',
    'options' => [
        'tag' => 'div',
        'class' => 'tasks-list',
    ],
]);

//var_dump($listDataProvider);







