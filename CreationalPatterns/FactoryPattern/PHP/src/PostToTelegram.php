<?php
namespace Ssh\FactoryPattern;

class PostToTelegram extends PostToSocial
{
  public function makePlatform(): Social
  {
    $platform = new Telegram();
    return $platform;
  }
}
?>