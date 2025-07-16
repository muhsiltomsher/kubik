<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug)
    {
        $services = [
            'construction' => 'Construction Services',
            'contractors' => 'Contractors & Trade Centres',
            'professional' => 'Professional Services',
        ];

        if (!array_key_exists($slug, $services)) {
            abort(404);
        }

        return view('pages.service-detail', [
            'slug' => $slug,
            'title' => $services[$slug],
        ]);
    }

    public function web()
    {
        return view('pages.services.web');
    }

    public function design()
    {
        return view('pages.services.design');
    }

    public function marketing()
    {
        return view('pages.services.marketing');
    }
}
