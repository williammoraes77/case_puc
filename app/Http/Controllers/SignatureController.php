<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Signature;
use App\Models\School;
use App\Models\Course;
use App\Models\Log;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class SignatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $signature_pending = Signature::where('status', 0)->count();
        $signature_signed = Signature::where('status', 1)->count();
        return view('admin.home', compact('signature_pending', 'signature_signed'));
    }

    public function dashboard()
    {

        $schools = School::all();

        $schools_array = [];
        foreach($schools as $item){
            $signature_array[$item->name]['pending'] = [];
        }
        // dd($signature_array);

        foreach($schools as $school){
            $signatures_total = Signature::where('school_id', $school->id)->count();
            $signatures_pending = Signature::where('status', 0)->where('school_id', $school->id)->count();
            $signatures_signed = Signature::where('status', 1)->where('school_id', $school->id)->count();
            // array_push($signature_array[$school->name]['pending'], $signatures);

            $signature_array[$school->name]['name'] = $school->name;
            $signature_array[$school->name]['total'] = $signatures_total;
            $signature_array[$school->name]['pending'] = $signatures_pending;
            $signature_array[$school->name]['signed'] = $signatures_signed;

        }

        return view('admin.dashboard', compact('schools', 'signature_array'));
    }

    public function dashboardPerSchool($id)
    {

        $courses = Course::where('school_id', $id)->get();
        $title = School::find($id)->name;
        $signature_array = [];

        $teste;
        foreach($courses as $item){
            $signature_array[$item->name]['pending'] = [];
        }

        foreach($courses as $course){
            $signatures_total = Signature::where('school_id', $course->school_id)->where('course_id', $course->id)->count();
            $signatures_pending = Signature::where('status', 0)->where('school_id', $course->school_id)->where('course_id', $course->id)->count();
            $signatures_signed = Signature::where('status', 1)->where('school_id', $course->school_id)->where('course_id', $course->id)->count();
            // dd($signatures_signed);
            $signature_array[$course->name]['name'] = $course->name;
            $signature_array[$course->name]['total'] = $signatures_total;
            $signature_array[$course->name]['pending'] = $signatures_pending;
            $signature_array[$course->name]['signed'] = $signatures_signed;

        }

        return view('admin.dashboard_school', compact('title', 'courses', 'signature_array'));
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
     * @param  \App\Models\Signature  $signature
     * @return \Illuminate\Http\Response
     */
    public function show(Signature $signature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Signature  $signature
     * @return \Illuminate\Http\Response
     */
    public function edit(Signature $signature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Signature  $signature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signature $signature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Signature  $signature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signature $signature)
    {
        //
    }

    public function findDocument(Request $request)
    {

        $is_cpf = $request->document_number;

        if(is_numeric($is_cpf)){
            $signatures = Signature::where('student_document', $request->document_number)->get();
            $signatures_pending = Signature::where('student_document', $request->document_number)->where('status', 0)->get();
            $signatures_amount = Signature::where('student_document', $request->document_number)->where('status', 0)->count();
        }else{
            $signatures = Signature::where('student_name', $request->document_number)->get();
            $signatures_pending = Signature::where('student_name', $request->document_number)->where('status', 0)->get();
            $signatures_amount = Signature::where('student_name', $request->document_number)->where('status', 0)->count();
        }


        if(!isset($signatures[0])){
            return redirect()->back()->with('danger', 'CPF não possui documentos pendentes!');
        }

        // dd($signatures_amount);
        return view('admin.signatures', compact('signatures', 'signatures_amount', 'signatures_pending'));
    }

    public function checkPending(Request $request)
    {

        if(!$request->itens){
            return redirect()->back();
            return View::make('admin.search')->with('danger', 'CPF não possui documentos pendentes!');
            return redirect()->back()->with('danger', 'Nenhum documento selecionado!');
        }
        $signatures = Signature::whereIn('id', $request->itens)->get();
        $ids = [];
        foreach($signatures as $signature){
            array_push($ids, $signature->id);
        }
        // $teste = $request->itens;
        // dd($ids);
        return view('admin.send_email', compact('signatures', 'ids'));
    }

    public function sendEmail(Request $request)
    {
        if( !$request->email ||  $request->email == ''){

            return redirect('/search')->with('danger', 'Erro por falta de cadastro de email');;

        }

        if(!$request->sigs || !$request->email){
            return redirect()->back();
            return View::make('admin.search')->with('danger', 'CPF não possui documentos pendentes!');
            return redirect()->back()->with('danger', 'Nenhum documento selecionado!');
        }

        Signature::whereIn('id', $request->sigs)->update([
            'status' => 1,
            'student_email' => $request->email,
        ]);

        $sigs = Signature::whereIn('id', $request->sigs)->get();

        foreach($sigs as $sig){
            Log::create([
                'user_id' => Auth::id(),
                'signature_id' => $sig->id,
                'student_email' => $request->email
            ]);
        }




        $signatures = Signature::whereIn('id', $request->sigs)->get();
        $signatures_count = Signature::whereIn('id', $request->sigs)->count();
        $email = $request->email;

          // FUNCAO ENVIAR EMAIL
        foreach($signatures as $item){

            try {
                Mail::to($email)->send(new SendMail($item->student_name, $item->course->name));
            } catch (\Exception $e) {
                // Get error here
            }
        }



        return view('admin.signature_success', compact('signatures', 'signatures_count', 'email'));
    }
}
