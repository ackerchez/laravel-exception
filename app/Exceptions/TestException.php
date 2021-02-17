<?php

namespace App\Exceptions;

use Exception;

class TestException extends Exception
{
    public function report(){
        dd('in exception report');
    }
}
