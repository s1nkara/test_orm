<?php

namespace app\controllers;

use app\services\DivisionService;


class DivisionController
{
    public $divisionService;

    public function __construct(DivisionService $divisionService)
    {
        $this->divisionService = $divisionService;
    }

    public function getAllDivisions(Request $request)
    {
    }
}