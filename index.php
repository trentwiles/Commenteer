<?php

class commenteer{

    public function default($username)
    {

        $file = file_get_contents('/comments.json');
        $number = count($file);
        $comments = array(json_decode($file, true));

        if(isset($username))
        {

        }
    }
}