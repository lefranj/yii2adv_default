<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Article;

class ArticleController extends \yii\web\Controller
{
    public $request;

    public function __construct($id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->request = Yii::$app->request;
    }

    public function actionDetails()
    {
        $id = $this->request->get('id', 1);
        $article = Article::findOne($id)->attributes;

        return $this->render('details', [
            'article' => $article,
        ]);
    }

    public function actionIndex()
    {
        $articles = Article::find()->asArray()->all();

        return $this->render('index', [
            'articlesProvider' => $articles
        ]);
    }

}
