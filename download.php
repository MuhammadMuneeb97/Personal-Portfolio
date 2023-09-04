<?php
$file = '/assets/img/Muneeb-CV-Resume.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Muneeb-CV-Resume.pdf"');
readfile($file);
?>