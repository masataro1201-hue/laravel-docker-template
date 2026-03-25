# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
  - <input type="hidden" name="_method" value="PUT">が出力される
### findメソッドの引数に指定しているIDは何のIDか
  - blade.phpで作ったURLの値がルート経由で $id に入ってる
### findメソッドで実行しているSQLは何か
  - select文を実行している
### findメソッドで取得できる値は何か
  - モデルインスタンス
### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
  - existsプロパティがtrueかfalseで切り替えている。
  - trueの場合はUPDATE、falseの場合はINSERT
## Todo論理削除
  - 
### traitとclassの違いとは
  - trait自体はインスタンス化することができない。
### traitを使用するメリットとは
  - 1つのクラスに複数のトレイトを追加することができる。
## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
  - 各メソッドが呼び出されたタイミングで実行される
### RequestクラスからFormRequestクラスに変更した理由
  - バリデーション処理を分離して実装するため。
### $errorsのhasメソッドの引数・返り値は何か
  - 引数は入力欄のname属性、返り値はtrueかfalseです。
### $errorsのfirstメソッドの引数・返り値は何か
  - 引数は入力欄のname属性、返り値は文字列もしくは空文字。
### フレームワークとは何か
  - プログラムにおける枠組み
### MVCはどういったアーキテクチャか
  - 役割ごとにコードを分けるアーキテクチャ。Model、view、Controller
### ORMとは何か、またLaravelが使用しているORMは何か
  - データベースの操作をクラスで実施できる仕組み、Laravelではeloquent
### composer.json, composer.lockとは何か
  - composer.jsonとは必要なライブラリや設定、構成を宣言するファイルを指します
  - composer.lockとはどのパッケージをどのバージョンでインストールするかを確定させたファイルです。
### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
  - vendorディレクトリに格納される