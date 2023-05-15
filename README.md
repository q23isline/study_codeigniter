# Study CakePHP

[![LICENSE](https://img.shields.io/badge/license-MIT-green.svg)](./LICENSE)
![releases](https://img.shields.io/github/release/q23isline/study_codeigniter.svg?logo=github)
[![Open in Visual Studio Code](https://img.shields.io/static/v1?logo=visualstudiocode&label=&message=Open%20in%20Visual%20Studio%20Code&labelColor=555555&color=007acc&logoColor=007acc)](https://open.vscode.dev/q23isline/study_codeigniter)

[![PHP](https://img.shields.io/static/v1?logo=php&label=PHP&message=v8.1.13&labelColor=555555&color=777BB4&logoColor=777BB4)](https://www.php.net)
[![CodeIgniter](https://img.shields.io/static/v1?logo=codeigniter&label=CodeIgniter&message=v3.1.0&labelColor=555555&color=D33C43&logoColor=D33C43)](https://codeigniter.jp/user_guide/3/index.html)
[![MySQL](https://img.shields.io/static/v1?logo=mysql&label=MySQL&message=v8.0&labelColor=555555&color=4479A1&logoColor=4479A1)](https://dev.mysql.com)
[![NGINX](https://img.shields.io/static/v1?logo=nginx&label=NGINX&message=v1.21&labelColor=555555&color=009639&logoColor=009639)](https://www.nginx.com)

## はじめにやること

1. ソースダウンロード

    ```bash
    git clone 'https://github.com/q23isline/study_codeigniter.git'
    ```

2. DB コンテナ起動時に Permission Denied で起動できない状態にならないように権限付与する

    ```bash
    sudo chmod -R ugo+w logs
    ```

3. アプリ立ち上げ

    ```bash
    docker-compose build --no-cache
    docker-compose down -v
    sudo rm -rf vendor
    docker create -it --name tmp study_codeigniter-app bash
    docker cp tmp:/var/www/html/vendor $(pwd)
    docker rm -f tmp
    docker-compose up -d
    ```

## 日常的にやること

### システム起動

```bash
docker-compose up -d
```

### システム終了

```bash
docker-compose down
```

## 動作確認

### URL

- <http://localhost>

### Permission Denied対策

- 画面にPermission Deniedエラーが表示される場合、以下を実行
  - 本番環境では適切に権限を付与すべきだがとりあえず動くようにフル権限を付与

```bash
sudo chmod ugo+w application/logs
sudo chmod -R ugo+w logs
```
