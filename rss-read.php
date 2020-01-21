<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("http://rss.cnn.com/rss/edition.rss");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
  
   echo "<li>$title
            <ul>
                <li>$link</li>
            </ul>
        </li>";
 }
?>
</ul>