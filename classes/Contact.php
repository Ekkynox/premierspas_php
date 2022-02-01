<?php

class Contact
{
    protected string $subject;
    protected string $email;
    protected string $message;

    public function __construct(array $contact)
    {
        $this->email = $contact["email"];
        $this->subject = $contact["subject"];
        $this->message = $contact["message"];
    }
}
