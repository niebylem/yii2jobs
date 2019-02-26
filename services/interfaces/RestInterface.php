<?php declare(strict_types=1);

namespace app\services\interfaces;

interface RestInterface
{
    public function get(string $request): ?string;
}
