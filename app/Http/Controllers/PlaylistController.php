<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use DataTables;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Playlist();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.playlist.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = $this->model;
        return view('pages.user.playlist.form', compact('model'));
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
            'media' => 'required|string|max:191|unique:playlists,media',
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
        return view('pages.user.playlist.show', compact('model'));
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
        return view('pages.user.playlist.form', compact('model'));
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
            'media' => 'required|string|max:191|unique:playlists,media,' . $id,
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
            ->addColumn('video', function ($model) {
                return '<video src="' . $model->media  . '" height="100" controls></video>';
            })
            ->addColumn('status', function ($model) {
                return $model->status == 1 ? 'Ya' : 'Tidak';
            })
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('user.playlist.show', $model->id),
                    'url_edit' => route('user.playlist.edit', $model->id),
                    'url_destroy' => route('user.playlist.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'status', 'video'])->make(true);
    }
}
