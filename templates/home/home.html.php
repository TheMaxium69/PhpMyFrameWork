<h2><?php echo $message ?></h2>
<p><?php echo $messageChange ?></p>

<form action="index.php?controller=home&task=index" method="post">
        <div>
            <input type="text" class="form-control" name="messageChange" placeholder="Message">
        </div>
        <input type="submit" class="btn btn-success" value="Changez le message">
</form>