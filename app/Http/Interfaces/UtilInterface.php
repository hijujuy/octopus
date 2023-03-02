<?php

namespace App\Http\Interfaces;

interface UtilInterface
{
    /** This method takes care of export a pdf version of voucher */
    public function generatePdf();

    /** This method takes care of send email that contains pdf voucher */
    public function sendEmail();

    /** This method takes care of associate it with other voucher */
    public function linkVoucher();

}
