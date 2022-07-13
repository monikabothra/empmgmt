<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\work;
use App\department;
class workcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work = work::with('department')->get();
        return view('work.index',compact('work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dept = department::all();

        // $work = work::with($dept)->get()->pluck('name', 'id');
        // dd($dept);
        return view('work.create',compact('dept'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        
        work::create($request->all());
        // dd($request->all());
        return redirect()->route('work.index')->with('success','work created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {
        $dept = department::all();
        return view('work.edit',compact('work','dept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, work $work)
    {
        $request->validate([
            'workname' => 'required',
            
        ]);

        $work->update($request->all());

        return redirect()->route('work.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(work $work)
    {
        $work->delete();

        return redirect()->route('work.index')
                        ->with('success','post deleted successfully');
    }
}
