<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Informacion de contacto";
    // con la variable $subject se define el encabezado del mail o asunto
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*
        Dentro de la function build se  define el contenido del mail, se puede llamar a una vista para definir el contenido del mail dentro de ella.
        */
        return $this->view('emails.contactanos');
    }
}
