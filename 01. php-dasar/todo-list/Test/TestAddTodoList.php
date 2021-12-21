<?php
require_once "../Model/TodoList.php";
require_once "../Controller/AddTodoList.php";

addTodoList("Badri");
addTodoList("Yusron");
addTodoList("Abdullah");

var_dump($todoList);