<?php

function connectionTest($conn){
    if($conn){
        echo 'The database is connected';
    }else{
        echo 'Something wrong is going on';
    }
}
function loginTest($id, $pass){
    if($id && $pass){
        echo '<p style="color: white">Id and password not matched</p>';
    }else{
        echo '<p style="color: white">One of them are missing</p>';

    }
}

function registraionTest($name, $id, $email, $pass){
    if($name && $id){
        echo '<p style="color: deepskyblue">User already exits..</p>';
    }
    else{
        echo '<p style="color: white">name or id already exits..</p>';

    }

}
function orderTest($id){
    if ($id) {
        echo '<p style="color: deepskyblue">Order already placed...</p>';
    }
}

function OrderEditTest($id){
    if ($id) {
        echo '<p style="color: deepskyblue">Successfully edited..</p>';
    }
}
function DeleteOrderTest($id){
    if ($id) {
        echo '<p style="color: deepskyblue">Successfully deleted..</p>';
    }
}

?>
