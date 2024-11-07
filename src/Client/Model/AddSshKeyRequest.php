<?php

namespace Combell\Client\Model;

class AddSshKeyRequest
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
     * Public key
     *
     * @var string
     */
    protected $publicKey;
    /**
     * Public key
     *
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }
    /**
     * Public key
     *
     * @param string $publicKey
     *
     * @return self
     */
    public function setPublicKey(string $publicKey): self
    {
        $this->initialized['publicKey'] = true;
        $this->publicKey = $publicKey;
        return $this;
    }
}