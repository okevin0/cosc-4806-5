<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <h1>Update Reminder</h1>
    <form action="/reminders/update_reminder" method="post">
        <input readonly hidden name="reminder_id" value="<?php echo $data['reminder']['id'];?>"
        <div class="form-group">
            <br />
            <textarea id="subject" name="subject" rows="4" cols="50"><?php echo $data['reminder']['subject']; ?></textarea>
            <br />
            <label>Is Completed</label>
            <input type="checkbox" name="completed" value="1" class="btn btn-primary" <?php if($data['reminder']['completed'] == 1) {echo "checked";} ?> />
            <br /><br />
            <input type="submit" value="Submit" class="btn btn-primary"> 
        </div>
    </form>
</div>
<?php require_once 'app/views/templates/footer.php' ?>
