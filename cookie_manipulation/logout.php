<?php session_destroy();
setcookie($sid, '', time() - 3600);?>
<script>location.href = "../main"</script>