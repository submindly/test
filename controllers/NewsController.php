<?php

class NewsController
{
    public function actionAll()
    {
        $articles = NewsModel::findOneByColumn('title', 'Новый заголовок');
        $articles->title = 'new title 123';
        $articles->save();
        var_dump($articles->id);die;
        include __DIR__ . '/../views/news/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $article = News::getOne($id);
        include __DIR__ . '/../views/news/one.php';
    }
}