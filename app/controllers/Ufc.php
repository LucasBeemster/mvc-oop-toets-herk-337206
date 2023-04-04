<?php

class Ufc extends BaseController
{
    private $ufcModel;


    public function __construct()
    {
        $this->ufcModel = $this->model('ufcModel');
    }

    public function getUFC()
    {
        $result = $this->ufcModel->getUFC();

        $rows = "";
        foreach ($result as $ufc) {
            $rows .= "<tr>
                        <td>$ufc->Name</td>        
                        <td>$ufc->Ranking</td>   
                        <td>$ufc->Length</td>   
                        <td>$ufc->Weight</td>   
                        <td>$ufc->Age</td>
                        <td>$ufc->WinsByKnockout</td>                
                      </tr>";
        }

        $data = [
            'title' => 'MENS POUND-FOR-POUND TOP RANK UFC',
            'rows'  => $rows
        ];

        $this->view('UFC/getUFC', $data);
    }
}
