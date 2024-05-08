<?php

namespace App\Repositories;

class UserRepository
{
    public function __construct(protected User $user)
    {        
    }

    public function getAllUsers(string $filter = ''): LengthAwarePaginator
    {
        return $this->user->where( function($query) use ($filter){
            if ($filter !== ''){
                $query->where('name','LIKE',"%{$filter}%" );
            }
        })->paginate();
    }
}