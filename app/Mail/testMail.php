<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class testMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->data=['user'=>$user];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("harzew31@gmail.com","aissam")
                    ->subject("My first email")
                    ->view('mail.testMail');
    }
}
