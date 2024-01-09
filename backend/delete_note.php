<?php


    require "Connector.php";

    if(isset($_GET['id'])) {

        $id = $_GET['id'];
        $data = CRUD:: Select('note', null, ['NoteId' => $id]);
        CRUD:: Delete('note', ['NoteId' => $id]);
    }

    if($data) {
        CRUD:: Delete('note', ['NoteId' => $id]);
        header("Location: index.php?deleteSuccess=1");
    }
    else{
        header("Location: index.php?deleteError=1");
    }

?>