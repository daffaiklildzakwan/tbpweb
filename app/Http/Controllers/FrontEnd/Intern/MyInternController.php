<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;

class MyInternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $internships = Internship::where('student_id', $user_id)->get();
        return view('K03.myinterns.index', compact('internships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($myinterns)
    {
        $user_id = auth()->user()->id;
        $internships = Internship::where('student_id',$user_id)->where('id',$myinterns)->first();
        return view('K03.myinterns.show', compact('internships','myinterns'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($myinterns)
    {
        $internship= Internship::where('id',$myinterns)->first();
        return view('K03.myinterns.upload', compact('myinterns','internship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $myinterns)
    {
        $internship = Internship::find($myinterns);
        if($request->hasFile('file_report_receipt')){
            $folder = 'file_report_receipt';
            $filename = $myinterns . '_'. $folder . '.' . $request->file('file_report_receipt')->getClientOriginalExtension();
            $filepath = $request->file_report_receipt->storeAs($folder,$filename);
            $internship->file_report_receipt = $filename;
            
            notify('success', 'File Successfully Uploaded');
        }
        if($request->hasFile('file_field_grade')){
            $folder = 'file_field_grade';
            $filename = $myinterns . '_'. $folder . '.' . $request->file('file_field_grade')->getClientOriginalExtension();
            $filepath = $request->file_field_grade->storeAs($folder,$filename);
            $internship->file_field_grade = $filename;
            
            notify('success', 'File Successfully Uploaded');
        }
        if($request->hasFile('file_logbook')){
            $folder = 'file_logbook';
            $filename = $myinterns . '_'. $folder . '.' . $request->file('file_logbook')->getClientOriginalExtension();
            $filepath = $request->file_logbook->storeAs($folder,$filename);
            $internship->file_logbook = $filename;
            
            notify('success', 'File Successfully Uploaded');
        }
        if($request->hasFile('file_seminar_attendance')){
            $folder = 'file_seminar_attendance';
            $filename = $myinterns . '_'. $folder . '.' . $request->file('file_seminar_attendance')->getClientOriginalExtension();
            $filepath = $request->file_seminar_attendance->storeAs($folder,$filename);
            $internship->file_seminar_attendance = $filename;
            
            notify('success', 'File Successfully Uploaded');
        }
        if($request->hasFile('file_seminar_off_report')){
            $folder = 'file_seminar_off_report';
            $filename = $myinterns . '_'. $folder . '.' . $request->file('file_seminar_off_report')->getClientOriginalExtension();
            $filepath = $request->file_seminar_off_report->storeAs($folder,$filename);
            $internship->file_seminar_off_report = $filename;
            
            notify('success', 'File Successfully Uploaded');
        }
        if($request->hasFile('file_report')){
            $folder = 'file_report';
            $filename = $myinterns . '_'. $folder . '.' . $request->file('file_report')->getClientOriginalExtension();
            $filepath = $request->file_report->storeAs($folder,$filename);
            $internship->file_report = $filename;
            
            notify('success', 'File Successfully Uploaded');
        }
        if($request->hasFile('file_certificate')){
            $folder = 'file_certificate';
            $filename = $myinterns . '_'. $folder . '.' . $request->file('file_certificate')->getClientOriginalExtension();
            $filepath = $request->file_certificate->storeAs($folder,$filename);
            $internship->file_certificate = $filename;
            
            notify('success', 'File Successfully Uploaded');
        }
        $internship->save();
        return redirect()->route('frontend.myinterns.show', $myinterns);
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
