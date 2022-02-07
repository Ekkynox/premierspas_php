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

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
