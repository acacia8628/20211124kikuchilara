<?php

namespace App\Http\Controllers;

use App\Models\Share;
use App\Models\User;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Share::with(['user:id,name'])->get();
        return response()->json([
            'data' => $items
        ],200);
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
        $user = User::all()->where('uid','=',$uid)->first();
        $item = Share::create([
            'share' => $request->share,
            'user_id' => $user->id,
        ]);
        return response()->json([
            'data' => $item
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function show(Share $share)
    {
        $item = Share::find($share);
        if($item){
            return response()->json([
                'data' => $item
            ],200);
        } else {
            return response()->json([
                'share' => 'Not found',
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Share $share)
    {
        $update = [
            'share' => $request->share,
        ];
        $item = Share::where('id',$share->id)->update($update);
        if($item){
            return response()->json([
                'share' => 'Updated successfully',
            ],200);
        } else {
            return response()->json([
                'share' => 'Not found'
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function destroy(Share $share)
    {
        $item = Share::where('id',$share->id)->delete();
        if($item){
            return response()->json([
                'share' => 'Deleted successfully',
            ],200);
        } else {
            return response()->json([
                'share' => 'Not found',
            ],404);
        }
    }
}
