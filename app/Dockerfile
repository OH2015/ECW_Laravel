# ベースイメージを指定
FROM php:8.0-fpm

# 必要なパッケージのインストール
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

# composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# アプリケーションファイルをコピー
COPY . /var/www/html

# アプリケーションディレクトリに移動
WORKDIR /var/www/html/laravel

# Composerの依存関係をインストール
RUN composer install

# ポート番号の指定
EXPOSE 8000

# アプリケーションの実行
CMD php artisan migrate:refresh --seed

# アプリケーションの実行
CMD php artisan serve --host=0.0.0.0 --port=8000
