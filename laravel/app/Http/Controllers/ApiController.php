<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiController extends Controller
{
    public function endpoint(Request $request): JsonResponse
    {
        $verb = $request->route('verb');
        $model = $request->route('model');
        $payload = $request->json('payload') ?? [];

        $data = $this->{$verb}($model, $payload);
        return response()->json($data);
    }


private function get(string $model, array $payload): JsonResponse
{
    try {
        $modelClass = 'App\\Models\\' . Str::ucfirst(Str::singular($model));
        if (!class_exists($modelClass)) {
            return response()->json(['error' => 'Model not found'], 404);
        }

        if (!is_subclass_of($modelClass, \Illuminate\Database\Eloquent\Model::class)) {
            return response()->json(['error' => 'Invalid model class'], 400);
        }
        $query = $modelClass::query();
        if(!$payload)
        {
            $results = $query->get();
            return response()->json($results);
        }

        $results =$query->where($payload)->get();
        return response()->json($results);

    } catch (ModelNotFoundException $e) {
        return response()->json(['error' => 'Model not found'], 404);
    } catch (\Exception $e) {
        return response()->json(['error' => 'An error occurred', 'message' => $e->getMessage()], 500);
    }
}


}
