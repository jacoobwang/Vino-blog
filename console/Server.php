<?php
namespace console;

/**
 * Server library is to supply server container
 * you can run php vino-cli server
 */
class Server extends ConsoleHelper {

    /**
     * Runs PHP built-in web server
     * 
     * @return void
     */
    public function actionIndex($params = [])
    { 
        $address = empty($params) ? "localhost" : $params[0];
        $documentRoot = Application::$_root;

        if (!is_dir($documentRoot)) {
            $this->stdout("Document root \"$documentRoot\" does not exist.\n", Console::FG_RED);
            return;
        }

        if (strpos($address, ':') === false) {
            $address = $address . ':8080';
        }

        if ($this->isAddressTaken($address)) {
            $this->stdout("http://$address is taken by another process.\n", Console::FG_RED);
            return;
        }

        $this->stdout("Server started on http://{$address}/\n");
        $this->stdout("Document root is \"{$documentRoot}\"\n");
        $this->stdout("Quit the server with CTRL-C or COMMAND-C.\n");

        passthru('"' . PHP_BINARY . '"' . " -S {$address} -t \"{$documentRoot}\" ");
    }

    /**
     * @param string $address server address
     * @return bool if address is already in use
     */
    protected function isAddressTaken($address)
    {
        list($hostname, $port) = explode(':', $address);
        $fp = @fsockopen($hostname, $port, $errno, $errstr, 3);
        if ($fp === false) {
            return false;
        }
        fclose($fp);
        return true;
    }
}


?>