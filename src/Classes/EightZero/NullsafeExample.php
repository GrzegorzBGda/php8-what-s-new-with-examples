<?php

namespace Example\Classes\EightZero;

class NullsafeExample
{
    public object $session;

    /**
     * Instead of null check conditions, you can now use a chain of calls with the new nullsafe operator.
     * When the evaluation of one element in the chain fails, the execution of the entire chain aborts and the entire chain evaluates to null.
     */
    public function __construct()
    {
        $this->session = new \stdClass();
        $this->session->user = new \stdClass();
        $this->session->user->address = new \stdClass();
        $this->session->user->address->country = 'Poland';
    }

    /**
     * @return string|null
     */
    public function getCountryPhp7(): ?string
    {
        if ($this->session !== null) {
            $user = $this->session->user;

            if ($user !== null) {
                $address = $user->address;

                if ($address !== null) {
                    return $address->country;
                }
            }

            return null;
        }
    }

    /**
     * @return string|null
     */
    public function getCountryPhp8(): ?string
    {
        return $this->session?->user?->address?->country;
    }
}

