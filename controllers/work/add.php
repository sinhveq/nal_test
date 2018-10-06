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
        $mWork->insertWork($data);
        redirect(BASEURL);
    ?>
<?php } else { ?>
    <a href="<?php echo BASEURL ?>">home</a><br> <br>
    <?php
    loadView("work/add");
}
?>
