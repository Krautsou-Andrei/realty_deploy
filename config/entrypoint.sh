#!/bin/bash
set -e

# Ждем, пока файл wp-config.php будет создан
while [ ! -f /var/www/html/wp-config.php ]; do
    sleep 1
done

# Добавляем строку для WP_MEMORY_LIMIT, если она еще не добавлена
if ! grep -q "define('WP_MEMORY_LIMIT', '6144M');" /var/www/html/wp-config.php; then
    sed -i "2s/^/define('WP_MEMORY_LIMIT', '6144M');\n/" /var/www/html/wp-config.php
fi

# Добавляем строку для FS_METHOD, если она еще не добавлена
if ! grep -q "define('FS_METHOD', 'direct');" /var/www/html/wp-config.php; then
    sed -i "3s/^/define('FS_METHOD', 'direct');\n/" /var/www/html/wp-config.php
fi

# Добавляем строки для настройки Redis, если они еще не добавлены
if ! grep -q "define('WP_REDIS_HOST', 'redis');" /var/www/html/wp-config.php; then
    sed -i "4s/^/define('WP_REDIS_HOST', 'redis');\n/" /var/www/html/wp-config.php
fi

if ! grep -q "define('WP_REDIS_PORT', 6379);" /var/www/html/wp-config.php; then
    sed -i "5s/^/define('WP_REDIS_PORT', 6379);\n/" /var/www/html/wp-config.php
fi

if ! grep -q "define( 'WP_REDIS_DATABASE', 1 );" /var/www/html/wp-config.php; then
    sed -i "6s/^/define( 'WP_REDIS_DATABASE', 1 );\n/" /var/www/html/wp-config.php
fi

sed -i 's/^pm.max_children = .*/pm.max_children = 30/' /usr/local/etc/php-fpm.d/www.conf
sed -i 's/^pm.start_servers = .*/pm.start_servers = 16/' /usr/local/etc/php-fpm.d/www.conf
sed -i 's/^pm.min_spare_servers = .*/pm.min_spare_servers = 8/' /usr/local/etc/php-fpm.d/www.conf
sed -i 's/^pm.max_spare_servers = .*/pm.max_spare_servers = 16/' /usr/local/etc/php-fpm.d/www.conf

# Завершаем выполнение скрипта, чтобы передать управление Docker

exec "$@"