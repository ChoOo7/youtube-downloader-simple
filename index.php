<?php

$youtubeUrl = array_key_exists('youtube_url', $_REQUEST) ? $_REQUEST['youtube_url'] : null;

if($youtubeUrl)
{
    $params = parse_url($youtubeUrl, PHP_URL_QUERY);
    parse_str($params, $paramsAsArray);
    $videoId = $paramsAsArray['v'];
    var_dump($videoId);
    $url = 'https://api.unblockvideos.com/youtube_downloader?&selector=mp4&redirect=true&id='.urlencode($videoId);
}

?>
<html>
<head>
    <title>Youtube simple downloader</title>
</head>
<body>
<h1>Youtube simple downloader</h1>

<ul>
    <li>Etape 1 : Mettre l'url de la vidéo Youtube et cliquer sur Valider</li>
    <li>Etape 2 : Cliquer sur le lien telecharger qui va apparaitre en bas</li>
    <li>Etape 3 : cela va ouvrir la vidéo dans une nouvelle fenetre. Faire un clic droit sur la vidéo puis enregistrer sous.</li>
</ul>

<form method="POST">
    <div>
        <label>
            Youtube video URL :
            <input type="text" name="youtube_url" placeholder="https://www.youtube.com/watch?v=ej-PDb4bQfc" style="width: 600px;"/>
        </label>
        <br />
        <input type="submit" value="Valider">
    </div>
</form>
<?php if($url): ?>
    <hr >
    <h2><a href="<?php echo $url; ?>" target="_blank">TELECHARGER</a></h2>
    <hr />
<?php endif; ?>
</body>
</html>
