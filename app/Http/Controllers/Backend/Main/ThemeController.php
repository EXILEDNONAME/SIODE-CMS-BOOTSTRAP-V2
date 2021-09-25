<?php

namespace App\Http\Controllers\Backend\Main;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\Main\Theme\StoreRequest;
use App\Http\Requests\Backend\Main\Theme\UpdateRequest;

class ThemeController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware(['auth', 'administrator']);
    $this->url = '/dashboard/themes';
    $this->path = 'pages.backend.main.theme';
    $this->model = 'App\Models\Backend\Main\Theme';
    $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $model = $this->model;
    if(request()->ajax()) {
      return DataTables::of($this->data)
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . '.index', compact('model'));
  }

  public function show($id) {
    $model = $this->model;
    if ( $id == 1 ) { $data = 'App\Models\Backend\Main\Section'::where('id_theme', 1)->get(); }
    if ( $id == 2 ) { $data = 'App\Models\Backend\Main\Section'::where('id_theme', 2)->get(); }
    if(request()->ajax()) {
      return DataTables::of($data)
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . '.show', compact('data', 'model'));
  }

  public function section_index($id, $slug) {
    $model = $this->model;

    // THEME-1
    if ( $id == 1 ) { $data = 'App\Models\Backend\Main\Section'::where('id_theme', 1)->get(); }

    // THEME-2
    if ( $id == 2 ) {
      $datapath = 'pages.backend.main.theme-2.section';
      if ( $slug == 'about' ) {
        $data = 'App\Models\Backend\Main\SectionAbout'::where('id_theme', 2)->get();
        $path = $datapath . '.about';
        return view('pages.backend.main.theme-2.section.about.index', compact('data', 'model', 'path'));
      }
      if ( $slug == 'count' ) {
        $data = 'App\Models\Backend\Main\SectionCount'::where('id_theme', 2)->get();
        $path = $datapath . '.count';
        return view('pages.backend.main.theme-2.section.count.index', compact('data', 'model', 'path'));
      }
      if ( $slug == 'client') {
        $data = 'App\Models\Backend\Main\SectionClient'::where('id_theme', 2)->get();
        $path = $datapath . 'client';
        if(request()->ajax()) {
          return DataTables::of($data)
          ->rawColumns(['description'])
          ->addIndexColumn()
          ->make(true);
        }
        return view('pages.backend.main.theme-2.section.client.index', compact('data', 'model', 'path'));
      }
    }
  }

  public function section($id, $slug, $categories) {
    if ( $slug == 'client') {
      if ( $categories == 'create' ) {
        $path = 'pages.backend.main.theme-2.section.client';
        $model = 'App\Models\Backend\Main\SectionClient';
        return view($path . '.create', compact('path', 'model'));
      }
      else if ( $categories == 'store' ) {
        $store = $request->all();
        $this->model::create($store);
        return redirect($this->url)->with('success', trans('default.notification.success.item-created'));
      }
      else {
        $data = 'App\Models\Backend\Main\SectionClient'::where('id_theme', 2)->get();
        $path = $datapath . 'client';
        if(request()->ajax()) {
          return DataTables::of($data)
          ->rawColumns(['description'])
          ->addIndexColumn()
          ->make(true);
        }
        return view('pages.backend.main.theme-2.section.client.index', compact('data', 'model', 'path'));
      }
    }
  }

  /**
  **************************************************
  * @return Enable
  * @return Disable
  * @return Status-Done
  * @return Status-Pending
  **************************************************
  **/

  public function enable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 1 ]);
    return Response::json($data);
  }

  public function disable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 2 ]);
    return Response::json($data);
  }

  public function status_done($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 1 ]);
    return Response::json($data);
  }

  public function status_pending($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 2 ]);
    return Response::json($data);
  }

}
