<?php

namespace StrategyEgE1;

class StrategyGoA implements ChoiceStrategy
{
    /**
     * Стратегия go a
     *  @param array
     *
     *  @return array
     */
    public function ChoiceNameStrategy($arr)
    {

        //array_reverse($arr);

        $arr = $this->GetServiceCurl($arr);

        return $arr['result'];
    }

    /**
     *  Sending data to the service
     *  can be taken out separately, it is understood that strategies can have different services
     *  @param mixed
     *
     *  @return array
     */
    public function GetServiceCurl(array $arr)
    {

        // block possible validation on type
        $arrPrep = array('arr' => $arr);

        $jsonData = json_encode($arrPrep, JSON_UNESCAPED_UNICODE);

        $api_url = 'http://127.0.0.1:9433/strategyGoA';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_PROXY, null);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // просто отключаем проверку сертификата
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));


        $output = curl_exec($ch);
        $curl_errorno = curl_errno($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $obj = json_decode($output, true);

        curl_close($ch);

        return $obj;

    }

}
