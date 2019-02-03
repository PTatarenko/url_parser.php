<?php
$url = "http://www.google.com";
$domain = parse_url('http://google.com', PHP_URL_HOST);
$sub = parse_url($url);
$host = explode('.', $sub['host']);
$subdomain = $host[0];
$tld = $host[2];
$array=array(
"scheme" => parse_url($url, PHP_URL_SCHEME),
"host" => parse_url($url, PHP_URL_HOST),
"domain" => $domain,
"subdomain"=> $subdomain,
"tld"=> $tld,
);
var_dump ($array);
