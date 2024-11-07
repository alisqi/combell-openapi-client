<?php

namespace Combell\Client\Model;

class ScheduledTask
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
    * The id of the scheduled task.<br />
    This value is ignored for creation of new scheduled tasks.
    *
    * @var string
    */
    protected $id;
    /**
     * Enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
    * Cron expression of scheduled task.<br />
    5-digit expressions (*/5 * * * *) are required in the following sequence:<br /><ul><li>Minute (0 - 59, also */5, */10, */15 and */30 as every 5 minutes, every 10 minutes, every quarter or every half-hour are allowed)</li><li>Hour (0 - 23, also * as every hour is allowed)</li><li>Day of the month (1 - 31, also * as every day is allowed)</li><li>Month (1 - 12 as January to December, also * as every month is allowed)</li><li>Day of the week (1 - 7 as Monday to Sunday, also * as every day is allowed)</li></ul>
    *
    * @var string
    */
    protected $cronExpression;
    /**
     * Absolute path from this linux hosting to execute.
     *
     * @var string
     */
    protected $scriptLocation;
    /**
    * The id of the scheduled task.<br />
    This value is ignored for creation of new scheduled tasks.
    *
    * @return string
    */
    public function getId(): string
    {
        return $this->id;
    }
    /**
    * The id of the scheduled task.<br />
    This value is ignored for creation of new scheduled tasks.
    *
    * @param string $id
    *
    * @return self
    */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Enabled.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Enabled.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
    * Cron expression of scheduled task.<br />
    5-digit expressions (*/5 * * * *) are required in the following sequence:<br /><ul><li>Minute (0 - 59, also */5, */10, */15 and */30 as every 5 minutes, every 10 minutes, every quarter or every half-hour are allowed)</li><li>Hour (0 - 23, also * as every hour is allowed)</li><li>Day of the month (1 - 31, also * as every day is allowed)</li><li>Month (1 - 12 as January to December, also * as every month is allowed)</li><li>Day of the week (1 - 7 as Monday to Sunday, also * as every day is allowed)</li></ul>
    *
    * @return string
    */
    public function getCronExpression(): string
    {
        return $this->cronExpression;
    }
    /**
    * Cron expression of scheduled task.<br />
    5-digit expressions (*/5 * * * *) are required in the following sequence:<br /><ul><li>Minute (0 - 59, also */5, */10, */15 and */30 as every 5 minutes, every 10 minutes, every quarter or every half-hour are allowed)</li><li>Hour (0 - 23, also * as every hour is allowed)</li><li>Day of the month (1 - 31, also * as every day is allowed)</li><li>Month (1 - 12 as January to December, also * as every month is allowed)</li><li>Day of the week (1 - 7 as Monday to Sunday, also * as every day is allowed)</li></ul>
    *
    * @param string $cronExpression
    *
    * @return self
    */
    public function setCronExpression(string $cronExpression): self
    {
        $this->initialized['cronExpression'] = true;
        $this->cronExpression = $cronExpression;
        return $this;
    }
    /**
     * Absolute path from this linux hosting to execute.
     *
     * @return string
     */
    public function getScriptLocation(): string
    {
        return $this->scriptLocation;
    }
    /**
     * Absolute path from this linux hosting to execute.
     *
     * @param string $scriptLocation
     *
     * @return self
     */
    public function setScriptLocation(string $scriptLocation): self
    {
        $this->initialized['scriptLocation'] = true;
        $this->scriptLocation = $scriptLocation;
        return $this;
    }
}