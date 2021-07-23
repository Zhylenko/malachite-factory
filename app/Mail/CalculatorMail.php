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

    protected $data, $path;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CalculatorRequest $request)
    {
        $this->subject  = __('mail.subjects.calculator');
        $this->data     = $request;
        $this->path     = config('calculator.path.upload');
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
        $image      = ($data->image !== null) ? $this->path . $data->image : null;

        $view = $this->view('mail.calculator.index')
            ->with([
                'title'     => $subject,
                'name'      => $data->name,
                'phone'     => $data->phone,
                'text'      => $data->message,
                'type'      => $data->type,
                'width'     => $data->width,
                'height'    => $data->height,
                'font'      => $data->font,
                'place'     => $data->place,
            ])
            ->subject($subject);

        if ($image !== null) {
            return $view->attach($image);
        } else {
            return $view;
        }
    }
}
