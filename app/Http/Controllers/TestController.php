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
    public function tableLoad(Request $request)
    {
        $readUser = UserApiController::readUser($request->link);
        return response()->json(
            [
                'status' => 'success',
                'view' => view('table_data', ['readUser' => $readUser])->render()
            ]
        );
    }
    public function deleteUser(Request $request)
    {
        $deleteUser = UserApiController::deleteUser($request->id);

        return $deleteUser;
    }
}
