<?php

final class PhutilRussianMuslimLocale extends PhutilLocale {

  public function getLocaleCode() {
    return 'ru_M*';
  }

  public function getLocaleName() {
    return pht('Russian (Muslim)');
  }

  public function getFallbackLocaleCode() {
    return 'ru_RU';
  }

  public function isSillyLocale() {
    return false;
  }


}
