<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConverterController extends Controller
{
    public function index(Request $request)
    {
        $givenValue = $request->session()->get('givenValue', '');
        $firstTempTypeName = $request->session()->get('firstTempTypeName', '');
        $secondTempTypeName = $request->session()->get('secondTempTypeName', '');
        $result = $request->session()->get('result', '');
        return view('converter.index')->with([
            'givenValue'=> $givenValue,
            'firstTempTypeName' => $firstTempTypeName,
            'secondTempTypeName' => $secondTempTypeName,
            'result' => $result,
        ]);
    }

    public function doConversion(Request $request)
    {
        $request->validate([
            'given_value' => 'required|numeric',
            'first_temp_type_name' => 'required',
            'second_temp_type_name' => 'required',
        ]);

        $given_value = $request->input('given_value', null);
        $first_temp_type_name = $request->input('first_temp_type_name', null);
        $second_temp_type_name = $request->input('second_temp_type_name', null);

        $result = "";
        // Fahrenheit to Celsius
        if($first_temp_type_name == 'fahrenheit')
        {
            if($second_temp_type_name == 'celsius')
            {
                $celsius = $this->fahrenheit_to_celsius($given_value);
                $result = $given_value.' Fahrenheit = '.$celsius.' Celsius';
            } else {
                $result = $given_value.' Fahrenheit';
            }
        }
        // Celsius to Fahrenheit
        if($first_temp_type_name == 'celsius')
        {
            if($second_temp_type_name == 'fahrenheit')
            {
                $fahrenheit = $this->celsius_to_fahrenheit($given_value);
                $result = $given_value.' Celsius = '.$fahrenheit.' Fahrenheit';
            } else {
                $result = $given_value.' Celsius';
            }
        }

        return redirect('/converter')->with([
            'givenValue'=> $given_value,
            'firstTempTypeName' => $first_temp_type_name,
            'secondTempTypeName' => $second_temp_type_name,
            'result' => $result,
        ]);
    }

    ## conversion of Fahrenheit to celsius
    public function fahrenheit_to_celsius($given_value)
    {
        $celsius=5/9*($given_value-32);
        return $celsius ;
    }

    //Celsius to fahrenheit
    public function celsius_to_fahrenheit($given_value)
    {
        $fahrenheit=$given_value*9/5+32;
        return $fahrenheit ;
    }


}