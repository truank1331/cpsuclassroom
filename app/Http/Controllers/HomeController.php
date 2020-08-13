<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth:web','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stdid = Auth::user()->studentid;
        //$query = DB::select('select * from score where studentid =?',array($stdid));
        $query = DB::select('SELECT score.SubjectID,courseinfo.EngName ,score.StudentID,scoreinfo.Info, score.Point,
                                (SELECT SUM(score.Point) FROM score WHERE score.SubjectID = courseinfo.SubjectID) 
                                AS Total FROM ((score INNER JOIN courseinfo ON score.SubjectID = courseinfo.SubjectID) 
                                INNER JOIN scoreinfo ON score.SubjectID = scoreinfo.SubjectID) 
                                WHERE score.id=scoreinfo.id and studentid=?',array($stdid));
        //dd($query);
        return view('home',['data'=>$query,'count'=>count($query)]);
    }
}
