<?php

$channelSecret = c93d4e192e37ff60721c4b6f3d501166; // Channel secret string
$httpRequestBody = A51Usga2by9fxBrdPfPlZ2Mddy1yEcACpIvho5PZkaVnxs+1p98h5JViSKchxa0owxCIha5OgAMkMKse1zJYF7fV6Rnu+qY9vhfGJj8wNGh52yWaJBt7F1YCYtIqBIUzrfLKUfxH5vH/Ugd2nABLOAdB04t89/1O/w1cDnyilFU=; // Request body string
$hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
$signature = base64_encode($hash);

echo date(DATE_RFC822)

?>
