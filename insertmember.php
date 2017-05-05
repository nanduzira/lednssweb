<?php
    require_once 'db_functions.php';
    $db = new DB_FUNCTIONS();
    $json = $_POST["membersJSON"];
    $json = get_magic_quotes_gpc()?stripslashes($json):$json;
    $data = json_decode($json);
    $a = array();
    $b = array();
    for($i=0; $i<count($data); $i++) {
        $res = $db->storeMember($data[$i]->ward, $data[$i]->house_no,
                $data[$i]->name, $data[$i]->age, $data[$i]->sex,
                $data[$i]->edu_qualifications, $data[$i]->job, $data[$i]->uid_no,
                $data[$i]->election_id, $data[$i]->govt_aids, $data[$i]->mob_no,
                $data[$i]->any_traits);
        $b["ward"] = $data[$i]->ward;
        $b["house_no"] = $data[$i]->house_no;
        $b["update_status"] = $res?'yes':'no';
        array_push($a, $b);
    }
    echo json_encode($a);
?>