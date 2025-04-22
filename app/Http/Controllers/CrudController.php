<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Crud::paginate(10);
        return view('show', compact('users'));
        // return view('show',['data'=>$users]);

        // for palticular data]
            // $user = Crud::find(1);
            // $user = Crud::find(1, ['name', 'email']);
            // $user = Crud::find([1,2], ['name', 'email']);
        // count
            // $user = Crud::count();
        // min
            // $user = Crud::min('id');
        // max
            // $user = Crud::max('id');
        // sum
            // $user = Crud::sum('id');
        // where method
        // $user = Crud::where('id', 1)->get();
            // $user = Crud::where('id', 1)->where('age',22)->get();
            // $user = Crud::where('id', 1)->orWhere('age', 23)->get();
            // $user = Crud::whereIn('id', [1, 2, 3])->get();
            // $user = Crud::whereNotIn('id', [1, 2, 3])->get();
            // $user = Crud::whereBetween('id', [1, 3])->get();
            // $user = Crud::whereNotBetween('id', [1, 3])->get();
        // return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       
        // validaton
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'city' => 'required|alpha',
            'age' => 'required|integer',
        ]);
        
        $user = new Crud();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->save();
        // mass assignment
            // $user = Crud::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'city' => $request->city,
            //     'age' => $request->age,
            // ]);
        return redirect()->route('crud.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crud $crud)
    {
        $user = Crud::find($crud->id);
        return view('single', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     * read data
     */
    public function edit(Crud $crud)
    {
        $user = Crud::find($crud->id);
        return view('update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crud $crud)
    {
        // validaton
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'city' => 'required|alpha',
            'age' => 'required|integer',
        ]);
        
        $user = Crud::find($crud->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->save();

        // mass assignment
            // $user = Crud::find($crud->id);
            // $user->update([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'city' => $request->city,
            //     'age' => $request->age,
            // ]);
        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crud $crud)
    {
        $user = Crud::find($crud->id);
        $user->delete();
        // mass assignment
            // Crud::destroy($crud->id);
            // Crud::destroy([1, 2, 3]);
        return redirect()->route('crud.index');
    }
}
