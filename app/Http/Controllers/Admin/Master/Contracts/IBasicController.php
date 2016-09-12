<?php

namespace SMSSim\Http\Controllers\Admin\Master\Contracts;

use Illuminate\Http\Request;

interface IBasicController
{
    public function index();

    public function create();

    public function show($id);

    public function edit($id);

    public function destroy($id);

    public function destroyBySelection(Request $request);

}