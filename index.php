<?php
    if ($handle = opendir('.')) {

        while (false !== ($entry = readdir($handle))) {

            if ($entry != "." && $entry != "..") {
                if($entry != "index.php" && $entry != '.git') 
                {
                    echo "<a href='".$entry."'".">$entry</a>"."<br />";
                }  
            }
        }

        closedir($handle);
    }   

   
?>
