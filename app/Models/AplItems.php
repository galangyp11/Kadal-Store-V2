<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AplItems extends Model
{ 
    protected $table = 'aplitems';
    public function Apl() {
        return $this->belongsTo(Apl::class, "id_apl", "id");
    }
}
