<?php
    require_once('load.php');
    
    if(App::Get()->getAuth() === false){
        header('location:login.php');
    }else{   
        $manager = new MoviesManager;
        $list = $manager->getAllMovies();

        $ctrl = new AppController();
        echo $ctrl->view_movies($list);
    }