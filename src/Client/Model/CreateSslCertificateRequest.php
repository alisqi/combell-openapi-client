<?php

namespace Combell\Client\Model;

class CreateSslCertificateRequest
{
    /**
    * The certificate signing request data.<br />
    The certificate signing request subject should contain following attributes:<br /><table><tr><th>Name</th><th>Code</th><th>Format</th></tr><tr><td>CommonName</td><td>CN</td><td>Valid domain name, for example site.be, alias.site.be or *.site.be</td></tr><tr><td>Country</td><td>C</td><td>ISO 3166-1 alpha-2 country code</td></tr><tr><td>State</td><td>ST</td><td></td></tr><tr><td>Locality</td><td>L</td><td></td></tr><tr><td>Organization</td><td>O</td><td></td></tr><tr><td>OrganizationUnit</td><td>OU</td><td></td></tr><tr><td>EmailAddress</td><td>E</td><td>Valid email address</td></tr></table>
    The certificate signing request should also contain all the additional aliases and domains (SAN's) for the certificate.
    *
    * @var string
    */
    protected $csr;
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
    * List of additional validation attributes for the certificate when choosing organization or extended validation.
    <table><tr><th>Name</th><th>Info</th><th>Required</th></tr><tr><td>Firstname</td><td>Firstname of the technical contact</td><td>Yes</td></tr><tr><td>Lastname</td><td>Lastname of the technical contact</td><td>Yes</td></tr><tr><td>Phone</td><td>Phone of the technical contact</td><td>Yes</td></tr><tr><td>EmailAddress</td><td>Email address of the technical contact</td><td>Yes</td></tr><tr><td>Street</td><td>Address street of the organization</td><td>Yes</td></tr><tr><td>Number</td><td>Address house number of the organization</td><td>Yes</td></tr><tr><td>PostalCode</td><td>Address postal code of the organization</td><td>Yes</td></tr><tr><td>VatCountryCode</td><td>VAT country code of the organization, ISO 3166-1 alpha-2 country code</td><td>Yes</td></tr><tr><td>OrganizationNumber</td><td>Business number of the organization</td><td>No</td></tr></table>
    *
    * @var AdditionalValidationAttribute[]
    */
    protected $additionalValidationAttributes;
    /**
    * The certificate signing request data.<br />
    The certificate signing request subject should contain following attributes:<br /><table><tr><th>Name</th><th>Code</th><th>Format</th></tr><tr><td>CommonName</td><td>CN</td><td>Valid domain name, for example site.be, alias.site.be or *.site.be</td></tr><tr><td>Country</td><td>C</td><td>ISO 3166-1 alpha-2 country code</td></tr><tr><td>State</td><td>ST</td><td></td></tr><tr><td>Locality</td><td>L</td><td></td></tr><tr><td>Organization</td><td>O</td><td></td></tr><tr><td>OrganizationUnit</td><td>OU</td><td></td></tr><tr><td>EmailAddress</td><td>E</td><td>Valid email address</td></tr></table>
    The certificate signing request should also contain all the additional aliases and domains (SAN's) for the certificate.
    *
    * @return string
    */
    public function getCsr(): string
    {
        return $this->csr;
    }
    /**
    * The certificate signing request data.<br />
    The certificate signing request subject should contain following attributes:<br /><table><tr><th>Name</th><th>Code</th><th>Format</th></tr><tr><td>CommonName</td><td>CN</td><td>Valid domain name, for example site.be, alias.site.be or *.site.be</td></tr><tr><td>Country</td><td>C</td><td>ISO 3166-1 alpha-2 country code</td></tr><tr><td>State</td><td>ST</td><td></td></tr><tr><td>Locality</td><td>L</td><td></td></tr><tr><td>Organization</td><td>O</td><td></td></tr><tr><td>OrganizationUnit</td><td>OU</td><td></td></tr><tr><td>EmailAddress</td><td>E</td><td>Valid email address</td></tr></table>
    The certificate signing request should also contain all the additional aliases and domains (SAN's) for the certificate.
    *
    * @param string $csr
    *
    * @return self
    */
    public function setCsr(string $csr): self
    {
        $this->csr = $csr;
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
        $this->validationLevel = $validationLevel;
        return $this;
    }
    /**
    * List of additional validation attributes for the certificate when choosing organization or extended validation.
    <table><tr><th>Name</th><th>Info</th><th>Required</th></tr><tr><td>Firstname</td><td>Firstname of the technical contact</td><td>Yes</td></tr><tr><td>Lastname</td><td>Lastname of the technical contact</td><td>Yes</td></tr><tr><td>Phone</td><td>Phone of the technical contact</td><td>Yes</td></tr><tr><td>EmailAddress</td><td>Email address of the technical contact</td><td>Yes</td></tr><tr><td>Street</td><td>Address street of the organization</td><td>Yes</td></tr><tr><td>Number</td><td>Address house number of the organization</td><td>Yes</td></tr><tr><td>PostalCode</td><td>Address postal code of the organization</td><td>Yes</td></tr><tr><td>VatCountryCode</td><td>VAT country code of the organization, ISO 3166-1 alpha-2 country code</td><td>Yes</td></tr><tr><td>OrganizationNumber</td><td>Business number of the organization</td><td>No</td></tr></table>
    *
    * @return AdditionalValidationAttribute[]
    */
    public function getAdditionalValidationAttributes(): array
    {
        return $this->additionalValidationAttributes;
    }
    /**
    * List of additional validation attributes for the certificate when choosing organization or extended validation.
    <table><tr><th>Name</th><th>Info</th><th>Required</th></tr><tr><td>Firstname</td><td>Firstname of the technical contact</td><td>Yes</td></tr><tr><td>Lastname</td><td>Lastname of the technical contact</td><td>Yes</td></tr><tr><td>Phone</td><td>Phone of the technical contact</td><td>Yes</td></tr><tr><td>EmailAddress</td><td>Email address of the technical contact</td><td>Yes</td></tr><tr><td>Street</td><td>Address street of the organization</td><td>Yes</td></tr><tr><td>Number</td><td>Address house number of the organization</td><td>Yes</td></tr><tr><td>PostalCode</td><td>Address postal code of the organization</td><td>Yes</td></tr><tr><td>VatCountryCode</td><td>VAT country code of the organization, ISO 3166-1 alpha-2 country code</td><td>Yes</td></tr><tr><td>OrganizationNumber</td><td>Business number of the organization</td><td>No</td></tr></table>
    *
    * @param AdditionalValidationAttribute[] $additionalValidationAttributes
    *
    * @return self
    */
    public function setAdditionalValidationAttributes(array $additionalValidationAttributes): self
    {
        $this->additionalValidationAttributes = $additionalValidationAttributes;
        return $this;
    }
}
