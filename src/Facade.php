<?php

namespace Techcyclist\Highstock;

use Illuminate\Support\Facades\Facade as FacadeClass;

class Facade extends FacadeClass
{
    public static function getFacadeAccessor()
    {
        return 'register-highstock';
    }
}
