<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('called again');
        $employee = employee::all();
        // $employee = employee::with('department')->get();
        return view('employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('called');
        // request()->validate(
        //     [
        //         'empname'=>'required | digits:10',
        //     ]
        //     );
            // dd(request('photo'));
            // if(request('photo'))
            // {
            //     // dd( request('photo')->hashname());
                
            //     Storage::delete('public/employee/photo/'.$emp->photo);
            //     request('photo')->store('public/employee/photo');
            // $photo =  request('photo')->hashname();
            //     dd(request('photo')->hashname());
            // }
            // else{
            //     $photo = $emp->photo;
            // }
            // $emp = new employee();
            // $emp->empname=request('empname');
            // $emp->empnumber=request('empnumber');
            // $emp->empemail=request('empemail');
            // $emp->empaddress=request('empaddress');
            // $emp->empdob=request('empdob');
            // $emp->empqualification=request('empqualification');
            // $emp->empkeyskills=request('empkeyskills');
            // $emp->empstatus=request('empstatus');
            // $emp->empfhname=request('empfhname');
            // $emp->emphisnumber=request('emphisnumber');
            // $emp->empdoj=request('empdoj');
            // $emp->empbranch=request('empbranch');
            // $emp->empfield=request('empfield');
            // $emp->empdpt=request('empdpt');
            // $emp->empposition=request('empposition');
            // $emp->empsalary=request('empsalary');
            // $emp->empin=request('empin');
            // $emp->empout=request('empout');
            // $emp->photo=request('photo')->store('public/employee/photo');
            // $emp->remarks=request('');
        
            $emp=employee::create($request->all());
            // if(request('photo'))
            // {
            //     // dd( request('photo')->hashname());
                
            //     Storage::delete('public/employee/photo/'.$emp->photo);
            //     request('photo')->store('public/employee/photo');
            // $photo =  request('photo')->hashname();
            //     dd(request('photo')->hashname());
            // }
            // else{
            //     $photo = $emp->photo;
            // }
            // $emp->photo=request('photo')->store('public/employee/photo');
        return redirect()->route('employee.index');

        // $emp->photo = request('photo')->hashname();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {

        // dd($employee);
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index')
                        ->with('success','post deleted successfully');
    }
}
