<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    protected $nameByForm;
    protected $subjectByForm;
    protected $emailByForm;
    protected $messageByForm;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nameByForm, $subjectByForm, $emailByForm, $messageByForm)
    {
        $this->nameByForm = $nameByForm;
        $this->subjectByForm = $subjectByForm;
        $this->emailByForm = $emailByForm;
        $this->messageByForm = $messageByForm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactme')->with([
            'nameByForm' => $this->nameByForm,
            'subjectByForm' => $this->subjectByForm,
            'emailByForm' => $this->emailByForm,
            'messageByForm' => $this->messageByForm
        ]);
    }
}
