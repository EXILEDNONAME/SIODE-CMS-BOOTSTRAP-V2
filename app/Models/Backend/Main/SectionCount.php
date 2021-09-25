<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class SectionCount extends Model {

  use LogsActivity;

  protected $table = 'section_counts';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
