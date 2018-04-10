<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Banners;
use App\Models\Promotional;
use App\Models\Sections;
use App\Models\Diffusion;
use App\Models\We;

class AdminHomeController extends Controller
{
    public function addadmins(){
        $admin = new Users();
        $admin->name = "kuaixiang";
        $admin->email = "kuaixiang@qq.com";
        $admin->password = "kuaixiang2018";
        $admin->save();
    }
    
    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.layout_main');
    }
    public function do_login(Request $request)
    {
        $user_name =$request->input('username');
        $password  = $request->input("password");
        $user = Users::where(array('name' => $user_name, 'password' => $password))->first();
        if ($user)
        {
            return Redirect('dashboard');
        }else{
            return Redirect('admins');
        }
    }
    //Banner controllers
    public function bannerList()
    {
        $banners = Banners::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.banners.page')->withbanners($banners);


    }

    public function bannerListchax(Request $request)
    {
        $data = $request->all();
        $condition = [];
        if(!empty($data)){
            if(!empty($data['name'])){
                $condition[] = ['name', 'like', '%' . $data['name'] . '%', ];
            }
            if(!empty($data['types'])){
                $condition[] = ['types', '=', $data['types']];
            }
            if(!empty($data['status'])){
                $condition[] = ['status', '=', $data['status']];
            }
        }

        $banners = Banners::where($condition)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.banners.page')->withbanners($banners);


    }
    
    public function addBanner()
    {
        return view('admin.banners.addpage');

    }

    public function createBanner(Request $request)
    {
            $data = $request->all();//后期考虑加一个公共方法进行表单数据的全部过滤
            //接收文件信息
            $file = $request->file('file');
            $path = '../storage/app/public';
            $rule =['jpg','png','gif','jpeg'];
            //进行上传
            $img = Banners::upload_img($file,$path,$rule);
            $bann = new Banners();
            $bann->name = $data["name"];
            $bann->path = $img["name"];
            $bann->types = $data["types"];
            $bann->url = $data["url"];
            $bann->time = '';
            $bann->status = 'Y';
            $bann->save();
            if($bann){
                return Redirect('banner');
            }
    }

    public function deletcBanner($id)
    {
        $res = Banners::where('id', '=', $id)->first();
        if (empty($res)) {
            $res = '';
        } else {
            $res = $res->toArray();
        }
        if (!empty($res)) {
            if (file_exists('../storage/app/public/' . $res['path'])) {
                unlink('../storage/app/public/' . $res['path']);
            }
             Banners::where('id', '=', $id)->delete();
        }
        return Redirect('banner');
    }

    public function upBanner($id)
    {

        $bannersup = Banners::where('id', '=', $id)->first();
        return view('admin.banners.uppage')->withbannersup($bannersup);
    }
    public function upsetBanner(Request $request)
    {
        $dataup = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = '../storage/app/public';
            $rule =['jpg','png','gif','jpeg'];
            //进行上传
            $img = Banners::upload_img($file,$path,$rule);
            $res = Banners::where('id', '=', $dataup['id'])->first();
            if (empty($res)) {
                $res = '';
            } else {
                $res = $res->toArray();
            }
            if (!empty($res)) {
                if (file_exists('../storage/app/public/' . $res['path'])) {
                    unlink('../storage/app/public/' . $res['path']);
                }
            }
        } else {
            $img["name"] = $dataup['body_pic_back'];
        }

        $ress = Banners::where('id', '=', $dataup['id'])->update(['name' => $dataup['name'],'url' => $dataup['url'], 'path' =>  $img["name"],'types' => $dataup["types"]] );
        if($ress){
            return Redirect('banner');
        }
    }

    public function statusBanner($id,$status)
    {
        if($status == 'Y'){
            Banners::where('id', '=', $id)->update(['status' => 'N']);
        } else if($status == 'N')  {
          Banners::where('id', '=', $id)->update(['status' => 'Y']);
        }
            return Redirect('banner');

    }

    //宣传片 controllers
    public function admpromotionalList()
    {
        $promotional = Promotional::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.promotional.page')->withpromotional($promotional);


    }

    public function admpromotionalListchax(Request $request)
    {
        $data = $request->all();
        $condition = [];
        if(!empty($data)){
            if(!empty($data['title'])){
                $condition[] = ['name', 'like', '%' . $data['title'] . '%', ];
            }
            if(!empty($data['name'])){
                $condition[] = ['name', 'like', '%' . $data['name'] . '%', ];
            }
            if(!empty($data['type'])){
                $condition[] = ['type', '=', $data['type']];
            }
            if(!empty($data['status'])){
                $condition[] = ['status', '=', $data['status']];
            }
        }

        $promotional = Promotional::where($condition)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.promotional.page')->withpromotional($promotional);


    }

    public function addAdmpromotional()
    {
        return view('admin.promotional.addpage');

    }

    public function createAdmpromotional(Request $request)
    {
        $data = $request->all();//后期考虑加一个公共方法进行表单数据的全部过滤
        //接收文件信息
        $file = $request->file('file');
        $path = '../storage/app/public';
        $rule =['jpg','png','gif','jpeg'];
        //进行上传
        $img = Promotional::upload_img($file,$path,$rule);
        $pro = new Promotional();
        $pro->title = $data["title"];
        $pro->path = $img["name"];
        $pro->name = $data["name"];
        $pro->url = $data["url"];
        $pro->type = $data["type"];
        $pro->status = 'Y';
        $pro->bf = '';
        $pro->save();
        if($pro){
            return Redirect('admpromotional');
        }
    }

    public function deletcAdmpromotional($id)
    {
        $res = Promotional::where('id', '=', $id)->first();
        if (empty($res)) {
            $res = '';
        } else {
            $res = $res->toArray();
        }
        if (!empty($res)) {
            if (file_exists('../storage/app/public/' . $res['path'])) {
                unlink('../storage/app/public/' . $res['path']);
            }
            Promotional::where('id', '=', $id)->delete();
        }
        return Redirect('admpromotional');
    }

    public function upAdmpromotional($id)
    {

        $promotionalup = Promotional::where('id', '=', $id)->first();
        return view('admin.promotional.uppage')->withpromotionalup($promotionalup);
    }
    public function upsetAdmpromotional(Request $request)
    {
        $dataup = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = '../storage/app/public';
            $rule =['jpg','png','gif','jpeg'];
            //进行上传
            $img = Promotional::upload_img($file,$path,$rule);
            $res = Promotional::where('id', '=', $dataup['id'])->first();
            if (empty($res)) {
                $res = '';
            } else {
                $res = $res->toArray();
            }
            if (!empty($res)) {
                if (file_exists('../storage/app/public/' . $res['path'])) {
                    unlink('../storage/app/public/' . $res['path']);
                }
            }
        } else {
            $img["name"] = $dataup['body_pic_back'];
        }

        $ress = Promotional::where('id', '=', $dataup['id'])->update(['name' => $dataup['name'],'url' => $dataup['url'], 'title' => $dataup['title'],'path' =>  $img["name"],'type' => $dataup["type"]] );
        if($ress){
            return Redirect('admpromotional');
        }
    }

    public function statusAdmpromotional($id,$status)
    {
        if($status == 'Y'){
            Promotional::where('id', '=', $id)->update(['status' => 'N']);
        } else if($status == 'N')  {
            Promotional::where('id', '=', $id)->update(['status' => 'Y']);
        }
        return Redirect('admpromotional');

    }

    //影视栏目 controllers
    public function admsectionsList()
    {
        $sections = Sections::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.sections.page')->withsections($sections);


    }

    public function admsectionsListchax(Request $request)
    {
        $data = $request->all();
        $condition = [];
        if(!empty($data)){
            if(!empty($data['title'])){
                $condition[] = ['name', 'like', '%' . $data['title'] . '%', ];
            }
            if(!empty($data['name'])){
                $condition[] = ['name', 'like', '%' . $data['name'] . '%', ];
            }
            if(!empty($data['type'])){
                $condition[] = ['type', '=', $data['type']];
            }
            if(!empty($data['status'])){
                $condition[] = ['status', '=', $data['status']];
            }
        }

        $sections = Sections::where($condition)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.sections.page')->withsections($sections);


    }

    public function addAdmsections()
    {
        return view('admin.sections.addpage');

    }

    public function createAdmsections(Request $request)
    {
        $data = $request->all();//后期考虑加一个公共方法进行表单数据的全部过滤
        //接收文件信息
        $file = $request->file('file');
        $path = '../storage/app/public';
        $rule =['jpg','png','gif','jpeg'];
        //进行上传
        $img = Sections::upload_img($file,$path,$rule);
        $pro = new Sections();
        $pro->title = $data["title"];
        $pro->path = $img["name"];
        $pro->name = $data["name"];
        $pro->url = $data["url"];
        $pro->type = $data["type"];
        $pro->status = 'Y';
        $pro->bf = '';
        $pro->save();
        if($pro){
            return Redirect('admsections');
        }
    }

    public function deletcAdmsections($id)
    {
        $res = Sections::where('id', '=', $id)->first();
        if (empty($res)) {
            $res = '';
        } else {
            $res = $res->toArray();
        }
        if (!empty($res)) {
            if (file_exists('../storage/app/public/' . $res['path'])) {
                unlink('../storage/app/public/' . $res['path']);
            }
            Sections::where('id', '=', $id)->delete();
        }
        return Redirect('admsections');
    }

    public function upAdmsections($id)
    {

        $sectionsup = Sections::where('id', '=', $id)->first();
        return view('admin.sections.uppage')->withsectionsup($sectionsup);
    }
    public function upsetAdmsections(Request $request)
    {
        $dataup = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = '../storage/app/public';
            $rule =['jpg','png','gif','jpeg'];
            //进行上传
            $img = Sections::upload_img($file,$path,$rule);
            $res = Sections::where('id', '=', $dataup['id'])->first();
            if (empty($res)) {
                $res = '';
            } else {
                $res = $res->toArray();
            }
            if (!empty($res)) {
                if (file_exists('../storage/app/public/' . $res['path'])) {
                    unlink('../storage/app/public/' . $res['path']);
                }
            }
        } else {
            $img["name"] = $dataup['body_pic_back'];
        }

        $ress = Sections::where('id', '=', $dataup['id'])->update(['name' => $dataup['name'],'url' => $dataup['url'], 'title' => $dataup['title'],'path' =>  $img["name"],'type' => $dataup["type"]] );
        if($ress){
            return Redirect('admsections');
        }
    }

    public function statusAdmsections($id,$status)
    {
        if($status == 'Y'){
            Sections::where('id', '=', $id)->update(['status' => 'N']);
        } else if($status == 'N')  {
            Sections::where('id', '=', $id)->update(['status' => 'Y']);
        }
        return Redirect('admsections');

    }

    //媒体推广 controllers
    public function admdiffusionList()
    {
        $diffusion = Diffusion::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.diffusion.page')->withdiffusion($diffusion);


    }

    public function admdiffusionListchax(Request $request)
    {
        $data = $request->all();
        $condition = [];
        if(!empty($data)){
            if(!empty($data['title'])){
                $condition[] = ['name', 'like', '%' . $data['title'] . '%', ];
            }
            if(!empty($data['name'])){
                $condition[] = ['name', 'like', '%' . $data['name'] . '%', ];
            }
            if(!empty($data['type'])){
                $condition[] = ['type', '=', $data['type']];
            }
            if(!empty($data['status'])){
                $condition[] = ['status', '=', $data['status']];
            }
        }

        $diffusion = Diffusion::where($condition)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.diffusion.page')->withdiffusion($diffusion);


    }

    public function addAdmdiffusion()
    {
        return view('admin.diffusion.addpage');

    }

    public function createAdmdiffusion(Request $request)
    {
        $data = $request->all();//后期考虑加一个公共方法进行表单数据的全部过滤
        //接收文件信息
        $file = $request->file('file');
        $path = '../storage/app/public';
        $rule =['jpg','png','gif','jpeg'];
        //进行上传
        $img = Diffusion::upload_img($file,$path,$rule);
        $pro = new Diffusion();
        $pro->title = $data["title"];
        $pro->path = $img["name"];
        $pro->name = $data["name"];
        $pro->url = $data["url"];
        $pro->type = $data["type"];
        $pro->status = 'Y';
        $pro->bf = '';
        $pro->save();
        if($pro){
            return Redirect('admdiffusion');
        }
    }

    public function deletcAdmdiffusion($id)
    {
        $res = Diffusion::where('id', '=', $id)->first();
        if (empty($res)) {
            $res = '';
        } else {
            $res = $res->toArray();
        }
        if (!empty($res)) {
            if (file_exists('../storage/app/public/' . $res['path'])) {
                unlink('../storage/app/public/' . $res['path']);
            }
            Diffusion::where('id', '=', $id)->delete();
        }
        return Redirect('admdiffusion');
    }

    public function upAdmdiffusion($id)
    {

        $diffusionup = Diffusion::where('id', '=', $id)->first();
        return view('admin.diffusion.uppage')->withdiffusionup($diffusionup);
    }
    public function upsetAdmdiffusion(Request $request)
    {
        $dataup = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = '../storage/app/public';
            $rule =['jpg','png','gif','jpeg'];
            //进行上传
            $img = Diffusion::upload_img($file,$path,$rule);
            $res = Diffusion::where('id', '=', $dataup['id'])->first();
            if (empty($res)) {
                $res = '';
            } else {
                $res = $res->toArray();
            }
            if (!empty($res)) {
                if (file_exists('../storage/app/public/' . $res['path'])) {
                    unlink('../storage/app/public/' . $res['path']);
                }
            }
        } else {
            $img["name"] = $dataup['body_pic_back'];
        }

        $ress = Diffusion::where('id', '=', $dataup['id'])->update(['name' => $dataup['name'],'url' => $dataup['url'], 'title' => $dataup['title'],'path' =>  $img["name"],'type' => $dataup["type"]] );
        if($ress){
            return Redirect('admdiffusion');
        }
    }

    public function statusAdmdiffusion($id,$status)
    {
        if($status == 'Y'){
            Diffusion::where('id', '=', $id)->update(['status' => 'N']);
        } else if($status == 'N')  {
            Diffusion::where('id', '=', $id)->update(['status' => 'Y']);
        }
        return Redirect('admdiffusion');

    }

    //我们 controllers
    public function admweList()
    {
        $we = We::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.we.page')->withwe($we);


    }

    public function admwenListchax(Request $request)
    {
        $data = $request->all();
        $condition = [];
        if(!empty($data)){
            if(!empty($data['title'])){
                $condition[] = ['name', 'like', '%' . $data['title'] . '%', ];
            }
            if(!empty($data['name'])){
                $condition[] = ['name', 'like', '%' . $data['name'] . '%', ];
            }
            if(!empty($data['type'])){
                $condition[] = ['type', '=', $data['type']];
            }
            if(!empty($data['status'])){
                $condition[] = ['status', '=', $data['status']];
            }
        }

        $we = We::where($condition)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.we.page')->withwe($we);


    }

    public function addAdmwe()
    {
        return view('admin.we.addpage');

    }

    public function createAdmwe(Request $request)
    {
        $data = $request->all();//后期考虑加一个公共方法进行表单数据的全部过滤
        //接收文件信息
        $file = $request->file('file');
        $path = '../storage/app/public';
        $rule =['jpg','png','gif','jpeg'];
        //进行上传
        $img = We::upload_img($file,$path,$rule);
        $pro = new We();
        $pro->title = $data["title"];
        $pro->path = $img["name"];
        $pro->name = $data["name"];
        $pro->url = $data["url"];
        $pro->type = $data["type"];
        $pro->status = 'Y';
        $pro->bf = '';
        $pro->save();
        if($pro){
            return Redirect('admwe');
        }
    }

    public function deletcAdmwe($id)
    {
        $res = We::where('id', '=', $id)->first();
        if (empty($res)) {
            $res = '';
        } else {
            $res = $res->toArray();
        }
        if (!empty($res)) {
            if (file_exists('../storage/app/public/' . $res['path'])) {
                unlink('../storage/app/public/' . $res['path']);
            }
            We::where('id', '=', $id)->delete();
        }
        return Redirect('admwe');
    }

    public function upAdmwe($id)
    {

        $weup = We::where('id', '=', $id)->first();
        return view('admin.we.uppage')->withweup($weup);
    }
    public function upsetAdmwe(Request $request)
    {
        $dataup = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = '../storage/app/public';
            $rule =['jpg','png','gif','jpeg'];
            //进行上传
            $img = We::upload_img($file,$path,$rule);
            $res = We::where('id', '=', $dataup['id'])->first();
            if (empty($res)) {
                $res = '';
            } else {
                $res = $res->toArray();
            }
            if (!empty($res)) {
                if (file_exists('../storage/app/public/' . $res['path'])) {
                    unlink('../storage/app/public/' . $res['path']);
                }
            }
        } else {
            $img["name"] = $dataup['body_pic_back'];
        }

        $ress = We::where('id', '=', $dataup['id'])->update(['name' => $dataup['name'],'url' => $dataup['url'], 'title' => $dataup['title'],'path' =>  $img["name"],'type' => $dataup["type"]] );
        if($ress){
            return Redirect('admwe');
        }
    }

    public function statusAdmwe($id,$status)
    {
        if($status == 'Y'){
            We::where('id', '=', $id)->update(['status' => 'N']);
        } else if($status == 'N')  {
            We::where('id', '=', $id)->update(['status' => 'Y']);
        }
        return Redirect('admwe');

    }

}
