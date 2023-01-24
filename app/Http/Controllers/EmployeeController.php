<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    // data insert using query builder and receive value from route
    public function insert($name, $age,$city, $dep, $salary)
    {
        $data = [
            // db_col_name => value
            'name' => $name,
            'age' => $age,
            'city'=>$city,
            'department' => $dep,
            'salary' => $salary
        ];

        DB::table('employees')->insert($data);

        //Redirecting To Named Routes
        return redirect()->route('getEmployees');

        //Redirecting To Direct Routes
        //return redirect('view');
    }

    // view single employee data
    public function eachselect($id)
    {
        $data['employee'] = DB::table('employees')->where('id', $id)->first();
        //dd($data);
        if($data['employee'] == null){
            echo 'Employee not found';
        }else{
            return view('employee', $data);
        }
        
    }

    // view all employee data
    public function select()
    {
        //using compact() pass the data
        //$data = DB::table('employees')->get();
        //return view('employees', compact('data'));

        //using named array pass the data and using JOIN
        $data['employees'] = DB::table('employees AS e')
            ->join('cities AS c','e.city', '=', 'c.cid')
            ->select('e.*','c.cityname')
            ->orderBy('e.id', 'desc')
            ->get();
        //dd($data['employees']);
        return view('employees', $data);
    }

    public function update($id, $name)
    {
        $data = [
            'name' => $name
        ];

        $affected = DB::table('employees')
            ->where('id', $id)
            ->update($data);
        if($affected){
            //return to employee.blade.php view file using redirect with named route and parameters 
            return redirect()->route('getByID', [ 'id' => $id]);
        }else{
            echo 'Wrong ID number';
        }
        
    }

    public function delete($id){
        $deleted = DB::table('employees')->where('id', $id)->delete();
        //dd($deleted);
        if($deleted){
            return redirect('view');
        }else{
            echo 'Employee not found';
        }
    }

    public function city(){
        $data = DB::table('cities')->get();
        return view('city', compact('data'));
    }

    public function insertCity($cname){
        $data =[
            'cityname'=>$cname
        ];

        DB::table('cities')->insert($data);
        //echo $cname;
        //Redirecting To Named Routes
        
        return redirect()->route('getEmployees');
    }
}
