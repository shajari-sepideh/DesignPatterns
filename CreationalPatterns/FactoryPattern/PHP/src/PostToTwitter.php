<?php
namespace Ssh\FactoryPattern;

class PostToTwitter extends PostToSocial
{
  public function makePlatform(): Social
  {
    $platform = new Twitter();
    return $platform;
  }
}
?>