<?php

namespace App\Http\Controllers;

use App\Models\Graha;
use DataTables;
use Illuminate\Http\Request;

class GrahaController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Graha();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.graha.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = $this->model;
        return view('pages.admin.graha.form', compact('model'));
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
            'title' => 'required|string|max:191|unique:graha,title'
        ]);

        $model = $this->model->create($request->all());
        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = $this->model->findOrFail($id);
        return view('pages.admin.graha.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = $this->model->findOrFail($id);
        return view('pages.admin.graha.form', compact('model'));
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
        $this->validate($request, [
            'title' => 'required|string|max:191|unique:graha,title,' . $id,
        ]);

        $model = $this->model->findOrFail($id);
        $model->update($request->all());
        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = $this->model->query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.graha.show', $model->id),
                    'url_edit' => route('admin.graha.edit', $model->id),
                    'url_destroy' => route('admin.graha.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
