<?php

require_once 'controllers/base_layout.controller.php';

//retreiving the generic info from the db
require_once 'controllers/generic_info.controller.php';
require_once 'models/generic_info.model.php';

//importing the base layout
$base_layout = new BaseLayoutController();
$base_layout -> ctlImportBaseLayout();

?>