<?php
namespace Ssh\FactoryPattern;


class PostToInstagram extends PostToSocial
{
  public function makePlatform(): Social
  {
    $platform = new Instagram();
    return $platform;
  }
}
?>