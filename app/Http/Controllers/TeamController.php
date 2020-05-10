<?php

namespace App\Http\Controllers;

use App\Record;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use TeamsTableSeeder;

class TeamController extends Controller
{
    public function __construct()
    {
        // TeamPolicyに従って、アクセス制御をしている
        $this->authorizeResource(Team::class, 'team');

        $this->middleware("setteams");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user();
        // $id = $user->id;
        // $teams = Team::all()->where("user_id", $id);
        // return view('team', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return null;
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
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        view()->share('teamname', $team->name);

        $records = $team->records;

        // 試合数
        $count = $records->count();

        // 通算得点
        $pointsum1 = $records->sum("point1");
        $pointsum2 = $records->sum("point2");
        $pointsum3 = $records->sum("point3");
        $pointsum4 = $records->sum("point4");

        $member1 = [
            'name'     => $team->member1,
            'count'    => $records->count("member1"), 
            'pointsum' => $records->sum("point1"),
            'rank'    => 
            $records->where("rank1", 1)->count() . "-" . 
            $records->where("rank1", 2)->count() . "-" .
            $records->where("rank1", 3)->count() . "-" .
            $records->where("rank1", 4)->count(),
        ];

        $member2 = [
            'name'     => $team->member2,
            'count'    => $records->count("member2"), 
            'pointsum' => $records->sum("point2"),
            'rank'    => 
            $records->where("rank2", 1)->count() . "-" . 
            $records->where("rank2", 2)->count() . "-" .
            $records->where("rank2", 3)->count() . "-" .
            $records->where("rank2", 4)->count(),
        ];

        $member3 = [
            'name'     => $team->member3,
            'count'    => $records->count("member3"), 
            'pointsum' => $records->sum("point3"),
            'rank'    => 
            $records->where("rank3", 1)->count() . "-" . 
            $records->where("rank3", 2)->count() . "-" .
            $records->where("rank3", 3)->count() . "-" .
            $records->where("rank3", 4)->count(),
        ];

        $member4 = [
            'name'     => $team->member4,
            'count'    => $records->count("member4"), 
            'pointsum' => $records->sum("point4"),
            'rank'    => 
            $records->where("rank4", 1)->count() . "-" . 
            $records->where("rank4", 2)->count() . "-" .
            $records->where("rank4", 3)->count() . "-" .
            $records->where("rank4", 4)->count(),
        ];

        $members = [$member1, $member2, $member3, $member4];
        return view('team', ["members" => $members]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return $team;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
    }
}
