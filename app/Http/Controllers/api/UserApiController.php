<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserApiController extends Controller
{
    public static function createUser($name, $email, $gender)
    {
        $url = "https://gorest.co.in/public/v1/users";

        $data = [
            "name" => $name,
            "email" => $email,
            "gender" => $gender,
            "status" => "active"
        ];

        $header = [
            "Content-Type" => "application/json",
            "Authorization" => "Bearer aabf9fa80a1c36b13895795d62510ae75d03d4f9571d6a3499ecc69bc37bcd27"
        ];

        // $data = json_encode($data);

        $response =  Http::withHeaders($header)->post($url, $data)->json();

        return $response;
    }
    public static function readUser($link = "https://gorest.co.in/public/v1/users?page=1&gender=&status=")
    {
        $url = $link;

        $header = [
            "Content-Type" => "application/json",
            "Authorization" => "Bearer aabf9fa80a1c36b13895795d62510ae75d03d4f9571d6a3499ecc69bc37bcd27"
        ];

        $response =  Http::get($url)->json();

        return $response;
    }
    public static function deleteUser($id)
    {
        $url = "https://gorest.co.in/public/v1/users/$id";

        $header = [
            "Content-Type" => "application/json",
            "Authorization" => "Bearer aabf9fa80a1c36b13895795d62510ae75d03d4f9571d6a3499ecc69bc37bcd27"
        ];

        $response =  Http::withHeaders($header)->delete($url)->json();

        return $response;
    }
    public static function editUser($name, $email, $gender, $status, $id)
    {
        $url = "https://gorest.co.in/public/v1/users/$id";

        $data = [
            "name" => $name,
            "email" => $email,
            "gender" => $gender,
            "status" => $status
        ];

        $header = [
            "Content-Type" => "application/json",
            "Authorization" => "Bearer aabf9fa80a1c36b13895795d62510ae75d03d4f9571d6a3499ecc69bc37bcd27"
        ];

        // $data = json_encode($data);

        $response =  Http::withHeaders($header)->patch($url, $data)->json();

        return $response;
    }
    public static function filter($link = "https://gorest.co.in/public/v1/users", $gender, $status)
    {
        if ($gender == "All") {
            $gender = "";
        }
        if ($status == "All") {
            $status = "";
        }
        $url = "$link?gender=$gender&status=$status";

        $header = [
            "Content-Type" => "application/json",
            "Authorization" => "Bearer aabf9fa80a1c36b13895795d62510ae75d03d4f9571d6a3499ecc69bc37bcd27"
        ];

        $response =  Http::get($url)->json();

        return $response;
    }
}
