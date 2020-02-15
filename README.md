# wp-snipets
WordPressの開発に関するスターターキット
## 制作環境
### Gulpの導入とセッティング
- gulp
- gulp-sass
- gulp-postcss
- gulp-autoprefixer
- css-declaration-sorter
- gulp-merge-media-queries
Gulpのプラグインは上記のものを利用する。
### メディアクエリについて
mixinとして、メディアクエリを各プロパティにセットして記述していく。

詳しくは　https://macoblog.com/sass_media_query/　を参照。

通常のメディアクエリでは記述箇所が離れるため、視認性が悪い。そのため不要な記述が増える傾向がある。

### mixinの登録
よく利用するスタイルはmixinとして登録していく。
たとえばflexを利用した上下左右中央配置など。