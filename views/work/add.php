<h1>Form Add new work</h1>
<form action="index.php?controller=work&action=add" method="post">
    Work Name:<br>
    <input type="text" name="work_name" required>
    <br>
    Status:<br>
    <select name="status" >
        <option value="0">Planning</option>
        <option value="1">Doing</option>
        <option value="2">Complete</option>
    </select><br>
    Starting Date: <br>
    <input type="date" name="starting_date" required><br>
    Ending Date: <br>
    <input type="date" name="ending_date" required> <br><br>

    <input type="submit" name="ok" >
</form>
