<?php
class PostToTwitter extends PostToSocial {
    public function makePlatform() {
      $platform = new Twitter();  
      return $platform;
    }
  }
  ?>