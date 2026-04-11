    <?php
    session_start();
    if (isset($_POST['set'])) {
        $_SESSION["username"] = "Arjun Mehrnaia";
        $_SESSION["email"]    = "arjun@msi.com";
        $message = "Session data has been set.";
    }
    else if (isset($_POST['update'])) {
        if (isset($_SESSION["username"])) {
            $_SESSION["username"] = "Arjun0";
            $_SESSION["email"]="0arjun@msi.com";
            $message = "Session username and email updated successfully";
        } else { $message = "No session data to update."; }
    }
    else if (isset($_POST['destroy'])) {
        session_unset(); session_destroy();
        $message = "Session has been destroyed ";
    }
    $username = $_SESSION["username"] ?? "Not set";
    $email    = $_SESSION["email"]    ?? "Not set";
    echo "----- Arjun's Session -----";
    
    ?>
    <!DOCTYPE html><html><head><title>PHP Session Usage</title></head><body>
    <h2>PHP Session Example</h2>
    <p><strong>Username:</strong> <?php echo $username; ?></p>
    <p><strong>Mail ID:</strong> <?php echo $email; ?></p>
    <p style="color:green;"><?php echo $message; ?></p>
    <form method="post">
        <button type="submit" name="set">Set Session</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="destroy">Destroy</button>
    </form></body></html>
