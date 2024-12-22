<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CreateAdmin
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public $name;
    public $email;

    public $password;


    public function __construct(string $name ,string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data["name"],
            $data['email'] ?? '',
            $data['password'] ?? '',
        );
    }

    public function toArray(): array
    {
        return [
            'name'=> $this->name,
            'email' => $this->email,
            'password' => $this->password ,
        ];
    }
}
