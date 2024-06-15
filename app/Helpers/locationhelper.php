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
if(!function_exists('user')){
    function user(){
        return Auth::user();
    }
}

