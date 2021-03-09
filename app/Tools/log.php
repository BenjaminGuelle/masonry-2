<?php

    $LOG_DIRECTORY = './logs';
    $ERROR_LOG_FILE = '/error.log';
    $EVENT_LOG_FILE = '/event.log';


    // DONE save session pour ne pas init de nouveau logs à chaque changement de page
    /**
     * Short - Init logs
     * 
     * Detailed - Add a separation line and the date of actual new session
     * 
     * @param time $time Current timestamp
     */
    function initLogs($time)
    {
        logEvent("/////////////////////////////////////".PHP_EOL."Nouvelle session ".date("Y-m-d H:i:s", $time).PHP_EOL);
        logError("/////////////////////////////////////".PHP_EOL."Nouvelle session ".date("Y-m-d H:i:s", $time).PHP_EOL);
    }

    /**
    * Short - Log errors
    *
    * Detailed - 
    *
    * @param Type $name Description
    *
    * @return retour
    */
    function logError($error)
    {
        emmitDir($GLOBALS['LOG_DIRECTORY']);
        error_log($error.PHP_EOL.PHP_EOL, 3, $GLOBALS['LOG_DIRECTORY'].$GLOBALS['ERROR_LOG_FILE'], NULL);
    }

    /**
    * Short - Log events
    *
    * Detailed - 
    *
    * @param Type $name Description
    *
    * @return retour
    */
    function logEvent($message)
    {
        emmitDir($GLOBALS['LOG_DIRECTORY']);
        $flux = fopen($GLOBALS['LOG_DIRECTORY'].$GLOBALS['EVENT_LOG_FILE'], 'a', false, NULL);
        try
        {
            fwrite($flux, $message.PHP_EOL);
        }
        catch (Exception $e)
        {
            logEvent("utils logEvent() Exception");
            logError($e);
        }
        fclose($flux);
    }

    /**
    * Short - Log events
    *
    * Detailed - 
    *
    * @param Type $name Description
    *
    * @return retour
    */
    function logFile($message, $file)
    {
        emmitDir($file);
        $flux = fopen($file, 'a', false, NULL);
        try
        {
            fwrite($flux, $message.PHP_EOL);
        }
        catch (Exception $e)
        {
            logEvent("utils logFile() Exception");
            logError($e);
        }
        fclose($flux);
    }

    /**
    * Short - Recursively create dir if not exists
    *
    * Detailed - 
    *
    * @param Type $path Description
    *
    * @return none
    */
    function emmitDir($path)
    {
        // TODO check if is a file or directory
        if (!file_exists($path))
        {
            mkdir($path, 0700, $recursive = true);
        }
    }