参考https://blog.csdn.net/galen2016/article/details/80778662
参考  https://blog.csdn.net/qq_37029060/article/details/87032409

1、php 下载安装

    下载网站https://www.python.org/downloads/windows/

2、apache 下载安装

    下载网站https://www.apachelounge.com/download/

3、apache环境配置 https://www.jianshu.com/p/4fb84c24c8f6

    新建系统环境变量  变量名：APACHE_HOME 变量值：H:\httpd\Apache24
    在Path中添加进去，变量值;%APACHE_HOME%\bin;

4、 httpd.conf配置

    在 apache 的配置文件约 277行，添加 index.php，形如： 

    <IfModule dir_module> 
        DirectoryIndex index.html index.php 
    </IfModule> 

    PHPIniDir  "H:\php-7.3.21-Win32-VC15-x64"
    LoadModule php7_module "H:\php-7.3.21-Win32-VC15-x64\php7apache2_4.dll"
    AddType application/x-httpd-php .php .html .htm

5、php配置

        将 PHP文件夹目录下的php.ini-development（开发环境，不对外公网开放）或者php.ini-product（产品环境，对外开放，其安全性能更高）二者选其一，复制并修改为 php.ini ，修改内容如下：
        第 724行左右， 将 ;extension_dir = "ext" 修改为 extension_dir = " php根目录/ext"，windows的斜杠为“/”

