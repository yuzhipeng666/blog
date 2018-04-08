<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Banners;
use App\Models\Promotional;
use App\Models\Sections;
use App\Models\Diffusion;
use App\Models\We;

class WebHomeController extends Controller
{
    
    public function homepage()
    {
        $bannerdata = Banners::select("*")->where("types","=","1")->where("status","=","Y")->get();
        $promotionaldata = Promotional::select("*")->where("status","=","Y")->get();
        $we = We::select("*")->where("status","=","Y")->get();
        return view('web.home.homepage',compact("bannerdata","we","promotionaldata"));
    }

    public function diffusion()
    {
        return view('web.diffusion.page');
    }

    public function promotional()
    {
        $bannerdata = Banners::select("*")->where("types","=","2")->where("status","=","Y")->get();
        $promotionaldataA = Promotional::select("*")->where("type","=","a")->where("status","=","Y")->get();
        $promotionaldataB = Promotional::select("*")->where("type","=","b")->where("status","=","Y")->get();
        $promotionaldataC = Promotional::select("*")->where("type","=","c")->where("status","=","Y")->get();
        return view('web.promotional.page',compact("bannerdata","promotionaldataA","promotionaldataB","promotionaldataC"));
    }

    public function sections()
    {
        $bannerdata = Banners::select("*")->where("types","=","3")->where("status","=","Y")->get();
        $sectionsdataA = Sections::select("*")->where("type","=","a")->where("status","=","Y")->get();
        $sectionsdataB = Sections::select("*")->where("type","=","b")->where("status","=","Y")->get();
        $sectionsdataC = Sections::select("*")->where("type","=","c")->where("status","=","Y")->get();
        return view('web.sections.page',compact("bannerdata","sectionsdataA","sectionsdataB","sectionsdataC"));
    }

    public function we()
    {
        return view('web.we.page');
    }

}
