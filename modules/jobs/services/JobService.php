<?php declare(strict_types = 1);

namespace app\modules\jobs\services;

use app\modules\jobs\models\Job;
use app\modules\jobs\services\interfaces\JobProviderInterface;
use app\services\interfaces\RestInterface;

class JobService implements JobProviderInterface
{
    const GET_JOBS = '/ads';
    private $MBEApiUrl;
    private $restService;

    public function __construct(RestInterface $restClient)
    {
        $this->restService = $restClient;
        $this->MBEApiUrl = \Yii::$app->params['MBEApiUrl'];
    }

    public function getJobs(): ?array
    {
        $url = $this->MBEApiUrl . static::GET_JOBS;
        $responseBody = $this->restService->get($url);
        if ($responseBody !== null) {
            $decoded = json_decode($responseBody, true);

            if ($decoded['success'] === true) {
                $jobs = $this->processResponseToArrayOfJobs($decoded['data']);
                return $jobs;
            }
        }

        return null;
    }

    protected function processResponseToArrayOfJobs(array $data): ?array
    {
        $jobs = [];
        foreach ($data as $index => $datum) {
            $jobs[] = Job::createFromArray($datum);
        }

        return $jobs;
    }
}
