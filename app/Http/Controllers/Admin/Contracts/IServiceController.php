<?php

namespace SMSSim\Http\Controllers\Admin\Contracts;

use SMSSim\Http\Requests\Admin\ServiceRequest;

interface IServiceController
{
    public function store(ServiceRequest $request);

    public function update($id, ServiceRequest $request);
}