<?php

/**
 * @author Roman Akhmadullin, <freeman.aka.ahmed@gmail.com>
 */
final class PhabricatorRussianMuslimTranslation extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru_M*';
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
      'Assigned To' => 'Ответит за это в Судный День',
      'Assigned to Me' => 'Я буду отвечать за это в Судный День',
      '%s closed subtask %s as %s.' => 'Хвала Аллаху, %s закрыл(а) подзадачу %s как %s.',
      '%s claimed this task.' => '%s взял(а) на себя эту задачу.',
    );
  }

}
