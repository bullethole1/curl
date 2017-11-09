<?php
require_once('ovning2database.php');
?>
<html>
<body>
<form action="ovning2form.php" method="post">
    <input type="text" name="name" placeholder="name"></input><br/>
    <input type="text" name="email" placeholder="email"></input><br/>
    <input type="text" name="birthday" placeholder="birthday"></input><br/>
    <button type="submit" name="submit" value="submit">Submit</button>
</form>
</body>
</html>