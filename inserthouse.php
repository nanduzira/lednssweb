<?php
    require_once 'db_functions.php';
    $db = new DB_FUNCTIONS();
    $json = $_POST["housesJSON"];
    $json = get_magic_quotes_gpc()?stripslashes($json):$json;
    $data = json_decode($json);
    $a = array();
    $b = array();
    for($i=0; $i<count($data); $i++) {
        $res = $db->storeHouse($data[$i]->ward, $data[$i]->house_no,
                $data[$i]->head, $data[$i]->address, $data[$i]->ration_no,
                $data[$i]->caste, $data[$i]->own_land, $data[$i]->land,
                $data[$i]->income, $data[$i]->electricity_no, $data[$i]->landline_no,
                $data[$i]->gas_agency, $data[$i]->drinking_water, $data[$i]->laterine_facility,
                $data[$i]->vehicle_type, $data[$i]->literacy_count);
        $b["ward"] = $data[$i]->ward;
        $b["house_no"] = $data[$i]->house_no;
        $b["update_status"] = $res?'yes':'no';
        array_push($a, $b);
    }
    echo json_encode($a);
?>