<?php
    // include('../../include/dbConnection.php');

#============================================================================================================#
    // function 1 check whether the table is exist or not
    function checkTableExist($table){
        if ($result = $conn->query("SHOW TABLES LIKE '".$table."'")) {
            if($result->num_rows == 1) {
               return 1;
            }
        }
        else {
            return 0;
        }
    }


#============================================================================================================#
    //function 2, check data exist in 1 field
    function checkDataExistOne($table,$field,$data){
        $check1 = $conn -> query("SELECT * FROM $table WHERE $field = '$data'");
        if($check1->num_rows == 1){
            return 1;
        } else {
            return 0;
        }
    }


#============================================================================================================#
    //function 3,  check data exist in 2 field
    function checkDataExistTwo($table,$field1,$data1,$field2,$data2){
        $check2 = $conn->query("SELECT * FROM $table WHERE $field1 = '$data1' AND $field2 = '$data2'");
        if($check2->num_rows == 1){
            return 1;
        } else {
            return 0;
        }
    }


#===========================================================================================================#
    //function 4, select single row data 
    function selectSingleRow($table,$field,$data){
        $select1 = $conn->query("SELECT * FROM $table WHERE $field = $data LIMIT 1");

    }

#============================================================================================================#
function GetNepaliDate($english_date, $nepali = false, $time = '00:00:00')
{
	//$thisdate = date("Y-m-d");
	//echo 'aa';
	//echo $time;
	$english_date = date("Y-m-d", strtotime($english_date));
	$query = "SELECT * FROM tbl_calendar WHERE eng_start_date <= '$english_date' AND eng_end_date >= '$english_date' LIMIT 1";
	$nep_date = $GLOBALS['objqry']->querySelectSingle($query);
	//var_dump($nep_date);
	$days_diff = getdays($nep_date['eng_start_date'], $english_date) + 1;
	if ($nepali) {
		return ConvertNoIntoUnicode($nep_date['nepali_year']) . ' ' . GetNepaliMonth($nep_date['month_code']) . ' ' . ConvertNoIntoUnicode($days_diff) . ' गते';
		//return GetNepaliMonth($nep_date[month_code]).' '.ConvertNoIntoUnicode($days_diff).', '.ConvertNoIntoUnicode($nep_date[nepali_year]);

		//२०७२ मंसिर ११ गते
	} else return $nep_date['nepali_year'] . '-' . $nep_date['month_code'] . '-' . $days_diff;
}
?>