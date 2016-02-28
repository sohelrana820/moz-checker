<?php
define('MOZ_API', 'mozscape-423d5002dc');
define('MOZ_SECRET_KEY', '2b48bb9d2bd43e5f38766cc937b564d1');

if (isset($_POST['url'])) {
    if (!filter_var($_POST['url'], FILTER_VALIDATE_URL) === false) {
        $url = parse_url($_POST['url']);
        $domain = $url['host'];
        $expires = time() + 300;
        $stringToSign = MOZ_API . "\n" . $expires;
        $binarySignature = hash_hmac('sha1', $stringToSign, MOZ_SECRET_KEY, true);
        $urlSafeSignature = urlencode(base64_encode($binarySignature));
        $cols = "103079233572";
        $limit = 1;

        $urlMetrics = "http://lsapi.seomoz.com/linkscape/url-metrics/" . $domain . "?Cols=" . $cols . "&Limit=" . $limit . "&AccessID=" . MOZ_API . "&Expires=" . $expires . "&Signature=" . $urlSafeSignature;
        $options = array(
            CURLOPT_RETURNTRANSFER => true
        );
        $ch = curl_init($urlMetrics);
        curl_setopt_array($ch, $options);
        $content = json_decode(curl_exec($ch));
        curl_close($ch);

        $overview = array(
            'uu' => str_replace('/', '', $content->uu),
            'upa' => number_format($content->upa, 2),
            'pda' => number_format($content->pda, 2),
            'umrp' => number_format($content->umrp, 2),
            'uid' => $content->uid ? $content->uid : 0,
        );
        echo json_encode($overview);
    }
    else {
        echo json_encode(2);
    }
}
else{
    echo json_encode(1);
}
?>