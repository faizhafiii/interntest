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

        $linkArray = explode("?", $request->link);
        $linkArray = explode("&", $linkArray[1]);
        $gender = $linkArray[1];
        $status = $linkArray[2];

        if ($gender == "gender=") {
            $gender = "";
        } else if ($gender == "gender=male") {
            $gender = "male";
        } else if ($gender == "gender=female") {
            $gender = "female";
        }
        if ($status == "status=") {
            $status = "";
        } else if ($status == "status=active") {
            $status = "active";
        } else if ($status == "status=inactive") {
            $status = "inactive";
        }


        return response()->json(
            [
                'status' => 'success',
                'view' => view('table_data', ['readUser' => $readUser, 'gender' => $gender, 'status' => $status])->render()
            ]
        );
    }
    public function deleteUser(Request $request)
    {
        $deleteUser = UserApiController::deleteUser($request->id);

        return $deleteUser;
    }
    public function editUser(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name_edit" => ["required"],
                "email_edit" => ["required"],
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

        $editUserResponse = UserApiController::editUser($request->name_edit, $request->email_edit, $request->gender_edit, $request->status, $request->user_id);

        return $editUserResponse;
    }
    public function filter(Request $request)
    {
        $filter = UserApiController::filter($request->link, $request->gender, $request->status);
        if ($request->gender == "All") {
            $request->gender = "";
        }
        if ($request->status == "All") {
            $request->status = "";
        }
        return response()->json(
            [
                'status' => 'success',
                'view' => view('table_data', ['readUser' => $filter, 'gender' => $request->gender, 'status' => $request->status])->render()
            ]
        );
    }
}
