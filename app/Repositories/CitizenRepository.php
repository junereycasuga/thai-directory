<?php

namespace App\Repositories;

use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CitizenRepository extends BaseRepository
{
    /**
     * @param Citizen $model
     */
    public function __construct(Citizen $model)
    {
        parent::__construct($model);
    }

    /**
     * @param string $searchString
     * @return LengthAwarePaginator
     */
    public function filter(string $searchString) : LengthAwarePaginator
    {
        return $this->model
            ->where('id', (int) $searchString)
            ->orWhere('first_name', 'ilike', '%' . $searchString . '%')
            ->orWhere('last_name', 'ilike', '%' . $searchString . '%')
            ->orWhere('gender', $searchString)
            ->paginate(10);
    }
}
