<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 環境構築手順

1. ローカルにリポジトリを落とす
git clone https://github.com/tokuicchi/ranking-app.git

2. 作業ディレクトリへ移動
cd ranking-app

3. コンポーザーを更新
以下2つのコマンドを実行する。(vendorなどがたりないため)
composer update
composer install
【参考】
http://vdeep.net/laravel-git-clone

4. DBの作成
MySQLで「ranking」という名前のデータベースを作成する。

5. .envファイルを用意する
.env.exampleをコピーして、.envを作成し以下変更する

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ranking
DB_USERNAME=root
DB_PASSWORD=
```

6. マイグレーションの実行をする。
php artisan migrate

7. php artisan serve を実行する
http://127.0.0.1:8000 にアクセスできる。
