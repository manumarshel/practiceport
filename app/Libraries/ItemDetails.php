<?php


namespace App\Libraries;


class ItemDetails
{
    protected $zper;
    protected $p1per;
    protected $p25per;
    protected $onePer;
    protected $onep5per;
    protected $threePer;
    protected $fivePer;
    protected $sevenP5Per;
    protected $twlvePer;
    protected $eitnnPercent;
    protected $twoEightPer;

    protected $result = array();

    public function __construct($post = null)
    {

        if (isset($post) && isset($post['zper'])) {
            $this->zper = $post['zper'];
        }

        if (isset($post) && isset($post['p1per'])) {
            $this->p1per = $post['p1per'];
        }
        if (isset($post) && isset($post['p25per'])) {
            $this->p25per = $post['p25per'];
        }
        if (isset($post) && isset($post['onep5per'])) {
            $this->onep5per = $post['onep5per'];
        }
        if (isset($post) && isset($post['threePer'])) {
            $this->threePer = $post['threePer'];
        }
        if (isset($post) && isset($post['fivePer'])) {
            $this->fivePer = $post['fivePer'];
        }
        if (isset($post) && isset($post['sevenP5Per'])) {
            $this->sevenP5Per = $post['sevenP5Per'];
        }
        if (isset($post) && isset($post['twlvePer'])) {
            $this->twlvePer = $post['twlvePer'];
        }
        if (isset($post) && isset($post['eitnnPercent'])) {
            $this->eitnnPercent = $post['eitnnPercent'];
        }
        if (isset($post) && isset($post['twoEightPer'])) {
            $this->twoEightPer = $post['twoEightPer'];
        }
    }

    public function processResult(): array
    {
        if ($this->zper && $this->zper['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->zper['integrated_tax']) ) {
                $integrated_tax = $this->zper['integrated_tax'];
            }

            if ( isset($this->zper['cgst']) ) {
                $cgst = $this->zper['cgst'];
            }

            if ( isset($this->zper['sgst']) ) {
                $sgst = $this->zper['sgst'];
            }

            $this->result['zper'] = [
                'rate_percent' => 'zper',
                'tax_value' => $this->zper['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->zper['cess'],
            ];
        }

        if ($this->p1per && $this->p1per['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->p1per['integrated_tax']) ) {
                $integrated_tax = $this->p1per['integrated_tax'];
            }

            if ( isset($this->p1per['cgst']) ) {
                $cgst = $this->p1per['cgst'];
            }

            if ( isset($this->p1per['sgst']) ) {
                $sgst = $this->p1per['sgst'];
            }

            $this->result['p1per'] = [
                'rate_percent' => 'p1per',
                'tax_value' => $this->p1per['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->p1per['cess'],
            ];
        }

        if ($this->p25per && $this->p25per['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->p25per['integrated_tax']) ) {
                $integrated_tax = $this->p25per['integrated_tax'];
            }

            if ( isset($this->p25per['cgst']) ) {
                $cgst = $this->p25per['cgst'];
            }

            if ( isset($this->p25per['sgst']) ) {
                $sgst = $this->p25per['sgst'];
            }

            $this->result['p25per'] = [
                'rate_percent' => 'p25per',
                'tax_value' => $this->p25per['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->p25per['cess'],
            ];
        }

        if ($this->onePer && $this->onePer['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->onePer['integrated_tax']) ) {
                $integrated_tax = $this->onePer['integrated_tax'];
            }

            if ( isset($this->onePer['cgst']) ) {
                $cgst = $this->onePer['cgst'];
            }

            if ( isset($this->onePer['sgst']) ) {
                $sgst = $this->onePer['sgst'];
            }

            $this->result['onePer'] = [
                'rate_percent' => 'onePer',
                'tax_value' => $this->onePer['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->onePer['cess'],
            ];
        }

        if ($this->onep5per && $this->onep5per['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->onep5per['integrated_tax']) ) {
                $integrated_tax = $this->onep5per['integrated_tax'];
            }

            if ( isset($this->onep5per['cgst']) ) {
                $cgst = $this->onep5per['cgst'];
            }

            if ( isset($this->onep5per['sgst']) ) {
                $sgst = $this->onep5per['sgst'];
            }

            $this->result['onep5per'] = [
                'rate_percent' => 'onep5per',
                'tax_value' => $this->onep5per['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->onep5per['cess'],
            ];
        }

        if ($this->threePer && $this->threePer['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->threePer['integrated_tax']) ) {
                $integrated_tax = $this->threePer['integrated_tax'];
            }

            if ( isset($this->threePer['cgst']) ) {
                $cgst = $this->threePer['cgst'];
            }

            if ( isset($this->threePer['sgst']) ) {
                $sgst = $this->threePer['sgst'];
            }

            $this->result['threePer'] = [
                'rate_percent' => 'threePer',
                'tax_value' => $this->threePer['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->threePer['cess'],
            ];
        }

        if ($this->fivePer && $this->fivePer['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->fivePer['integrated_tax']) ) {
                $integrated_tax = $this->fivePer['integrated_tax'];
            }

            if ( isset($this->fivePer['cgst']) ) {
                $cgst = $this->fivePer['cgst'];
            }

            if ( isset($this->fivePer['sgst']) ) {
                $sgst = $this->fivePer['sgst'];
            }

            $this->result['fivePer'] = [
                'rate_percent' => 'fivePer',
                'tax_value' => $this->fivePer['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->fivePer['cess'],
            ];
        }

        if ($this->sevenP5Per && $this->sevenP5Per['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->sevenP5Per['integrated_tax']) ) {
                $integrated_tax = $this->sevenP5Per['integrated_tax'];
            }

            if ( isset($this->sevenP5Per['cgst']) ) {
                $cgst = $this->sevenP5Per['cgst'];
            }

            if ( isset($this->sevenP5Per['sgst']) ) {
                $sgst = $this->sevenP5Per['sgst'];
            }

            $this->result['sevenP5Per'] = [
                'rate_percent' => 'sevenP5Per',
                'tax_value' => $this->sevenP5Per['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->sevenP5Per['cess'],
            ];
        }

        if ($this->twlvePer && $this->twlvePer['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->twlvePer['integrated_tax']) ) {
                $integrated_tax = $this->twlvePer['integrated_tax'];
            }

            if ( isset($this->twlvePer['cgst']) ) {
                $cgst = $this->twlvePer['cgst'];
            }

            if ( isset($this->twlvePer['sgst']) ) {
                $sgst = $this->twlvePer['sgst'];
            }

            $this->result['twlvePer'] = [
                'rate_percent' => 'twlvePer',
                'tax_value' => $this->twlvePer['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->twlvePer['cess'],
            ];
        }

        if ($this->eitnnPercent && $this->eitnnPercent['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->eitnnPercent['integrated_tax']) ) {
                $integrated_tax = $this->eitnnPercent['integrated_tax'];
            }

            if ( isset($this->eitnnPercent['cgst']) ) {
                $cgst = $this->eitnnPercent['cgst'];
            }

            if ( isset($this->eitnnPercent['sgst']) ) {
                $sgst = $this->eitnnPercent['sgst'];
            }

            $this->result['eitnnPercent'] = [
                'rate_percent' => 'eitnnPercent',
                'tax_value' => $this->eitnnPercent['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->eitnnPercent['cess'],
            ];
        }

        if ($this->twoEightPer && $this->twoEightPer['tax_value'] != '') {
            $integrated_tax = 0;
            $cgst = 0;
            $sgst = 0;

            if ( isset($this->twoEightPer['integrated_tax']) ) {
                $integrated_tax = $this->twoEightPer['integrated_tax'];
            }

            if ( isset($this->twoEightPer['cgst']) ) {
                $cgst = $this->twoEightPer['cgst'];
            }

            if ( isset($this->twoEightPer['sgst']) ) {
                $sgst = $this->twoEightPer['sgst'];
            }

            $this->result['twoEightPer'] = [
                'rate_percent' => 'twoEightPer',
                'tax_value' => $this->twoEightPer['tax_value'],
                'integrated_tax' => $integrated_tax,
                'cgst' => $cgst,
                'sgst' => $sgst,
                'cess' => $this->twoEightPer['cess'],
            ];
        }

        return $this->result;
    }

    public function getTaxRates($results)
    {
        $output = array();
        if ($results) {
            foreach ($results as $result) {
                $output[$result->rate_percent] = array(
                    'tax_value' => $result->tax_value,
                    'integrated_tax' => $result->integrated_tax,
                    'cgst' => $result->cgst,
                    'sgst' => $result->sgst,
                    'cess' => $result->cess,
                );
            }

            return $output;
        }

        return null;
    }
}
