<?php

namespace Combell\Client\Model;

class SslCertificate
{
    /**
    * The SHA-1 fingerprint of the certificate.<br />
    The fingerprint is a cryptographic hash which is a short unique identification of the certificate.
    *
    * @var string
    */
    protected $sha1Fingerprint;
    /**
     * The common name (e.g. domain.com) of the certificate.
     *
     * @var string
     */
    protected $commonName;
    /**
     * The exact time the certificate will expire.
     *
     * @var \DateTime
     */
    protected $expiresAfter;
    /**
    * The validation level of the certificate:
    <ul><li>Domain validated: Basic check of the identity of the owner of the domain name.</li><li>Organization validated: Company details are verified and integrated in the certificate.</li><li>Extended validated: A thorough verification of your domain name and company details.</li></ul>
    *
    * @var string
    */
    protected $validationLevel;
    /**
    * The type of the certificate:
    <ul><li>Standard: Certificate for a single domain.</li><li>Multi domain: Certificate for multiple (sub)domains belonging to the same owner.</li><li>Wildcard: Certificate for all the subdomains.</li></ul>
    *
    * @var string
    */
    protected $type;
    /**
    * The SHA-1 fingerprint of the certificate.<br />
    The fingerprint is a cryptographic hash which is a short unique identification of the certificate.
    *
    * @return string
    */
    public function getSha1Fingerprint() : string
    {
        return $this->sha1Fingerprint;
    }
    /**
    * The SHA-1 fingerprint of the certificate.<br />
    The fingerprint is a cryptographic hash which is a short unique identification of the certificate.
    *
    * @param string $sha1Fingerprint
    *
    * @return self
    */
    public function setSha1Fingerprint(string $sha1Fingerprint) : self
    {
        $this->sha1Fingerprint = $sha1Fingerprint;
        return $this;
    }
    /**
     * The common name (e.g. domain.com) of the certificate.
     *
     * @return string
     */
    public function getCommonName() : string
    {
        return $this->commonName;
    }
    /**
     * The common name (e.g. domain.com) of the certificate.
     *
     * @param string $commonName
     *
     * @return self
     */
    public function setCommonName(string $commonName) : self
    {
        $this->commonName = $commonName;
        return $this;
    }
    /**
     * The exact time the certificate will expire.
     *
     * @return \DateTime
     */
    public function getExpiresAfter() : \DateTime
    {
        return $this->expiresAfter;
    }
    /**
     * The exact time the certificate will expire.
     *
     * @param \DateTime $expiresAfter
     *
     * @return self
     */
    public function setExpiresAfter(\DateTime $expiresAfter) : self
    {
        $this->expiresAfter = $expiresAfter;
        return $this;
    }
    /**
    * The validation level of the certificate:
    <ul><li>Domain validated: Basic check of the identity of the owner of the domain name.</li><li>Organization validated: Company details are verified and integrated in the certificate.</li><li>Extended validated: A thorough verification of your domain name and company details.</li></ul>
    *
    * @return string
    */
    public function getValidationLevel() : string
    {
        return $this->validationLevel;
    }
    /**
    * The validation level of the certificate:
    <ul><li>Domain validated: Basic check of the identity of the owner of the domain name.</li><li>Organization validated: Company details are verified and integrated in the certificate.</li><li>Extended validated: A thorough verification of your domain name and company details.</li></ul>
    *
    * @param string $validationLevel
    *
    * @return self
    */
    public function setValidationLevel(string $validationLevel) : self
    {
        $this->validationLevel = $validationLevel;
        return $this;
    }
    /**
    * The type of the certificate:
    <ul><li>Standard: Certificate for a single domain.</li><li>Multi domain: Certificate for multiple (sub)domains belonging to the same owner.</li><li>Wildcard: Certificate for all the subdomains.</li></ul>
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * The type of the certificate:
    <ul><li>Standard: Certificate for a single domain.</li><li>Multi domain: Certificate for multiple (sub)domains belonging to the same owner.</li><li>Wildcard: Certificate for all the subdomains.</li></ul>
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}
