<?php if(isset($_POST['ok'])) {
    $workName   =   $_POST['work_name'];
    $status     =   $_POST['status'];
    $startDate  =   $_POST['starting_date'];
    $endDate    =   $_POST['ending_date'];
    $mWork      =   new     Model_Work;
    $data=array(
        "work_name"         => $workName,
        "status"            => $status ,
        "starting_date"     => $startDate,
        "ending_date"       => $endDate,
    );
    $mWork->updateWork($data,$_GET['id']);
    redirect(BASEURL);
    ?>
<?php } else { ?>
    <a href="<?php echo BASEURL ?>">home</a><br> <br>
    <?php
    $id=$_GET['id'];
    $mWork=new Model_Work;
    $data['data']=$mWork->getWorkById($id);
    loadView("work/edit",$data);
}
?>