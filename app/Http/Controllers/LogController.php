<?php

namespace App\Http\Controllers;

use Request;
use App\Log;
use Browser;

class LogController extends Controller
{
    public function store(Request $request)
    {
        
        $os = Browser::platformName();
        $browser = Browser::browserName();
        $platform = 'Bot';
        if(Browser::isMobile()){
            $platform = 'Mobile';
        }
        if(Browser::isTablet()){
            $platform = 'Tablet';
        }
        if(Browser::isDesktop()){
            $platform = 'Desktop';
        }
        $simpan_log = Log::create([
            'tanggal' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'aktivitas' => str_replace("-","/",request('event')),
            'os' => $os,
            'ip' => Request::ip(),
            'browser' => $browser,
            'platform' => $platform
        ]);

        return $simpan_log;
    }
}
