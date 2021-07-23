<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Http\Requests\CalculatorRequest;

class CalculatorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CalculatorRequest $request)
    {
        $this->subject  = __('mail.subjects.calculator');
        $this->data     = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data       = $this->data;
        $subject    = $this->subject;

        return $this->view('mail.calculator.index')
                    ->attachFromStorage('/uploads/images/' . $data->message)
                    ->with([
                        'title'     => $subject,
                        'name'      => $data->name,
                        'phone'     => $data->phone,
                        'type'      => $data->type,
                        'width'     => $data->width,
                        'height'    => $data->height,
                        'font'      => $data->font,
                        'place'     => $data->place,
                    ])
                    ->subject($subject);
    }
}
