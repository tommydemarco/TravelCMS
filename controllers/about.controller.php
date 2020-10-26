<?php 

class AboutController {
    static public function ctlShowAboutInfo() {
        $table = 'about_us';
        $response = AboutInfoModel::mdlShowAboutInfo($table);

        return $response;
    }
    static public function ctlShowEmployeesInfo() {
        $table = 'employees';
        $response = AboutInfoModel::mdlShowEmployeesInfo($table);

        return $response;
    }
}

?>