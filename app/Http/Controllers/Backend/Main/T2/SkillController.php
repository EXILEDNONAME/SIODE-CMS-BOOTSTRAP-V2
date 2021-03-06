<?php

namespace App\Http\Controllers\Backend\Main\T2;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class SkillController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/themes-2/skill';
    $this->path = 'pages.backend.main.theme.t2.section.skill';
    $this->model = 'App\Models\Backend\Main\SectionSkill';
    $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return SECTION-SKILL
  **************************************************
  **/

  public function index() {
    $data = $this->model::first();
    $model = $this->model;
    $path = $this->path;
    return view($this->path . '.index', compact('data', 'model', 'path'));
  }

  public function store(Request $request) {
    $store = $request->all();
    $this->model::create($store);
    return redirect($this->url)->with('success', trans('default.notification.success.item-created'));
  }

  public function update(Request $request) {
    $data = $this->model::first();
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', trans('default.notification.success.item-updated'));
  }

}
