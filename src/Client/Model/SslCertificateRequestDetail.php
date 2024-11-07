<?php

namespace Combell\Client\Model;

class SslCertificateRequestDetail
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
     * The id of the certificate request.
     *
     * @var int
     */
    protected $id;
    /**
    * The type of the certificate:
    <ul><li>Standard: Certificate for a single domain.</li><li>Multi domain: Certificate for multiple (sub)domains belonging to the same owner.</li><li>Wildcard: Certificate for all the subdomains.</li></ul>
    *
    * @var string
    */
    protected $certificateType;
    /**
    * The validation level of the certificate:
    <ul><li>Domain validated: Basic check of the identity of the owner of the domain name.</li><li>Organization validated: Company details are verified and integrated in the certificate.</li><li>Extended validated: A thorough verification of your domain name and company details.</li></ul>
    *
    * @var string
    */
    protected $validationLevel;
    /**
     * The vendor of the certificate.
     *
     * @var string
     */
    protected $vendor;
    /**
     * The common name of the certificate request.
     *
     * @var string
     */
    protected $commonName;
    /**
     * The order code of the certificate request.
     *
     * @var string
     */
    protected $orderCode;
    /**
     * The list of all supported domains in the certificate.
     *
     * @var list<SslSubjectAltName>
     */
    protected $subjectAltNames;
    /**
    * The list of validations related to domain verification.<br />
    This is based on the initially configured validations and any changes through the certificate provider's portal will not be reflected here.
    *
    * @var list<SslCertificateRequestValidation>
    */
    protected $validations;
    /**
    * The URL to access and change the information related to domain verification.<br />
    This URL wil expire within the hour after request and is valid within one browser session.
    *
    * @var string
    */
    protected $providerPortalUrl;
    /**
     * The id of the certificate request.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The id of the certificate request.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
    * The type of the certificate:
    <ul><li>Standard: Certificate for a single domain.</li><li>Multi domain: Certificate for multiple (sub)domains belonging to the same owner.</li><li>Wildcard: Certificate for all the subdomains.</li></ul>
    *
    * @return string
    */
    public function getCertificateType(): string
    {
        return $this->certificateType;
    }
    /**
    * The type of the certificate:
    <ul><li>Standard: Certificate for a single domain.</li><li>Multi domain: Certificate for multiple (sub)domains belonging to the same owner.</li><li>Wildcard: Certificate for all the subdomains.</li></ul>
    *
    * @param string $certificateType
    *
    * @return self
    */
    public function setCertificateType(string $certificateType): self
    {
        $this->initialized['certificateType'] = true;
        $this->certificateType = $certificateType;
        return $this;
    }
    /**
    * The validation level of the certificate:
    <ul><li>Domain validated: Basic check of the identity of the owner of the domain name.</li><li>Organization validated: Company details are verified and integrated in the certificate.</li><li>Extended validated: A thorough verification of your domain name and company details.</li></ul>
    *
    * @return string
    */
    public function getValidationLevel(): string
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
    public function setValidationLevel(string $validationLevel): self
    {
        $this->initialized['validationLevel'] = true;
        $this->validationLevel = $validationLevel;
        return $this;
    }
    /**
     * The vendor of the certificate.
     *
     * @return string
     */
    public function getVendor(): string
    {
        return $this->vendor;
    }
    /**
     * The vendor of the certificate.
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(string $vendor): self
    {
        $this->initialized['vendor'] = true;
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * The common name of the certificate request.
     *
     * @return string
     */
    public function getCommonName(): string
    {
        return $this->commonName;
    }
    /**
     * The common name of the certificate request.
     *
     * @param string $commonName
     *
     * @return self
     */
    public function setCommonName(string $commonName): self
    {
        $this->initialized['commonName'] = true;
        $this->commonName = $commonName;
        return $this;
    }
    /**
     * The order code of the certificate request.
     *
     * @return string
     */
    public function getOrderCode(): string
    {
        return $this->orderCode;
    }
    /**
     * The order code of the certificate request.
     *
     * @param string $orderCode
     *
     * @return self
     */
    public function setOrderCode(string $orderCode): self
    {
        $this->initialized['orderCode'] = true;
        $this->orderCode = $orderCode;
        return $this;
    }
    /**
     * The list of all supported domains in the certificate.
     *
     * @return list<SslSubjectAltName>
     */
    public function getSubjectAltNames(): array
    {
        return $this->subjectAltNames;
    }
    /**
     * The list of all supported domains in the certificate.
     *
     * @param list<SslSubjectAltName> $subjectAltNames
     *
     * @return self
     */
    public function setSubjectAltNames(array $subjectAltNames): self
    {
        $this->initialized['subjectAltNames'] = true;
        $this->subjectAltNames = $subjectAltNames;
        return $this;
    }
    /**
    * The list of validations related to domain verification.<br />
    This is based on the initially configured validations and any changes through the certificate provider's portal will not be reflected here.
    *
    * @return list<SslCertificateRequestValidation>
    */
    public function getValidations(): array
    {
        return $this->validations;
    }
    /**
    * The list of validations related to domain verification.<br />
    This is based on the initially configured validations and any changes through the certificate provider's portal will not be reflected here.
    *
    * @param list<SslCertificateRequestValidation> $validations
    *
    * @return self
    */
    public function setValidations(array $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
    /**
    * The URL to access and change the information related to domain verification.<br />
    This URL wil expire within the hour after request and is valid within one browser session.
    *
    * @return string
    */
    public function getProviderPortalUrl(): string
    {
        return $this->providerPortalUrl;
    }
    /**
    * The URL to access and change the information related to domain verification.<br />
    This URL wil expire within the hour after request and is valid within one browser session.
    *
    * @param string $providerPortalUrl
    *
    * @return self
    */
    public function setProviderPortalUrl(string $providerPortalUrl): self
    {
        $this->initialized['providerPortalUrl'] = true;
        $this->providerPortalUrl = $providerPortalUrl;
        return $this;
    }
}