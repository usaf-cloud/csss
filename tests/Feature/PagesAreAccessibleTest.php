<?php

namespace Tests;

use Tests\TestCase;

class PagesAreAccessibleTest extends TestCase
{
    public function test_homepage()
    {
        $this->get('/')->assertOk();
    }
}
