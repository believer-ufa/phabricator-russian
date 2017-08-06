<?php

/**
 * @author Roman Akhmadullin, <freeman.aka.ahmed@gmail.com>
 */
final class PhabricatorRussianMuslimTranslation extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru_RU';
  }

  protected function getTranslations() {
    return array(
      '%s created this task.' => 'По милости Аллаха, %s создал(а) эту задачу',
      'Take Action' => 'Бисмилля',
      'Done'        => "Альхамдулилля",
      'Add Comment' => 'Сказать благое слово',
      'Set Sail for Adventure' => 'Сказать благое слово',
      'Weigh In' => 'Комментарии',
      'Save Changes' => 'С именем Аллаха, сохраняем',
      'Changes saved.' => 'Хвала Аллаху, ваши изменения сохранены.',
      '%s added a comment.' => '%s написал(а).',
      'You signed this document on %s.' => 'Вы подписали данный документ %s. Помните, что Аллах спросит о договорах в День Суда.',
      'User' => 'Раб Аллаха',
    );
  }

}
