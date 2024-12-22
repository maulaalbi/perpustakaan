<?php

namespace App\Exceptions;

use Illuminate\Validation\ValidationException;

class BookServiceException extends ValidationException
{
    /**
     * Custom method to send error response.
     */
    public function sendErrorFormat(string $message): ValidationException
    {
        return $this->withMessages([
            'messages' => [
                'error' => $message,
            ],
        ]);
    }
}
