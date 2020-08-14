<?php


    function youtube($username)
    {

        $file = file_get_contents('comments.json');
        $comments = json_decode($file, true);
        $max = count($comments);
        $total = rand(0, $max);
        $comment = ($comments[$total]);

        if(isset($username))
        {
            echo "${username}: ${comment}";
        }
        else
        {
            echo $comment;
        }
    }