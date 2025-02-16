<?php


function compileTemplate($filePath, $params =[]): string
{
    ob_start();
    require __DIR__."/views/".$filePath;
    return ob_get_clean();
}
//echo ("php fut00");

//------------------
// INFORMÁCIÓS KÁRTYÁK SZÁMA:

$slidePieces = 3;

//------------------

switch ($slidePieces) {
    case 1:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide1.html',[
            ]),
        ]);
        break;
    case 2:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide2.html',[
            ]),
        ]);
        break;
    case 3:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide3.html',[
            ]),
        ]);
        break;
    case 4:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide4.html',[
            ]),
        ]);
        break;
    case 5:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide5.html',[
            ]),
        ]);
        break;
    case 6:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide6.html',[
            ]),
        ]);
        break;
    case 7:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide7.html',[
            ]),
        ]);
        break;
    case 8:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide8.html',[
            ]),
        ]);
        break;
    case 9:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide9.html',[
            ]),
        ]);
        break;
    case 10:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide10.html',[
            ]),
        ]);
        break;
    default:
    echo compileTemplate('wrapper.phtml', [
        'content' => compileTemplate('timeAndWeather.html',[
        ]),
    ]);
    break;
}