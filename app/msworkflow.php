<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class msworkflow extends Model
{
    protected $table = 'msworkflow';
    protected $fillable = ['WFCode','WFName','Version','Status','CreateBy','DateCreated','ModifiedBy','DateModified'];
    protected $primaryKey = 'WFID';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
