<?php
$title = "Sign Up";
ob_start();
?>
<div class="form-container">
    <h2 class="text-success text-center"><?= $title ?></h2>
    <form id="signupForm" action="index.php?action=store" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Sign Up</button>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>