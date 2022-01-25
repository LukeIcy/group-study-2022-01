<?php

namespace App\Http\Controllers;

use App\Apply;
use App\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applyDatas = Apply::get();
        return view('admin.apply', compact('applyDatas'));
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

    // 送出申請單
    public function store($id,Request $request)
    {
        // $userApply = $request->all();
        // Apply::create($userApply);

        $animal = Animal::find($id);
        $user = Auth::user();
        Apply::create([
            // 'user_id' => $request->user()->id,
            // 'user_id' => $user->id,
            'user_id' => Auth::id(),
            'animal_id' => $animal->id,
            'contract' => $request->contract,
            'age' => $request->age,
            'name' => $request->name,
            'phone' => $request->phone,
            'line' => $request->line,
            'fbName' => $request->fbName,
            'address' => $request->address,
            'myself' => $request->myself,
            'situation' => '申請中',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        
        // return redirect('/admin');
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
