<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class StudentController extends Controller
{

public function insert_form(){

return view('home');
}

public function insert(Request $request){

    $name=$request->input('name');
    $email=$request->input('email');
    $phone=$request->input('phone');


    DB::insert("insert into student(name,email,phone) values(?,?,?)",[$name, $email, $phone]);
    return ' <script> window.location.href = "/"; </script>' ;




    }

    public function list(){

       $students=DB::select("select * from student");

       return view('home',['students'=>DB::table('student')->paginate(4)
]);
    }

    public function edit($id){

        $students=DB::select('select * from student where id = ?', [$id]);

        return view('edit',['stud'=>$students]);
     }
     public function delete($id){

      DB::delete('delete from student where id = ?', [$id]);

      return redirect('/');
     }
     public function update(Request $request ,$id){
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $students=DB::update('update student set name=?,email=?,phone=? where id =?', [$name, $email, $phone,$id]);

        return ' <script> window.location.href = "/"; </script>' ;
     }

}
