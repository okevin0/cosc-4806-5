<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <h1>New Reminder</h1>
    <form action="/reminders/create_reminder" method="post">
        <div class="form-group">
            <textarea id="" name="subject" rows="4" cols="50"></textarea>
            <br />
            <input type="submit" value="Submit" class="btn btn-primary" > 
        </div>
    </form>
</div>
<?php require_once 'app/views/templates/footer.php' ?>
