<?php

namespace Combell\Client\Model;

class AddSshKeyRequest
{
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
        $this->publicKey = $publicKey;
        return $this;
    }
}
