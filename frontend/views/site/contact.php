<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Если у вас есть деловое предложение или другие вопросы , пожалуйста, заполните следующую форму, чтобы связаться с нами . Спасибо. <!-- Руслан -->
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
              <!-- добавил label прописал другие назвы формам  -->
			   <?= $form->field($model, 'name')->label('Введите имя') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject')->label('Тема коментария') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6])->label('Коментарий') ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])->label('Код подтверждения') ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
