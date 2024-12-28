<?php

include './header.php';
?>

<div class="container my-4">
    <h1>Delete Vehicle</h1>
    <p>Are you sure you want to delete <strong></strong>?</p>
    <form method="POST">
        <button type="submit" name="confirm" value="yes" class="btn btn-danger">Yes, Delete</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>