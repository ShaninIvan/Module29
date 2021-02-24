<?php
    final class Logs{
        private static $logfile = ROOT. '/logs/log.txt';

        public static function writeLog(string $reason, string $description)
        {
            $file = fopen(self::$logfile, 'a+');
            $text = date('m/d/Y h:i:s a', time()) . ': [REASON]: ' . $reason . ' [DESCRIPTION]: ' .$description;
            fwrite($file, $text . PHP_EOL);
            fclose($file);
        }
    }
?>
