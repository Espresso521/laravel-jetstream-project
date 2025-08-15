echo "⚙️ 运行必要的 Artisan 命令..."
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

echo "🚀 启动 Laravel 开发服务..."
php artisan serve --host=0.0.0.0 --port=8000
