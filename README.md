# Laravel 9 透過 Blade 視圖建置單頁應用程式

引入 protonemedia 的 laravel-splade 套件來擴增透過 Blade 視圖建置單頁應用程式，能在使用網站時，只載入一個頁面，並在網頁更新時，透過 JavaScript API 同步更新部份網頁。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/projects` 來進行專案新增。

----

## 畫面截圖
![](https://i.imgur.com/uFb38L7.png)
> 建立新的專案

![](https://i.imgur.com/KhvVYG5.png)
> 不用從伺服器載入整個頁面，所以會提升性能與動態體驗