<?php


class NewsController
{

    public function actionAll()
    {
        var_dump(NewsModel::findALL());
//        $items = News::getAll();
//        $view = new View();
//        $view->items = $items;
//        $view->displayAll('/news/all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->item = $item;
        $view->displayOne('/news/one.php');
    }
}