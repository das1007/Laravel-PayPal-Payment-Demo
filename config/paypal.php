<?php 
return [ 
    'client_id' => 'ATlVrsdtrtO6fENZLBvvTaPnJQyFQMNnc5ZpGTVNHIxsS4Jd0MsSphl1iQaHm8cJzuQdhv7KqZUVIpdk',
	'secret' => 'EN2SbyqdMni_d_nv86cZm0rGEvN4jctMLJVXiQ86I7kkbZKHNfVxpCwS1cRdLGJ2hLfulvR2_oIyGu4X',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];