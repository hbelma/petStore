<?php

$output="";
  if(isset($_POST['searchVal'])  && !empty(['searchVal'])){
    $searchq=$_POST['searchVal'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    if (file_exists("feedback.xml"))
    {
      $xml=simplexml_load_file("feedback.xml");
      $comments = $xml->children();
      $brojac=0;
      
      foreach( $comments as $comment)
      {
        if (stripos($comment->subject,$searchq)!==false)
        {
          $subject=$comment->subject;

          $output. = '<br>' .$subject;
          $brojac++;
        }
        if ($brojac==10) break;
      }
      if ($brojac==0)
        $output='There are no results';
    }
    else  $output='Search is not available';
    }
echo ($output);

?>
