<?php

CONST server = "localhost";

CONST user = "root";

CONST password = "";

CONST db = "shop";

CONST amountProductsInBlock = 3;

if (($connect = mysqli_connect(server, user, password, db)) === false) echo "Импортируйте БД";
?>