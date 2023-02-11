<?php
# scraping books to scrape: https://books.toscrape.com/
require 'vendor/autoload.php';

function write_log($log) {
    if (is_array($log) || is_object($log)) {
        file_put_contents('debug.log', PHP_EOL . print_r($log, true), FILE_APPEND);
    } else {
        file_put_contents('debug.log', PHP_EOL . $log, FILE_APPEND);
    }
}

function get_url_metadata($url) {
    $httpClient = new \GuzzleHttp\Client();

    $response = $httpClient->get($url);
    $htmlString = (string) $response->getBody();

    //add this line to suppress any warnings
    libxml_use_internal_errors(true);

    $doc = new DOMDocument();
    $doc->loadHTML($htmlString);
    $xpath = new DOMXPath($doc);

    $meta_image = $xpath->evaluate('//meta[@property="og:image"]/@content')->item(0);
    $meta_title = $xpath->evaluate('//title')->item(0)->textContent;
    $meta_description = $xpath->evaluate('//meta[@property="og:description"]/@content')->item(0);
    $links = $xpath->evaluate('//a');
    
    $meta_data = [
        'image' => $meta_image->value,
        'title' => $meta_title,
        'description' => $meta_description->value,
        'url' => $url,
    ];

    return $meta_data;


}

function output_website_meta($metadata) {
    ?>
    <div class="meta-wrapper">
        <a href="<?php echo $metadata['url']; ?>" class="href">
        <div class="image"><img src="<?php echo $metadata['image']; ?>" alt="" class=""></div>
        <div class="meta-info">
            <h2 class="title"><?php echo $metadata['title']; ?></h2>
            <div class="description"><?php echo $metadata['description']; ?></div>
        </div>
        </a>
    </div>
    <?php
}

$links   = [];
$links[] = 'https://stackoverflow.com/questions/4917779/jquery-datepicker-date-reset';
$links[] = 'https://www.w3schools.com/php/func_filesystem_file_put_contents.asp';

foreach ($links as $link) {
    $metadata = get_url_metadata($link);
    
    if (!empty($metadata)) {
        output_website_meta($metadata);
    }
}

function get_content_external_links($content) {

    $parse_main_url = parse_url($url);
    $parse_main_url_host = isset($parse_main_url['host']) ? $parse_main_url['host'] : '';

    write_log('request_url');
    write_log($parse_main_url);

    $external_urls = [];
    foreach ($links as $key => $link) {
        $url = $link->getAttribute('href');
        $parse_url = parse_url($url);
        $parse_url_host = isset($parse_url['host']) ? $parse_url['host'] : '';

        if ($parse_url_host == $parse_main_url_host) {
            continue;
        }
        if (empty($parse_url_host)) {
            continue;
        }

        if (strpos($parse_url_host, '.'.$parse_main_url_host) !== false) {
            continue;
        }

        if (empty($parse_url_host)) {
            continue;
        }

        write_log($parse_url);
        if ($parse_url_host !== $parse_main_url_host) {
            $external_urls[] = $url;
        }
    }
    write_log(count($external_urls));
    write_log($external_urls);
}

?>

<style>
    .meta-wrapper {
        padding: 15px;
        border: 1px solid grey;
        margin: 10px;
    }

    .meta-wrapper a {
        text-decoration: none;
    }

    .image {
        text-align: center;
    }

    .image img {
        border-radius: 50px;
        border: 10px solid red;
        max-height: 50px
        max-width: 50px
    }

    .meta-info {
        margin-top: 20px;
        margin-bottom: 10px;
        background-color: #eee;
        padding: 10px;
        border-radius: 10px;
    }
</style>