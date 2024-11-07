<?php

namespace Combell\Client\Model;

class ValidationErrorMessage
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
     * 
     *
     * @var string
     */
    protected $errorCode;
    /**
     * 
     *
     * @var string
     */
    protected $errorText;
    /**
     * 
     *
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
    /**
     * 
     *
     * @param string $errorCode
     *
     * @return self
     */
    public function setErrorCode(string $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getErrorText(): string
    {
        return $this->errorText;
    }
    /**
     * 
     *
     * @param string $errorText
     *
     * @return self
     */
    public function setErrorText(string $errorText): self
    {
        $this->initialized['errorText'] = true;
        $this->errorText = $errorText;
        return $this;
    }
}