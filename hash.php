<?php

echo password_hash("admin", PASSWORD_DEFAULT);

/*
INSERT INTO users (username,email,  password_hash)
VALUES ('admin', '$2y$10$CZkY2waW53WqpqRGbWmr8.Ot.xbK69XQIKxC27gbQwd8FTpCI3Pxq')
*/
?>