<?php
function envoiSvg( $w, $h) {

    header('Content-type: image/svg+xml');
    $chaine = "<!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>";
    $chaine .='<svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
    <rect x="50" y="20" rx="20"   ry="20" width="150" height="150"
    style="fill:red;stroke:black;stroke-width:5;opacity:0.5" />
    </svg>';
    return $chaine;
}
echo envoiSvg(10 , 20 )
?>