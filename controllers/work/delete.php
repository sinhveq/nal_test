<?php
$id=$_GET['id'];
$mWork= new Model_Work;
$mWork->deleteWork($id);
redirect(BASEURL);