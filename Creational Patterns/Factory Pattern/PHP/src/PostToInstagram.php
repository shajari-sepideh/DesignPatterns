<?php
namespace Ssh\FactoryPattern;


class PostToInstagram extends PostToSocial {
    public function makePlatform() {
      $platform = new Instagram();  
      return $platform;
    }
  }
  ?>