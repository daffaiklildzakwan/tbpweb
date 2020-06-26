<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\InternshipLogbook;
use Illuminate\Support\Facades\Gate;

class MyInternLogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($myinterns)
    {
        $logbooks = InternshipLogbook::where('internship_id',$myinterns)->orderBy('date','ASC')->get();
        return view('K03.logbooks.index', compact('logbooks','myinterns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($myinterns)
    {   
        return view('K03.logbooks.create', compact('myinterns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($myinterns,Request $request)
    {
        
        $this->validate($request, Internshiplogbook::$validation_rules,Internshiplogbook::$validation_message);

        $internshiplogbook = Internshiplogbook::create([
            'internship_id' => $myinterns,
            'date' => request('date'),
            'activity' => request('activity'),
        ]);

        notify('success', 'Berhasil menambahkan logbook');
        return redirect()->route('frontend.myinterns.logbooks.index', $myinterns);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($myinterns,$logbooks)
    {
        $logbooks = InternshipLogbook::where('internship_id',$myinterns)->where('id',$logbooks)->first();
        return view('K03.logbooks.show', compact('logbooks','myinterns','logbooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($myinterns,$logbook)
    {
        $logbooks = InternshipLogbook::where('internship_id',$myinterns)->where('id',$logbook)->first();
        return view('K03.logbooks.edit', compact('logbooks','myinterns'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $myinterns, Request $request, $logbooks)
    {
        $request->validate(
            ['date' => 'required|date|unique:internship_logbooks,date,'.$logbooks,
            'activity' => 'required'],
        InternshipLogbook::$validation_message);

        if(InternshipLogbook::where('id',$logbooks)->update($request->only('date','activity')))
        {
            notify('success', 'Berhasil merubah logbook');
        }else{
            notify('error', 'Gagal merubah logbook');
        }
        return redirect()->route('frontend.myinterns.logbooks.index', $myinterns);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
