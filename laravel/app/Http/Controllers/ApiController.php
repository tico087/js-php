<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{
    public function endpoint(string $verb, string $model, string|int $param = null): JsonResponse
    {
        $data = $this->{$verb}($model, $param);
        return response()->json($data);
    }


    private function get(string $model, string|int $param)
    {

    }
}
