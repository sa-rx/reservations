<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Sendmail;


class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;


    public $title ;
    public $content ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title , $content)
    {
        $this->title = $title ;
        $this->content = $content ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $sendmail =  Sendmail::take(1)->orderBy('id','DESC')->get();
        return $this->markdown('emails.welcome');
    }
}
