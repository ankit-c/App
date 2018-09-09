<?php

namespace pms\Http\Controllers;

protected function authenticated($request, $user)
{
    if(($user_role->admin)==1) {
        return redirect()->intended('{{url('/admin')}}');
    }
    return redirect()->intended('{{url('/home')}}');
}
