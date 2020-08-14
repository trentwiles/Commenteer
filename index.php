<?php

class commenteer{

    public function default($username)
    {

        $file = file_get_contents('/comments.json');
        $number = count($file);
        $comments = array($file);
        
        $comment = array_rand($comments);

        if(isset($username))
        {
            echo "${username}: ${comment}";
        }
        else
        {
            echo $comment;
        }
    }
}