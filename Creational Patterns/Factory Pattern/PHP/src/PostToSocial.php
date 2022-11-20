<?php
abstract class PostToSocial {

  public abstract function makePlatform(): Social;

  public function handle() {
    $social = $this->makePlatform();
    $social.post();
  }
}
?>