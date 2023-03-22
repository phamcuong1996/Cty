<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Production;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\CreateRequest;
use App\Http\Controllers\MySingletoninterface;

class ProductionController extends Controller
{
    protected $MySingletoninterface;

    public function __construct(MySingletoninterface $MySingletoninterface)
    {
        $this->MySingletoninterface = $MySingletoninterface;
    }
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(Request $request)
    {
        $this->MySingletoninterface->compareTime(1, 2);
        dd($this->MySingletoninterface->compareTime(1, 2));

        $productions = Production::all();



        return view('productions.index', compact('productions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('productions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(CreateRequest $request)
    {
        // khai bao validate
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'required|string|max:255',
                'price' => 'required|numeric',
                'manufacturing_company' => 'required|string|max:255',
            ]
        );
        // khi validate thi gui messeger ve
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        Production::create($data);

        return redirect()->route('production.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //adadadadad
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit($id)
    {
        $productions = Production::find($id);

        return view('productions.edit', compact('productions'));
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
        $data = $request->all();
        $productions = Production::find($id);
        $productions->update($data);

        return redirect()->route('productions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('admin.categories.index');
    }
}