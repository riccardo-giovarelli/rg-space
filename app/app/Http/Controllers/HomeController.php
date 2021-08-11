<?php

namespace App\Http\Controllers;

use App\Library\Services\ApodApi;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home.index');
    }


    /**
     * Get data about Apod - NASA
     *
     * @param ApodApi $apodapi ApodApi service
     * @return Array Apod data
     */
    public function getApod(ApodApi $apodapi)
    {
        $apodData = $apodapi->getApod();

        $apodData['date'] = date('d/m/Y', strtotime($apodData['date']));

        return $apodData;
    }
}
