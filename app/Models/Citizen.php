<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    /**
     * The table associated to the Model
     *
     * @var string
     */
    protected $table = 'citizens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'birth_date',
        'gender',
    ];

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->getAttribute('id');
    }

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->getAttribute('first_name');
    }

    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->getAttribute('last_name');
    }

    /**
     * @return string
     */
    public function getFullName() : string
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    /**
     * @return string
     */
    public function getBirthDate() : string
    {
        return $this->getAttribute('birth_date');
    }

    /**
     * @return string
     */
    public function getGender() : string
    {
        return $this->getAttribute('gender');
    }
}
