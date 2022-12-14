<?php
declare(strict_types=1);


namespace App;


class BackEndView
{
    public $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {
        return $this->twig->render('index.twig');
    }

    public function showSignInForm()
    {
        return $this->twig->render('signin.twig');
    }

    public function showSignUpForm()
    {
        return $this->twig->render('signup.twig');
    }
    public function showUserList($users)
    {
        return $this->twig->render('userlist.twig',['users' => $users]);
    }
    public function showArticlesList($articles, $categories)
    {
        return $this->twig->render('articleslist.twig',['articles' => $articles, 'categories'=>$categories]);
    }

    public function showAddArticleForm($article, $categories, $target)
    {
        return $this->twig->render('add-article.twig',['article' => $article, 'categories'=>$categories, 'target'=> $target]);
    }
    /* Для категорий */ // От сюда BackEndView.php
    public function showCategoriessList($categories)
    {
        return $this->twig->render('categorieslist.twig',['categories'=>$categories]);
    }
    //Для Тэгов
    public function showTagsList($tags)
    {
        return $this->twig->render('tagsList.twig',['tags'=>$tags]);
    }
//до сюда переписывай это
}