<?php

namespace SMSSim\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SMSSim\Models\Service;
use SMSSim\Validators\ServiceValidator;

/**
 * Class ServicoRepositoryEloquent
 * @package namespace SMSSim\Repositories;
 */
class ServiceRepositoryEloquent extends BaseRepository implements ServiceRepository
{
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Service::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
