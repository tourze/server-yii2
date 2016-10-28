# Server模块与Yii2框架结合

如果`composer update`时提示：

     yiisoft/yii2 2.0.6 requires bower-asset/jquery 2.1.*@stable | 1.11.*@stable -> no matching package found.

或类似错误，可以把vendor目录删除后重新执行一次命令。该错误疑似是`fxp/composer-asset-plugin`的问题。

## 迁移

1. 将所有调用到`\yii\web\Application`的地方修改为调用`tourze\ServerYii2\Web\Application`。

2. 将日志
