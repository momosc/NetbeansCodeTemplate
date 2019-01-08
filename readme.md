# Netbeans自带代码模板

PHP代码规范,统一编码风格(phpDoc)。

# phpDoc

  - 当多名程序员在多个项目中合作时，就需要一个共同的编码规范， 而NetbeansCodeTemplate.php中的风格规范源自于多个不同项目代码风格的共同特性， 我们都遵循这个编码风格。


### phpDoc.php

```php
require_once 'NetbeansCodeTemplate.php';
$NetbeansCodeTemplate = new  NetbeansCodeTemplate();
$defaultTplList = $NetbeansCodeTemplate->getDefaultTplList();
```
