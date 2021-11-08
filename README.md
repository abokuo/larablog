## 簡介

larablog 是使用 Laravel 8 框架建置的部落格專案，用以驗證是否能利用 Laravel 建置符合自身使用的部落格網站。

## 使用套件

- 管理區工具：Voyager：tcg/voyager  
[https://voyager.devdojo.com](https://voyager.devdojo.com/)
- Markdown 編輯器：douyasi/laravel-editor-md  
[https://github.com/douyasi/laravel-editor-md](https://github.com/douyasi/laravel-editor-md)
- 自動產生文章目次（TOC）：caseyamcl/toc  
[https://github.com/caseyamcl/toc](https://github.com/caseyamcl/toc)
- 網頁路徑（breadcrumb aka 麵包屑）：diglactic/laravel-breadcrumbs  
[https://github.com/diglactic/laravel-breadcrumbs](https://github.com/diglactic/laravel-breadcrumbs)
- 圖形驗證碼：scyllaly/hcaptcha  
[https://github.com/Scyllaly/hcaptcha](https://github.com/Scyllaly/hcaptcha)
- Guzzle（PHP 的 HTTP 客戶端函式庫）：guzzlehttp/guzzle  
[https://github.com/guzzle/guzzle](https://github.com/guzzle/guzzle)
- BootstrapMade Moderna 主題  
[https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/](https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/)
- 程式碼高亮度顯示：Hightlight.js  
[https://github.com/highlightjs/highlight.js](https://github.com/highlightjs/highlight.js)  
- 站內搜尋：laravel/scout  
[https://github.com/laravel/scout](https://github.com/laravel/scout)
- 網站地圖：spatie/laravel-sitemap  
[https://github.com/spatie/laravel-sitemap](https://github.com/spatie/laravel-sitemap)

## 使用外部服務

- Gmail
- hCAPTCHA
- Algolia

## 安裝流程

　　以下作業如無說明均是在終端機畫面進行：

1. 輸入 `glt clone https://github.com/abokuo/larablog.git` 下載專案。
2. 切換至專案根目錄，輸入 `composer install` 安裝專案相依套件。
3. 將 `.env.example` 複製或更名為 `.env`。
4. 輸入 `php artisan key:generate` 建立新金鑰。
5. 為專案建立資料庫資源，並在 `.env` 中輸入資料庫主機名、資料庫名稱、資料庫連線帳號及資料庫連線密碼。

```
DB_CONNECTION=mysql
DB_HOST=(資料庫主機名)
DB_PORT=3306
DB_DATABASE=(資料庫名稱)
DB_USERNAME=(資料庫連線帳號)
DB_PASSWORD=(資料庫連線密碼)
```

1. 在 `.env` 中輸入外部服務的連線資料：帳號、密碼、金鑰等。

```
MAIL_MAILER=smtp
MAIL_HOST=(SMTP 主機名)
MAIL_PORT=(連線埠號)
MAIL_USERNAME=(SMTP 主機連線帳號)
MAIL_PASSWORD=(SMTP 主機連線密碼)
MAIL_ENCRYPTION=(通訊協定：ssl 或 tls)
MAIL_FROM_ADDRESS=(發信人電子郵件信箱)
MAIL_FROM_NAME="${APP_NAME}"

HCAPTCHA_SECRET=(hCAPTCHA 私密金鑰)
HCAPTCHA_SITEKEY=(hCAPTCHA 連線金鑰)

SCOUT_PREFIX=(索引名)
SCOUT_QUEUE=true
SCOUT_IDENTIFY=true
ALGOLIA_APP_ID=(Algolia APP ID)
ALGOLIA_SECRET=(Algolia Admin API Key)
```

1. 執行 `php aritsan migrate` 建立專案資料表。
2. 輸入 `php artisan voyager:install` 安裝 Voyager。
3. 輸入 `php artisan voyager:admin (管理員信箱) --create` 建立管理者帳號（email 帳號），依照畫面指示輸入資料後可從 `/admin` 登入 Voyager。

## 畫面

![https://larablog.abokuo.com/img/portfolio/website-larablog-1.png](https://larablog.abokuo.com/img/portfolio/website-larablog-1.png)

![https://larablog.abokuo.com/img/portfolio/website-larablog-2.png](https://larablog.abokuo.com/img/portfolio/website-larablog-2.png)

![https://larablog.abokuo.com/img/portfolio/website-larablog-3.png](https://larablog.abokuo.com/img/portfolio/website-larablog-3.png)

## 文件

使用方法請參考 [https://larablog.abokuo.com](https://larablog.abokuo.com)，或透過網站「關於我」連結提出。

## 致謝

感謝[哥布林工程師](https://www.facebook.com/goblinlab) 的 [Laravel Care](https://service.pandalab.org/laravelcare) 計畫，在本專案建置過程中遇到的大小問題提供協助。

## 授權

[MIT](https://opensource.org/licenses/MIT)