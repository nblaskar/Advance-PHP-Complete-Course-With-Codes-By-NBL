<?php

 //Set Cookie
 setCookie("username","nbldata",time()+60*60*24*10);

//Delete Cookie
setCookie("username","nbldata",time()-36000);

?>