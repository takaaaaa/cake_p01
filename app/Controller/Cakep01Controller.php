<?php

class Cakep01Controller extends AppController {

    // コントローラー名
    public $name = 'Cakep01';
    // モデルを指定しない
    public $uses = false;
    // ビューを指定しない
    public $autoRender = false;

    public function index() {
        echo "コントローラーの練習です。";
    }
}



