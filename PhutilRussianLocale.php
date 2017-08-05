<?php

final class PhutilRussianLocale extends PhutilLocale {

  public function getLocaleCode() {
    return 'ru_RU';
  }

  public function getLocaleName() {
    return pht('Russian');
  }

  /**
   * Select a plural variant for this locale.
   *
   * @param int Plurality of the value.
   * @param list<wild> List of variants.
   * @return string Variant for use.
   */
  public function selectPluralVariant($variant, array $translations) {
    $cases = [2, 0, 1, 1, 1, 2];

    $index = $variant % 100 > 4 && $variant % 100 < 20 ? 2 : $cases[min($variant % 10, 5)];

    return isset($translations[$index]) ? $translations[$index] : end($translations);
  }


}
