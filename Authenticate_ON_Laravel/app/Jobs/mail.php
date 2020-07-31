<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class mail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    
    public function handle(Request $request)
    {
        request()->validate([
            'name_usr' => 'required',
            'email_usr' => 'required',
            'phn_usr' => 'required',
            'msg_usr' => 'required',
        ]);

        $name = request('name_usr');
        $from = request('email_usr');
        $to = 'tawsik@analyzenbd.com';
        $sub = $request->category;
        $msg = request('msg_usr');
        $phn = request('phn_usr');

        mail($name,$from,$to,$sub,$msg,$phn);
    }
}
