@echo off

set JoomDir=C:\xampp\htdocs\joomla25test

xcopy helloworld\admin %JoomDir%\administrator\components\com_helloworld /e /y
xcopy helloworld\media %JoomDir%\media\com_helloworld /e /y
xcopy helloworld\site %JoomDir%\components\com_helloworld /e /y
copy helloworld\helloworld.xml %JoomDir%\administrator\components\com_helloworld