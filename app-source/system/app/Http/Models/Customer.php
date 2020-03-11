<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public $table = "M_得意先マスター";

    protected $primaryKey = "得意先コード";

    public $incrementing = false;

    public function estimate_header()
    {
        return $this->hasMany(EstimateHeader::class, "得意先コード", "得意先コード");
    }
}
