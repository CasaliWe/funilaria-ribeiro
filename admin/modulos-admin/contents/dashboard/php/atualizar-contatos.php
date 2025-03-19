<?php

require '../../../../config/config.php';
use Repositories\ContatosRepository;

$instagram = $_POST['instagram'];
$instagramTXT = $_POST['@_instagram'];
$facebook = $_POST['facebook'];
$facebookTXT = $_POST['@_facebook'];
$linkedin = $_POST['linkedin'];
$linkedinTXT = $_POST['@_linkedin'];
$email_site = $_POST['email-site'];
$email_contato_site = $_POST['email-site-admin'];
$wpp_principal = $_POST['wpp-principal'];
$telefone = $_POST['telefone'];

$data = [
    'instagram' => $instagram,
    '@_instagram' => $instagramTXT,
    'facebook' => $facebook,
    '@_facebook' => $facebookTXT,
    'linkedin' => $linkedin,
    '@_linkedin' => $linkedinTXT,
    'email-site' => $email_site,
    'email-site-admin' => $email_contato_site,
    'wpp-principal' => $wpp_principal,
    'telefone' => $telefone
];

$res = ContatosRepository::update($data);

if(!$res){
    header('Location: ../../../../dashboard.php?error=true');
    exit;
}else{
    header('Location: ../../../../dashboard.php?success=true');
    exit;
}


