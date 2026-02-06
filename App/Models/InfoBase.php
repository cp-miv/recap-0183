<?php

namespace App\Models;

class InfoBase
{
    protected string $firstname;
    protected string $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getFullName(): string
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function getLogin(): string
    {
        return 'cp-';
    }

    protected function getInitials(): string
    {
        $initials = substr($this->firstname, 0, 1) . substr($this->lastname, 0, 2);
        $initials = strtolower($initials);

        return $initials;
    }
}
