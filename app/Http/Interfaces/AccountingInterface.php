<?php

namespace App\Http\Interfaces;

interface AccountingInterface
{
    /** This method takes care of generate its corresponding accounting seat */
    public function generateSeat();
}
