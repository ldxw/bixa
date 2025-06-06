# ============================
# 构建阶段
# ============================
FROM php:8.2-cli AS builder

# 使用阿里云 APT 源，禁用 GPG 校验（适合国内 CI 构建环境）
RUN rm -f /etc/apt/sources.list.d/* && \
    echo "deb [trusted=yes] http://mirrors.aliyun.com/debian bookworm main contrib non-free" > /etc/apt/sources.list && \
    echo "deb [trusted=yes] http://mirrors.aliyun.com/debian bookworm-updates main contrib non-free" >> /etc/apt/sources.list && \
    echo "deb [trusted=yes] http://mirrors.aliyun.com/debian-security bookworm-security main contrib non-free" >> /etc/apt/sources.list


# 安装依赖
RUN apt-get update && apt-get install -y \
    git unzip zip curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip ftp

# 安装 Composer（使用官方镜像）
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 设置阿里云源
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/

# 项目目录
WORKDIR /var/www/html
COPY . .

# 安装 PHP 依赖
RUN composer install --optimize-autoloader --no-dev && rm -rf ~/.composer/cache

# ============================
# 运行阶段
# ============================
FROM php:8.2-apache

# 使用阿里云 APT 源，禁用 GPG 校验（适合国内 CI 构建环境）
RUN rm -f /etc/apt/sources.list.d/* && \
    echo "deb [trusted=yes] http://mirrors.aliyun.com/debian bookworm main contrib non-free" > /etc/apt/sources.list && \
    echo "deb [trusted=yes] http://mirrors.aliyun.com/debian bookworm-updates main contrib non-free" >> /etc/apt/sources.list && \
    echo "deb [trusted=yes] http://mirrors.aliyun.com/debian-security bookworm-security main contrib non-free" >> /etc/apt/sources.list



# 安装依赖
RUN apt-get update && apt-get install -y \
    libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip ftp \
    && a2enmod rewrite
    
# 设置 PHP 上传参数和超时时间
COPY docker/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

# 启用 .htaccess 和设置 public 为网站根目录
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf && \
    sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# 拷贝构建好的代码（用于挂载空目录时恢复）
COPY --from=builder /var/www/html /var/www/html.bak

# 修复权限（确保 www-data 能访问备份）
RUN chown -R www-data:www-data /var/www/html.bak


# 添加入口脚本
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# 设置挂载点
WORKDIR /var/www/html
VOLUME ["/var/www/html"]

# 设置启动命令
ENTRYPOINT ["entrypoint.sh"]
CMD ["apache2-foreground"]
