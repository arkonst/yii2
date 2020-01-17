<?php


namespace app\controllers;

use yii\web\Controller;


class TaskController extends Controller
{
        public function actionIndex() {
            return $this->render('index');
        }

        public function actionTasks() {
            return $this->render('tasks');
        }

        public function actionTaskDetail() {
            return $this->render('task-detail');
        }
}
