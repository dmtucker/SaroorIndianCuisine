<?php

assert_options(ASSERT_ACTIVE, FALSE);
assert_options(ASSERT_BAIL  , FALSE);
date_default_timezone_set ("America/Los_Angeles");
set_include_path(".:".$_SERVER["DOCUMENT_ROOT"]);

include "resources/extensions/mobile.php";
include "resources/extensions/preload.php";

?>