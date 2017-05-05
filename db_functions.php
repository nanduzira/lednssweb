<?php
    class DB_FUNCTIONS {
        private $db;
        function __construct() {
            require_once 'db_connect.php';
            $this->db = new DB_CONNECT();
            $this->db->connect();
        }
        function __destruct() {

        }
        public function storeHouse($ward, $house_no, $head, $address, $ration_no, $caste,
                $own_land, $land, $income, $electricity_no, $landline_no, $gas_agency,
                $drinking_water, $laterine_facility, $vehicle_type, $literacy_count) {
            $query = "INSERT INTO houses VALUES('".$ward."','".$house_no."','".
                    $head."','".$address."','".$ration_no."','".$caste."','".
                    $own_land."','".$land."','".$income."','".$electricity_no."','".
                    $landline_no."','".$gas_agency."','".$drinking_water."','".
                    $laterine_facility."','".$vehicle_type."','".$literacy_count."','yes');";
            $result = mysql_query($query);
            if($result)
                return true;
            elseif(mysql_errno() == 1062)
                return true;
            else
                return false;
        }
        public function storeMember($ward, $house_no, $name, $age, $sex, $edu_qualifications,
                $job, $uid_no, $election_id, $govt_aids, $mob_no, $any_traits) {
            $query = "INSERT INTO members VALUES('".$ward."','".$house_no."','".
                    $name."','".$age."','".$sex."','".$edu_qualifications."','".
                    $job."','".$uid_no."','".$election_id."','".$govt_aids."','".
                    $mob_no."','".$any_traits."','yes');";
            $result = mysql_query($query);
            if($result)
                return true;
            elseif(mysql_errno() == 1062)
                return true;
            else
                return false;
        }
        // public function getAllUsers() {
        //     $query = "SELECT * FROM temp;";
        //     $result = mysql_query($query);
        //     return $result;
        // }
    }
?>
