<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Регистрация'; // Руслан
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста, заполните следующие поля , чтобы зарегистрироваться:</p> <!-- Перевёл на русский -->
	
    <div class="row">
        <div class="col-lg-5">
            <?php 
				$form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <!-- добавил label прописал другие назвы формам  -->
			   <?= $form->field($model, 'username')->label('Ваше имя') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'phone')->label('Номер телефона') ?> <!-- добавил строку телефон и его свойство в форму. -->
                <?= $form->field($model, 'city')->label('Город') ?> <!-- добавил строку город и его свойство в форму. -->
                <?= $form->field($model, 'country')->label('Страна') ?> <!-- добавил строку страна и его свойство в форму. -->
                <?= $form->field($model, 'self_info')->textArea(['rows' => 6])->label('О себе') ?> <!-- добавил строку про себя и его свойство в форму. -->
                <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
                <div class="form-group">
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>