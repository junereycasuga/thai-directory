<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAll() : Collection;

    /**
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function paginate(int $perPage) : LengthAwarePaginator;

    /**
     * @param int $id
     * @return Model
     */
    public function findById(int $id) : Model;

    /**
     * @param int $id
     * @return Model
     */
    public function findOrFail(int $id) : Model;

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data) : Model;
}
