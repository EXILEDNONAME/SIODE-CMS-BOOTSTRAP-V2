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
    $this->url = '/dashboard/sections/skill';
    $this->path = 'pages.backend.main.theme-2.section';
    $this->model = 'App\Models\Backend\Main\T2\Skill';
    $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return SECTION-SKILL
  **************************************************
  **/

  public function index() {
    if ( Auth::User()->id_theme == 1 ) {
      $data = $this->model::first();
      $path = $this->path . '.about';
      return view($this->path . '.skill.index', compact('data', 'path'));
    }
    else { return redirect('dashboard/sections'); }
  }

  public function store(Request $request) {
    if ( Auth::User()->id_theme == 1 ) {
      $store = $request->all();
      $this->model::create($store);
      return redirect($this->url)->with('success', trans('default.notification.success.item-created'));
    }
    else { return redirect('dashboard/sections'); }
  }

  public function update(Request $request) {
    if ( Auth::User()->id_theme == 1 ) {
      $data = $this->model::first();
      $update = $request->all();
      $data->update($update);
      return redirect($this->url)->with('success', trans('default.notification.success.item-updated'));
    }
    else { return redirect('dashboard/sections'); }
  }

}
