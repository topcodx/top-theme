<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class UserDataTable
 */
class UserDataTable
{
    /**
     * @return Builder
     */
    public function get(): Builder
    {
        /** @var User $query */
        return User::query()->select('users.*');
    }
}
