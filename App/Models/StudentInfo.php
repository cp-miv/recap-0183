<?php

namespace App\Models;

class StudentInfo extends InfoBase
{
    protected int $yearArrived;

    public function __construct(string $firstname, string $lastname, int $yearArrived)
    {
        parent::__construct($firstname, $lastname);
        $this->yearArrived = $yearArrived;
    }

    public function getLogin(): string
    {
        $login = parent::getLogin();
        $initials = $this->getInitials();
        $login .= "{$this->yearArrived}{$initials}";

        return $login;
    }
}
