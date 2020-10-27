<?php 

class GenericInfoController {
    static public function ctlShowGenericInfo() {
        $table = 'general';
        $response = GenericInfoModel::mdlShowGenericInfo($table);

        return $response;
    }
}
