<?php
namespace console;

/**
 * Composer library is to supply auto install dependencies
 * no need developer run composer install/require
 * you can run php vino-cli install
 */
class Composer extends ConsoleHelper {

    public function actionIndex()
    {
        $documentRoot = Application::$_root;
        $packagejson  = $documentRoot. DIRECTORY_SEPARATOR .'composer.json';

        if (file_exists($packagejson)) {
            $package = @json_decode(file_get_contents($packagejson));

            if (!empty($package)) {
                $require_package = $package->require;

                if (!is_dir($documentRoot. DIRECTORY_SEPARATOR .'vendor' . DIRECTORY_SEPARATOR .'psr')) {
                    $this->stdout("The dependices is not install\n", Console::FG_RED);
                    $this->stdout("You need run 'php vino-cli composer install'\n", Console::FG_YELLOW);
                    return;
                }

                foreach($require_package as $key => $pack){
                    $pack_names = explode('/', $key);
                    $pack_name  = $documentRoot. DIRECTORY_SEPARATOR .'vendor' . DIRECTORY_SEPARATOR .$pack_names[0];

                    if (!is_dir($pack_name)) {
                        $this->stdout("The package ".$key." is not installed\n", Console::FG_RED);
                        $this->stdout("You need run 'php vino-cli composer update'\n", Console::FG_YELLOW);
                        return;    
                    }
                }
                passthru("composer show");
            } else {
                $this->stdout("Your composer.json is broken,please download from https://github.com/jacoobwang/vino/composer.json\n", Console::FG_RED);
                return;
            }
        } else {
            $this->stdout("Your composer.json is not found,please download from https://github.com/jacoobwang/vino/composer.json\n", Console::FG_RED);
            return;
        }
    }

    /**
     * install dependency package
     * 
     * @return void
     */
    public function actionInstall()
    {
        passthru('composer install');
    }

    /**
     * update dependency package
     * 
     * @return void
     */
    public function actionUpdate()
    {
        passthru('composer update');
    }
}

?>