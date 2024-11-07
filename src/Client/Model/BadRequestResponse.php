<?php

namespace Combell\Client\Model;

class BadRequestResponse
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of validation errors that occurred when processing the request.
     *
     * @var list<ValidationErrorMessage>
     */
    protected $validationErrors;
    /**
     * A list of validation errors that occurred when processing the request.
     *
     * @return list<ValidationErrorMessage>
     */
    public function getValidationErrors(): array
    {
        return $this->validationErrors;
    }
    /**
     * A list of validation errors that occurred when processing the request.
     *
     * @param list<ValidationErrorMessage> $validationErrors
     *
     * @return self
     */
    public function setValidationErrors(array $validationErrors): self
    {
        $this->initialized['validationErrors'] = true;
        $this->validationErrors = $validationErrors;
        return $this;
    }
}