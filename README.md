# Aliyun Sts for PHP

## Installing

```shell
$ composer require codemonkeyluffy/aliyun-sts
```

### configuration 

拷贝项目下`src/config.php`到你项目中，进行配置其中sts。

配置示例代码：

```php


return [

    /*STS配置*/
    'sts' => [
        'AccessKeyID' => '****密码不给看****',
        'AccessKeySecret' => '****密码不给看****',
        'regionId' => 'cn-beijing',
        'endpoint' => 'sts.cn-beijing.aliyuncs.com',
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


```

## Example


```php
use CodeMonkeyLuffy\AliSTS\Services\STSService;
 
        try {
            $config = include 'your_path/config.php';
            $sts = new STSService($config);
            $result =  $sts->getToken(); // 获取播放权限参数
            print_r($result);
            return $result;
        } catch (\Exception $e) {
            $err = "Error : 错误：" . $e->getMessage();
            echo $err . PHP_EOL;
        }

```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

