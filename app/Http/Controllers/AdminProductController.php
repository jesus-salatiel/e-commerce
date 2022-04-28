<?php

namespace App\Http\Controllers;

use App\Models\AdminProduct;
use App\Http\Requests\StoreAdminProductRequest;
use App\Http\Requests\UpdateAdminProductRequest;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminProduct $adminProduct)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminProductRequest  $request
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminProductRequest $request, AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminProduct $adminProduct)
    {
        //
    }
}
