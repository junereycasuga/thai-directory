<?php

namespace App\Repositories;

use App\Models\Citizen;

class CitizenRepository extends BaseRepository
{
    /**
     * @param Citizen $model
     */
    public function __construct(Citizen $model)
    {
        parent::__construct($model);
    }
}
