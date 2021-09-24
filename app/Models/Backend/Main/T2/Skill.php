<?php

namespace App\Models\Backend\Main\T2;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Skill extends Model {

  use LogsActivity;

  protected $table = 'themes_2_skills';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
