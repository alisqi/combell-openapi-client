<?php

namespace Combell\Client\Model;

class SslCertificateRequestValidation
{
    /**
     * A domain name of the certificate.
     *
     * @var string
     */
    protected $dnsName;
    /**
     * The domain validation verification type.
     *
     * @var string
     */
    protected $type;
    /**
     * Returns true if no user interaction is required and the domain validation will be verified automatic.
     *
     * @var bool
     */
    protected $autoValidated;
    /**
     * An array of eligible domain verification email addresses.
     *
     * @var string[]
     */
    protected $emailAddresses;
    /**
     * The host-part (Name) of the CNAME-record that must be created as part of domain verification.
     *
     * @var string
     */
    protected $cnameValidationName;
    /**
     * The value-part (Point To) of the CNAME-record that must be created as part of domain verification.
     *
     * @var string
     */
    protected $cnameValidationContent;
    /**
     * The URL (http format) your verification file must be uploaded to as part of domain verification.
     *
     * @var string
     */
    protected $fileValidationUrlHttp;
    /**
     * The URL (https format) your verification file must be uploaded to as part of domain verification.
     *
     * @var string
     */
    protected $fileValidationUrlHttps;
    /**
     * The content your verification file must contain, consisting of three lines of plain-text.
     *
     * @var string[]
     */
    protected $fileValidationContent;
    /**
     * A domain name of the certificate.
     *
     * @return string
     */
    public function getDnsName(): string
    {
        return $this->dnsName;
    }
    /**
     * A domain name of the certificate.
     *
     * @param string $dnsName
     *
     * @return self
     */
    public function setDnsName(string $dnsName): self
    {
        $this->dnsName = $dnsName;
        return $this;
    }
    /**
     * The domain validation verification type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The domain validation verification type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Returns true if no user interaction is required and the domain validation will be verified automatic.
     *
     * @return bool
     */
    public function getAutoValidated(): bool
    {
        return $this->autoValidated;
    }
    /**
     * Returns true if no user interaction is required and the domain validation will be verified automatic.
     *
     * @param bool $autoValidated
     *
     * @return self
     */
    public function setAutoValidated(bool $autoValidated): self
    {
        $this->autoValidated = $autoValidated;
        return $this;
    }
    /**
     * An array of eligible domain verification email addresses.
     *
     * @return string[]
     */
    public function getEmailAddresses(): array
    {
        return $this->emailAddresses;
    }
    /**
     * An array of eligible domain verification email addresses.
     *
     * @param string[] $emailAddresses
     *
     * @return self
     */
    public function setEmailAddresses(array $emailAddresses): self
    {
        $this->emailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * The host-part (Name) of the CNAME-record that must be created as part of domain verification.
     *
     * @return string
     */
    public function getCnameValidationName(): string
    {
        return $this->cnameValidationName;
    }
    /**
     * The host-part (Name) of the CNAME-record that must be created as part of domain verification.
     *
     * @param string $cnameValidationName
     *
     * @return self
     */
    public function setCnameValidationName(string $cnameValidationName): self
    {
        $this->cnameValidationName = $cnameValidationName;
        return $this;
    }
    /**
     * The value-part (Point To) of the CNAME-record that must be created as part of domain verification.
     *
     * @return string
     */
    public function getCnameValidationContent(): string
    {
        return $this->cnameValidationContent;
    }
    /**
     * The value-part (Point To) of the CNAME-record that must be created as part of domain verification.
     *
     * @param string $cnameValidationContent
     *
     * @return self
     */
    public function setCnameValidationContent(string $cnameValidationContent): self
    {
        $this->cnameValidationContent = $cnameValidationContent;
        return $this;
    }
    /**
     * The URL (http format) your verification file must be uploaded to as part of domain verification.
     *
     * @return string
     */
    public function getFileValidationUrlHttp(): string
    {
        return $this->fileValidationUrlHttp;
    }
    /**
     * The URL (http format) your verification file must be uploaded to as part of domain verification.
     *
     * @param string $fileValidationUrlHttp
     *
     * @return self
     */
    public function setFileValidationUrlHttp(string $fileValidationUrlHttp): self
    {
        $this->fileValidationUrlHttp = $fileValidationUrlHttp;
        return $this;
    }
    /**
     * The URL (https format) your verification file must be uploaded to as part of domain verification.
     *
     * @return string
     */
    public function getFileValidationUrlHttps(): string
    {
        return $this->fileValidationUrlHttps;
    }
    /**
     * The URL (https format) your verification file must be uploaded to as part of domain verification.
     *
     * @param string $fileValidationUrlHttps
     *
     * @return self
     */
    public function setFileValidationUrlHttps(string $fileValidationUrlHttps): self
    {
        $this->fileValidationUrlHttps = $fileValidationUrlHttps;
        return $this;
    }
    /**
     * The content your verification file must contain, consisting of three lines of plain-text.
     *
     * @return string[]
     */
    public function getFileValidationContent(): array
    {
        return $this->fileValidationContent;
    }
    /**
     * The content your verification file must contain, consisting of three lines of plain-text.
     *
     * @param string[] $fileValidationContent
     *
     * @return self
     */
    public function setFileValidationContent(array $fileValidationContent): self
    {
        $this->fileValidationContent = $fileValidationContent;
        return $this;
    }
}
