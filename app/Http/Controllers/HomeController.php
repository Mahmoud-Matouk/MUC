<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use App\Models\Bundle;
use App\Models\Offer;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {

        return view('index');
    }
    public function offers()
    {
        $offers = Offer::query()->with('details')->active()->orderBy('id')->Paginate($perPage=6,$columns = ['*'],$pageName='offers');

        return view('offers.index', compact(['offers']));
    }
    public function packages()
    {
        $packages = Bundle::query()->active()->orderBy('id')->Paginate($perPage=9,$columns = ['*'],$pageName='bundle');

        return view('packages.index', compact([ 'packages']));
        // return view('packages');
    }
    public function packages2()
    {
        $packages = Bundle::query()->orderBy('id')->Paginate($perPage=9,$columns = ['*'],$pageName='bundle');

        return view('packages.index2', compact([ 'packages']));
        // return view('packages');
    }
    public function analysis()
    {
        $analysis = Analysis::query()->active()->orderBy('id')->Paginate($perPage=12,$columns = ['*'],$pageName='analysis');

        return view('analysis', compact([ 'analysis']));
    }

    public function homeLogin()
    {
        return view('livewire.login.homeLogin');
    }
}
