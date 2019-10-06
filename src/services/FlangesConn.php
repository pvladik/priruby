<?php

namespace Flanges\Services;

require_once(__DIR__ . '/PdoConn.php');

class FlangesConn
{
    private $PDO;

    private $dn;

    private $pn;

    public function __construct(string $pn, string $dn)
    {
        $this->PDO = PdoConn::init();

        $this->dn = $dn;
        $this->pn = $pn;
    }

    public function getRequest(): string
    {
        return $this->prepareTable();
    }

    private function prepareTable(): string
    {

//        $pns = $this->getDnByPn('nějaké uuid pn');
//        poté tu zřejmě budeš iterovat pomocí foreach přes pn
        $table = '<table>';
//        Vzor
//        foreach ($pns as $pn){
//            $table .= '<tr><td>'.$pn['name'].'</td><td>'.$pn['value'].'</td></tr>';
//        }
        $table .= '<tr><td>1</td><td>2</td><td>3</td></tr>';
        $table .= '<tr><td>1</td><td>2</td><td>3</td></tr>';
        $table .= '</table>';

        return $table;
    }

//    Pro vzor, doporučuji obyčejné PDO - https://www.php.net/manual/en/book.pdo.php
    private function getDnByPn(string $uuid): array
    {
        $userId = $this->PDO->prepare("SELECT * FROM dn WHERE pnUuid=?");
        $userId->execute([$uuid]);

        return $userId->fetchAll(\PDO::FETCH_ASSOC)[0]['id'];
    }

}