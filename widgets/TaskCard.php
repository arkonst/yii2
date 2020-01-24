<?php


namespace app\widgets;
use yii\base\Widget;

class TaskCard extends Widget
{
    public $title;
    public $description;
    public $created;
    public $block_attr;

    public function run()
    {
        return $this->render('task-card', [
            'title' => $this->title,
            'description' => $this->description,
            'created' => $this->created,
            'block_attr' => $this->block_attr
        ]);
    }
}