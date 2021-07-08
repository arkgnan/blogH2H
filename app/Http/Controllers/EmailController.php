<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Input;

class EmailController extends Controller
{
    public function sendEmailReg(Request $request)
    {
        // Get the uploades file with name document
        $scan_ktp = $request->file('scan-ktp');
        $scan_npwp = $request->file('scan-npwp');
        $scan_sppkp = $request->file('scan-sppkp');
        $scan_akta = $request->file('scan-akta');

        try{
            Mail::send('email1', ['nama' => $request->nama, 
            'company' => $request->company, 
            'kontak' => $request->kontak, 
            'telp' => $request->telp, 
            'alamat' => $request->alamat,
            'ktp' => $request->ktp,
            'npwp' => $request->npwp,  
            'software' => $request->software,
            'oid' => $request->oid,
            'jabber' => $request->jabber,
            'ip' => $request->ip,
            'url' => $request->url], function ($message) use ($request)
            {
                $message->subject($request->judul);
                $message->from('reg.h2h@unitedtronik.co.id', 'Unitedtronik');
                $message->to('ss.unitedtronik@gmail.com');
                if ($request->npwp != "") {
                    if ($request->hasFile('scan-ktp')) {
                        $message->attach(Input::file('scan-ktp')->getRealPath(),
                        [
                            'as' => Input::file('scan-ktp')->getClientOriginalName(),
                            'mime' => Input::file('scan-ktp')->getClientMimeType(),
                        ]);
                    }
                    if ($request->hasFile('scan-npwp')) {
                        $message->attach(Input::file('scan-npwp')->getRealPath(),
                        [
                            'as' => Input::file('scan-npwp')->getClientOriginalName(),
                            'mime' => Input::file('scan-npwp')->getClientMimeType(),
                        ]);
                    }
                    if ($request->hasFile('scan-sppkp')) {
                        $message->attach(Input::file('scan-sppkp')->getRealPath(),
                        [
                            'as' => Input::file('scan-sppkp')->getClientOriginalName(),
                            'mime' => Input::file('scan-sppkp')->getClientMimeType(),
                        ]);
                    }
                    if ($request->hasFile('scan-akta')) {
                        $message->attach(Input::file('scan-akta')->getRealPath(),
                        [
                            'as' => Input::file('scan-akta')->getClientOriginalName(),
                            'mime' => Input::file('scan-akta')->getClientMimeType(),
                        ]);
                    }
                }
            });
            return back()->with('alert-success','Permintaan kerjasama berhasil dikirim');
        }
        catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
    public function sendEmailOffer(Request $request)
    {
        try{
            Mail::send('email2', ['nama' => $request->nama, 
            'company' => $request->company, 
            'position' => $request->position,
            'kontak' => $request->kontak, 
            'telp' => $request->telp, 
            'email' => $request->email,
            'pesan' => str_replace("\n", '. ', $request->pesan)], function ($message) use ($request)
            {
                $message->subject($request->judul);
                $message->from('reg.h2h@unitedtronik.co.id', 'Unitedtronik');
                $message->to('ss.unitedtronik@gmail.com');
                $message->cc('adityahindarta@gmail.com');
            });
            return back()->with('alert-success','Permintaan kerjasama berhasil dikirim');
        }
        catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
}
