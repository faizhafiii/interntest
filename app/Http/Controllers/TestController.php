<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\api\UserApiController;

class TestController extends Controller
{
    public function checkData(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => ["required"],
                "email" => ["required"],
            ]
        );
        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => 'fail',
                    'errors' => $validator->getMessageBag()
                ]
            );
        }

        $createUserResponse = UserApiController::createUser($request->name, $request->email, $request->gender);

        return $createUserResponse;
    }
}
