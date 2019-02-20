<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CategoriasRepository;
use App\Entities\Categorias;
use App\Validators\CategoriasValidator;

/**
 * Class CategoriasRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CategoriasRepositoryEloquent extends BaseRepository implements CategoriasRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Categorias::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
