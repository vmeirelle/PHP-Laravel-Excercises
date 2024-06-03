<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
public function sendString(Request $request){
    $values = $request->validate([
        'inputString' => 'required'
    ]);

    $result = testStringManipulation($values['inputString']);

    return view('string-manipulation')->with('str1', $values['inputString'])->with('StringResult', $result);
}

public function sendArray(Request $request)
{

    $inputArray = array_map('trim', explode(',', $request->input('inputArray')));

    $result = testArrayManipulation($inputArray);

    return view('array-manipulation', ['ArrayResult' => ['array' => $result]]);
}
    

public function sendMath(Request $request) {
    $values = $request->validate([
        'inputMath1' => 'required',
        'inputMath2' => 'required'
    ]);

    $mathResult = testMathOperations($values['inputMath1'], $values['inputMath2']);

    return view('math-manipulation', ['mathResult' => $mathResult]);
}


}
