<?php


namespace app\controllers;

use app\models\tables\Tasks;
use yii\web\Controller;

class TaskController extends Controller
{
        public function actionIndex() {

            $tasks = Tasks::find()->all();
            var_dump($tasks);

           //return $this->render('index', ['tasks' => $tasks]);
        }

        public function actionTaskDetail($id) {
            return $this->render('task-detail');
        }
}