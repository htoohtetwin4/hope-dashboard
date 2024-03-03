<?php

namespace App\Http\Controllers;

use App\Http\Resources\ImageResource;
use App\Repositories\PhotoRepository;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    private $photoRepository;
    public function __construct(PhotoRepository $PhotoRepository)
    {
        $this->photoRepository = $PhotoRepository;
    }
    public function index()
    {
        $data = $this->photoRepository->getPhoto();
        return $data;
        // return ImageResource::make($data);
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
}
