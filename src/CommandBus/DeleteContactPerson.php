<?php

declare(strict_types = 1);

namespace workbench\webb\CommandBus;

use asylgrp\decisionmaker\ContactPerson\ContactPersonInterface;

final class DeleteContactPerson
{
    public ContactPersonInterface $contactPerson;

    public function __construct(ContactPersonInterface $contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }
}
