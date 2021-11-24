<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockOptionsController extends Controller
{
    public function index()
    {
        return response()->json([
            'stocks' => [
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
            ],
            'options' => [
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
                [
                    'name' => 'Jackson PLC',
                    'price' => '£103',
                    'percentage' => '2.4%',
                ],
            ],
        ]);
    }
}
