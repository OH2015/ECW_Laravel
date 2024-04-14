# ベースイメージを指定
FROM php:8.0-fpm

# アプリケーションディレクトリに移動
WORKDIR /var/www/html

# アプリケーションファイルをコピー
COPY ./laravel .

# 必要なパッケージのインストール
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

# composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Composerの依存関係をインストール
RUN composer install