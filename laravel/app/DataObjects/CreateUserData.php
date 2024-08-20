<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;
use Illuminate\Support\Facades\Hash;

class CreateUserData extends Data
{


    public function __construct(
        public string $name,
        public string $email,
        public string $doc,
        public string $password,
        public string $role,

    ) {
    }

    public static function fromArray(array $data): static
    {
        return new static(
            $data['name'],
            $data['email'],
            $data['password'],
            $data['doc'],
            $data['role']

        );
    }
}
