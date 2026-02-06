<?php

namespace App\Models;

class TeacherInfo extends InfoBase
{
    public function __construct(string $firstname, string $lastname)
    {
        parent::__construct($firstname, $lastname);
    }

    public function getLogin(): string
    {
        $login = parent::getLogin();
        $initials = $this->getInitials();
        $login .= $initials;

        return $login;
    }
}
