<?php

if (!function_exists('IP')) {
    function IP($request)
    {
        // return gethostbyname(gethostname());
        //return $_SERVER['REMOTE_ADDR'];
        return $request->ip();
    }
};

if (!function_exists('paginate')) {
    function paginate()
    {
        return 6;
    }
}
