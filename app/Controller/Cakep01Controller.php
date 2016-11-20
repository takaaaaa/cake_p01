<?php
class Cakep01Controller extends AppController {
    // コントローラー名
    public $name = 'Cakep01';
    // モデルを指定しない
    public $uses = false;
    // ビューを指定しない $autoRenderがfalseの場合は$autoLayoutもfalse
    //public $autoRender = false;

    public $layout = "Cakep01";

    public function index() {
        echo "コントローラーの練習です。";
        //Action内のみのレイアウトの指定
        $this->layout = 'Cakep02';
        //$this->setAction("other");//other関数実行。url変更なし。
        //$this->redirect("./other");//強制的にアクセス。外部サイトもok!
    }
    public function other() {
        echo "別ページを作ります。";
    }
}
