<?php
namespace console;

/**
 * Supply a way to print call commands
 */
class Commander extends ConsoleHelper {

    private $_comments;

    /**
     * ouput cli tool helper
     * 
     * @return void
     */
    public function getDefaultHelp()
    {
        $commands = $this->getCommandDescriptions();
        $this->stdout($this->getDefaultHelpHeader());
        
        if (!empty($commands)) {
            $this->stdout("\nThe following commands are available:\n\n", Console::BOLD);
            $len = 0;
            foreach ($commands as $command => $description) {
                if (($l = strlen($command)) > $len) {
                    $len = $l;
                }

                $this->stdout('- ' . $this->ansiFormat($command, Console::FG_YELLOW));
                $this->stdout(str_repeat(' ', $len + 4 - strlen($command)));
                $this->stdout(Console::wrapText($description, $len + 4 + 2), Console::BOLD);
                $this->stdout("\n");    

                $prefix = $command;
                $methods = $this->getMethods('\console\\' . $command);

                foreach ($methods as $method) {
                    $string = '   ' . $prefix . '/' . $method;   
                    $this->stdout('  ' . $this->ansiFormat($string, Console::FG_GREEN)); 

                    if ($method === 'index') {
                        $string .= ' (default)';
                        $this->stdout(' (default)', Console::FG_YELLOW);
                    }

                    $comment = $this->_comments[$method];
                    if ($comment !== '') {
                        $this->stdout(str_repeat(' ', 2));
                        $this->stdout(Console::wrapText($comment, $len + 4 + 2));
                    }
                    $this->stdout("\n"); 
                }
            }
            $this->stdout("\nTo see the help of each command, enter:\n", Console::BOLD);
            $this->stdout("\n php vino " . $this->ansiFormat('help', Console::FG_YELLOW) . ' '
                            . $this->ansiFormat('<command-name>', Console::FG_CYAN) . "\n\n");
        }
    }

    public function getMethods($class)
    {   
        $cls = new \ReflectionClass($class);
        $methods = [];
        foreach ($cls->getMethods() as $method) {
            $name = $method->getName();
            if (strpos($name, 'action') === 0) {
                $format_name = strtolower(substr($name,6));
                $methods[] = $format_name;
                $doc  = $this->parseDocCommentSummary($cls->getMethod($name)->getDocComment());
                $this->_comments[$format_name] = $doc;
            }
        }
        sort($methods);
        return array_unique($methods);
    }

    protected function parseDocCommentSummary($string)
    {
        $docLines = preg_split('~\R~u', $string);
        if (isset($docLines[1])) {
            return trim($docLines[1], "\t *");
        }
        return '';
    }

    /**
     * print error command
     * 
     * @param [string] $msg
     * @return void
     */
    public function error($msg)
    {
        $this->stderr($msg. "\n\n");
    }

    /**
     * get command descriptions
     * 
     * @return void
     */
    protected function getCommandDescriptions()
    {
        $descriptions = [
            'composer' => 'Allows you manage composer here',
            'db'       => 'Helps you to create mysql data', 
            'server'   => 'Allows you to run php server',
        ];    

        return $descriptions;
    }
    /**
     * default helper
     * 
     * @return version info
     */
    protected function getDefaultHelpHeader()
    {
        if(PHP_OS == "WINNT"){
            return "
 __      __  _____   _   _    ____
 \ \    / / |_   _| | \ | |  / __ \
  \ \  / /    | |   |  \| | | |  | |
   \ \/ /     | |   | . ` | | |  | |
    \  /     _| |_  | |\  | | |__| |
     \/     |_____| |_| \_|  \____/
            ";
        }
        return "
        #   .----------------.  .----------------.  .-----------------. .----------------. 
        #  | .--------------. || .--------------. || .--------------. || .--------------. |
        #  | | ____   ____  | || |     _____    | || | ____  _____  | || |     ____     | |
        #  | ||_  _| |_  _| | || |    |_   _|   | || ||_   \|_   _| | || |   .'    `.   | |
        #  | |  \ \   / /   | || |      | |     | || |  |   \ | |   | || |  /  .--.  \  | |
        #  | |   \ \ / /    | || |      | |     | || |  | |\ \| |   | || |  | |    | |  | |
        #  | |    \ ' /     | || |     _| |_    | || | _| |_\   |_  | || |  \  `--'  /  | |
        #  | |     \_/      | || |    |_____|   | || ||_____|\____| | || |   `.____.'   | |
        #  | |              | || |              | || |              | || |              | |
        #  | '--------------' || '--------------' || '--------------' || '--------------' |
        #   '----------------'  '----------------'  '----------------'  '----------------'                                
        ";
    }
}

?>