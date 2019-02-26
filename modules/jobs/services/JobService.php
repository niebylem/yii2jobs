<?php declare(strict_types=1);

namespace app\modules\jobs\services;

use app\modules\jobs\services\interfaces\JobProviderInterface;

class JobService implements JobProviderInterface
{

    public function getJobs(): ?array
    {
        return [
            'job1', 'job2', 'job3'
        ];
    }
}
