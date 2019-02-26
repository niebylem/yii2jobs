<?php declare(strict_types=1);

namespace app\modules\jobs\services;

use app\modules\jobs\services\interfaces\JobProviderInterface;
use app\services\RestService;

class JobService implements JobProviderInterface
{
    private $restService;

    public function __construct()
    {
        $this->restService = new RestService();
    }

    public function getJobs(): ?array
    {
        $responseBody = $this->restService->get('getJobs');
        $decoded = json_decode($responseBody, true);
        return $decoded['jobs'];
    }
}
