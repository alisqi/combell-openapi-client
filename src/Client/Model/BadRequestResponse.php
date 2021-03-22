<?php

namespace Combell\Client\Model;

class BadRequestResponse
{
    /**
     * A list of validation errors that occurred when processing the request.
     *
     * @var ValidationErrorMessage[]
     */
    protected $validationErrors;
    /**
     * A list of validation errors that occurred when processing the request.
     *
     * @return ValidationErrorMessage[]
     */
    public function getValidationErrors() : array
    {
        return $this->validationErrors;
    }
    /**
     * A list of validation errors that occurred when processing the request.
     *
     * @param ValidationErrorMessage[] $validationErrors
     *
     * @return self
     */
    public function setValidationErrors(array $validationErrors) : self
    {
        $this->validationErrors = $validationErrors;
        return $this;
    }
}