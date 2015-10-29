# yii2-sweetalert-widget
```
http://t4t5.github.io/sweetalert/
```

### composer.json
---
```json
"require": {
    "xj/yii2-sweetalert-widget": "~1.0"
},
```

Assets
---
```php
//Base Assets
xj\sweetalert\SweetalertAsset::register($this);

//Themes Assets
xj\sweetalert\themes\FacebookAsset::register($this);
xj\sweetalert\themes\GoogleAsset::register($this);
xj\sweetalert\themes\TwitterAsset::register($this);
```
