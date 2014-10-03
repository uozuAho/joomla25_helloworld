@echo off

rem -------------------------------------------------
rem   Copy all files to a Joomla installation.
rem   This is a faster alternative to installing
rem   the component when in development.
rem -------------------------------------------------

set JoomDir=C:\inetpub\wwwroot\ws_cairnstest

set JoomAdmin=%JoomDir%\administrator\components\com_helloworld
set JoomComp=%JoomDir%\components\com_helloworld
set JoomMedia=%JoomDir%\media\com_helloworld

xcopy helloworld\admin %JoomAdmin% /e /y
xcopy helloworld\helloworld.xml %JoomAdmin% /y
xcopy helloworld\site %JoomComp% /e /y
xcopy helloworld\media %JoomMedia% /e /y
