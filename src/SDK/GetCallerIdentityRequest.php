<?php

namespace CodeMonkeyLuffy\AliSTS\SDK;

use CodeMonkeyLuffy\Aliyun\Core\RpcAcsRequest;

class GetCallerIdentityRequest extends RpcAcsRequest
{
    function __construct()
    {
        parent::__construct("Sts", "2015-04-01", "GetCallerIdentity");
        $this->setProtocol("https");
        $this->setMethod("POST");
    }

}
