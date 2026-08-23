<?php

namespace App\Controllers\Eway;

use App\Controllers\BaseController;

class GenerateBill extends BaseController
{
    public function index()
    {
        $data = [];
        
        return view('eway/generate-bill', $data);
    }

    public function getDocType()
    {
        helper(['form']);

        $jsonText = $this->request->getBody(); 

        $jsonText = str_replace("'", "\"", $jsonText);

        $jsonArray = json_decode($jsonText, true);

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 1)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "1",
                        "DocType" => "INV",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "1",
                        "DocType" => "INV",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "1",
                        "DocType" => "BIL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "1",
                        "DocType" => "BIL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 3)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "3",
                        "DocType" => "BIL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "3",
                        "DocType" => "INV",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "3",
                        "DocType" => "BIL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "3",
                        "DocType" => "INV",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ]
                ]
            ];
            
            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 4)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "4",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "4",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ]
                ]
            ];
            
            return $this->response->setJSON($data);
            
        }

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 9)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "9",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "9",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "9",
                        "DocType" => "BIL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "9",
                        "DocType" => "BIL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "9",
                        "DocType" => "INV",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "9",
                        "DocType" => "INV",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 11)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "11",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "11",
                        "DocType" => "OTH",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 5)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "5",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 12)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "12",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 10)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "10",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "O" && $jsonArray['SubSupplyType'] == 8)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "8",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "8",
                        "DocType" => "OTH",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "8",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "8",
                        "DocType" => "OTH",
                        "FromGstin" => "SLF",
                        "ToGstin" => "OTH",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "8",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "O",
                        "SubSupplyType" => "8",
                        "DocType" => "OTH",
                        "FromGstin" => "SLF",
                        "ToGstin" => "URP",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "I" && $jsonArray['SubSupplyType'] == 1)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "1",
                        "DocType" => "INV",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "1",
                        "DocType" => "INV",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "1",
                        "DocType" => "BIL",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "1",
                        "DocType" => "BIL",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "I" && $jsonArray['SubSupplyType'] == 2)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "2",
                        "DocType" => "BOE",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "2",
                        "DocType" => "BOE",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "I" && $jsonArray['SubSupplyType'] == 9)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "9",
                        "DocType" => "BOE",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "9",
                        "DocType" => "INV",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "9",
                        "DocType" => "INV",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "9",
                        "DocType" => "BIL",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "9",
                        "DocType" => "BIL",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "9",
                        "DocType" => "CHL",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "9",
                        "DocType" => "CHL",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "9",
                        "DocType" => "BOE",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "I" && $jsonArray['SubSupplyType'] == 6)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "6",
                        "DocType" => "CHL",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "6",
                        "DocType" => "CHL",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "I" && $jsonArray['SubSupplyType'] == 7)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "7",
                        "DocType" => "CHL",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "7",
                        "DocType" => "CHL",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "I" && $jsonArray['SubSupplyType'] == 12)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "12",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "I" && $jsonArray['SubSupplyType'] == 5)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "5",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }

        if ($jsonArray['Supplytype'] == "I" && $jsonArray['SubSupplyType'] == 8)
        {
            $data = [
                "d" => [
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "8",
                        "DocType" => "CHL",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "8",
                        "DocType" => "CHL",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "8",
                        "DocType" => "OTH",
                        "FromGstin" => "SLF",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "8",
                        "DocType" => "OTH",
                        "FromGstin" => "OTH",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "8",
                        "DocType" => "CHL",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ],
                    [
                        "__type" => "SupplyDocMapping",
                        "SupplyType" => "I",
                        "SubSupplyType" => "8",
                        "DocType" => "OTH",
                        "FromGstin" => "URP",
                        "ToGstin" => "SLF",
                        "TaxRate" => 1
                    ]
                ]
            ];

            return $this->response->setJSON($data);
        }
    }

    public function getUserGSTNDefaultPlace()
    {
        $data = [
            "d" => [
                "__type" => "UserBusinessPlaces",
                "gstin" => session('gstin'),
                "clientId" => 0,
                "clientType" => null,
                "name" => session('company_name'),
                "addr1" => session('address1'),
                "addr2" => session('address2'),
                "addrplace" => session('city'),
                "stateCode" => 32,
                "pincode" => session('pincode'),
                "mobile" => null,
                "email" => null,
                "isSez" => "N"
            ]
        ];

        return $this->response->setJSON($data);
    }

    public function getStateinfoByPin()
    {
        $data = [
            "d" => [
                "__type" => "PinCodeStateCodeMapping",
                "pinCode" => "688538",
                "stateCode1" => "32",
                "stateCode2" => "0",
                "stateCode3" => "0",
                "stateCode4" => "0",
                "stateCode5" => "0",
                "groupCode" => null
            ]
        ];
        
        return $this->response->setJSON($data);
    }

    public function getMatchedClientNames()
    {
        $data = [
            "d" => []
        ];
        
        return $this->response->setJSON($data);
    }

    public function getGSTNDetailsWithDocDtType()
    {
        helper(['form']);

        $jsonText = $this->request->getBody(); 

        $jsonText = str_replace("'", "\"", $jsonText);

        $jsonArray = json_decode($jsonText, true);

        $data = [
            "d" => [
                "__type" => "GstinMaster",
                "gstin" => $jsonArray['gstin'],
                "legalName" => "",
                "mobileNo" => null,
                "regType" => null,
                "email" => null,
                "tradeName" => "",
                "stateCode" => "",
                "addrBnm" => "",
                "addrBno" => "",
                "addrFlno" => "",
                "addrSt" => "",
                "addrLoc" => "",
                "addrPncd" => "",
                "addrStjd" => null,
                "addrDst" => null,
                "stOffCode" => null,
                "cnOffCode" => null,
                "noOfAddlPlaces" => null,
                "busType" => null,
                "status" => "ACT",
                "dtReg" => "3/22/2021 12:00:00 AM",
                "dtDReg" => null,
                "isTransporter" => null,
                "txpType" => "REG",
                "userType" => null,
                "commonEnroll" => "",
                "blockedStatus" => "",
                "einvEnable" => "",
                "irnBlcked" => null,
                "ewbByIrn" => "",
                "BlockedMsg" => null,
                "IsSEZ" => null,
                "txp100Cr" => "",
                "einvAlertMsg" => null
            ]
        ];
        
        return $this->response->setJSON($data);
    }

    public function getAutoDistance()
    {
        $data = [
            "d" => "60"
        ];

        return $this->response->setJSON($data);
    }

    public function isSez()
    {
        $data = [
            "d" => "N"
        ];

        return $this->response->setJSON($data);
    }

    public function getMatchedUserProductNames()
    {
        $data = [
            "d" => []
        ];
        
        return $this->response->setJSON($data);
    }

    public function checkNonAdvolFlag()
    {
        $data = [
            "d" => ""
        ];

        return $this->response->setJSON($data);
    }

    public function assignItems()
    {
        helper(['form']);

        $jsonText = $this->request->getBody(); 

        $jsonText = str_replace("'", "\"", $jsonText);

        $jsonArray = json_decode($jsonText, true);

        $items = array_filter($jsonArray['ewayBill']['itemList']);

        $d = [];

        foreach ($items as $item) {
            $d[] = [
                "__type" => "EwayBillItem",
                "ewbNo" => 0,
                "itemNo" => 0,
                "userGstin" => null,
                "productId" => 0,
                "productName" => $item['productName'],
                "productDesc" => "",
                "hsnCode" => $item['hsnCode'],
                "quantity" => $item['quantity'],
                "qtyUnit" => "",
                "cgstRate" => $item['cgstRate'],
                "sgstRate" => $item['sgstRate'],
                "igstRate" => $item['igstRate'] < 0 ? 0 : $item['igstRate'],
                "cessRate" => $item['cessRate'],
                "cessAdvol" => 0,
                "cessNonAdvol" => $item['cessNonAdvol'],
                "taxableAmount" => $item['taxableAmount'],
                "cgstRatePrint" => null,
                "sgstRatePrint" => null,
                "igstRatePrint" => null,
                "cessRatePrint" => null,
                "cessAdvolPrint" => null,
                "cessNonAdvolPrint" => null
            ];
        }

        $data = [
            "d" => $d
        ];

        return $this->response->setJSON($data);
    }

    public function getMatchedTransporterNames()
    {
        $data = [
            "d" => []
        ];
        
        return $this->response->setJSON($data);
    }

    public function getVehicleDetails()
    {
        $data = [
            "d" => "Vehicle Class as per Vahan/Transport Department :HMV"
        ];

        return $this->response->setJSON($data);
    }

    public function getUnitCode()
    {
        helper(['form']);

        $jsonText = $this->request->getBody(); 

        $jsonText = str_replace("'", "\"", $jsonText);

        $jsonArray = json_decode($jsonText, true);

        $unitArray = [
            'BAG', 'BAL', 'BDL', 'BKL', 'BOU', 'BOX', 'BTL', 'BUN', 'CAN', 'CBM', 'CCM', 'CMS', 'CTN', 'DOZ', 'DRM', 'GGK', 'GMS', 'GRS', 'GYD', 'KGS', 'KME', 'LTR', 'MLT', 'MTR', 'MTS', 'NOS', 'OTH', 'PAC', 'PCS', 'PRS', 'QTL', 'ROL', 'SET', 'SQF', 'SQM', 'SQY', 'TBS', 'THD', 'TON', 'TUB', 'UGS', 'UNT', 'YDS'
        ];

        if (in_array(strtoupper($jsonArray['unitCode']), $unitArray)) {
            $data = [
                "d" => "Success"
            ];
        } else {
            $data = [
                "d" => "Invalid UQC"
            ];
        }

        return $this->response->setJSON($data);
    }

    public function checkDuplicateInvoice()
    {
        helper(['form']);

        $jsonText = $this->request->getBody(); 

        $jsonText = str_replace("'", "\"", $jsonText);

        $jsonArray = json_decode($jsonText, true);

        $data = [
            "d" => "Success"
        ];

        return $this->response->setJSON($data);
    }

    public function saveBillDetails()
    {
        helper(['form', 'string', 'session']);

        $jsonText = $this->request->getBody(); 

        $jsonText = str_replace("ewayBill", "\"ewayBill\"", $jsonText);
        $jsonText = str_replace("'", "\"", $jsonText);

        $jsonArray = json_decode($jsonText, true);

        $billData = $jsonArray['ewayBill'];

        $timestamp = time();
        $randomNumber = rand(1000000000, 9999999999);

        $billNumber = $timestamp . $randomNumber;
        $billNumber = substr($billNumber, 0, 12);

        $billData['billNumber'] = $billNumber;

        $data['eway-bill-'.$billNumber] = $billData;

        session()->set($data);

        $data = [
            "d" => $billNumber."@Success"
        ];

        return $this->response->setJSON($data);
    }

    public function printBill()
    {
        helper(['form', 'input']);

        $billNumber = $this->request->getGet('ewb_no');

        $billData = session()->get('eway-bill-'.$billNumber);

        return view('eway/print-bill', $billData);
    }

    public function printDetailBill()
    {
        helper(['form', 'input']);

        $billNumber = $this->request->getGet('ewb_no');

        $billData = session()->get('eway-bill-'.$billNumber);

        return view('eway/print-detail-bill', $billData);
    }
}
