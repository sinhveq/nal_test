<?PHP
$work = new Model_Work;
$data = $work->listAll();
loadView("work/list",$data);
