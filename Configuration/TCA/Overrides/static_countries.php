<?php
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_sr',
    ];

    \Bitmotion\StaticInfoTablesSr\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_countries');
unset($initialize);