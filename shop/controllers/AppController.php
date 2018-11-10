<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AppController extends Controller{
    protected function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'comtent' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'comtent' => $description]);
    }
}
