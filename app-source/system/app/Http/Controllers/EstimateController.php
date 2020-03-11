<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models\EstimateHeader;
use App\Http\Models\Customer;
class EstimateController extends Controller
{



    /**
     * 指定した見積書閲覧画面
     *
     * @param Request $request
     * @param string $estimateNumber
     * @param string $estimateCode
     * @return void
     */
    public function index(Request $request, string $estimateNumber, string $estimateCode)
    {
        $model = EstimateHeader::where([
            ["請求書番号", $estimateNumber],
            ["データ種別コード", $estimateCode]
        ])->get();
        foreach ($model as $key => $value) {
            print_r($value);
        }
        return response()->view("estimate.index", []);
    }


    public function create()
    {
        $model = EstimateHeader::all();

        foreach ($model as $key => $value) {
            var_dump($value);
        }
    }

}
