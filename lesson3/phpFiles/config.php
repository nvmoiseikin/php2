<?php

CONST server = "localhost";

CONST user = "root";

CONST password = "";

CONST db = "photoGalery";

CONST photoExceptions = array("10", "11", "12", "100051", "100000005");

if (($connect = mysqli_connect(server, user, password, db)) === false) echo "Импортируйте БД";