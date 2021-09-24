<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Theme;

class Section extends Model {

  use LogsActivity;

  protected $table = 'sections';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function themes(){
    return $this->belongsTo(Theme::class, 'id_theme');
  }

}
