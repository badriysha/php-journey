<?php

/**
 * Menghapus todo pada list
 */
function removeTodoList(int $number) :bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = 0; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }
    return true;
}