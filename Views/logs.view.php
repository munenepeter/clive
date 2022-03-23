<?php

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php';
include_once 'sections/sidebar.view.php'; ?>


<div class="m-2 p-2 bg-white overflow-auto border">
    <?php

    echo "<pre>";
    echo file_get_contents("Core/Mantle/Logs/logs.log");
    echo "</pre>";



    ?>
</div>
</div>
</div>

</body>

</html>