<?php

namespace App\Http\Controllers;

use App\Models\Share;
use App\Models\User;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uid = $request->input('uid');
        $id = $request->input('id');

        $user = User::all()->where('uid','=',$uid)->first();
        $share = Share::all()->where('id','=',$id)->first();

        $item = Like::create([
            'user_id' => $user->id,
            'share_id' => $share->id,
        ]);
        return response()->json([
            'data' => $item
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Like $like)
    {
        $uid = $request->input('uid');
        //$id = $request->input('id');

        $user = User::all()->where('uid','=',$uid)->first();
        //$share = Share::all()->where('id','=',$id)->first();

        $item = Like::where('user_id',$user->id)->where('share_id',$share->id)->first();
        $item->delete();
        if($item){
            return response()->json([
                'user_id' => 'Deleted successfully',
            ],200);
        } else {
            return response()->json([
                'user_id' => 'Not found',
            ],404);
        }
    }
}
