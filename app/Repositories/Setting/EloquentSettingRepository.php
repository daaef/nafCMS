<?php
namespace App\Repositories\Setting;
use App\Repositories\Setting\SettingContract;
use App\Setting;
class EloquentSettingRepository implements SettingContract {
    //
    public function getAll(){
        $setting = Setting::all();
        return $setting;
    }

    public function create($request){

      
        $data = [
            'site_logo' => $request->site_logo,
            'site_title' => $request->site_title,
            'site_description' => $request->site_description,
            'footer_copywrite' => $request->footer_copywrite,
            'footer_facebook' => $request->footer_facebook,
            'footer_twitter' => $request->footer_twitter,
            'footer_instagram' => $request->footer_instagram,
        ];

        $setting = Setting::create($data);
        return $setting;

    }

    public function find($id){
        $setting = Setting::whereId($id)->first();
        return $setting;
    }

    public function edit($id){
        $setting = Setting::whereId($id)->first();
        return $setting;
    }

    public function update($id, $request){
        $setting = Setting::findOrFail($id);
        $setting->site_logo = $request->site_logo;
        $setting->site_title = $request->site_title;
        $setting->site_description = $request->site_description;
        $setting->footer_copywrite = $request->footer_copywrite;
        $setting->footer_facebook = $request->footer_facebook;
        $setting->footer_twitter = $request->footer_twitter;
        $setting->footer_instagram = $request->footer_instagram;
        return $setting;
    }

    public function delete($id){

        $setting  = Setting::findOrFail($id);
        return $setting->delete();  
    }
}
