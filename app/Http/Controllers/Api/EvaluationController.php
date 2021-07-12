<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEvaluation;
use App\Http\Resources\EvaluationResource;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Collection;

class EvaluationController extends Controller
{
    protected $repository;

    public function __construct(Evaluation $model)
    {
        $this->repository = $model;
    }

    public function index(string $company): AnonymousResourceCollection
    {
        $evaluations = $this->repository->where('company', $company)->get();

        return EvaluationResource::collection($evaluations);
    }

    public function store(StoreEvaluation $request, string $company): EvaluationResource
    {
        $evaluation = $this->repository->create($request->validated());

        return new EvaluationResource($evaluation);
    }
}
