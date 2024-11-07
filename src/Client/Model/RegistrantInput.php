<?php

namespace Combell\Client\Model;

class RegistrantInput
{
    /**
     * First name of the registrant.
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last name of the registrant.
     *
     * @var string
     */
    protected $lastName;
    /**
     * Address of the registrant.
     *
     * @var string
     */
    protected $address;
    /**
     * Postal code of the registrant.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * City of the registrant.
     *
     * @var string
     */
    protected $city;
    /**
    * Country code of the registrant.
    Syntax: 'BE', 'NL, 'FR', ...
    *
    * @var string
    */
    protected $countryCode;
    /**
     * Email of the registrant.
     *
     * @var string
     */
    protected $email;
    /**
    * Fax of the registrant.
    Syntax: '+32.123456789'
    *
    * @var string
    */
    protected $fax;
    /**
    * Phone of the registrant.<br />
    Syntax: '+32.123456789'
    *
    * @var string
    */
    protected $phone;
    /**
    * Language code of the registrant.
    Syntax: 'nl', 'fr', 'en', 'de', ...
    *
    * @var string
    */
    protected $languageCode;
    /**
    * Company name of the registrant.<br />
    The registrant is a company if not empty, otherwise the registrant is an individual when validating extra fields.
    *
    * @var string
    */
    protected $companyName;
    /**
    * Enterprise number of the registrant.<br />
    Syntax: 'BE0123456789'
    *
    * @var string
    */
    protected $enterpriseNumber;
    /**
    * List of registrant extra fields for the domain name.
    <table><tr><th>Extension</th><th>Registrant specifics</th><th>Required extra field(s)</th></tr><tr><td>.dk</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.es</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.es</td><td>is an individual</td><td>PassportNumber</td></tr><tr><td>.fr</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.it</td><td>is an individual and has country code 'IT'</td><td>CodiceFiscal</td></tr><tr><td>.it</td><td>is an individual and has not country code 'IT'</td><td>PassportNumber</td></tr><tr><td>.nu</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.nu</td><td>is an individual</td><td>PassportNumber</td></tr><tr><td>.se</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.se</td><td>is an individual</td><td>PassportNumber</td></tr></table>
    *
    * @var ExtraField[]
    */
    protected $extraFields;
    /**
     * First name of the registrant.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * First name of the registrant.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Last name of the registrant.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Last name of the registrant.
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Address of the registrant.
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
    /**
     * Address of the registrant.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Postal code of the registrant.
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Postal code of the registrant.
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * City of the registrant.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City of the registrant.
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }
    /**
    * Country code of the registrant.
    Syntax: 'BE', 'NL, 'FR', ...
    *
    * @return string
    */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
    * Country code of the registrant.
    Syntax: 'BE', 'NL, 'FR', ...
    *
    * @param string $countryCode
    *
    * @return self
    */
    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Email of the registrant.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email of the registrant.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
    * Fax of the registrant.
    Syntax: '+32.123456789'
    *
    * @return string
    */
    public function getFax(): string
    {
        return $this->fax;
    }
    /**
    * Fax of the registrant.
    Syntax: '+32.123456789'
    *
    * @param string $fax
    *
    * @return self
    */
    public function setFax(string $fax): self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
    * Phone of the registrant.<br />
    Syntax: '+32.123456789'
    *
    * @return string
    */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
    * Phone of the registrant.<br />
    Syntax: '+32.123456789'
    *
    * @param string $phone
    *
    * @return self
    */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
    * Language code of the registrant.
    Syntax: 'nl', 'fr', 'en', 'de', ...
    *
    * @return string
    */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
    /**
    * Language code of the registrant.
    Syntax: 'nl', 'fr', 'en', 'de', ...
    *
    * @param string $languageCode
    *
    * @return self
    */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
    * Company name of the registrant.<br />
    The registrant is a company if not empty, otherwise the registrant is an individual when validating extra fields.
    *
    * @return string
    */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
    * Company name of the registrant.<br />
    The registrant is a company if not empty, otherwise the registrant is an individual when validating extra fields.
    *
    * @param string $companyName
    *
    * @return self
    */
    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
    * Enterprise number of the registrant.<br />
    Syntax: 'BE0123456789'
    *
    * @return string
    */
    public function getEnterpriseNumber(): string
    {
        return $this->enterpriseNumber;
    }
    /**
    * Enterprise number of the registrant.<br />
    Syntax: 'BE0123456789'
    *
    * @param string $enterpriseNumber
    *
    * @return self
    */
    public function setEnterpriseNumber(string $enterpriseNumber): self
    {
        $this->enterpriseNumber = $enterpriseNumber;
        return $this;
    }
    /**
    * List of registrant extra fields for the domain name.
    <table><tr><th>Extension</th><th>Registrant specifics</th><th>Required extra field(s)</th></tr><tr><td>.dk</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.es</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.es</td><td>is an individual</td><td>PassportNumber</td></tr><tr><td>.fr</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.it</td><td>is an individual and has country code 'IT'</td><td>CodiceFiscal</td></tr><tr><td>.it</td><td>is an individual and has not country code 'IT'</td><td>PassportNumber</td></tr><tr><td>.nu</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.nu</td><td>is an individual</td><td>PassportNumber</td></tr><tr><td>.se</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.se</td><td>is an individual</td><td>PassportNumber</td></tr></table>
    *
    * @return ExtraField[]
    */
    public function getExtraFields(): array
    {
        return $this->extraFields;
    }
    /**
    * List of registrant extra fields for the domain name.
    <table><tr><th>Extension</th><th>Registrant specifics</th><th>Required extra field(s)</th></tr><tr><td>.dk</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.es</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.es</td><td>is an individual</td><td>PassportNumber</td></tr><tr><td>.fr</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.it</td><td>is an individual and has country code 'IT'</td><td>CodiceFiscal</td></tr><tr><td>.it</td><td>is an individual and has not country code 'IT'</td><td>PassportNumber</td></tr><tr><td>.nu</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.nu</td><td>is an individual</td><td>PassportNumber</td></tr><tr><td>.se</td><td>is a company</td><td>CompanyNumber</td></tr><tr><td>.se</td><td>is an individual</td><td>PassportNumber</td></tr></table>
    *
    * @param ExtraField[] $extraFields
    *
    * @return self
    */
    public function setExtraFields(array $extraFields): self
    {
        $this->extraFields = $extraFields;
        return $this;
    }
}
