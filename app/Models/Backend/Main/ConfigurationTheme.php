<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Theme;

class ConfigurationTheme extends Model {

  use LogsActivity;

  protected $table = 'configuration_themes';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function themes(){
    return $this->belongsTo(Theme::class, 'id_theme');
  }

}
