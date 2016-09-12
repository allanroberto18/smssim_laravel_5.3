<?php

namespace SMSSim\Http\Controllers\Admin\Master\Contracts;

use Illuminate\Http\Request;

interface IMaxRelationController
{
    public function index($relation);

    public function create($relation);

    public function show($relation, $id);

    public function edit($relation, $id);

    public function destroy($relation, $id);

    public function destroyBySelection($relation, Request $request);
}