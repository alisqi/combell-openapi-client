<?php

namespace Combell\Client\Model;

class DnsRecord
{
    /**
    * The id of the record
    This value is ignored for creation of new records.
    *
    * @var string
    */
    protected $id;
    /**
     * The type of the record (A, MX, CNAME, SRV, TXT, ALIAS and TLSA).
     *
     * @var string
     */
    protected $type;
    /**
    * The name of the record.<br />
    This is the host name, alias defined by the record.<br />
    An empty record or '@' is equal to the domain name.<br />
    Applies to A, MX, CNAME, TXT, ALIAS and TLSA records.<br />
    When type is TLSA the recommended value format is port number, protocol and host: _25._tcp.<br />
    Does not apply for SRV records.
    *
    * @var string
    */
    protected $recordName;
    /**
    * Time to live of the record in seconds.<br />
    It defines the time frame that clients can cache the information.<br />
    The value MUST be between 60 and 86400. The default value is 3600 (= 1 hour).
    *
    * @var int
    */
    protected $ttl = 3600;
    /**
    * Variable data depending on the record type.
    <ul><li>A: the IPv4 address.</li><li>CNAME: canonical name of an alias.</li><li>MX: fully qualified domain name of a mail host.</li><li>SRV: does not apply. Data for the SRV records can be found in specific properties.</li><li>TXT: free form text data.</li><li>ALIAS: canonical name of an alias.</li><li>TLSA: format should match specific values for usage, selector, matching type and data: "{usage} {selector} {matching_type} {data}"
           <ul><li>The usage. The first field after the TLSA text in the DNS RR, specifies how to verify the certificate.<br /><ul><li>A value of 0 is for what is commonly called CA constraint (and PKIX-TA). The certificate provided when establishing TLS must be issued by the listed root-CA or one of its intermediate CAs, with a valid certification path to a root-CA already trusted by the application doing the verification.</li><li>A value of 1 is for what is commonly called Service certificate constraint (and PKIX-EE). The certificate used must match the TLSA record exactly, and it must also pass PKIX certification path validation to a trusted root-CA.</li><li>A value of 2 is for what is commonly called Trust Anchor Assertion (and DANE-TA). The certificate used has a valid certification path pointing back to the certificate mention in this record, but there is no need for it to pass the PKIX certification path validation to a trusted root-CA.</li><li>A value of 3 is for what is commonly called Domain issued certificate (and DANE-EE). The services uses a self-signed certificate. It is not signed by anyone else, and is exactly this record.</li></ul></li><li>The selector. When connecting to the service and a certificate is received, the selector field specifies which parts of it should be checked.<br /><ul><li>A value of 0 means to select the entire certificate for matching.</li><li>A value of 1 means to select just the public key for certificate matching. Matching the public key is often sufficient, as this is likely to be unique.</li></ul></li><li>The matching type.<br /><ul><li>A type of 0 means the entire information selected is present in the certificate association data.</li><li>A type of 1 means to do a SHA-256 hash of the selected data.</li><li>A type of 2 means to do a SHA-512 hash of the selected data.</li></ul></li><li>The actual data to be matched given the settings of the other fields. This is a long text string of hexadecimal data.</li></ul></li></ul>
    *
    * @var string
    */
    protected $content;
    /**
    * The priority for MX or SRV records.<br />
    A lower value means more preferred.<br />
    The value MUST be a positive integer less or equal to 9999.
    *
    * @var int
    */
    protected $priority = 10;
    /**
    * The symbolic name of the desired service for SRV records.<br />
    Editing the value is not possible. You should add a new SRV record and can delete the existing record.
    *
    * @var string
    */
    protected $service;
    /**
    * The weight for SRV records with the same priority.<br />
    A higher value means more preferred.
    *
    * @var int
    */
    protected $weight = 0;
    /**
    * The canonical hostname of the machine providing the service for SRV records.<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @var string
    */
    protected $target;
    /**
    * Used for the creation of SRV records. Possible options: TCP, UDP, ...<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @var string
    */
    protected $protocol = 'TCP';
    /**
    * The port for SRV records.<br />
    The value MUST be a positive integer.<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @var int
    */
    protected $port;
    /**
    * The id of the record
    This value is ignored for creation of new records.
    *
    * @return string
    */
    public function getId(): string
    {
        return $this->id;
    }
    /**
    * The id of the record
    This value is ignored for creation of new records.
    *
    * @param string $id
    *
    * @return self
    */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The type of the record (A, MX, CNAME, SRV, TXT, ALIAS and TLSA).
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the record (A, MX, CNAME, SRV, TXT, ALIAS and TLSA).
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
    * The name of the record.<br />
    This is the host name, alias defined by the record.<br />
    An empty record or '@' is equal to the domain name.<br />
    Applies to A, MX, CNAME, TXT, ALIAS and TLSA records.<br />
    When type is TLSA the recommended value format is port number, protocol and host: _25._tcp.<br />
    Does not apply for SRV records.
    *
    * @return string
    */
    public function getRecordName(): string
    {
        return $this->recordName;
    }
    /**
    * The name of the record.<br />
    This is the host name, alias defined by the record.<br />
    An empty record or '@' is equal to the domain name.<br />
    Applies to A, MX, CNAME, TXT, ALIAS and TLSA records.<br />
    When type is TLSA the recommended value format is port number, protocol and host: _25._tcp.<br />
    Does not apply for SRV records.
    *
    * @param string $recordName
    *
    * @return self
    */
    public function setRecordName(string $recordName): self
    {
        $this->recordName = $recordName;
        return $this;
    }
    /**
    * Time to live of the record in seconds.<br />
    It defines the time frame that clients can cache the information.<br />
    The value MUST be between 60 and 86400. The default value is 3600 (= 1 hour).
    *
    * @return int
    */
    public function getTtl(): int
    {
        return $this->ttl;
    }
    /**
    * Time to live of the record in seconds.<br />
    It defines the time frame that clients can cache the information.<br />
    The value MUST be between 60 and 86400. The default value is 3600 (= 1 hour).
    *
    * @param int $ttl
    *
    * @return self
    */
    public function setTtl(int $ttl): self
    {
        $this->ttl = $ttl;
        return $this;
    }
    /**
    * Variable data depending on the record type.
    <ul><li>A: the IPv4 address.</li><li>CNAME: canonical name of an alias.</li><li>MX: fully qualified domain name of a mail host.</li><li>SRV: does not apply. Data for the SRV records can be found in specific properties.</li><li>TXT: free form text data.</li><li>ALIAS: canonical name of an alias.</li><li>TLSA: format should match specific values for usage, selector, matching type and data: "{usage} {selector} {matching_type} {data}"
           <ul><li>The usage. The first field after the TLSA text in the DNS RR, specifies how to verify the certificate.<br /><ul><li>A value of 0 is for what is commonly called CA constraint (and PKIX-TA). The certificate provided when establishing TLS must be issued by the listed root-CA or one of its intermediate CAs, with a valid certification path to a root-CA already trusted by the application doing the verification.</li><li>A value of 1 is for what is commonly called Service certificate constraint (and PKIX-EE). The certificate used must match the TLSA record exactly, and it must also pass PKIX certification path validation to a trusted root-CA.</li><li>A value of 2 is for what is commonly called Trust Anchor Assertion (and DANE-TA). The certificate used has a valid certification path pointing back to the certificate mention in this record, but there is no need for it to pass the PKIX certification path validation to a trusted root-CA.</li><li>A value of 3 is for what is commonly called Domain issued certificate (and DANE-EE). The services uses a self-signed certificate. It is not signed by anyone else, and is exactly this record.</li></ul></li><li>The selector. When connecting to the service and a certificate is received, the selector field specifies which parts of it should be checked.<br /><ul><li>A value of 0 means to select the entire certificate for matching.</li><li>A value of 1 means to select just the public key for certificate matching. Matching the public key is often sufficient, as this is likely to be unique.</li></ul></li><li>The matching type.<br /><ul><li>A type of 0 means the entire information selected is present in the certificate association data.</li><li>A type of 1 means to do a SHA-256 hash of the selected data.</li><li>A type of 2 means to do a SHA-512 hash of the selected data.</li></ul></li><li>The actual data to be matched given the settings of the other fields. This is a long text string of hexadecimal data.</li></ul></li></ul>
    *
    * @return string
    */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
    * Variable data depending on the record type.
    <ul><li>A: the IPv4 address.</li><li>CNAME: canonical name of an alias.</li><li>MX: fully qualified domain name of a mail host.</li><li>SRV: does not apply. Data for the SRV records can be found in specific properties.</li><li>TXT: free form text data.</li><li>ALIAS: canonical name of an alias.</li><li>TLSA: format should match specific values for usage, selector, matching type and data: "{usage} {selector} {matching_type} {data}"
           <ul><li>The usage. The first field after the TLSA text in the DNS RR, specifies how to verify the certificate.<br /><ul><li>A value of 0 is for what is commonly called CA constraint (and PKIX-TA). The certificate provided when establishing TLS must be issued by the listed root-CA or one of its intermediate CAs, with a valid certification path to a root-CA already trusted by the application doing the verification.</li><li>A value of 1 is for what is commonly called Service certificate constraint (and PKIX-EE). The certificate used must match the TLSA record exactly, and it must also pass PKIX certification path validation to a trusted root-CA.</li><li>A value of 2 is for what is commonly called Trust Anchor Assertion (and DANE-TA). The certificate used has a valid certification path pointing back to the certificate mention in this record, but there is no need for it to pass the PKIX certification path validation to a trusted root-CA.</li><li>A value of 3 is for what is commonly called Domain issued certificate (and DANE-EE). The services uses a self-signed certificate. It is not signed by anyone else, and is exactly this record.</li></ul></li><li>The selector. When connecting to the service and a certificate is received, the selector field specifies which parts of it should be checked.<br /><ul><li>A value of 0 means to select the entire certificate for matching.</li><li>A value of 1 means to select just the public key for certificate matching. Matching the public key is often sufficient, as this is likely to be unique.</li></ul></li><li>The matching type.<br /><ul><li>A type of 0 means the entire information selected is present in the certificate association data.</li><li>A type of 1 means to do a SHA-256 hash of the selected data.</li><li>A type of 2 means to do a SHA-512 hash of the selected data.</li></ul></li><li>The actual data to be matched given the settings of the other fields. This is a long text string of hexadecimal data.</li></ul></li></ul>
    *
    * @param string $content
    *
    * @return self
    */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
    * The priority for MX or SRV records.<br />
    A lower value means more preferred.<br />
    The value MUST be a positive integer less or equal to 9999.
    *
    * @return int
    */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
    * The priority for MX or SRV records.<br />
    A lower value means more preferred.<br />
    The value MUST be a positive integer less or equal to 9999.
    *
    * @param int $priority
    *
    * @return self
    */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
    * The symbolic name of the desired service for SRV records.<br />
    Editing the value is not possible. You should add a new SRV record and can delete the existing record.
    *
    * @return string
    */
    public function getService(): string
    {
        return $this->service;
    }
    /**
    * The symbolic name of the desired service for SRV records.<br />
    Editing the value is not possible. You should add a new SRV record and can delete the existing record.
    *
    * @param string $service
    *
    * @return self
    */
    public function setService(string $service): self
    {
        $this->service = $service;
        return $this;
    }
    /**
    * The weight for SRV records with the same priority.<br />
    A higher value means more preferred.
    *
    * @return int
    */
    public function getWeight(): int
    {
        return $this->weight;
    }
    /**
    * The weight for SRV records with the same priority.<br />
    A higher value means more preferred.
    *
    * @param int $weight
    *
    * @return self
    */
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
    * The canonical hostname of the machine providing the service for SRV records.<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @return string
    */
    public function getTarget(): string
    {
        return $this->target;
    }
    /**
    * The canonical hostname of the machine providing the service for SRV records.<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @param string $target
    *
    * @return self
    */
    public function setTarget(string $target): self
    {
        $this->target = $target;
        return $this;
    }
    /**
    * Used for the creation of SRV records. Possible options: TCP, UDP, ...<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @return string
    */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
    * Used for the creation of SRV records. Possible options: TCP, UDP, ...<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @param string $protocol
    *
    * @return self
    */
    public function setProtocol(string $protocol): self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
    * The port for SRV records.<br />
    The value MUST be a positive integer.<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @return int
    */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
    * The port for SRV records.<br />
    The value MUST be a positive integer.<br />
    Editing the value is not possible. You should add a new SRV record and delete the existing record.
    *
    * @param int $port
    *
    * @return self
    */
    public function setPort(int $port): self
    {
        $this->port = $port;
        return $this;
    }
}
