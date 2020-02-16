# wp-snipets
WordPressの開発に関するスターターキット
## 制作環境
### Gulpの導入とセッティング
1. マシンへNode.jsをインストールする
1. 作業フォルダを用意する
1. 作業フォルダへgulpおよびプラグインをインストールする
    1. npm init -y
    1. npm install -D gulp
    1. npm install -D gulp-sass
    1. npm install -D gulp-postcss
    1. npm install -D gulp-autoprefixer
    1. npm install -D css-declaration-sorter
    1. npm install -D gulp-merge-media-queries
1. gulpfile.jsをプロジェクトフォルダに設置する。 

### メディアクエリについて
mixinとして、メディアクエリを各プロパティにセットして記述していく。

詳しくは下記の記事を参照
https://macoblog.com/sass_media_query/

通常のメディアクエリでは記述箇所が離れるため、視認性が悪く不要な記述が増える傾向がある。

### mixinの登録
よく利用するスタイルはmixinとして登録していく。
たとえばflexを利用した上下左右中央配置など。