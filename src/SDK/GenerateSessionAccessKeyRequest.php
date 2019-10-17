<?php

namespace CodeMonkeyLuffy\AliSTS\SDK;

use CodeMonkeyLuffy\Aliyun\Core\RpcAcsRequest;

class GenerateSessionAccessKeyRequest extends RpcAcsRequest
{
    function __construct()
    {
        parent::__construct("Sts", "2015-04-01", "GenerateSessionAccessKey");
        $this->setProtocol("https");
        $this->setMethod("POST");
    }

    private $durationSeconds;

    public function getDurationSeconds()
    {
        return $this->durationSeconds;
    }

    public function setDurationSeconds($durationSeconds)
    {
        $this->durationSeconds = $durationSeconds;
        $this->queryParameters["DurationSeconds"] = $durationSeconds;
    }

}
