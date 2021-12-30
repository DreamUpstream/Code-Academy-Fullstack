<?php

require_once 'ArrayHelper.php';

echo "5 + 5 " . ArrayHelper::arraySummer([5, 5]);
echo " avarage 1, 2, 3 - " . (float)ArrayHelper::arrayAvg([1, 2, 3, 4]);

