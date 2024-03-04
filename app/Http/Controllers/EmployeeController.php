<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
            $employees=DB::table('employees')->simplePaginate(4);
             return view("view",['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
  employee::create([
            'name'->$request->name,
            'age'->$request->age,
            'email'->$request->email,
            'city'->$request->city,
            'department'->$request->department,
        ]);
        // return response()->json()
    }

    public function updatePage($id){
        $employee=DB::table('employees')->find($id);
         return view("update",['employee'=>$employee]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validate=$request->validate([
                'name'=>'required',
                'age'=>'required|numeric|between:15,30', 
                'email'=>'required|email',
                'city'=>'required',
                'department'=>'required'
             ]);
             if($validate){
                    $user=DB::table('employees')->insert([
                        'name'=>$request->name,
                        'age'=>$request->age,
                        'email'=>$request->email,
                        'city'=>$request->email,
                        'department'=>$request->department,
                     ]);
                   if($user){
                        echo"<script>alert('suceesfull data submit')</script>";
                   }
                   else{
                        echo"<script>alert('email already exist')</script>";
                   } 
                }
                     
                
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  singleData($id)
    {
        $employee=DB::table('employees')->where('id',$id)->get();
         return  view("single",['employee'=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validate=$request->validate([
            'name'=>'required',
            'age'=>'required|numeric|between:15,30', 
            'email'=>'required|email',
            'city'=>'required',
            'department'=>'required'
         ]);
         
          if($validate){
            $status= DB::table('employees')->where('id',$id)->update([
                'name'=>$request->name,
                'age'=>$request->age,
                'email'=>$request->email,
                'city'=>$request->email,
                'department'=>$request->department,
            ]);
             return redirect("/");
          }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=DB::table('employees')->where('id',$id)->delete();
       if($employee){
         return redirect("/");
       }
       else{
        return "<script>alrert('something error')</script>"; 
       }
    }
}
