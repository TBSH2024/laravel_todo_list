# To-Do List for Laravel

<div id="top"></div>

## 使用技術一覧
<p style="display: inline">
  <img src="https://img.shields.io/badge/-Html5-E34F26.svg?logo=html5&style=for-the-badge">
  <img src="https://img.shields.io/badge/-TailwindCSS-000000.svg?logo=tailwindcss&style=for-the-badge">
  <img src="https://img.shields.io/badge/-Html5-E34F26.svg?logo=html5&style=for-the-badge">
  <img src="https://img.shields.io/badge/-Laravel-E74430.svg?logo=laravel&style=for-the-badge">
  <img src="https://img.shields.io/badge/-Nginx-269539.svg?logo=nginx&style=for-the-badge">
  <img src="https://img.shields.io/badge/-MySQL-4479A1.svg?logo=mysql&style=for-the-badge&logoColor=white">
  <img src="https://img.shields.io/badge/-Docker-1488C6.svg?logo=docker&style=for-the-badge">
</p>

## プロジェクト名

Laravelを使用したTo-Doリスト

<!-- プロジェクトについて -->

## プロジェクトについて

Laravelを使用してCRUD機能について学習

## 環境

| 言語・フレームワーク  | バージョン |
| --------------------- | ---------- |
| PHP                   | 8.2        |
| Laravel               | 11.31      |
| MySQL                 | 8.0        |
| Node.js               | 22.12.0    |

## ディレクトリ構成

❯ find . -maxdepth 2 \( -name "node_modules" -o -name ".next" -o -name ".git" -o -name ".pytest_cache" -o -name "static" \) -prune -o -print | sed -e 's;[^/]*/;|____;g;s;____|; |;g' > directory_structure.txt
```plaintext
.
├── database
│   ├── database.sqlite
│   ├── migrations
│   ├── .gitignore
│   ├── seeders
│   └── factories
├── composer.lock
├── tailwind.config.js
├── phpunit.xml
├── bootstrap
│   ├── app.php
│   ├── cache
│   └── providers.php
├── app
│   ├── Providers
│   ├── Models
│   └── Http
├── config
│   ├── auth.php
│   ├── app.php
│   ├── mail.php
│   ├── services.php
│   ├── database.php
│   ├── cache.php
│   ├── session.php
│   ├── queue.php
│   ├── logging.php
│   └── filesystems.php
├── resources
│   ├── css
│   ├── js
│   └── views
├── tests
│   ├── Unit
│   ├── Feature
│   └── TestCase.php
├── vite.config.js
├── .editorconfig
├── storage
│   ├── app
│   ├── framework
│   └── logs
├── README.md
├── artisan
├── public
│   ├── favicon.ico
│   ├── index.php
│   ├── build
│   ├── robots.txt
│   └── .htaccess
├── directory_structure.txt
├── .gitignore
├── package-lock.json
├── package.json
├── .env
├── .gitattributes
├── docker-compose.yml
├── .env.example
├── postcss.config.js
└── routes
    ├── console.php
    └── web.php
├── composer.json
```

## 開発環境構築

### コンテナの作成と起動

.env
```plaintext
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_todo
DB_USERNAME=user
DB_PASSWORD=password
```

<p align="right">(<a href="#top">トップへ戻る</a>)</p> ```
