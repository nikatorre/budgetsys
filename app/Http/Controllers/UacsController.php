<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uacs;

class UacsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uacs = Uacs::all();
        return view('uacs.index')->with('uacs', $uacs);
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
        $this->validate($request, [
            'name_uacs' => 'required',
            'code_uacs' => 'required',
        ]);

        $new_name = $request->input('name_uacs');
        $new_code = $request->input('code_uacs');

        $find_name = Uacs::where('name_uacs', $new_name)->get();
        $find_code = Uacs::where('code_uacs', $new_code)->get();

        if (($find_name->count() === 1) || ($find_code->count() === 1)) {
            return redirect('/uacs')->with('error', 'Code already exists.');
        } else {
            $uacs = new Uacs;
            $uacs->name_uacs = $new_name;
            $uacs->code_uacs = $new_code;
            $uacs->save();

            return redirect('/uacs')->with('success', 'Code successfully added.');
        }
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
