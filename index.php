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

$slidePieces = 9;

//------------------

switch ($slidePieces) {
    case 1:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide1.phtml',[
            ]),
        ]);
        break;
    case 2:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide2.phtml',[
            ]),
        ]);
        break;
    case 3:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide3.phtml',[
            ]),
        ]);
        break;
    case 4:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide4.phtml',[
            ]),
        ]);
        break;
    case 5:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide5.phtml',[
            ]),
        ]);
        break;
    case 6:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide6.phtml',[
            ]),
        ]);
        break;
    case 7:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide7.phtml',[
            ]),
        ]);
        break;
    case 8:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide8.phtml',[
            ]),
        ]);
        break;
    case 9:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide9.phtml',[
            ]),
        ]);
        break;
    case 10:
        echo compileTemplate('wrapper.phtml', [
            'content' => compileTemplate('slide10.phtml',[
            ]),
        ]);
        break;
    default:
    echo compileTemplate('wrapper.phtml', [
        'content' => compileTemplate('timeAndWeather.phtml',[
        ]),
    ]);
    break;
}