<?php

namespace App\Http\Controllers;

use App\Models\RunningText;
use DataTables;
use Illuminate\Http\Request;

class RuntextController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new RunningText();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.runtext.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = $this->model;
        return view('pages.user.runtext.form', compact('model'));
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
            'content' => 'required|string|unique:running_texts,content',
            'status' => 'required'
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
        return view('pages.user.runtext.show', compact('model'));
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
        return view('pages.user.runtext.form', compact('model'));
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
            'content' => 'required|string|unique:running_texts,content,' . $id,
            'status' => 'required'
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
            ->addColumn('content', function ($model) {
                return str_limit($model->content, 50);
            })
            ->addColumn('status', function ($model) {
                return $model->status == 1 ? 'Ya' : 'Tidak';
            })
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('user.runtext.show', $model->id),
                    'url_edit' => route('user.runtext.edit', $model->id),
                    'url_destroy' => route('user.runtext.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'status', 'content'])->make(true);
    }
}
