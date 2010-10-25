<?php // Function definitions
    function create_note ($row) {
        echo "<li id=\"" . $row['id'] . "\">\n";
        echo "<div class=\"icon " . $row['icon'] . "\"></div>\n";
        echo "<h2>" . $row['title'] . "</h2>\n";
        echo "<p>" . $row['content'] . "</p>\n";
        echo "</li>\n";
    }
?>
