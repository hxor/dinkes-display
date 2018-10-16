<?php

namespace App\Http\Controllers;

use App\Models\Graha;
use App\Models\Schedule;
use DataTables;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Schedule();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.schedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = $this->model;
        $graha = Graha::pluck('title', 'id')->all();
        return view('pages.user.schedule.form', compact('model', 'graha'));
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
            'title' => 'required|string|max:191',
            'desc' => 'required|min:3',
            'date_start' => 'required',
            'clock_start' => 'required',
            'date_end' => 'required',
            'clock_end' => 'required'
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
        return view('pages.user.schedule.show', compact('model'));
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
        $graha = Graha::pluck('title', 'id')->all();
        return view('pages.user.schedule.form', compact('model', 'graha'));
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
            'title' => 'required|string|max:191',
            'desc' => 'required|min:3',
            'date_start' => 'required',
            'clock_start' => 'required',
            'date_end' => 'required',
            'clock_end' => 'required'
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
        $model = $this->model->with('graha');
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('user.schedule.show', $model->id),
                    'url_edit' => route('user.schedule.edit', $model->id),
                    'url_destroy' => route('user.schedule.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
