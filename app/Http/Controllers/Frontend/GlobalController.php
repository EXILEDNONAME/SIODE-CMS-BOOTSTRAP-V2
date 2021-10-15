<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;

class GlobalController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->url = '/dashboard/configuration';
    $this->path = 'pages.frontend';
    $this->theme = 'App\Models\Backend\Main\Theme';
    $this->section = 'App\Models\Backend\Main\Section';
    $this->general = 'App\Models\Backend\Main\General';
    $this->modelSectionAbout = 'App\Models\Backend\Main\SectionAbout';
    $this->modelSectionClient = 'App\Models\Backend\Main\SectionClient';
    $this->modelSectionCount = 'App\Models\Backend\Main\SectionCount';
    $this->modelSectionPricing = 'App\Models\Backend\Main\SectionPricing';
    $this->modelSectionService = 'App\Models\Backend\Main\SectionService';
    $this->modelSectionTeam = 'App\Models\Backend\Main\SectionTeam';
    $this->modelSectionTestimonial = 'App\Models\Backend\Main\SectionTestimonial';
    $this->modelSectionContact = 'App\Models\Backend\Main\SectionContact';
    $this->modelSectionFeature = 'App\Models\Backend\Main\SectionFeature';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {

    $theme = $this->theme::where('active', 1)->first();
    $about = $this->modelSectionAbout::first();
    $contactus = $this->modelSectionContact::first();
    $team = $this->modelSectionTeam::where('active', 1)->get();

    if (!empty($theme->id) && $theme->id == 2 ) {
      $general = $this->general::first();
      $section_main = $this->section::where(['active' => 1])->orderBy('sort', 'asc')->get();
      $section_menu = $this->section::where(['active' => 1])->get();
      $client = $this->modelSectionClient::where('active', 1)->get();
      $count = $this->modelSectionCount::first();
      $pricing = $this->modelSectionPricing::where('active', 1)->get();
      $service = $this->modelSectionService::where('active', 1)->get();
      $testimonial = $this->modelSectionTestimonial::get();
      return view($this->path . '.theme.t2.index', compact('section_main', 'section_menu', 'general', 'about', 'client', 'count', 'pricing', 'service', 'team', 'testimonial', 'contactus'))->render();
    }

    else if (!empty($theme->id) && $theme->id == 3 ) {
      $general = $this->general::first();
      $section_main = $this->section::where(['id_theme' => 3, 'active' => 1])->get();
      $section_menu = $this->section::where(['id_theme' => 3, 'active' => 1])->get();
      return view($this->path . '.theme.t3.index', compact('section_main', 'section_menu', 'general', 'about', 'contactus', 'team'))->render();
    }

    else if (!empty($theme->id) && $theme->id == 4 ) {
      $general = $this->general::first();
      $section_main = $this->section::where(['id_theme' => 4, 'active' => 1])->get();
      $section_menu = $this->section::where(['id_theme' => 4, 'active' => 1])->get();
      return view($this->path . '.theme.t4.index', compact('section_main', 'section_menu', 'general'))->render();
    }

    else { return view($this->path . '.theme.index')->render(); }



  }

}
