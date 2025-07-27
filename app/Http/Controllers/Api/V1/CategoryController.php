<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\CategoryFilter;
use App\Models\Category;
use App\Http\Requests\V1\StoreCategoryRequest;
use App\Http\Requests\V1\UpdateCategoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CategoryResource;
use App\Http\Resources\V1\CategoryCollection;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new CategoryFilter();
        $filterItems = $filter->transform($request); // [['column', 'operator', 'value']]

        $includeProducts = $request->query('includeProducts');

        $categories = Category::where($filterItems);

        if ($includeProducts) {
            $categories = $categories->with('products');
        }

        return new CategoryCollection($categories->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        return new CategoryResource(Category::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, Request $request)
    {
        $includeProducts = $request->query('includeProducts');

        if ($includeProducts) {
            return new CategoryResource($category->loadMissing('products'));
        }
        
        return new CategoryResource($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
