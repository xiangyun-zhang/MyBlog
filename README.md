# MyBlog

***
### 进度
***
2016.12.02
* 制作前端原型(By MockPuls)；
* 完成页面布局模板及样式(default.html & default.css)；
* 完成登陆 & 注册页面(sign_in.html & sign_up.html)；
***
2016.12.01
* 整理结构以及需求，建立数据库结构图(By Xmind)；
***
### 博客需求
##### 目的：
通过所学知识自己搭建一个简单的个人博客。
#### 需求：
* 用户有权限，分为管理员权限、博主权限、游客权限。其中管理员权限可以对所有用户（除自己）、日志、留言进行增删改；博主权限可以对自己的日志、留言进行增删改；游客权限只能对网站进行浏览。
* 日志需有标题、正文。正文可以为空，标题不能为空。
* 日志详情页需显示写作时间、作者、内容、上次修改时间，时间精确到年月日时分秒。
* 首页日志显示只显示前三篇日志的日志标题、正文前100字的预览、作者、时间，时间精确到年月日时分秒，其余通过点击日志正文或标题区域进入日志详情页来显示。
* 日志列表显示所有的日志标题、作者、写作时间，时间精确到年月日。每页最多显示10篇日志，其余通过翻页继续显示。博主可在列表中每项最后点击删除按钮对相应日志进行删除。
* 一条留言最多140字。
* 首页留言板只显示留言内容前50字以及留言时间，时间精确到月日。最多显示5条留言，剩余通过点击更多进入留言列表显示。
* 留言列表中显示留言全部内容，作者，时间，时间精确到年月日时分秒。每页最多显示~~15~~10条留言，其余通过翻页继续显示。博主可在列表中每项最后点击删除按钮对相应留言进行删除。
* Tags页面仅通过首页点击Tags栏进入，显示所有文章的标签，并且通过点击标签可以进入相应标签下的所有日志，标签后用括号显示使用次数。
* About页面后续再添加需求说明，暂时空着。。。
