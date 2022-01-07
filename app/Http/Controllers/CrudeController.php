<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crude;

class CrudeController extends Controller
{

    public function page()
    {
        $view=Crude::get();
        return view('view',compact('view'));
    }
    public function view()
    {
        
        return view('practice');
    }
    public function store(Request $request)
    {
        $view=new Crude();

        $view->name=$request->input('name');
        $view->password=$request->input('password');
        $arrayTostring =  implode(",", $request->input('hobby'));
        $view['hobby'] = $arrayTostring;
        $view->gender=$request->input('gender');
        $view->city=$request->input('city');

        $view->save();
        return redirect()->route('page.view');
    }
   public function edit(Request $request ,$id)
    {
        $view=Crude::where('id',$id)->first();
        
        return view('update',compact('view'));
    }

    public function update(Request $request)
    {
 
       $view =Crude::find($request->id);
        $view->name =$request->input('name');
        $view->password =$request->input('password');      
       $arrayTostring =  implode(",", $request->input('hobby'));
        $view['hobby'] = $arrayTostring;
        $view->gender=$request->input('gender');
        $view->city=$request->input('city');
        
        
        {
            $id = $request->id;
            $update = [  
            'name'=>$request->name,
            'password'=>$request->password,
            'hobby'=>$request->hobby,
            'gender'=>$request->gender,
            'city'=>$request->city,
           
        
     ];
        Crude::where('id', $id)->update($update);
        return redirect()->route('page.view')->with('success', 'Contact Updated Successfully!');

          
        }
        $view->save();
        return redirect()->route('page.view')->with('success', 'Contact Updated Successfully!');
    }

    public function delete($id) 
       {
          $view = Crude::where('id', $id)->firstorfail()->delete();
          return redirect()->route('page.view');
       }
    
    
}
