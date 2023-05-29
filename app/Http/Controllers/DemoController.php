<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function Form(Request $request):string
    {
    $name = $request->name;
    return "My name is {$name}";
    }

    function Header(Request $request):string
    {
        $userAgent = $request->header('User-Agent');
        return "The Agent is {$userAgent}";
    }

    function Input(Request $request)
    {
        if ($request->has('page'))
        {
            $page = $request->input('page');
        }
        else
        {
            $page = null;
        }
        return response()->json(['page'=> $page]);
    }

    function Json(Request $requestData)
    {
        $responseData = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 29
            ]
        ];
        return response()->json($responseData);
    }

    function UploadFile(Request $request):bool
    {
        $picturefile = $request->file('picture');
        $picturefile->move('public/uploads',$picturefile->getClientOriginalName());
        return true;
    }

    function Token(Request $request)
    {
        $rememberToken = $request->cookie('remember_token');
        if ($rememberToken === null) {
            return response()->json(['remember_token' => null]);
        }
        return response()->cookie(['remember_token' => $rememberToken]);
    }

    public function profile()
    {
        return 'This is the secret profile page';
    }

    public function settings()
    {
        return 'This is the secret settings page';
    }
}
