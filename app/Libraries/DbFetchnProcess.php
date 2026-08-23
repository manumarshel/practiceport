<?php


namespace App\Libraries;


use Config\Database;

class DbFetchnProcess
{

    public function joinQuestionBusiness()
    {
        $db = Database::connect();
        $builder = $db->table('questions');
        $builder->select('*');
        $builder->join('companies', 'questions.company_id = companies.company_id');
        $builder->where('active', 1);
        $query = $builder->get();
        return $query;
    }

    public function fetchDataWithJoin($question_id, $tableName, $secondTable, $firstJoinCondition, $thirdTable, $secondJoinCondition)
    {
        $db = Database::connect();
        $builder = $db->table($tableName);
        $builder->select('*');
        $builder->join($secondTable, $firstJoinCondition);
        $builder->join($thirdTable, $secondJoinCondition);
        $builder->where('question_id', $question_id);
        $query = $builder->get();
        return $query;
    }

    public function fetchWithJoinGeneral($tableName, $secondTable, $firstJoinCondition, $thirdTable, $secondJoinCondition)
    {
        $db = Database::connect();
        $builder = $db->table($tableName);
        $builder->select("*");
        $builder->join($secondTable, $firstJoinCondition,);
        $builder->join($thirdTable, $secondJoinCondition,);
//        $builder->where('question_id', $question_id);
        $query = $builder->get();
        return $query;
    }

    public function getProcessedB2b($b2bResults)
    {
        $data = array();
        if (count($b2bResults)) {
            $data['b2b_id'] = $b2bResults[0]->b2b_id;
            $data['eligible_to_taxed'] = $b2bResults[0]->eligible_to_taxed;
            $data['receiver_gstin'] = $b2bResults[0]->receiver_gstin;
            $data['receiver_name'] = $b2bResults[0]->receiver_name;
            $data['invoice_number'] = $b2bResults[0]->invoice_number;
            $data['invoice_date'] = $b2bResults[0]->invoice_date;
            $data['pos'] = $b2bResults[0]->pos;
            $data['is_igst'] = $b2bResults[0]->is_igst;
            $data['total_invoce_value'] = $b2bResults[0]->total_invoce_value;
            $data['supply_type'] = $b2bResults[0]->supply_type;
            $data['question_id'] = $b2bResults[0]->question_id;
            $idl = new ItemDetails();
            $op = $idl->getTaxRates($b2bResults);
            if ($op) {
                foreach ($op as $key => $result) {
                    $data[$key] = $result;
                }
            }
        }

        return $data;
    }

    public function getProcessedB2cl($queryResults)
    {
        $data = array();
        if (count($queryResults)) {
            $data['b2c_id'] = $queryResults[0]->b2c_id;
            $data['b2cl_is_eligible'] = $queryResults[0]->is_eligible;
            $data['b2cl_invoice_no'] = $queryResults[0]->invoice_no;
            $data['b2cl_invoice_date'] = $queryResults[0]->invoice_date;
            $data['b2cl_supply_type'] = $queryResults[0]->supply_type;
            $data['b2cl_total_invoice_value'] = $queryResults[0]->total_invoice_value;
            $data['b2cl_pos'] = $queryResults[0]->pos;
            $data['question_id'] = $queryResults[0]->question_id;
            $idl = new ItemDetails();
            $op = $idl->getTaxRates($queryResults);
            if ($op) {
                foreach ($op as $key => $result) {
                    $data['b2cl_' . $key] = $result;
                }
            }
        }

        return $data;
    }

    public function getProcessedData($queryResults)
    {
        $data = array();
        if (!empty($queryResults)) {
            $idl = new ItemDetails();
            $op = $idl->getTaxRates($queryResults);
            if ($op) {
                foreach ($op as $key => $result) {
                    $data[$key] = $result;
                }
            }
            $data = array_merge((array)$queryResults[0], $data);
        }
        return $data;
    }
}
