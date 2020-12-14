<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Problem1Class;
use App\Classes\Problem2Class;

class ProblemController extends Controller
{
    public function index()
    {
       return view('post.create');
    }

    public function problem1(Request $request)
    {
        $input = $request->gamesPlayed;
        $problem1class = new Problem1Class($input);
        $problem1class->separateCategories();
        $problem1class->checkResults();
        $result = $problem1class->getResults();

        return response()->json([
            'result' => $result
        ]);
    }

    public function problem2(Request $request)
    {
        $input = $request->data;
        $problem2class = new Problem2Class($input);
        $problem2class->parseInput();
        $result = $problem2class->queensAttack();;

        return response()->json([
            'result' => $result
        ]);
    }
}