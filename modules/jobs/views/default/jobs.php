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
            if ($jobs !== null && count($jobs) > 0) {
                foreach ($jobs as $index => $job) {
                    /**
                     * @var $job \app\modules\jobs\models\Job
                     */
                    echo HTML::encode($job->title) .'</br>';
                    echo 'dodano: ' . HTML::encode($job->getDateStart()) .'</br>';
                    echo $job->getContent() .'</br>';
                    ?><br/>
                    <?php
                }
            } else {
                echo 'Ogłoszenia aktualnie niedostępne';
            }
        ?>
    </p>

</div>
