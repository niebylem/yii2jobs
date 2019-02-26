<?php declare(strict_types=1);

namespace app\services;

use app\services\interfaces\RestInterface;

class RestService implements RestInterface
{

    public function get(string $request): ?string
    {
        return '{
"jobs": [
      {
        "id": 0,
        "name": "job 0"
      },
      {
        "id": 1,
        "name": "job 1"
      },
      {
        "id": 2,
        "name": "job 2"
      }
    ]
}
';
    }
}
