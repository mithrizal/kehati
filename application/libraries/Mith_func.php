<?php

class Mith_func {

    function __construct() {
        $this->CI = & get_instance();
    }

    function debugVar($var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        exit;
    }
    
    // MK: $(&#36;) or Rp.
    function price_format($string, $mk="Rp. ", $nol=2){
        return $mk." ".number_format($string, $nol, ",", ".");
    }
    
    function uploaded_image($name, $path, $width=220, $height=220, $allowNULL=TRUE) {
//        $this->debugVar($_FILES[$name]);
        if (isset($_FILES[$name]['name']) && $_FILES[$name]['name'] != '') {
            
            $ext = substr(strrchr($_FILES[$name]["name"],'.'),1);
            $newfilename = "voltshoes_".md5(date("YmdHis")."_".substr($_FILES[$name]["name"], 0, 3)).".".$ext;
                
            $config['upload_path'] = realpath(APPPATH . $path);
            $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|gif|png';
            $config['max_size'] = '8000';
            $config['encrypt_name'] = TRUE;
            $config['file_name'] = $newfilename;

            $this->CI->load->library('upload', $config);
                    
            if (!$this->CI->upload->do_upload($name)) {
                return array('error' => $this->CI->upload->display_errors());
            } else {
                $image = $this->CI->upload->data();
                //resize image
                $config['image_library'] = 'gd2';
                $config['source_image'] = $image['full_path'];
                $config['create_thumb'] = FALSE;
                $config['new_image'] = realpath(APPPATH . $path);
                $config['maintain_ratio'] = TRUE;
                $config['width'] = $width;
                $config['height'] = $height;

                $this->CI->load->library('image_lib', $config);
                $this->CI->image_lib->resize();
                
                return array('upload_data' => $this->CI->upload->data());
            }
        } else {
            if(!$allowNULL) return array('error' => "Image not found.");
        }
    }
    
    /** Function For Delete Image **/
    function delete_image($filename, $path) {
        $path = realpath(APPPATH . $path);
        /* Delete Last File Image If Exists */
        if($filename) {
//            $this->mith_func->debugVar($path.$filename);
            if(file_exists($path."/".$filename)) unlink($path."/".$filename);
            if(file_exists($path."/thumb/".$filename)) unlink($path."/thumb/".$filename);
        }
    }
    
    /**
     * 
     * convertDate
     * fungsi untuk melakukan konversi 
     * dari format dd-mm-yyyy hh:mm:ss z
     * ke yyyy-mm-dd hh:mm:ss z
     * atau sebaliknya
     * 
     * */
    function convert_date($date, $showtime = 0, $separator = "-") {
        if (strlen($date) > 10) {
            $datetime = explode(" ", $date);
            $date = $datetime[0];
            $time = $datetime[1];
        } elseif (strlen($date) == 10) {
            $datetime = explode(" ", $date);
            $date = $datetime[0];
            $showtime = 0;
        } else {
            return $date;
        }

        $date = explode($separator, $date);

        if ($showtime == 0) {
            $indodate = $date['2'] . "-" . $date['1'] . "-" . $date['0'];
        } else {
            $indodate = $date['2'] . "-" . $date['1'] . "-" . $date['0'] . " " . $time;
        }

        return $indodate;
    }
    
    function date_format($date, $format="d M Y"){
        $dtime = strtotime($date);
        $ddate = date($format, $dtime);
//        $this->debugVar($ddate);
        
        return $ddate;
    }
    
    function getWeatherYahoo($url) {
        $cuaca = array(
            0 => array(0 => "-", 1 => "-", 2 => array(0 => "-", 1 => "-"), 3 => "-"),
            1 => array(0 => "-", 1 => "-", 2 => array(0 => "-", 1 => "-"), 3 => "-"),
            2 => array(0 => "-", 1 => "-", 2 => array(0 => "-", 1 => "-"), 3 => "-"),
            3 => array(0 => "-", 1 => "-", 2 => array(0 => "-", 1 => "-"), 3 => "-")
        );
        
        $cuaca_raw = @file_get_contents($url);
        if ($cuaca_raw === FALSE)
            return $cuaca;
        
        preg_match_all('#<yweather:forecast (.*?) />#',  $cuaca_raw, $detail);
//        $this->debugVar($detail);
        foreach($detail[1] as $key => $day){
            preg_match('#text="(.*?)"#', $day, $info);
            preg_match('#low="(.*?)"#', $day, $low);
            preg_match('#high="(.*?)"#', $day, $high);
            preg_match('#day="(.*?)"#', $day, $dday);
            preg_match('#date="(.*?)"#', $day, $date);
//            $this->debugVar($date);
            $cuaca[$key][1] = $info[1];
            $cuaca[$key][2][0] = $low[1];
            $cuaca[$key][2][1] = $high[1];
            $cuaca[$key][3] = $dday[1].", ".$date[1];
        }
        
        preg_match_all('#<yweather:condition (.*?) />#',  $cuaca_raw, $today);
        preg_match('#text="(.*?)"#', $today[1][0], $info);
        preg_match('#temp="(.*?)"#', $today[1][0], $celc);
        
        $cuaca[0][0] = $celc[1];
        $cuaca[0][1] = $info[1];
        
//        $this->debugVar($cuaca);
        return $cuaca;
    }
    
    function getWeather($url) {
        $cuaca = array(
            0 => array(0 => "-", 1 => "-", 2 => array(0 => "-", 1 => "-"), 3 => "-"),
            1 => array(0 => "-", 1 => "-", 2 => array(0 => "-", 1 => "-"), 3 => "-"),
            2 => array(0 => "-", 1 => "-", 2 => array(0 => "-", 1 => "-"), 3 => "-"),
            3 => array(0 => "-", 1 => "-", 2 => array(0 => "-", 1 => "-"), 3 => "-")
        );

        $cuaca_raw = @file_get_contents($url);
        if ($cuaca_raw === FALSE) {
            return $cuaca;
        }

        $arr = explode("\r\n", $cuaca_raw);
        if (count($arr) >= 8) {
            $cuaca[0] = explode("=", $arr[0]);
            $cuaca[0] = explode(",", $cuaca[0][1]);
            $cuaca[0][0] = str_replace("C", "", $cuaca[0][0]);

            $besok = (trim($arr[2] != "") ? $arr[2] : $arr[3]);
            $cuaca[1] = explode("=", $besok);
            $tgl = strtoupper($cuaca[1][0]);
            $cuaca[1] = explode(",", $cuaca[1][1]);
            $cuaca[1][2] = str_replace("C", "", $cuaca[1][2]);
            $cuaca[1][2] = explode("-", $cuaca[1][2]);
            $cuaca[1][3] = $tgl;

            $lusa = (trim($arr[5] != "") ? $arr[5] : $arr[6]);
            $cuaca[2] = explode("=", $lusa);
            $tgl = strtoupper($cuaca[2][0]);
            $cuaca[2] = explode(",", $cuaca[2][1]);
            $cuaca[2][2] = str_replace("C", "", $cuaca[2][2]);
            $cuaca[2][2] = explode("-", $cuaca[2][2]);
            $cuaca[2][3] = $tgl;

            if (count($arr) >= 10) {
                $lusa2 = (trim($arr[8] != "") ? $arr[8] : $arr[9]);
                $cuaca[3] = explode("=", $lusa2);
                $tgl = strtoupper($cuaca[3][0]);
                $cuaca[3] = explode(",", $cuaca[3][1]);
                $cuaca[3][2] = str_replace("C", "", $cuaca[3][2]);
                $cuaca[3][2] = explode("-", $cuaca[3][2]);
                $cuaca[3][3] = $tgl;
            }
        }
//        $this->debugVar($arr);
        return $cuaca;
    }

    function time_elapsed_string($ptime) {
        $etime = time() - strtotime($ptime);
        if ($etime < 1) {
            return 'just now';
        }

        $a = array(12 * 30 * 24 * 60 * 60 => 'year',
            30 * 24 * 60 * 60 => 'month',
            24 * 60 * 60 => 'day',
            60 * 60 => 'hour',
            60 => 'minute',
            1 => 'second'
        );

        foreach ($a as $secs => $str) {
            $d = $etime / $secs;
            if ($d >= 1) {
                $r = round($d);
                return $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
            }
        }
    }
    
    function getStatusList(){
        $nList = array();
        $nList[1] = "Active";
        $nList[2] = "Inactive";
        
        return $nList;
    }
    
    function getStatusProductList(){
        $nList = array();
        $nList[1] = "In Stock";
        $nList[2] = "Out Of Stock";
        $nList[3] = "Created By Request";
        
        return $nList;
    }
    
    function getDescStatus($status){
        switch ($status){
            case 1: 
                return "In Stock";
                break;
            case 2: 
                return "Out Of Stock";
                break;
            case 3: 
                return "Created By Request";
                break;
            default :
                return "In Stock";
        }
    }
    
    function getDisplay($display){
        switch ($display){
            case 0: 
                return "Displayed";
                break;
            case 1: 
                return "Not Displayed";
                break;
            default :
                return "Not Displayed";
        }
    }
    
    function getFrontpageData($name){
        $sql = "SELECT *
                FROM volt_data_setting
                WHERE name = '$name'";        
        $query = $this->CI->db->query($sql);
        $data = $query->row();
        
        return $data;
    }
    
    /** End Added by RR * */
}
