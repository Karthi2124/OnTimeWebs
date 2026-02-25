<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class BusinessEnquiryMail extends Mailable
{
    public $enquiry;
    public $logoCid = null;
    public $photoCids = [];

    public function __construct($enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this->subject('New Business Enquiry')
            ->view('emails.business_enquiry')
            ->withSymfonyMessage(function ($message) {

                // Embed Logo
                if ($this->enquiry->logo) {
                    $logoPath = storage_path('app/public/' . $this->enquiry->logo);

                    if (file_exists($logoPath)) {
                        $this->logoCid = $message->embedFromPath($logoPath);
                    }
                }

                // Embed Photos
                if ($this->enquiry->photos) {
                    foreach ($this->enquiry->photos as $photo) {
                        $photoPath = storage_path('app/public/' . $photo);

                        if (file_exists($photoPath)) {
                            $this->photoCids[] = $message->embedFromPath($photoPath);
                        }
                    }
                }
            });
    }
}