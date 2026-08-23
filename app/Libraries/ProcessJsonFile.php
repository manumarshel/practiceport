<?php

namespace App\Libraries;
use Exception;

class ProcessJsonFile
{
    protected $company_id;
    protected $question_id;
    protected $userId;
    protected $file_name;
    protected $doc_file_name;
    protected $path;
    protected $doc_path;
    public function __construct()
    {
        $this->company_id = session()->get('company_id');
        $this->question_id = 0;
        if (isset($_COOKIE['question_id']))
            $this->question_id = $_COOKIE['question_id'];


        $this->userId = session()->get('id');
        $this->file_name = $this->question_id . $this->userId . $this->company_id . '.json';
        $this->doc_file_name = $this->question_id . $this->userId . $this->company_id . 'doc.json';
        $this->path = ROOTPATH . 'public/assets/uploads/simulation/' . $this->file_name;
        $this->doc_path = ROOTPATH . 'public/assets/uploads/simulation/' . $this->doc_file_name;
//        echo $this->question_id . "  -- " . $this->userId . $this->company_id . '.json';
    }

    public function get_file_name(): string
    {
        return $this->file_name;
    }

    public function get_path(): string
    {
        return $this->path;
    }

    public function is_json_exists(): bool
    {
        if (file_exists($this->path)) {
            return true;
        } else {
            return false;
        }
    }

    public function is_doc_json_exists(): bool
    {
        if (file_exists($this->doc_path)) {
            return true;
        } else {
            return false;
        }
    }

    public function get_json_array()
    {
        if ($this->is_json_exists()) {
            $json = $this->get_current_json();
            if ($json != '') {
                return json_decode($json, true);
            }
        }

        return [];
    }

    public function get_doc_json_array()
    {
        if ($this->is_doc_json_exists()) {
            $json = $this->get_current_doc_json();
            if ($json != '') {
                return json_decode($json, true);
            }
        }

        return [];
    }

    public function is_multi(array $array)
    {
        return is_array($array[array_key_first($array)]);
    }

    public function get_current_gstr3b_data($page_slug)
    {
        $data = array();
        if ($this->is_json_exists()) {
            $json = $this->get_current_json();
//            var_dump($json);
            if ($json != '') {
                $jsonArr = json_decode($json, true);
                if (isset($jsonArr[$page_slug])) {
                    $data = $jsonArr[$page_slug];
                }
            }
        }

        return $data;
    }

    public function get_current_page_data($page_slug, $direct = false)
    {
        $data = array();

        if ($this->is_json_exists()) {
            $json = $this->get_current_json();
            if ($json != '') {
                $jsonArr = json_decode($json, true);

                if (isset($jsonArr[$page_slug])) {

//                    echo "<pre>";
//                    var_dump($jsonArr[$page_slug]);
//                    echo "</pre>";
//                    exit;
//                    echo count($jsonArr[$page_slug]);
                    if ($this->is_multi($jsonArr[$page_slug])) {
//                        echo "<br />Multi";
                        if ($direct) {
                            $data = $jsonArr[$page_slug];
                        } else {
                            $data['current_details'] = $jsonArr[$page_slug];
                        }

                    } else {
//                        echo "<pre>";
//                        var_dump($jsonArr[$page_slug]);
//                        echo "</pre>";
//                        exit;
                        if (count($jsonArr[$page_slug]) > 9) {

                            $result = [];
//                            $result[] = $jsonArr[$page_slug]; // changed on jan 23 2023
                            $cnt = count($jsonArr[$page_slug]) - 9;
                            for ($ii = 0; $cnt > $ii; $ii++) {
                                if (isset($jsonArr[$page_slug][$ii])) {
                                    $result[] = $jsonArr[$page_slug][$ii];
                                } else {
                                    $result[] = $jsonArr[$page_slug];
                                    break;
                                }

                            }
                            if ($direct) {
                                $data = $result;
                            } else {
                                $data['current_details'] = $result;
                            }

                        } else {
                            if ($direct) {
                                $data = $jsonArr[$page_slug];
                            } else {
                                $data['current_details'][] = $jsonArr[$page_slug];
                            }

                        }

                    }

                }

            }
        }


        return $data;
    }

    public function get_second_page_data($page_slug, $direct = true)
    {
        $data = array();

        if ($this->is_json_exists()) {
            $json = $this->get_current_json();
            if ($json != '') {
                $jsonArr = json_decode($json, true);
//                echo $this->file_name;
//                echo "<pre>";
//                var_dump($jsonArr);
//                echo "</pre>";
//                echo "<pre>";
//                var_dump($jsonArr[$page_slug]);
//                echo "</pre>";
                if (isset($jsonArr[$page_slug])) {
                    if ($this->is_multi($jsonArr[$page_slug])) {
//                        echo "<br />Multi";
                        if ($direct) {
                            $data = $jsonArr[$page_slug];
                        } else {
                            $data['snd_details'] = $jsonArr[$page_slug];
                        }

                    } else {
                        if (count($jsonArr[$page_slug]) > 9) {
                            $result = [];
                            $result[] = $jsonArr[$page_slug];
                            $cnt = count($jsonArr[$page_slug]) - 9;
                            for ($ii = 0; $cnt > $ii; $ii++) {
                                $result[] = $jsonArr[$page_slug][$ii];
                            }
                            if ($direct) {
                                $data = $result;
                            } else {
                                $data['snd_details'] = $result;
                            }

                        } else {
                            if ($direct) {
                                $data = $jsonArr[$page_slug];
                            } else {
                                $data['snd_details'][] = $jsonArr[$page_slug];
                            }

                        }

                    }

                }

            }
        }


        return $data;
    }

    public function get_current_json(): string
    {
        $file = fopen($this->path, "r");
        $jsonOp = '';
        if ($file) {
            while (!feof($file)) {
                $jsonOp .= fgets($file);
            }
            fclose($file);
        }

        return $jsonOp;
    }

    public function get_current_doc_json(): string
    {
        $file = fopen($this->doc_path, "r");
        $jsonOp = '';
        if ($file) {
            while (!feof($file)) {
                $jsonOp .= fgets($file);
            }
            fclose($file);
        }

        return $jsonOp;
    }

    public function update_json($jsonArr, $primeKey, $primeValue, $sndKey, $sndValue): array
    {
//        echo "Update Json before";
//        echo "<pre>";
//        var_dump($jsonArr);
//        echo "</pre>";
        $jsonArr[$primeKey][] = $primeValue;
        if ($sndKey == null) {
            $sk = $primeKey . '_item_details';
            $jsonArr[$sk][] = $sndValue;
        } else {
            $jsonArr[$sndKey][] = $sndValue;
        }

//        echo "Update Json after";
//        echo "<pre>";
//        var_dump($jsonArr);
//        echo "</pre>";
        return $jsonArr;
    }

    public function gstr3b_update_json($jsonArr, $primeKey, $primeValue): array
    {
        $jsonArr[$primeKey] = $primeValue;
//        echo "<pre>";
//        var_dump($jsonArr);
//        echo "</pre>";
        return $jsonArr;
    }

    public function save_json($jsonArr)
    {
        $json = json_encode($jsonArr);
//        echo "Save Json";
//        echo "<pre>";
//        var_dump($jsonArr);
//        echo "</pre>";
        $file = fopen($this->path, "w+") or die("Unable to open file!");
        fwrite($file, $json);
        fclose($file);
        return $json;

    }

    public function save_doc_json($jsonArr)
    {
        $json = json_encode($jsonArr);
//        echo "2";
//        echo "<pre>";
//        var_dump($jsonArr);
//        echo "</pre>";
        $file = fopen($this->doc_path, "w+") or die("Unable to open file!");
        fwrite($file, $json);
        fclose($file);
        return $json;

    }

    public function save_doc($arr, $data_type, $data)
    {

        if ($this->is_doc_json_exists()) {

            $jsonOp = $this->get_current_doc_json();
            if ($jsonOp !== '') {
                $jsonArr = json_decode($jsonOp, true);
                $jsonArr['doc_type' . $data_type][] = $data;
                try {
                    return $this->save_doc_json($jsonArr);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
        } else {
            try {
                return $this->save_doc_json($arr);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        return null;
    }
}
