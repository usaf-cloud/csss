<?php

namespace App\Actions;

class ProcessAccountRequest
{
    private $usafcloud;

    public function __construct()
    {
        //
    }

    public function execute()
    {
    }

    private function createOrg()
    {
        try {
            $org = $this->usafcloud->actions->createOrganization([
                'name' => 'Test',
            ]);
        } catch (\USAFException $e) {
            throw $e;
        }
    }
}
