<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationRecevied extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function build()
    {
        if (isset($this->data['attachment'])) {

            return $this->from("website@service.local")
                    ->subject("New application has been sent!")
                    ->view('emails.virtual-reception')
                    ->attachFromStorageDisk('public', $this->data['attachment'])
                    ->with('data', $this->data);
        } else {

            return $this->from("website@service.local")
                    ->subject("New application has been sent!")
                    ->view('emails.virtual-reception')
                    ->with('data', $this->data);
        }
        
    }
}
