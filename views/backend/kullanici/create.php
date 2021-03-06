<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kullanici */

$this->title = 'Özgeçmiş Oluşturma';
$this->params['breadcrumbs'][] = ['label' => 'Özgeçmiş', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanici-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <p>        
        <a class="btn btn-lg btn-primary" href="http://portal.kouosl/admin/ozgecmis/kullanici/index">Vazgeç</a></a>
        
    </p>
</div>
