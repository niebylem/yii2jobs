<?php declare(strict_types = 1);

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Ogłoszenia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
            if (count($jobs) > 0) {
                foreach ($jobs as $index => $job) {
                    echo HTML::encode($job);
                    ?><br/>
                    <?php
                }
            }
        ?>
    </p>

</div>
