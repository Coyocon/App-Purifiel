<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Landing Page';
?>
<div class="site-landing">
    <div class="jumbotron">
        <h1>Bienvenido a Nuestra Landing Page</h1>
        <p class="lead">Esta es una descripción breve de lo que ofrecemos.</p>
        <p><?= Html::beginForm('contact', 'post') ?>
            <?= Html::hiddenInput('mensaje', 'Lusi') ?>
            <?= Html::submitButton('Contáctanos', ['class' => 'btn btn-lg btn-success']) ?>
            <?= Html::endForm() ?></p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Sección 1</h2>
                <p>Descripción de la primera sección.</p>
            </div>
            <div class="col-lg-4">
                <h2>Sección 2</h2>
                <p>Descripción de la segunda sección.</p>
            </div>
            <div class="col-lg-4">
                <h2>Sección 3</h2>
                <p>Descripción de la tercera sección.</p>
            </div>
        </div>
    </div>
</div>