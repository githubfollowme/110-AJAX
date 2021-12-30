<?php
 //-- 建立連線 --
 $ch = curl_init();

 
 // 設定擷取的URL網址
 curl_setopt($ch, CURLOPT_URL, "https://data.ntpc.gov.tw/api/datasets/61C99F42-8A90-4ADC-9C40-BA9E0EA097AA/json/preview");
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

 //將curl_exec()獲取的訊息以文件流的形式返回，而不是直接輸出。
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

 //設定要傳的 變數A=值A & 變數B=值B (中間要用&符號串接)
 //$PostData = "grant_type=authorization_code&code=".$_GET['code']."&redirect_uri=".$index_URL."%2fshare_area%2fline_login_in.php&client_id=1656067806&client_secret=ea2a37580a27722883eb57659e8e161f";

 //設定CURLOPT_POST 為 1或true，表示要用POST方式傳遞
 //curl_setopt($ch, CURLOPT_POST, 1); 
 //CURLOPT_POSTFIELDS 後面則是要傳接的POST資料。
 //curl_setopt($ch, CURLOPT_POSTFIELDS, $PostData);

 //-- 執行 --
 $temp=curl_exec($ch);
 //$xml = simplexml_load_string($temp, "SimpleXMLElement", LIBXML_NOCDATA);
 //$json_data=json_encode($xml);
 echo $temp;

 // 關閉CURL連線
 curl_close($ch);

?>