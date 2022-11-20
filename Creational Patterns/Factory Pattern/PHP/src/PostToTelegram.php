<?php
class PostToTelegram extends PostToSocial {
    public function makePlatform() {
      $platform = new Telegram();  
      return $platform;
    }
  }
  ?>