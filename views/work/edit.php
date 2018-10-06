<h1>Form edit work</h1>
<form action="index.php?controller=work&action=edit&id=<?php echo $data['data']['id']; ?>" method="post">
    Work Name:<br>
    <input type="text" name="work_name" value="<?php echo $data['data']['work_name'];?>" required>
    <br>
    Status:<br>
    <select name="status" >
        <option value="0" <?php if($data['data']['status'] == 0) echo "selected='selected'"; ?>>Planning</option>
        <option value="1" <?php if($data['data']['status'] == 1) echo "selected='selected'"; ?>>Doing</option>
        <option value="2" <?php if($data['data']['status'] == 2) echo "selected='selected'"; ?>>Complete</option>
    </select><br>
    Starting Date: <br>
    <input type="date" name="starting_date" required value="<?php echo $data['data']['starting_date']?>"><br>
    Ending Date: <br>
    <input type="date" name="ending_date" required value="<?php echo $data['data']['ending_date']; ?>"> <br><br>

    <input type="submit" name="ok" >
</form>
