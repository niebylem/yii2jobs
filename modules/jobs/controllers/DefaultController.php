<?php declare(strict_types=1);

namespace app\modules\jobs\controllers;

use app\modules\jobs\services\JobService;
use yii\base\Module;
use yii\web\Controller;

class DefaultController extends Controller
{
    private $jobService;

    public function __construct(string $id, Module $module, array $config = [])
    {
        $this->jobService = new JobService();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        $jobs = $this->jobService->getJobs();
        return $this->render('jobs', [
            'jobs' => $jobs
        ]);
    }
}
