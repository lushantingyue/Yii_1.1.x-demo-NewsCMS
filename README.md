## Yii_1.1.x-demo-NewsCMS
## Yii框架 搭建博客demo

### Yii_1.1视频学习笔记
#### part1.提纲概要
#### part2. 
##### 电话号码管理系统 |-1.navicate运行SQL文件生成本地数据库表
##### |-2.开启gii模块,根据设计好的数据表结构, 操作Model生成器和CURD生成器, 此时相应的 模型,控制器,视图类均已生成
##### |-3.userType数据的遍历

#### part3. 
##### |-显示数据库操作log信息至页脚
##### |-新闻信息CRUD,前后端分离的概念
##### |-模块, 模块实现前后端分离 module generator (module-controll-action结构)
##### |-用户登录模块 (用户账号CRUD,密码MD5加密存储, Yii对用户的权限设置)
##### |-完善新闻增删改界面和逻辑(下拉框,文本框,自动化日期, 注意表单数据的验证 rules()函数)
##### |-添加富文本编辑器 ckEditor, 配置图片上传
##### |-新闻列表的展示UI调整 -- model relation配置外键 (表关联属性 )
##### |-新闻内容Manage的展示UI调整 -- zii.*.CGridview的列表参数的理解使用

#### part4.
##### |-Yii框架的 View体系
##### |-log,xdebug 控制台console调试信息
##### |-模板复用(需要重新配置 css/js/images的解析路径, 用到全局参数baseUrl)
##### |-免费模板的使用, 配置主题(理解controller->themes->view/layout的解析过程)
##### |-文件上传（wiki： http://www.yiiframework.com/wiki/2/how-to-upload-a-file-using-a-model）
##### |-ajax异步上传（jquery-file-upload的使用）
