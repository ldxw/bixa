#!/bin/bash

# 如果挂载的目录是空的，则从备份恢复
if [ -z "$(ls -A /var/www/html)" ]; then
  echo "⚠️  Detected empty /var/www/html, restoring from backup..."
  cp -a /var/www/html.bak/. /var/www/html/
  chown -R www-data:www-data /var/www/html
else
  echo "✅  /var/www/html is not empty. Skipping restore."
fi

# 修复权限（确保安装器/日志可写）
#echo "🔧 Setting ownership to www-data..."
#chown -R www-data:www-data /var/www/html

exec "$@"
