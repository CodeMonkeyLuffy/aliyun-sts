<?php

return [
    /*STS配置*/
    'sts' => [
        'AccessKeyID' => '****密码不给看****',
        'AccessKeySecret' => '****密码不给看****',
        'regionId' => 'cn-hangzhou',
        'endpoint' => 'sts.cn-hangzhou.aliyuncs.com',
        'roleArn' => 'acs:ram::1******38:role/aliyun*******rkfdale',  // 角色资源描述符，在RAM的控制台的资源详情页上可以获取
        'timeout' => '3600',  // 令牌过期时间
        'client_name' => 'client_name',  // setRoleSessionName可以不改
        // 在扮演角色(AssumeRole)时，可以附加一个授权策略，进一步限制角色的权限；
        // 详情请参考《RAM使用指南》
        // 这代表所有权限
        'policy' => [
            'Statement' => [
                [
                    'Action' => ["oss:*"],
                    'Effect' => 'Allow',
                    'Resource' => ["acs:oss:*:*:*"],
                ]
            ]
        ]
    ]
];
