# インストール手順

今回はXAMPPでLaravelを動かします。  
Windows,  Macともに同じような手順でできるのでXAMPPを採用します。

## 環境

- PHP 7.4
- Laravel 7

## 手順

### 手順 1

Download [XAMPP](https://www.apachefriends.org/jp/index.html)  

適宜、解凍などをすること。

#### 参考記事 (手順1)

[WindowsでXAMPPを使えばLaravel環境構築は簡単](https://reffect.co.jp/laravel/windows-xampp-laravel-install)  
[Macにxamppをインストール](https://qiita.com/hinataysi29734/items/00a3a990205b80f42df3)

### 手順 2

Download [Composer](https://getcomposer.org/)

#### Windows 

Composer の Download ページから exeをダウンロートして解凍してください

##### 参考記事

[xamppでLaravelの環境構築](https://qiita.com/maruyama42/items/43d7029d7e00e587bf0b)

#### Mac

Composerに関しては、動けばいいので、参考記事の方法以外でもいいです。  
調べたところ、 Homebrew を使うといいらしい。

##### 参考記事 

[PHP Composer のインストールと使い方](https://www.webdesignleaves.com/pr/php/php_composer.php)

### 手順 3 

1. 本リポジトリをcloneする
2. Terminal で `composer install`を入力。
3. サーバー起動 `php artisan serve` を入力。
4. ブラウザで `http://localhost:8000` にアクセス。
5. 画面に `Laravel` と表示されたら終わり。
