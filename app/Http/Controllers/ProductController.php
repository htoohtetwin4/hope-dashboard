<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $productRepository;

    public function __construct(ProductRepository $ProductRepository)
    {
        $this->productRepository = $ProductRepository;
    }
    public function index()
    {
        $product = $this->productRepository->getProduct();
        return $product;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function getActiveUser()
    // {
    //     $users = User::where('status', 'Active')->get();
    //     $activeUsers = $users->pluck('name');
    //     return $activeUsers;
    // }
}
