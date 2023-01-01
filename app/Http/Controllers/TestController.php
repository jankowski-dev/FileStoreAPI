<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $a = [
            "List" => [
                "Anton" => mt_rand(5, 26),
                "Kolo"  => mt_rand(5, 26),
                "John" => mt_rand(5, 26),
            ],
            "List2" => [
                "Anton" => mt_rand(5, 26),
                "Kolo"  => mt_rand(5, 26),
                "John" => mt_rand(5, 26),
            ],
        ];

        return $a;
    }
}
