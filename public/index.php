<?php

declare(strict_types=1);

namespace ExceptionTask;

require __DIR__ . './../vendor/autoload.php';

use ExceptionTask\Exceptions\InvalidFormatException;
use ExceptionTask\Exceptions\MyException;

try {
    echo division(10, 10);
    validateData('dsfs');
} catch (MyException $e) {
    $msg = $e->getMessage();
    $format_msg = 'Поймано исключение: %s';

    $details = $e->getDetails();
    $format_detail = 'Доп информация: %s';

    echo sprintf($format_msg, $msg);
    echo '<br>';
    echo sprintf($format_detail, $details);
} catch (InvalidFormatException $e) {
    $msg = $e->getMessage();
    $format_msg = 'Поймано исключение: %s';
    echo sprintf($format_msg, $msg);
}

