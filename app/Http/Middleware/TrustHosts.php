<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts(): array
=======
    public function hosts()
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
