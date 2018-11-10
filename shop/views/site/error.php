<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="container text-center" style="margin-top: 100px;">
  <div class="site-error" >

      <h1 style="margin-bottom:20px;"><?= Html::encode($this->title) ?></h1>

      <div class="alert alert-danger">
          <?= nl2br(Html::encode($message)) ?>
      </div>
      <div class="alert alert-primary text-left">
          s<?=   debug($exception); ?>
      </div>
      <p>
          The above error occurred while the Web server was processing your request.
      </p>
      <p>
          Please contact us if you think this is a server error. Thank you. 123123
      </p>

  </div>
</div>
