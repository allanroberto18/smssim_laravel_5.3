<?php

namespace SMSSim\Http\Controllers\Admin\Contracts;

use SMSSim\Http\Requests\Admin\UserRequest;

interface IUserController
{
    public function store(UserRequest $request);

    public function update($id, UserRequest $request);
}