<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ViewGreatReservation;

class FinalConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $ViewGreatReservation;
    public function __construct(ViewGreatReservation $ViewGreatReservation)
    {
        $this->ViewGreatReservation = $ViewGreatReservation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.final-confirmation-mail');  /* ConfirmationMail: 03  */
    }
}
