<?php

namespace App\Http\Controllers;

use App\Http\Traits\AttachFilesTrait;
use App\models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use AttachFilesTrait;
    public function index()
    {

        $collection = Setting::all();
        $setting['setting'] = $collection->flatMap(function ($collection)
        {
        
            return[$collection -> key => $collection -> value]; 
        
        });

          return view('setting.index', $setting);
    }
    public function update(Request $request){ 

        try{
        
             $info = $request -> except('_token','_logo','_method');

                if ($request -> hasFile('logo')) 
                {

                    $logo = $request -> file('logo') -> getClientOriginalName();
                    Setting::where('key','logo') -> update(['value', $logo]);

                }
            
             $key = array_keys($info);
             $value = array_values($info); 

                for ($i=0; $i <count($info) ; $i++) 
                { 
                
                    Setting::where('key',$key[$i])->update(['value', $value[$i]]);
                    $this->uploadFile($request,'logo','logo');
                
                }

            return redirect()->route('setting.index');

    
        }catch(\Exception $e){
            
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        
    
    }
}
