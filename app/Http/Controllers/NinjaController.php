<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NinjaController extends Controller
{
    // this for authenticating all created pages to only be accessed on login
    // public function __construct(){
    //     $this->middleware("auth");
    // }
    public function index()
    {
        $ninjas = Ninja::all();
        // $ninjas = ninja::orderBy('level','asc')->get();
        // $ninjas = ninja::where('name','tanjiro')->get();
        // $ninjas=ninja::latest()->get();
        return view('index', [
            'ninjas' => $ninjas
        ]);
    }
    public function create()
    {
        return view('create');
    }

    public function store()
    {
        // error_log(request('name'));

        $ninja = new Ninja();

        $ninja->name = request('name');
        $ninja->form = request('form');
        $ninja->level = request('level');
        $ninja->attire = request('attire');


        // error_log($from);

        $ninja->save();

        return redirect('/slayer')->with('msg', 'we got a new demon slayer.');
    }
    public function show($id)
    {
        $ninja = Ninja::findOrFail($id);
        return view('show', ['ninja' => $ninja]);
    }
    public function destroy($id)
    {
        $ninja = Ninja::findOrFail($id);
        $ninja->delete();
        return redirect('/slayer')->with('msg', 'A demon slayer was removed.');
    }
    public function edit($id)
    {
        $ninja = Ninja::find($id);
        return view('edit', compact('ninja'));
    }
    // edit this code to make a the edit fxnality
    public function update(Request $request, $id)
{
    $ninja = Ninja::find($id);
    $ninja->name = $request->input('name');
    $ninja->form = $request->input('form');
    $ninja->level = $request->input('level');
    $ninja->attire = $request->input('attire');


    // $ninja->name = request('name');
    // $ninja->form = request('form');
    // $ninja->level = request('level');
    // $ninja->attire = request('attire');
    
    $ninja->save();
    return redirect('/slayer')->with('success', "X'ter updated successfully");
}
}
