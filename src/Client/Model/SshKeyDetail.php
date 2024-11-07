<?php

namespace Combell\Client\Model;

class SshKeyDetail
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
    * The fingerprint of the public key.<br />
    This value is ignored for creation of new SSH keys.
    *
    * @var string
    */
    protected $fingerprint;
    /**
     * Public key
     *
     * @var string
     */
    protected $publicKey;
    /**
     * List of Linux hostings where SSH key is attached
     *
     * @var list<string>
     */
    protected $linuxHostings;
    /**
    * The fingerprint of the public key.<br />
    This value is ignored for creation of new SSH keys.
    *
    * @return string
    */
    public function getFingerprint(): string
    {
        return $this->fingerprint;
    }
    /**
    * The fingerprint of the public key.<br />
    This value is ignored for creation of new SSH keys.
    *
    * @param string $fingerprint
    *
    * @return self
    */
    public function setFingerprint(string $fingerprint): self
    {
        $this->initialized['fingerprint'] = true;
        $this->fingerprint = $fingerprint;
        return $this;
    }
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
    /**
     * List of Linux hostings where SSH key is attached
     *
     * @return list<string>
     */
    public function getLinuxHostings(): array
    {
        return $this->linuxHostings;
    }
    /**
     * List of Linux hostings where SSH key is attached
     *
     * @param list<string> $linuxHostings
     *
     * @return self
     */
    public function setLinuxHostings(array $linuxHostings): self
    {
        $this->initialized['linuxHostings'] = true;
        $this->linuxHostings = $linuxHostings;
        return $this;
    }
}