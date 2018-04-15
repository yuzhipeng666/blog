<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Banners;
use App\Models\Promotional;
use App\Models\Sections;
use App\Models\Diffusion;
use App\Models\We;
use App\Models\News;

class WebHomeController extends Controller
{
   
    
    public function homepage()
    {
        $bannerdata = Banners::select("*")->where("types","=","1")->where("status","=","Y")->get();
        $promotionaldata = Promotional::select("*")->where("status","=","Y")->get();
        $we = We::select("*")->where("status","=","Y")->where("type","=","a")->get();
        $newsdata = News::select("*")->get();
        return view('web.home.homepage',compact("bannerdata","we","promotionaldata","newsdata"));
    }

    public function homeid($id)
    {

        $newsid = News::select("content")->where("id","=",$id)->first();
        return view('web.home.homeid',compact("newsid"));
    }

    public function diffusion()
    {
        $bannerdata = Banners::select("*")->where("types","=","4")->where("status","=","Y")->get();
        $diffusiondataA = Diffusion::select("*")->where("type","=","a")->where("status","=","Y")->get();
        $diffusiondataB = Diffusion::select("*")->where("type","=","b")->where("status","=","Y")->get();
        $diffusiondataC = Diffusion::select("*")->where("type","=","c")->where("status","=","Y")->get();
        return view('web.diffusion.page',compact("bannerdata","diffusiondataA","diffusiondataB","diffusiondataC"));
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
        $bannerdata = Banners::select("*")->where("types","=","5")->where("status","=","Y")->get();
        $wedataA = We::select("*")->where("type","=","a")->where("status","=","Y")->get();
        $wedataB = We::select("*")->where("type","=","b")->where("status","=","Y")->get();
        $wedataC = We::select("*")->where("type","=","c")->where("status","=","Y")->get();
        return view('web.we.page',compact("bannerdata","wedataA","wedataB","wedataC"));
    }

}
