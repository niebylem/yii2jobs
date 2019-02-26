<?php declare(strict_types = 1);

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Ogłoszenia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <div class="body-content">

        <?php
            if ($jobs !== null && count($jobs) > 0) {
                foreach ($jobs as $index => $job) {
                    /**
                     * @var $job \app\modules\jobs\models\Job
                     */

                    ?>
                            <div class="row">
                                <div class="col-lg-4">
                                    <h2><?= HTML::encode($job->title) ?></h2>
                                    <small>dodano: <?= HTML::encode($job->getDateStart()) ?> przez <?= HTML::encode($job->getAdminName()) ?></small>
                                </div>
                                <div class="col-lg-6">
                                    <p class="jobContent"><?= $job->getContent() ?></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><a class="btn btn-default" href="<?= HTML::encode($job->getUrl()) ?>">Sprawdź</a></p>
                                    <p><a class="btn btn-default" href="<?= HTML::encode($job->getApplyUrl()) ?>">Aplikuj &raquo;</a></p>
                                </div>
                                <hr class="col-xs-12">
                            </div>
                    <?php
                }
            } else {
                echo 'Ogłoszenia aktualnie niedostępne';
            }
        ?>

        </div>
    </p>

</div>
