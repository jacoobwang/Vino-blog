@setlocal

set VINO_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%VINO_PATH%vino-cli" %*

@endlocal
