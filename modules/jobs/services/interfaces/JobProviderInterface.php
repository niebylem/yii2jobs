<?php declare(strict_types=1);

namespace app\modules\jobs\services\interfaces;

interface JobProviderInterface
{
    public function getJobs(): ?array;
}
