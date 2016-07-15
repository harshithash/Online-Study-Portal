<?php
function errorHandler($error_level, $error_message, $error_file, $error_line, $error_context)
{
$error = "lvl: " . $error_level . " | msg:" . $error_message . " | file:" . $error_file . " | ln:" . $error_line;
switch ($error_level) {
    case E_ERROR:
    case E_CORE_ERROR:
    case E_COMPILE_ERROR:
    case E_PARSE:
        log($error, "fatal");
        break;
    case E_USER_ERROR:
    case E_RECOVERABLE_ERROR:
        log($error, "error");
        break;
    case E_WARNING:
    case E_CORE_WARNING:
    case E_COMPILE_WARNING:
    case E_USER_WARNING:
        log($error, "warn");
        break;
    case E_NOTICE:
    case E_USER_NOTICE:
        log($error, "info");
        break;
    case E_STRICT:
        log($error, "debug");
        break;
    default:
        log($error, "warn");
}
}
?>
