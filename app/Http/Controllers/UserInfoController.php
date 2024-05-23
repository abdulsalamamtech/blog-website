<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserInfoRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use App\Models\UserInfo;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserInfo $userInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserInfoRequest $request, UserInfo $userInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserInfo $userInfo)
    {
        //
    }
}
