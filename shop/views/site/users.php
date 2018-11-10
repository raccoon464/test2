<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 ?>
<div class="container" style='margin-top: 100px;'>
  <?php $form = ActiveForm::begin(['method' => 'post',]); ?>
      <?= $form->field($users, 'login') ?>
      <?= $form->field($users, 'mail') ?>
      <?= $form->field($users, 'password') ?>
      <?= $form->field($users, 'password2') ?>
      <?= Html::submitButton('go', ['class' => 'btn btn-success']) ?>
  <?php ActiveForm::end() ?>
<?php
 if(Yii::$app->session->hasFlash('success')){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>'.Yii::$app->session->getFlash('success').'</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
} else if(Yii::$app->session->hasFlash('errors')) {
  echo '<div class="alert alert-danger" role="alert">
'.Yii::$app->session->getFlash('errors').'
</div>';
}
 ?>
</div>

<!-- <script type="text/javascript">
  alert('ghfb')
</script> -->
