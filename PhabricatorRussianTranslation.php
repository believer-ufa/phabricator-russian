<?php

/**
 * @author Roman Akhmadullin, <freeman.aka.ahmed@gmail.com>
 */
final class PhabricatorRussianTranslation extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru_RU';
  }

  protected function getTranslations() {
    return array(
      
      
      // Overall
      '%s Day(s) Ago' => [
        '%s день назад',
        '%s дня назад',
        '%s дней назад',
      ],
      'Yes' => 'Да',
      'No' => 'Нет',
      'Learn More' => 'Узнать больше',
      'Log In' => 'Войти',
      'Register Account' => 'Зарегистририовать аккаунт',
      'Register' => 'Регистрация',
      'Create a New Account' => 'Создать новый аккаунт',
      'Username/Password' => 'Имя пользователя/пароль',
      'Send Email' => 'Отправить письмо',
      'Fullscreen' => 'На весь экран',
      'Preamble' => 'Преамбула',
      'Profile' => 'Профиль',
      'Log Out %s' => 'Выход',
      'Availability' => 'Доступность',
      'Administrator' => 'Администратор',
      'Commits' => 'Фиксации',
      'Revisions' => 'Ревизии',
      'Tasks' => 'Задачи',
      'Badges' => 'Заслуги',
      'Log Out' => 'Выход',
      'Save Query' => 'Сохранить запрос',
      'Use Results' => 'Использовать результаты',
      'From' => 'От',
      'Via' => 'Через',
      'Via %s' => 'Через %s',
      'Web' => 'Вебсайт',
      'Console' => 'Терминал',
      'Daemon' => 'Служба',
      'Old' => 'Старый',
      'New' => 'Новый',
      'Code' => 'Код',
      'Closed' => 'Закрыто',
      'Changed Status' => 'Статус изменён',
      'Branch: %s' => 'Ветка: %s',
      'Next' => 'Далее',
      'Commit' => 'Фиксация',
      'COMMIT' => 'Фиксация',
      'Committed' => 'Зафиксировано',
      'Details' => 'Детали',
      'Status' => 'Статус',
      'Remove' => 'Удалить',
      'Select' => 'Выбрать',
      'Auditors' => 'Аудиторы',
      'Auditors: %s' => 'Аудиторы: %s',
      'Home' => 'Главная',
      'Branches' => 'Ветки',
      'Tags' => 'Теги',
      'Graph' => 'Граф',
      'History' => 'История',
      'Create Custom Pages' => 'Создать пользовательские страницы',
      'Explore More Applications' => 'Посмотреть больше приложений',
      'Customize Menu...' => 'Настроить меню...',
      'Create' => 'Создать',
      'Create New...' => 'Создать...',
      'Update' => 'Обновить',
      'Continue' => 'Продолжить',
      'Send' => 'Отправить',
      'Submit' => 'Отправить',
      'Save' => 'Сохранить',
      'Save Changes' => 'Сохранить изменения',
      'Changes saved.' => 'Изменения сохранены.',
      'Changes (%s)' => 'Изменения (%s)',
      'Add Comment' => 'Добавить комментарий',
      'Add Action...' => 'Добавить действие...',
      'Move on Workboard' => 'Переместить на доску',
      'Change Project Tags' => 'Изменить теги проекта',
      'Change Subscribers' => 'Изменить подписчиков',
      'Take Action' => 'Выполнить действие',
      'Join' => 'Присоединиться',
      'Code Block' => 'Блок кода',
      'Meme' => 'Мем',
      'Cancel' => 'Отменить',
      'Close' => 'Закрыть',
      'No data.' => 'Нет данных.',
      'Partial' => 'Частично',
      'Partial Upload' => 'Загрузка по частям',
      'View All' => 'Показать всё',
      'All' => 'Всё',
      'Title' => 'Заголовок',
      'Action' => 'Действие',
      'Actions' => 'Действия',
      'View Raw' => 'Показать в исходном виде',
      'PREVIEW' => 'ПРЕДПРОСМОТР',
      'Preview' => 'Предпросмотр',
      'Help' => 'Помощь',
      'Name' => 'Наименование',
      'Document Preview' => 'Предпросмотр документа',
      'Description Preview' => 'Предпросмотр описания',
      'Configure Form' => 'Отредактировать форму',
      'Description' => 'Описание',
      'Comments' => 'Комментарии',
      'Author' => 'Автор',
      'Subscribers' => 'Подписчики',
      'Required' => 'Необходимо',
      'Visible To' => 'Видно следующим',
      'Editable By' => 'Могут редактировать',
      'Policies' => 'Политики',
      'Default' => 'По умолчанию',
      '(Default)' => '(По умолчанию)',
      'Prototype' => 'Прототип',
      '(Show Details)' => '(Показать подробности)',
      'Change Details' => 'Изменить подробности',
      'Updated' => 'Обновлено',
      'Loading...' => 'Загрузка...',
      'None' => 'Нет',
      'Flagged' => 'Помеченное флажками',
      'Tooltip' => 'Подсказка',
      'Recent Activity' => 'Последняя активность',
      '%s mentioned this in %s.' => '%s упомянул(а) это в %s.',
      '%s changed the visibility from "%s" to "%s".' => '%s изменил(а) видимость с "%s" на "%s".',
      '%s changed the edit policy from "%s" to "%s".' => '%s изменил(а) политику редактирования с "%s" на "%s".',
      'Choose which language you would like the Phabricator UI to use.' => 'Выберите, какой язык вы бы хотели использовать для интерфейса Фабрикатора',
      'Choose the pronoun you prefer.' => 'Выберите местоимение, которое для вас наиболее уместно.',
      'Menu Items' => 'Пункты меню',
      'Current Menu Items' => 'Текущие пункты меню',
      'Add New Menu Item...' => 'Добавить новый пункт меню...',
      'Edit Menu Item' => 'Редактирование пункта меню',
      'Application' => 'Приложение',
      'Divider' => 'Разделитель',
      'Form' => 'Форма',
      'Label' => 'Заголовок',
      'Link' => 'Ссылка',
      'Motivator' => 'Мотиватор',
      'Documentation' => 'Документация',
      'Create Menu Item' => 'Создать пункт меню',
      'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' =>
        'Это визуальный делитель, который вы можете использовать для разделения пунктов меню. У него нет настраиваемых параметров.',
      'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.' =>
        'Мотивируйте свою команду вдохновляющими цитатами из великих умов. Этот пункт меню показывает новую цитату каждый день.',
      'Source' => 'Источник',
      'Configure Menu' => 'Настроить меню',
      'Personal' => 'Персональное',
      'Personal Settings' => 'Персональное настройки',
      'Manage Menu' => 'Настройка меню',
      'Personal Menu Items' => 'Персональные пункты меню',
      'Edit the menu for your personal account.' => 'Отредактируйте меню для своей личной учетной записи.',
      'Global Menu Items' => 'Глобальные пункты меню',
      'Edit the global default menu for all users.' => 'Отредактируйте глобальное меню, которое будет доступно всем пользователям.',
      'Global' => 'Глобальное',
      'You can not post an empty comment.' => 'Вы не можете разместит пустой комментарий',
      'This %s already has that view policy.' => 'Это %s уже имеет данную политику просмотра.',
      'This %s already has that edit policy.' => 'Это %s уже имеет данную политику редактирования.',
      'This %s already has that join policy.' => 'Это %s уже имеет данную политику вступления.',
      'All users are already subscribed to this %s.' => 'Все пользователи уже подписались на это %s',
      'This object is already in that space.' => 'Этот объект уже находится в данном пространстве',
      'Edges already exist; transaction has no effect.' => 'Грани уже существуют; транзакция не оказала никакого эффекта.',
      'You have not moved this object to any columns it is not already in.' => 'Вы не переместили этот объект в какие-то колонки, в которых он ещё не был.',
      'Transaction (of type "%s") has no effect.' => 'Транзакция (типа "%s") не оказала никакого эффекта.',
      'Download' => 'Скачать',
      'Changes from before your most recent comment are hidden.' => 'Изменения с вашего последнего комментария скрыты.',
      'There are a very large number of changes, so older changes are hidden.' =>
        'Здесь очень много изменений, поэтому более старые изменения были скрыты.',
      'Show Older Changes' => 'Показать старые изменения',
      'Weigh In' => 'Комментарии',
      'Set Sail for Adventure' => 'Написать',
      'Pin Form On Screen' => 'Прикрепить форму к экрану',
      
      'Engineering' => 'IT Инженер',
      'Choose User Icon' => 'Выберите иконку пользователя',
      'Operations' => 'Спецоперации',
      'Resources' => 'Ресурсы',
      'Design' => 'Дизайн',
      'Musician' => 'Звук',
      'Spy' => 'Шпион',
      'Bot' => 'Бот',
      'Relationships' => 'Взаимоотношения',
      'Administration' => 'Администрация',
      'Security' => 'Служба безопасности',
      'Logistics' => 'Логистика',
      'Research' => 'Исследования',
      'Analysis' => 'Анализ',
      'Executive' => 'Руководитель',
      'Animal' => 'Зверёк',
      
      'No daemon(s) with id(s) "%s" exist!' => array(
        'Не найдено служб с данным id %s!',
        'Не найдено служб с данными id %s!',
      ),

      'These %d configuration value(s) are related:' => array(
        'Данное %d значение конфигурации относится к:',
        'Данные %d значения конфигурации относятся к:',
        'Данные %d значений конфигурации относятся к:',
      ),

      '%s Task(s)' => array('%s Задача', '%s Задачи', '%s Задач'),

      '%s ERROR(S)' => array('ОШИБКА', 'ОШИБКИ'),
      '%d Error(s)' => array('%d ошибка', '%d ошибки', '%d ошибок'),
      '%d Warning(s)' => array('%d предупреждение', '%d предупреждения', '%d предупреждений'),
      '%d Auto-Fix(es)' => array('%d авто-исправление', '%d авто-исправления', '%d авто-исправлений'),
      '%d Advice(s)' => array('%d совет', '%d совета', '%d советов'),
      '%d Detail(s)' => array('%d пояснение', '%d пояснения', '%d пояснений'),

      '(%d line(s))' => array('(%d строка)', '(%d строки)', '(%d строк)'),

      '%d line(s)' => array('%d строка', '%d строки', '%d строк'),
      '%d path(s)' => array('%d путь', '%d пути', '%d путей'),
      '%d diff(s)' => array('%d изменение', '%d изменения', '%d изменений'),

      '%d Answer(s)' => array('%d ответ', '%d ответа', '%dоОтветов'),
      'Show %d Comment(s)' => array('Показать %d комментарий', 'Показать %d комментария', 'Показать %d комментариев'),

      '%s DIFF LINK(S)' => array('ССЫЛКА НА ИЗМЕНЕНИЕ', 'ССЫЛКИ НА ИЗМЕНЕНИЕ'),

      'You successfully created %d diff(s).' => array(
        'Вы успешно создали %d изменение',
        'Вы успешно создали %d изменения.',
        'Вы успешно создали %d изменений.',
      ),
      'Diff creation failed; see body for %s error(s).' => array(
        'Создание изменения провалилось; смотрите содержимое для чтения ошибки.',
        'Создание изменения провалилось; смотрите содержимое для чтения %s ошибок.',
      ),

      'There are %d raw fact(s) in storage.' => array(
        'Сейчас у вас %d сырой факт в хранилище.',
        'Сейчас у вас %d сырых факта в хранилище.',
        'Сейчас у вас %d сырых фактов в хранилище.',
      ),

      'There are %d aggregate fact(s) in storage.' => array(
        'Сейчас у вас %d агрегированный факт в хранилище.',
        'Сейчас у вас %d агрегированных факта в хранилище.',
        'Сейчас у вас %d агрегированных фактов в хранилище.',
      ),

      'Show %d Lint Message(s)' => array(
        'Показать %d сообщение линтера',
        'Показать %d сообщения линтера',
        'Показать %d сообщений линтера',
      ),
      'Hide %d Lint Message(s)' => array(
        'Скрыть %d сообщение линтера',
        'Скрыть %d сообщения линтера',
        'Скрыть %d сообщений линтера',
      ),

      'This is a binary file. It is %s byte(s) in length.' => array(
        'Это бинарный файл. Его размер - %s байт.',
        'Это бинарный файл. Его размер - %s байта.',
        'Это бинарный файл. Его размер - %s байтов.',
      ),

      '%s added %s member(s): %s.' => array(
        array(
          '%s добавил(а) %s члена: %3$s.',
          '%s добавил(а) %s новых члена: %s.',
          '%s добавил(а) %s новых членов: %s.',
        ),
      ),

      '%s removed %s member(s): %s.' => array(
        array(
          '%s удалил(а) члена: %3$s.',
          '%s удалил(а) %s членов: %3$s.',
        ),
      ),

      '%s edited project(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) проект, добавлено: %3$s; удалено: %5$s.',

      '%s added %s project(s): %s.' => array(
        array(
          '%s добавил(а) %s проект: %3$s.',
          '%s добавил(а) %s проекта: %s.',
          '%s добавил(а) %s проектов: %s.',
        ),
      ),

      '%s removed %s project(s): %s.' => array(
        array(
          '%s удалил(а) %s проект: %3$s.',
          '%s удалил(а) %s проекта: %s.',
          '%s удалил(а) %s проектов: %s.',
        ),
      ),

      '%s merged %d task(s): %s.' => array(
        array(
          '%s объединил(а) %d задачу: %3$s.',
          '%s объединил(а) %d задачи: %3$s.',
          '%s объединил(а) %d задач: %3$s.',
        ),
      ),

      '%s merged %d task(s) %s into %s.' => array(
        array(
          '%s объединил(а) %d задачу %3$s с %4$s.',
          '%s объединил(а) %d задачи %s с %s.',
          '%s объединил(а) %d задач %s с %s.',
        ),
      ),
      
      '%s merged %s task(s): %s.' => array(
        array(
          '%s объединил(а) задачу: %3$s.',
          '%s объединил(а) задачи: %3$s.',
        ),
      ),

      '%s merged %s task(s) %s into %s.' => array(
        array(
          '%s объединил(а) %3$s в %4$s.',
          '%s объединил(а) %3$s в %4$s.',
        ),
      ),

      '%s added %s voting user(s): %s.' => array(
        array(
          '%s добавил(а) %s голосующего пользователя: %3$s.',
          '%s добавил(а) %s голосующих пользователя: %3$s.',
          '%s добавил(а) %s голосующих пользователей: %3$s.',
        ),
      ),

      '%s removed %s voting user(s): %s.' => array(
        array(
          '%s удалил(а) %s голосующего пользователя: %3$s.',
          '%s удалил(а) %s голосующих пользователя: %3$s.',
          '%s удалил(а) %s голосующих пользователей: %3$s.',
        ),
      ),

      '%s added %s subtask(s): %s.' => array(
        array(
          '%s добавил(а) подзадачу: %3$s.',
          '%s добавил(а) подзадачи: %3$s.',
        ),
      ),

      '%s added %s parent task(s): %s.' => array(
        array(
          '%s добавил(а) родительскую задачу: %3$s.',
          '%s добавил(а) родительские задачи: %3$s.',
        ),
      ),

      '%s removed %s subtask(s): %s.' => array(
        array(
          '%s удалил(а) подзадачу: %3$s.',
          '%s удалил(а) подзадачи: %3$s.',
        ),
      ),

      '%s removed %s parent task(s): %s.' => array(
        array(
          '%s удалил(а) родительскую задачу: %3$s.',
          '%s удалил(а) родительские задачи: %3$s.',
        ),
      ),

      '%s added %s subtask(s) for %s: %s.' => array(
        array(
          '%s добавил(а) подзадачу для %3$s: %4$s.',
          '%s добавил(а) подзадачи для %3$s: %4$s.',
        ),
      ),

      '%s added %s parent task(s) for %s: %s.' => array(
        array(
          '%s добавил(а) родительскую задачу для %3$s: %4$s.',
          '%s добавил(а) родительские задачи для %3$s: %4$s.',
        ),
      ),

      '%s removed %s subtask(s) for %s: %s.' => array(
        array(
          '%s удалил(а) подзадачу задачу для %3$s: %4$s.',
          '%s удалил(а) подзадачу задачи для %3$s: %4$s.',
        ),
      ),

      '%s removed %s parent task(s) for %s: %s.' => array(
        array(
          '%s удалил(а) родительскую задачу для %3$s: %4$s.',
          '%s удалил(а) родительские задачи для %3$s: %4$s.',
        ),
      ),

      '%s edited subtask(s), added %s: %s; removed %s: %s.' =>
        '%s изменил(а) подзадачи, добавлено: %3$s; удалено: %5$s.',

      '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s изменил(а) подзадачи для %s, добавлено: %4$s; удалено: %6$s.',

      '%s edited parent task(s), added %s: %s; removed %s: %s.' =>
        '%s изменил(а) родительские задачи, добавлено: %3$s; удалено: %5$s.',

      '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s изменил(а) родительские задачи для %s, добавлено: %4$s; удалено: %6$s.',

      '%s edited answer(s), added %s: %s; removed %d: %s.' =>
        '%s изменил(а) ответы, добавлено: %3$s; удалено: %5$s.',

      '%s added %s answer(s): %s.' => array(
        array(
          '%s добавил(а) ответ: %3$s.',
          '%s добавил(а) ответы: %3$s.',
        ),
      ),

      '%s removed %s answer(s): %s.' => array(
        array(
          '%s удалил(а) ответ: %3$s.',
          '%s удалил(а) ответы: %3$s.',
        ),
      ),

     '%s edited question(s), added %s: %s; removed %s: %s.' =>
        '%s изменил(а) вопрос(ы), добавлено: %3$s; удалено: %5$s.',

      '%s added %s question(s): %s.' => array(
        array(
          '%s добавил(а) вопрос: %3$s.',
          '%s добавил(а) вопросы: %3$s.',
        ),
      ),

      '%s removed %s question(s): %s.' => array(
        array(
          '%s удалил(а) вопрос: %3$s.',
          '%s удалил(а) вопросы: %3$s.',
        ),
      ),

      '%s edited mock(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) дизайны, добавлено: %3$s; удалено: %5$s.',

      '%s added %s mock(s): %s.' => array(
        array(
          '%s добавил(а) %s дизайн: %3$s.',
          '%s добавил(а) %s дизайна: %s.',
          '%s добавил(а) %s дизайнов: %s.',
        ),
      ),

      '%s removed %s mock(s): %s.' => array(
        array(
          '%s удалил(а) %s дизайн: %3$s.',
          '%s удалил(а) %s дизайна: %s.',
          '%s удалил(а) %s дизайнов: %s.',
        ),
      ),

      '%s added %s task(s): %s.' => array(
        array(
          '%s добавил(а) %s задачу: %3$s.',
          '%s добавил(а) %s задачи: %s.',
          '%s добавил(а) %s задач: %s.',
        ),
      ),

      '%s removed %s task(s): %s.' => array(
        array(
          '%s удалил(а) %s задачу: %3$s.',
          '%s удалил(а) %s задачи: %3$s.',
          '%s удалил(а) %s задач: %3$s.',
        ),
      ),

      '%s edited file(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) файл, добавлено: %3$s; удалено: %5$s.',

      '%s added %s file(s): %s.' => array(
        array(
          '%s добавил(а) %s файл: %3$s.',
          '%s добавил(а) %s файла: %s.',
          '%s добавил(а) %s файлов: %s.',
        ),
      ),

      '%s removed %s file(s): %s.' => array(
        array(
          '%s удалил(а) %s файл: %3$s.',
          '%s удалил(а) %s файла: %s.',
          '%s удалил(а) %s файлов: %s.',
        ),
      ),

      '%s edited contributor(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) помощников, добавлено: %3$s; удалено: %5$s.',

      '%s added %s contributor(s): %s.' => array(
        array(
          '%s добавил(а) помощника: %3$s.',
          '%s добавил(а) %s помощников: %s.',
        ),
      ),

      '%s removed %s contributor(s): %s.' => array(
        array(
          '%s удалил(а) помощника: %3$s.',
          '%s удалил(а) %s помощников: %3$s.',
        ),
      ),

      '%s edited %s reviewer(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) рецензентов, добавлено: %4$s; удалено: %6$s.',

      '%s edited %s reviewer(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) рецензентов для %3$s, добавлено: %5$s; удалено: %7$s.',

      '%s added %s reviewer(s): %s.' => array(
        array(
          '%s добавил(а) рецензента: %3$s.',
          '%s добавил(а) %s рецензентов: %s.',
        ),
      ),

      '%s added %s reviewer(s) for %s: %s.' => array(
        array(
          '%s добавил(а) рецензента для %3$s: %4$s.',
          '%s добавил(а) %s рецензентов для %s: %s.',
        ),
      ),

      '%s removed %s reviewer(s): %s.' => array(
        array(
          '%s удалил(а) рецензента: %3$s.',
          '%s удалил(а) %s рецензентов: %s.',
        ),
      ),

      '%s removed %s reviewer(s) for %s: %s.' => array(
        array(
          '%s удалил(а) рецензента для %3$s: %4$s.',
          '%s удалил(а) %s рецензентов для %s: %s.',
        ),
      ),

      '%d other(s)' => array(
        '1 другой',
        '%d других',
      ),

      '%s edited subscriber(s), added %d: %s; removed %d: %s.' =>
        '%s отредактировал(а) подписчиков, добавлено: %3$s; удалено: %5$s.',

      '%s added %d subscriber(s): %s.' => array(
        array(
          '%s добавил(а) подписчика: %3$s.',
          '%s добавил(а) %s подписчиков: %s.',
        ),
      ),

      '%s removed %d subscriber(s): %s.' => array(
        array(
          '%s удалил(а) подписчика: %3$s.',
          '%s удалил(а) %s подписчиков: %s.',
        ),
      ),

      '%s added %s watcher(s): %s.' => array(
        array(
          '%s добавил(а) наблюдателя: %3$s.',
          '%s добавил(а) %s наблюдателей: %s.',
        ),
      ),

      '%s removed %s watcher(s): %s.' => array(
        array(
          '%s удалил(а) наблюдателя: %3$s.',
          '%s удалил(а) %s наблюдателей: %3$s.',
        ),
      ),

      '%s edited participant(s), added %d: %s; removed %d: %s.' =>
        '%s отредактировал(а) участников, добавлено: %3$s; удалено: %5$s.',

      '%s added %d participant(s): %s.' => array(
        array(
          '%s добавил(а) участника: %3$s.',
          '%s добавил(а) %d участников: %3$s.',
        ),
      ),

      '%s removed %d participant(s): %s.' => array(
        array(
          '%s удалил(а) участника: %3$s.',
          '%s удалил(а) %d участников: %3$s.',
        ),
      ),

      '%s edited image(s), added %d: %s; removed %d: %s.' =>
        '%s отредактировал(а) изображение(я), добавлено: %3$s; удалено: %5$s',

      '%s added %d image(s): %s.' => array(
        array(
          '%s добавил(а) %d изображение: %3$s.',
          '%s добавил(а) %d изображения: %3$s.',
          '%s добавил(а) %d изображений: %3$s.',
        ),
      ),

      '%s removed %d image(s): %s.' => array(
        array(
          '%s удалил(а) %d изображение: %3$s.',
          '%s удалил(а) %d изображения: %3$s.',
          '%s удалил(а) %d изображений: %3$s.',
        ),
      ),

      '%s Line(s)' => array(
        '%s строка',
        '%s строки',
        '%s строк',
      ),

      'Indexing %d object(s) of type %s.' => array(
        'Индексация %d объекта типа %s.',
        'Индексация %d объектов типа %s.',
      ),

      'Run these %d command(s):' => array(
        'Выполните следующую команду:',
        'Выполните следующие команды:',
      ),

      'Install these %d PHP extension(s):' => array(
        'Установите данное PHP расширение:',
        'Установите данные PHP расширения:',
      ),

      'The current Phabricator configuration has these %d value(s):' => array(
        'Текущя конфигурация Phabricator имеет следующее значение:',
        'Текущя конфигурация Phabricator имеет следующие значения:',
      ),

      'The current MySQL configuration has these %d value(s):' => array(
        'Текущя конфигурация MySQL имеет следующее значение:',
        'Текущя конфигурация MySQL имеет следующие значения:',
      ),

      'You can update these %d value(s) here:' => array(
        'Вы можете обновить это значение здесь:',
        'Вы можете обновить эти значения здесь:',
      ),

      'The current PHP configuration has these %d value(s):' => array(
        'Текущя конфигурация PHP имеет следующее значение:',
        'Текущя конфигурация PHP имеет следующие значения:',
      ),

      'To update these %d value(s), edit your PHP configuration file.' => array(
        'Для того чтобы обновить это значение, отредактируйте ваш файл конфигурации PHP.',
        'Для того чтобы обновить эти значения, отредактируйте ваш файл конфигурации PHP.',
      ),

      'PHP also loaded these %s configuration file(s):' => array(
        'PHP также загрузил данный файл конфигурации:',
        'PHP также загрузил данные файлы конфигурации:',
      ),

      'You have %d unresolved setup issue(s)...' => array(
        'У вас есть одна неразрешённая проблема конфигурации...',
        'У вас есть %d неразрешённых проблемы конфигурации...',
        'У вас есть %d неразрешённых проблем конфигурации...',
      ),

      '%s Commit(s)' => array(
        '%s фиксация',
        '%s фиксации',
        '%s фиксаций',
      ),

      '%s added %s dependencie(s): %s.' => array(
        array(
          '%s добавил(а) %s зависимость: %3$s.',
          '%s добавил(а) %s зависимости: %3$s.',
          '%s добавил(а) %s зависимостей: %3$s.',
        ),
      ),

      '%s added %s dependencie(s) for %s: %s.' => array(
        array(
          '%s добавил(а) %s зависимость для %3$s: %4$s.',
          '%s добавил(а) %s зависимости для %3$s: %4$s.',
          '%s добавил(а) %s зависимостей для %3$s: %4$s.',
        ),
      ),

      '%s removed %s dependencie(s): %s.' => array(
        array(
          '%s удалил(а) %s зависимость: %3$s.',
          '%s удалил(а) %s зависимости: %3$s.',
          '%s удалил(а) %s зависимостей: %3$s.',
        ),
      ),

      '%s removed %s dependencie(s) for %s: %s.' => array(
        array(
          '%s удалил(а) %s зависимость для %3$s: %4$s.',
          '%s удалил(а) %s зависимости для %3$s: %4$s.',
          '%s удалил(а) %s зависимостей для %3$s: %4$s.',
        ),
      ),

      '%s edited dependencie(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) зависимости, добавлено: %3$s; удалено: %5$s',

      '%s edited dependencie(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) зависимости для %s, добавлено: %4$s; удалено: %6$s',

      '%s added %s dependent revision(s): %s.' => array(
        array(
          '%s добавил %s зависимую ревизию: %3$s.',
          '%s добавил %s зависимых ревизии: %3$s.',
          '%s добавил %s зависимых ревизий: %3$s.',
        ),
      ),

      '%s added %s dependent revision(s) for %s: %s.' => array(
        array(
          '%s добавил(а) %s зависимую ревизию для %3$s: %4$s.',
          '%s добавил(а) %s зависимых ревизии для %3$s: %4$s.',
          '%s добавил(а) %s зависимых ревизий для %3$s: %4$s.',
        ),
      ),

      '%s removed %s dependent revision(s): %s.' => array(
        array(
          '%s удалил(а) %s зависимую ревизию: %3$s.',
          '%s удалил(а) %s зависимых ревизии: %3$s.',
          '%s удалил(а) %s зависимых ревизий: %3$s.',
        ),
      ),

      '%s removed %s dependent revision(s) for %s: %s.' => array(
        array(
          '%s удалил(а) %s зависимую ревизию для %3$s: %4$s.',
          '%s удалил(а) %s зависимых ревизии для %3$s: %4$s.',
          '%s удалил(а) %s зависимых ревизий для %3$s: %4$s.',
        ),
      ),

      '%s added %s commit(s): %s.' => array(
        array(
          '%s добавил(а) %s фиксацию: %3$s.',
          '%s добавил(а) %s фиксации: %3$s.',
          '%s добавил(а) %s фиксаций: %3$s.',
        ),
      ),

      '%s removed %s commit(s): %s.' => array(
        array(
          '%s удалил(а) %s фиксацию: %3$s.',
          '%s удалил(а) %s фиксации: %3$s.',
          '%s удалил(а) %s фиксаций: %3$s.',
        ),
      ),

      '%s edited commit(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) фиксацию(и), добавлено: %3$s; удалено: %5$s',

      '%s added %s reverted commit(s): %s.' => array(
        array(
          '%s добавил(а) %s реверсивную фиксацию: %3$s.',
          '%s добавил(а) %s реверсивных фиксации: %3$s.',
          '%s добавил(а) %s реверсивных фиксаций: %3$s.',
        ),
      ),

      '%s removed %s reverted commit(s): %s.' => array(
        array(
          '%s удалил(а) %s реверсивную фиксацию: %3$s.',
          '%s удалил(а) %s реверсивных фиксации: %3$s.',
          '%s удалил(а) %s реверсивных фиксаций: %3$s.',
        ),
      ),

      '%s edited reverted commit(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) реверсивную(ые) фиксацию(и), добавлено: %3$s; удалено: %5$s',

      '%s added %s reverted commit(s) for %s: %s.' => array(
        array(
          '%s добавил(а) %s реверсивную фиксацию для %3$s: %4$s.',
          '%s добавил(а) %s реверсивных фиксации для %3$s: %4$s.',
          '%s добавил(а) %s реверсивных фиксаций для %3$s: %4$s.',
        ),
      ),

      '%s removed %s reverted commit(s) for %s: %s.' => array(
        array(
          '%s удалил(а) %s реверсивную фиксацию для %3$s: %4$s.',
          '%s удалил(а) %s реверсивных фиксации для %3$s: %4$s.',
          '%s удалил(а) %s реверсивных фиксаций для %3$s: %4$s.',
        ),
      ),

      '%s edited reverted commit(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) реверсивные фикцсации для %2$s, добавлено: %4$s; удалено: %6$s.',

      '%s added %s reverting commit(s): %s.' => array(
        array(
          '%s добавил(а) %s реверсивную фиксацию: %3$s.',
          '%s добавил(а) %s реверсивных фиксации: %3$s.',
          '%s добавил(а) %s реверсивных фиксаций: %3$s.',
        ),
      ),

      '%s removed %s reverting commit(s): %s.' => array(
        array(
          '%s удалил(а) %s реверсивную фиксацию: %3$s.',
          '%s удалил(а) %s реверсивных фиксации: %3$s.',
          '%s удалил(а) %s реверсивных фиксаций: %3$s.',
        ),
      ),

      '%s edited reverting commit(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) реверсивную(ые) фиксацию(и), добавлено: %3$s; удалено: %5$s.',

      '%s added %s reverting commit(s) for %s: %s.' => array(
        array(
          '%s добавил(а) %s реверсивную фиксацию для %3$s: %4$s.',
          '%s добавил(а) %s реверсивных фиксации для %3$s: %4$s.',
          '%s добавил(а) %s реверсивных фиксаций для %3$s: %4$s.',
        ),
      ),

      '%s removed %s reverting commit(s) for %s: %s.' => array(
        array(
          '%s удалил(а) %s реверсивную фиксацию для %3$s: %4$s.',
          '%s удалил(а) %s реверсивных фиксации для %3$s: %4$s.',
          '%s удалил(а) %s реверсивных фиксаций для %3$s: %4$s.',
        ),
      ),

      '%s edited reverting commit(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) реверсивные фикцсации для %s, добавлено: %4$s; удалено: %6$s.',

      '%s changed project member(s), added %d: %s; removed %d: %s.' =>
        '%s изменил(а) членов проекта, добавлено: %3$s; удалено: %5$s.',

      '%s added %d project member(s): %s.' => array(
        array(
          '%s добавил(а) в проект нового участника: %3$s.',
          '%s добавил(а) в проект %d новых участников: %3$s.',
        ),
      ),

      '%s removed %d project member(s): %s.' => array(
        array(
          '%s удалил(а) из проекта нового участника: %3$s.',
          '%s удалил(а) из проекта %d новых участников: %3$s.',
        ),
      ),

      '%d project hashtag(s) are already used: %s.' => array(
          '%d хештег проекта %2$s уже используется.',
          '%d хештега проекта %2$s уже используются.',
          '%d хештегов проекта %2$s уже используются.',
      ),

      '%s changed project hashtag(s), added %d: %s; removed %d: %s.' =>
        '%s изменил(а) хештеги проекта, добавлено: %3$s; удалено: %5$s.',

      '%s added %d project hashtag(s): %s.' => array(
        array(
          '%s добавил(а) %d хештег проекту: %3$s.',
          '%s добавил(а) %d хештега проекту: %3$s.',
          '%s добавил(а) %d хештегов проекту: %3$s.',
        ),
      ),

      '%s removed %d project hashtag(s): %s.' => array(
        array(
          '%s удалил(а) %d хештег проекту: %3$s.',
          '%s удалил(а) %d хештега проекту: %3$s.',
          '%s удалил(а) %d хештегов проекту: %3$s.',
        ),
      ),

      '%s changed %s hashtag(s), added %d: %s; removed %d: %s.' =>
        '%s изменил(а) хештег(и), добавлено: %4$s; удалено: %6$s.',

      '%s added %d %s hashtag(s): %s.' => array(
        array(
          '%s добавил(а) %3$s %2$d хештег: %4$s.',
          '%s добавил(а) %3$s %2$d хештега: %4$s.',
          '%s добавил(а) %3$s %2$d хештегов: %4$s.',
        ),
      ),

      '%s removed %d %s hashtag(s): %s.' => array(
        array(
          '%s удалил(а) %3$s %2$d хештег: %4$s.',
          '%s удалил(а) %3$s %2$d хештега: %4$s.',
          '%s удалил(а) %3$s %2$d хештегов: %4$s.',
        ),
      ),

      '%d User(s) Need Approval' => array(
        '%d пользователь нуждается в утверждении',
        '%d пользователя нуждаются в утверждении',
        '%d пользователей нуждаются в утверждении',
      ),

      '%s older changes(s) are hidden.' => array(
        '%d старое изменение скрыто.',
        '%d старых изменения скрыты.',
        '%d старых изменений скрыты.',
      ),

      '%s, %s line(s)' => array(
        '%s, %s строка',
        '%s, %s строки',
        '%s, %s строк',
      ),

      '%s pushed %d commit(s) to %s.' => array(
        array(
          '%s загрузил(а) фиксацию в %3$s.',
          '%s загрузил(а) %d фиксации в %3$s.',
          '%s загрузил(а) %d фиксаций в %3$s.',
        ),
      ),

      '%s commit(s)' => array(
        '%s фиксация',
        '%s фиксации',
        '%s фиксаций',
      ),

      '%s removed %s JIRA issue(s): %s.' => array(
        array(
          '%s удалил(а) JIRA обращение: %3$s.',
          '%s удалил(а) JIRA обращения: %3$s.',
        ),
      ),

      '%s added %s JIRA issue(s): %s.' => array(
        array(
          '%s добавил(а) JIRA обращение: %3$s.',
          '%s добавил(а) JIRA обращения: %3$s.',
        ),
      ),

      '%s added %s required legal document(s): %s.' => array(
        array(
          '%s добавил(а) требуемый юридический документ: %3$s.',
          '%s добавил(а) %s требуемых юридических документа: %3$s.',
          '%s добавил(а) %s требуемых юридических документов: %3$s.',
        ),
      ),

      '%s updated JIRA issue(s): added %s %s; removed %d %s.' =>
        '%s обновил(а) JIRA обращения: добавлено: %3$s; удалено: %5$s.',

      '%s edited %s task(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) задачи, добавлено: %4$s; удалено: %6$s.',

      '%s added %s task(s) to %s: %s.' => array(
        array(
          '%s добавил(а) %s задачу в: %4$s.',
          '%s добавил(а) %s задачи в: %4$s.',
          '%s добавил(а) %s задач в: %4$s.',
        ),
      ),

      '%s removed %s task(s) from %s: %s.' => array(
        array(
          '%s удалил(а) %s задачу из: %4$s.',
          '%s удалил(а) %s задачи из: %4$s.',
          '%s удалил(а) %s задач из: %4$s.',
        ),
      ),

      '%s edited %s task(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) задачи для %3$s, добавлено: %5$s; удалено: %7$s.',

      '%s edited %s commit(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) фиксации, добавлено: %4$s; удалено: %6$s.',

      '%s added %s commit(s) to %s: %s.' => array(
        array(
          '%s добавил(а) %s фиксацию к %3$s: %4$s.',
          '%s добавил(а) %s фиксации к %3$s: %4$s.',
          '%s добавил(а) %s фиксаций к %3$s: %4$s.',
        ),
      ),

      '%s removed %s commit(s) from %s: %s.' => array(
        array(
          '%s удалил(а) %s фиксацию из %3$s: %4$s.',
          '%s удалил(а) %s фиксации из %3$s: %4$s.',
          '%s удалил(а) %s фиксаций из %3$s: %4$s.',
        ),
      ),

      '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) фиксации для %3$s, добавлено: %5$s; удалено: %7$s.',

      '%s added %s revision(s): %s.' => array(
        array(
          '%s добавил(а) %s ревизию: %3$s.',
          '%s добавил(а) %s ревизии: %3$s.',
          '%s добавил(а) %s ревизий: %3$s.',
        ),
      ),

      '%s removed %s revision(s): %s.' => array(
        array(
          '%s удалил(а) %s ревизию: %3$s.',
          '%s удалил(а) %s ревизии: %3$s.',
          '%s удалил(а) %s ревизий: %3$s.',
        ),
      ),

      '%s edited %s revision(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) ревизии, добавлено: %4$s; удалено: %6$s.',

      '%s added %s revision(s) to %s: %s.' => array(
        array(
          '%s добавил(а) %s ревизию к %3$s: %4$s.',
          '%s добавил(а) %s ревизии к %3$s: %4$s.',
          '%s добавил(а) %s ревизий к %3$s: %4$s.',
        ),
      ),

      '%s removed %s revision(s) from %s: %s.' => array(
        array(
          '%s удалил(а) %s ревизию из %3$s: %4$s.',
          '%s удалил(а) %s ревизии из %3$s: %4$s.',
          '%s удалил(а) %s ревизий из %3$s: %4$s.',
        ),
      ),

      '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) ревизии %3$s, добавлено: %5$s; удалено: %7$s.',

      '%s edited %s project(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) проекты, добавлено: %4$s; удалено: %6$s.',

      '%s added %s project(s) to %s: %s.' => array(
        array(
          '%s добавил(а) %s проект к %3$s: %4$s.',
          '%s добавил(а) %s проекта к %3$s: %4$s.',
          '%s добавил(а) %s проектов к %3$s: %4$s.',
        ),
      ),

      '%s removed %s project(s) from %s: %s.' => array(
        array(
          '%s удалил(а) %s проект из %3$s: %4$s.',
          '%s удалил(а) %s проекта из %3$s: %4$s.',
          '%s удалил(а) %s проектов из %3$s: %4$s.',
        ),
      ),

      '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s изменил(а) проекты %3$s, добавлено: %5$s; удалено: %7$s.',

      '%s added %s panel(s): %s.' => array(
        array(
          '%s добавил(а) %s панель: %3$s.',
          '%s добавил(а) %s панели: %3$s.',
          '%s добавил(а) %s панелей: %3$s.',
        ),
      ),

      '%s removed %s panel(s): %s.' => array(
        array(
          '%s удалил(а) %s панель: %3$s.',
          '%s удалил(а) %s панели: %3$s.',
          '%s удалил(а) %s панелей: %3$s.',
        ),
      ),

      '%s edited %s panel(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) панели, дообавлено: %4$s; удалено: %6$s.',

      '%s added %s dashboard(s): %s.' => array(
        array(
          '%s добавил(а) %s доску: %3$s.',
          '%s добавил(а) %s доски: %3$s.',
          '%s добавил(а) %s досок: %3$s.',
        ),
      ),

      '%s removed %s dashboard(s): %s.' => array(
        array(
          '%s удалил(а) %s доску: %3$s.',
          '%s удалил(а) %s доски: %3$s.',
          '%s удалил(а) %s досок: %3$s.',
        ),
      ),

      '%s edited %s dashboard(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) доски, добавлено: %4$s; удалено: %6$s.',

      '%s added %s edge(s): %s.' => array(
        array(
          '%s добавил(а) %s грань: %3$s.',
          '%s добавил(а) %s грани: %3$s.',
          '%s добавил(а) %s граней: %3$s.',
        ),
      ),

      '%s added %s edge(s) to %s: %s.' => array(
        array(
          '%s добавил(а) %s грань к %3$s: %4$s.',
          '%s добавил(а) %s грани к %3$s: %4$s.',
          '%s добавил(а) %s граней к %3$s: %4$s.',
        ),
      ),

      '%s removed %s edge(s): %s.' => array(
        array(
          '%s удалил(а) %s грань к %3$s: %4$s.',
          '%s удалил(а) %s грани к %3$s: %4$s.',
          '%s удалил(а) %s граней к %3$s: %4$s.',
        ),
      ),

      '%s removed %s edge(s) from %s: %s.' => array(
        array(
          '%s удалил(а) %s грань из %3$s: %4$s.',
          '%s удалил(а) %s грани из %3$s: %4$s.',
          '%s удалил(а) %s граней из %3$s: %4$s.',
        ),
      ),

      '%s edited edge(s), added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) грани, добавлено: %3$s; удалено: %5$s.',

      '%s edited %s edge(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) грани для %3$s, добавлено: %5$s; удалено: %7$s.',

      '%s added %s member(s) for %s: %s.' => array(
        array(
          '%s добавил(а) члена для %3$s: %4$s.',
          '%s добавил(а) %s членов для %3$s: %4$s.',
        ),
      ),

      '%s removed %s member(s) for %s: %s.' => array(
        array(
          '%s удалил(а) члена для %3$s: %4$s.',
          '%s удалил(а) %s членов для %3$s: %4$s.',
        ),
      ),

      '%s edited %s member(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s отредактировал(а) членов %3$s, добавлено: %5$s; удалено: %7$s.',

      '%d related link(s):' => array(
        'Ссылка по теме:',
        'Ссылки по теме:',
      ),

      'You have %d unpaid invoice(s).' => array(
        'У вас есть неоплаченный счет.',
        'У вас есть неоплаченные счета.',
      ),

      'The configurations differ in the following %s way(s):' => array(
        'Конфигурации отличается:',
        'Конфигурации отличается в следующих случаях:',
      ),

      'Phabricator is configured with an email domain whitelist (in %s), so '.
      'only users with a verified email address at one of these %s '.
      'allowed domain(s) will be able to register an account: %s' => array(
        array(

          'Фабрикатор настроен с использованием белого списка адресов электронной почты (в %s), '.
          'поэтому только пользователи с подтверждённым адресом электронной почты от домена %3$s могут '.
          'зарегистрировать себе аккаунт.',

          'Фабрикатор настроен с использованием белого списка адресов электронной почты (в %s), '.
          'поэтому только пользователи с подтверждённым адресом электронной почты от доменов %3$s могут '.
          'зарегистрировать себе аккаунт.',
        ),
      ),

      'Show First %d Line(s)' => array(
        'Показать первую %d строку',
        'Показать первые %d строки',
        'Показать первые %d строк',
      ),

      "\xE2\x96\xB2 Show %d Line(s)" => array(
        "\xE2\x96\xB2 Показать %d строку",
        "\xE2\x96\xB2 Показать %d строки",
        "\xE2\x96\xB2 Показать %d строк",
      ),

      'Show All %d Line(s)' => array(
        'Показать %d строку',
        'Показать все %d строки',
        'Показать все %d строк',
      ),

      "\xE2\x96\xBC Show %d Line(s)" => array(
        "\xE2\x96\xBC Показать %d строку",
        "\xE2\x96\xBC Показать %d строки",
        "\xE2\x96\xBC Показать %d строк",
      ),

      'Show Last %d Line(s)' => array(
        'Показать %d последнюю строку',
        'Показать %d последних строки',
        'Показать %d последних строк',
      ),

      '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => array(
        array(
          array(
            '%s пометил(а) один внутристрочный комментарий как завершённый и один внутристрочный комментарий как незавершённый.',
            '%s пометил(а) один внутристрочный комментарий как завершённый и %3$s внутристрочных комментария как незавершённые.',
          ),

          array(
            '%s пометил(а) %s внутристрочных комментария как завершённые и один внутристрочный комментарий как незавершённый.',
            '%s пометил(а) %s внутристрочных комментария как завершённые и %3$s внутристрочных комментария как незавершённые.',
          ),
        ),
      ),

      '%s marked %s inline comment(s) as done.' => array(
        array(
          '%s пометил(а) %s внутристрочный комментарий как завершённый.',
          '%s пометил(а) %s внутристрочных комментария как завершённые.',
          '%s пометил(а) %s внутристрочных комментариев как завершённые.',
        ),
      ),

      '%s marked %s inline comment(s) as not done.' => array(
        array(
          '%s пометил(а) %s внутристрочный комментарий как незавершённый.',
          '%s пометил(а) %s внутристрочных комментария как незавершённые.',
          '%s пометил(а) %s внутристрочных комментариев как незавершённые.',
        ),
      ),

      'These %s object(s) will be destroyed forever:' => array(
        'Данный объект будет уничтожен навсегда:',
        'Данные объекты будут уничтожены навсегда:',
      ),

      'Are you absolutely certain you want to destroy these %s object(s)?' => array(
        'Вы абсолютно уверены, что хотите уничтожить этот объект?',
        'Вы абсолютно уверены, что хотите уничтожить эти объекты?',
      ),

      '%s added %s owner(s): %s.' => array(
        array(
          '%s добавил(а) владельца: %3$s.',
          '%s добавил(а) владельцев: %3$s.',
        ),
      ),

      '%s removed %s owner(s): %s.' => array(
        array(
          '%s удалил(а) владельца: %3$s.',
          '%s удалил(а) владельцев: %3$s.',
        ),
      ),

      '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => array(
        '%s изменил(а) владельцев пакета, добавлено: %4$s; удалено: %6$s.',
      ),

      'Found %s book(s).' => array(
        'Найдена %s книга.',
        'Найдено %s книги.',
        'Найдено %s книг.',
      ),
      'Found %s file(s) in project.' => array(
        'Найден %s файл в проекте.',
        'Найден %s файла в проекте.',
        'Найден %s файлов в проекте.',
      ),
      'Found %s unatomized, uncached file(s).' => array(
        'Найден %s нераспылённый, некешированный файл.',
        'Найден %s нераспылённых, некешированных файла.',
        'Найден %s нераспылённых, некешированных файлов.',
      ),
      'Found %s file(s) to atomize.' => array(
        'Найден %s файл для распыления.',
        'Найдено %s файла для распыления.',
        'Найдено %s файлов для распыления.',
      ),
      'Atomizing %s file(s).' => array(
        'Распыляем %s файл.',
        'Распыляем %s файла.',
        'Распыляем %s файлов.',
      ),
      'Creating %s document(s).' => array(
        'Создаём %s документ.',
        'Создаём %s документа.',
        'Создаём %s документов.',
      ),
      'Deleting %s document(s).' => array(
        'Удаляем %s документ.',
        'Удаляем %s документа.',
        'Удаляем %s документов.',
      ),
      'Found %s obsolete atom(s) in graph.' => array(
        'Найден %s устаревший атом в графе.',
        'Найдено %s устаревших атома в графе.',
        'Найдено %s устаревших атомов в графе.',
      ),
      'Found %s new atom(s) in graph.' => array(
        'Найден %s новый атом в графе.',
        'Найдено %s новых атома в графе.',
        'Найдено %s новых атомов в графе.',
      ),
      'This call takes %s parameter(s), but only %s are documented.' => array(
        array(
          'Данный вызов требует %s параметр, но только %s задокументирован.',
          'Данный вызов требует %s параметр, но тол��ко %s задокументировано.',
        ),
        array(
          'Данный вызов требует %s параметра, но только %s задокументирован.',
          'Данный вызов требует %s параметра, но только %s задокументировано.',
        ),
        array(
          'Данный вызов требует %s параметров, но только %s задокументирован.',
          'Данный вызов требует %s параметров, но только %s задокументировано.',
        ),
      ),

      '%s Passed Test(s)' => '%s пройденных',
      '%s Failed Test(s)' => '%s проваленных',
      '%s Skipped Test(s)' => '%s пропущенных',
      '%s Broken Test(s)' => '%s сломанных',
      '%s Unsound Test(s)' => '%s испорченных',
      '%s Other Test(s)' => '%s других',

      '%s Bulk Task(s)' => array(
        '%s задач',
        '%s задачи',
        '%s задач',
      ),

      '%s added %s badge(s) for %s: %s.' => array(
        array(
          '%s добавил(а) бейдж для %s: %3$s.',
          '%s добавил(а) бейджи для %s: %3$s.',
        ),
      ),
      '%s added %s badge(s): %s.' => array(
        array(
          '%s добавил(а) бейдж: %3$s.',
          '%s добавил(а) бейджи: %3$s.',
        ),
      ),
      '%s awarded %s recipient(s) for %s: %s.' => array(
        array(
          '%s наградил(а) %3$s для %4$s.',
          '%s наградил(а) %3$s для нескольких получателей: %4$s.',
        ),
      ),
      '%s awarded %s recipients(s): %s.' => array(
        array(
          '%s наградил(а) получателя: %3$s.',
          '%s наградил(а) нескольких получателей: %3$s.',
        ),
      ),
      '%s edited badge(s) for %s, added %s: %s; revoked %s: %s.' =>
        '%s отредактировал(а) бейджи для %s, добавлено %s: %s; отозвано %s: %s.',

      '%s edited badge(s), added %s: %s; revoked %s: %s.' =>
        '%s отредактировал(а) бейджи, добавлено %s: %s; отозвано %s: %s.',

      '%s edited recipient(s) for %s, awarded %s: %s; revoked %s: %s.' =>
        '%s отредактировал(а) получателей для %s, награждено %s: %s; отозвано %s: %s.',

      '%s edited recipient(s), awarded %s: %s; revoked %s: %s.' =>
        '%s отредактировал(а) получателей, награждено %s: %s; отозвано %s: %s.',

      '%s revoked %s badge(s) for %s: %s.' => array(
        array(
          '%s отозвал(а) бейдж для %3$s: %4$s.',
          '%s отозвал(а) бейджи для %3$s: %4$s.',
        ),
      ),
      '%s revoked %s badge(s): %s.' => array(
        array(
          '%s отозвал(а) бейдж: %3$s.',
          '%s отозвал(а) бейджи: %3$s.',
        ),
      ),
      '%s revoked %s recipient(s) for %s: %s.' => array(
        array(
          '%s отозвал(а) получателя %3$s для %4$s.',
          '%s отозвал(а) получателей %3$s для %4$s.',
        ),
      ),

      '%s revoked %s recipients(s): %s.' => array(
        array(
          '%s отозвал(а) получателя: %3$s.',
          '%s отозвал(а) получателей: %3$s.',
        ),
      ),

      '%s automatically subscribed target(s) were not affected: %s.' => array(
        'Автоматически подписанная цель не была затронута: %2$s.',
        'Автоматически подписанные цели не были затронуты: %2$s.',
      ),
      
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => array(
        'Не удалось перенаправить подписку на объект, потому что ранее он был отписан: %2$s.',
        'Не удалось перенаправить подписку на объекты, потому что ранее они были отписаны: %2$s.',
      ),

      '%s target(s) are not subscribed: %s.' => array(
        'Цель не подписана: %2$s.',
        'Цели не подписаны: %2$s.',
      ),

      '%s target(s) are already subscribed: %s.' => array(
        'Цель уже подписана: %2$s.',
        'Цели уже подписани: %2$s.',
      ),

      'Added %s subscriber(s): %s.' => array(
        'Добавлен подписчик: %2$s.',
        'Добавлены подписчики: %2$s.',
      ),

      'Removed %s subscriber(s): %s.' => array(
        'Удалён подписчик: %2$s.',
        'Удалены подписчики: %2$s.',
      ),

      'Queued email to be delivered to %s target(s): %s.' => array(
        'Письмо поставлено в очередь на отправку цели: %2$s.',
        'Письмо поставлено в очередь на отправку целям: %2$s.',
      ),

      'Queued email to be delivered to %s target(s), ignoring their notification preferences: %s.' => array(
        'Письмо поставлено в очередь на отправку цели, игнорируя настройки оповещений: %2$s.',
        'Письмо поставлено в очередь на отправку целям, игнорируя настройки оповещений: %2$s.',
      ),

      '%s project(s) are not associated: %s.' => array(
        'Проект не ассоциирован: %2$s.',
        'Проекты не ассоциирован: %2$s.',
      ),

      '%s project(s) are already associated: %s.' => array(
        'Проект уже ассоциирован: %2$s.',
        'Проекты уже ассоциированы: %2$s.',
      ),

      'Added %s project(s): %s.' => array(
        'Добавлен проект: %2$s.',
        'Добавлены проекты: %2$s.',
      ),

      'Removed %s project(s): %s.' => array(
        'Удалён проект: %2$s.',
        'Удалены проекты: %2$s.',
      ),

      'Added %s reviewer(s): %s.' => array(
        'Добавлен рецензент: %2$s.',
        'Добавлены рецензент: %2$s.',
      ),

      'Added %s blocking reviewer(s): %s.' => array(
        'Добавлен блокирующий рецензент: %2$s.',
        'Добавлены блокирующие рецензенты: %2$s.',
      ),

      'Required %s signature(s): %s.' => array(
        'Требуется подпись: %2$s.',
        'Требуются подписи: %2$s.',
      ),

      'Started %s build(s): %s.' => array(
        'Запущена сборка: %2$s.',
        'Запущены сборки: %2$s.',
      ),

      'Added %s auditor(s): %s.' => array(
        'Добавлен аудитор: %2$s.',
        'Добавлены аудиторы: %2$s.',
      ),

      '%s target(s) do not have permission to see this object: %s.' => array(
        'Цель не имеет прав для того чтобы видеть данный объект: %2$s.',
        'Цели не имеют прав для того чтобы видеть данный объект: %2$s.',
      ),

      'This action has no effect on %s target(s): %s.' => array(
        'Данное действие не оказывает эффекта на цель: %2$s.',
        'Данное действие не оказывает эффекта на цели: %2$s.',
      ),

      'Mail sent in the last %s day(s).' => array(
        'Почта, отправленная в последний %s день.',
        'Почта, отправленная в последние %s дня.',
        'Почта, отправленная в последние %s дней.',
      ),

      'Setting retention policy for "%s" to %s day(s).' => array(
        array(
          'Установка политики хранения для "%s" на один день.',
          'Установка политики хранения для "%s" на %s дня.',
          'Установка политики хранения для "%s" на %s дней.',
        ),
      ),

      'Waiting %s second(s) for lease to activate.' => array(
        'Ожидаем аренды в течении секунды для активации.',
        'Ожидаем аренды в течении %s секунд для активации.',
      ),

      '%s changed %s automation blueprint(s), added %s: %s; removed %s: %s.' =>
        '%s изменил(а) план автоматизации, добавлено: %4$s; удалено: %6$s.',

      '%s added %s automation blueprint(s): %s.' => array(
        array(
          '%s добавил(а) план автоматизации: %3$s.',
          '%s добавил(а) планы автоматизации: %3$s.',
        ),
      ),

      '%s removed %s automation blueprint(s): %s.' => array(
        array(
          '%s удалил(а) план автоматизации: %3$s.',
          '%s удалил(а) планы автоматизации: %3$s.',
        ),
      ),

      'WARNING: There are %s unapproved authorization(s)!' => array(
        'ПРЕДУПРЕЖДЕНИЕ: Присутствует несанкционированная авторизация!',
        'ПРЕДУПРЕЖДЕНИЕ: Присутствуют несанкционированные авторизации!',
      ),

      'Found %s Open Resource(s)' => array(
        'Найден %s открытый ресурс',
        'Найдено %s открытых ресурса',
        'Найдено %s открытых ресурсов',
      ),

      '%s Open Resource(s) Remain' => array(
        '%s Открытый ресурс остался',
        '%s Открытых ресурса осталось',
        '%s Открытых ресурсов осталось',
      ),

      'Found %s Blueprint(s)' => array(
        'Найден %s план',
        'Найдено %s плана',
        'Найдено %s планов',
      ),

      '%s Blueprint(s) Can Allocate' => array(
        '%s план может быть выделен',
        '%s плана может быть выделено',
        '%s планов может быть выделено',
      ),

      '%s Blueprint(s) Enabled' => array(
        '%s план активен',
        '%s плана активно',
        '%s планов активны',
      ),

      '%s Event(s)' => array(
        '%s событие',
        '%s события',
        '%s событий',
      ),

      '%s Unit(s)' => array(
        '%s элемент',
        '%s элемента',
        '%s элементов',
      ),

      'QUEUEING TASKS (%s Commit(s)):' => array(
        'ДОБАВЛЯЕМ ЗАДАЧИ В ОЧЕРЕДЬ (%s фиксация):',
        'ДОБАВЛЯЕМ ЗАДАЧИ В ОЧЕРЕДЬ (%s фиксации):',
        'ДОБАВЛЯЕМ ЗАДАЧИ В ОЧЕРЕДЬ (%s фиксаций):',
      ),

      'Found %s total commit(s); updating...' => array(
        'Найдена %s фиксация; обновляем...',
        'Найдены %s фиксации; обновляем...',
        'Найдено %s фиксаций; обновляем...',
      ),

      'Not enough process slots to schedule the other %s repository(s) for updates yet.' => array(
        'Недостаточно слотов для того чтобы поместить в очередь другой %s репозиторий для обновления.',
        'Недостаточно слотов для того чтобы поместить в очередь другие %s репозитория для обновления.',
        'Недостаточно слотов для того чтобы поместить в очередь другие %s репозиториев для обновления.',
      ),

      '%s updated %s, added %d: %s.' =>
        '%s обновил(а) %s, добавлено: %4$s.',

      '%s updated %s, removed %s: %s.' =>
        '%s обновил(а) %s, удалено: %4$s.',

      '%s updated %s, added %s: %s; removed %s: %s.' =>
        '%s обновил(а) %s, добавлено: %4$s; удалено: %6$s.',

      '%s updated %s for %s, added %d: %s.' =>
        '%s обновил(а) %s для %s, добавлено: %5$s.',

      '%s updated %s for %s, removed %s: %s.' =>
        '%s обновил(а) %s для %s, удалено: %5$s.',

      '%s updated %s for %s, added %s: %s; removed %s: %s.' =>
        '%s обновил(а) %s для %s, добавлено: %5$s; удалено; %7$s.',

      'Permanently destroyed %s object(s).' => array(
        'Полностью удалён %s объект.',
        'Полностью удалены %s объекта.',
        'Полностью удалено %s объектов.',
      ),

      '%s added %s watcher(s) for %s: %s.' => array(
        array(
          '%s добавлен наблюдатель для %3$s: %4$s.',
          '%s добавлены наблюдатели для %3$s: %4$s.',
        ),
      ),

      '%s removed %s watcher(s) for %s: %s.' => array(
        array(
          '%s удалён наблюдатель для %3$s: %4$s.',
          '%s удалены наблюдатели для %3$s: %4$s.',
        ),
      ),

      '%s awarded this badge to %s recipient(s): %s.' => array(
        array(
          '%s наградил этот бейдж получателю: %3$s.',
          '%s наградил этот бейдж %s получателям: %3$s.',
        ),
      ),

      '%s revoked this badge from %s recipient(s): %s.' => array(
        array(
          '%s отозвал этот бейдж от получателя: %3$s.',
          '%s отозвал этот бейдж от %s получателей: %3$s.',
        ),
      ),

      '%s awarded %s to %s recipient(s): %s.' => array(
        array(
          array(
            '%s наградил %s получателю: %4$s.',
            '%s наградил %s получателей: %4$s.',
          ),
        ),
      ),

      '%s revoked %s from %s recipient(s): %s.' => array(
        array(
          array(
            '%s отозвал %s от получателя: %4$s.',
            '%s отозвал %s от %s получателей: %4$s.',
          ),
        ),
      ),

      '%s invited %s attendee(s): %s.' =>
        '%s приглашён: %3$s.',

      '%s uninvited %s attendee(s): %s.' =>
        '%s приглашение отменено: %3$s.',

      '%s invited %s attendee(s): %s; uninvinted %s attendee(s): %s.' =>
        '%s приглашены: %3$s; приглашение отменено: %5$s.',

      '%s invited %s attendee(s) to %s: %s.' =>
        '%s добавлены приглашения для %3$s: %4$s.',

      '%s uninvited %s attendee(s) to %s: %s.' =>
        '%s удалены приглашения для %3$s: %4$s.',

      '%s updated the invite list for %s, invited %s: %s; uninvinted %s: %s.' =>
        '%s обновил(а) список приглашённых для %s, приглашены: %4$s; приглашения отозваны: %6$s.',

      'Restart %s build(s)?' => array(
        'Перезапустить %s сборку?',
        'Перезапустить %s сборки?',
        'Перезапустить %s сборок?',
      ),

      '%s is starting in %s minute(s), at %s.' => array(
        array(
          '%s начинается через %s минуту, в %3$s.',
          '%s начинается через %s минуты, в %3$s.',
          '%s начинается через %s минут, в %3$s.',
        ),
      ),

      '%s added %s auditor(s): %s.' => array(
        array(
          '%s добавлен аудитор: %3$s.',
          '%s добавлены аудиторы: %3$s.',
        ),
      ),

      '%s removed %s auditor(s): %s.' => array(
        array(
          '%s удалён аудитор: %3$s.',
          '%s удалены аудиторы: %3$s.',
        ),
      ),

      '%s edited %s auditor(s), removed %s: %s; added %s: %s.' => array(
        array(
          '%s изменил(а) аудиторов, удалено: %4$s; добавлено: %6$s.',
        ),
      ),

      '%s accepted this revision as %s reviewer(s): %s.' =>
        '%s принял(а) эту ревизию как: %3$s.',

      '%s added %s merchant manager(s): %s.' => array(
        array(
          '%s добавил(а) торгового менеджера: %3$s.',
          '%s добавил(а) торговых менеджеров: %3$s.',
        ),
      ),

      '%s removed %s merchant manager(s): %s.' => array(
        array(
          '%s удалил(а) торгового менеджера: %3$s.',
          '%s удалил(а) торговых менеджеров: %3$s.',
        ),
      ),

      '%s added %s account manager(s): %s.' => array(
        array(
          '%s добавил(а) менеджера аккаунтов: %3$s.',
          '%s добавил(а) менеджеров аккаунтов: %3$s.',
        ),
      ),

      '%s removed %s account manager(s): %s.' => array(
        array(
          '%s удалил(а) менеджера аккаунтов: %3$s.',
          '%s удалил(а) менеджеров аккаунтов: %3$s.',
        ),
      ),

      // Search
      'Query' => 'Запрос',
      'Edit Query...' => 'Изменить запрос...',
      'Edit Query' => 'Изменить запрос',
      'Edit Queries...' => 'Изменить запросы...',
      'Save Custom Query...' => 'Сохранить пользовательский запрос',
      'Showing results for query "%s".' => 'Отображение результатов запроса "%s".',
      'Showing results for saved query "%s".' => 'Отображение результатов сохранённого запроса "%s".',
      'Advanced Search' => 'Расширенный поиск',
      'No search results.' => 'Ничего не найдено.',
      'No results found for this query.' => 'Ничего не найдено по данному запросу.',
      'Hide Query' => 'Скрыть запрос',
      'Execute Query' => 'Выполнить запрос',
      'Browse Users' => 'Посмотреть пользователей',
      'Browse Subscribers' => 'Посмотреть подписчиков',
      'Browse Projects' => 'Посмотреть проекты',
      'Browse Document Types' => 'Посмотреть типы документов',
      'Search All Documents' => 'Выбрать все документы',
      'All Documents' => 'Все документы',
      'Current Application' => 'Текущее приложение',
      'Search Current Application' => 'Поиск в текущем приложении',
      'Saved Queries' => 'Сохранённые запросы',
      'Open Documents' => 'Активные документы',
      'More Options' => 'Больше опций',
      'Spaces' => 'Пространства',
      'Space %s: %s' => 'Пространство %s: %s',
      'No flags found.' => 'Флажков не найдено',
      'Document Status' => 'Статус документа',
      'Document Types' => 'Типы документа',
      'Select a document type...' => 'Выберите типы документа',

      // Edit
      'Edit' => 'Редактирование',
      'Edit Comment' => 'Редактировать комментарий',
      'Remove Comment' => 'Удалить комментарий',
      'Bold' => 'Жирный',
      'bold text' => 'жирный текст',
      'Italics' => 'Курсив',
      'italic text' => 'курсивный текст',
      'Monospaced' => 'Моноширинный',
      'monospaced text' => 'моноширинный текст',
      'Bulleted List' => 'Список',
      'List Item' => 'Элемент списка',
      'Numbered List' => 'Нумерованный список',
      'Quote' => 'Цитата',
      'Quoted Text' => 'Текст цитаты',
      'Table' => 'Таблица',
      'data' => 'дата',
      'Upload File' => 'Загрузить файл',
      'To add files, drag and drop them into the comment text area.' => 'Чтобы добавить файлы, перетащите их на поле ввода комментария.',
      'Fullscreen Mode' => 'Полноэкранный режим',
      'Type a user, project, package, or mailing list name...' => 'Введите имя пользователя, проект, пакет или email...',
      'Type a repository name...' => 'Введите название репозитория...',
      'Type a username, project, mailing list, or function...' => 'Введите имя пользователя, проект, список рассылки или функцию...',
      'Type a project name or function...' => 'Введите название проекта или функцию...',
      'Type a space name...' => 'Введите название пространства...',
      'Type a user, project or package name...' => 'Введите имя пользователя, проекта или пакета...',
      'Type an application name...' => 'Введите название приложения...',
      'Type a room title...' => 'Введите название комнаты...',
      'Type a dashboard name...' => 'Введите название доски...',
      'Type a form name...' => 'Введите название формы...',
      'Type a task priority name...' => 'Введите название приоритета задачи...',
      'Type a task status name or function...' => 'Введите название статуса задачи или функции...',
      'Edit Commit: %s' => 'Редактирование фиксации: %s',
      'Conpherence Room' => 'Комната конференции',
      'Open Parents' => 'Открытые родители',
      'Open Subtasks' => 'Открытые подзадачи',
      '(Show All)' => '(Показать все)',
      'Show Only Tasks With Open Parents' => 'Показать толкьо задачи с открытыми родителями',
      'Show Only Tasks Without Open Parents' => 'Показать толкьо задачи без открытых родителей',
      'Show Only Tasks With Open Subtasks' => 'Показать только задачи с открытыми подзадачами',
      'Show Only Tasks Without Open Subtasks' => 'Показать только задачи без открытых подзадач',
      'Date Updated (Latest First)' => 'Дате обновления (сначала новые)',
      'Date Updated (Oldest First)' => 'Дате обновления (сначала старые)',

      // Apps
      'Audit' => 'Аудит',
      'Auth' => 'Авторизация',
      'Calendar' => 'Календарь',
      'ChatLog' => 'Лог чата',
      'Conduit' => 'Трубопровод',
      'Config' => 'Конфигурация',
      'Conpherence' => 'Конференция',
      'Countdown' => 'Счётчики',
      'Daemons' => 'Службы',
      'Dashboard' => 'Доски',
      'Differential' => 'Изменения',
      'Diffusion' => 'Репозитории',
      'Diviner' => 'Генератор документации',
      'Doorkeeper' => 'Ресепшн',
      'Drydock' => 'Менеджер ресурсов',
      'Fact' => 'Факты',
      'Feed' => 'Лента',
      'Files' => 'Файлы',
      'Flags' => 'Флаги',
      'Harbormaster' => 'Непрерывная интеграция',
      'Help' => 'Помощь',
      'Herald' => 'Геральд',
      'Legalpad' => 'Соглашения',
      'Macro' => 'Мемы',
      'MailingLists' => 'СпискиРассылок',
      'Maniphest' => 'Задачи',
      'Applications' => 'Приложения',
      'Notifications' => 'Оповещения',
      'Owners' => 'Владельцы',
      'Passphrase' => 'Пароли',
      'Paste' => 'Кусочки кода',
      'People' => 'Люди',
      'Phame' => 'Блоги',
      'Pholio' => 'Дизайны',
      'Phriction' => 'Документация',
      'Policy' => 'Политики',
      'Project' => 'Проекты',
      'Repositories' => 'Репозитории',
      'Search' => 'Поиск',
      'Settings' => 'Настройки',
      'Slowvote' => 'Голосования',
      'Subscriptions' => 'Подписки',
      'Support' => 'Поддержка',
      'System' => 'Система',
      'Test' => 'Тесты',
      'Tokens' => 'Токены',
      'Transactions' => 'Транзакции',
      'Typeahead' => 'Машинопись',

      // Icons
      'Icons'                   => 'Иконки',
      'Icon'                    => 'Иконка',
      'Travel'                  => 'Путешествие',
      'Health / Appointment'    => 'Здоровье / Приём',
      'Sabatical / Leave'       => 'Субботний / Отложенный',
      'Working From Home'       => 'Работа на дому',
      'Holiday'                 => 'Праздник',
      'Staycation'              => 'Мини-отпуск',
      'Coffee Meeting'          => 'Встреча за чашкой кофе',
      'Movie'                   => 'Фильм',
      'Meeting'                 => 'Собрание',
      'Meal'                    => 'Принятие пищи',
      'Pet Activity'            => 'Активность домашних животных',
      'Official Business'       => 'Официальный бизнес',
      'Field Trip'              => 'Экскурсия',
      'Conference'              => 'Совещание',
      'Briefcase'               => 'Портфель',
      'Tag'                     => 'Тег',
      'Folder'                  => 'Папка',
      'Bug'                     => 'Баг',
      'Garbage'                 => 'Отбросы',
      'Goal'                    => 'Цель',
      'Communication'           => 'Коммуникация',
      'Policy'                  => 'Политика',
      'An Umbrella'             => 'Зонт',
      'Umbrella'                => 'Зонт',
      'The Cloud'               => 'Облако',
      'Group'                   => 'Группа',
      'Company'                 => 'Организация',
      'Accounting'              => 'Бухгалтерский учёт',
      'Experimental'            => 'Экспериментальное',
      'Like'                    => 'Нравится',
      'Dislike'                 => 'Не нравится',
      'Love'                    => 'Любовь',
      'Heartbreak'              => 'Большое горе',
      'Orange Medal'            => 'Бронзовая медаль',
      'Grey Medal'              => 'Серебряная медаль',
      'Yellow Medal'            => 'Золотая медаль',
      'Manufacturing Defect?'   => 'Производственный дефект?',
      'Haypence'                => 'Хайпинг',
      'Piece of Eight'          => 'Одна восьмая',
      'Doubloon'                => 'Дублон',
      'Mountain of Wealth'      => 'Гора богатства',
      'Pterodactyl'             => 'Птеродактиль',
      'Evil Spooky Haunted Tree'=> 'Злое Ужасное Призрачное Дерево',
      'The World Burns'         => 'Мир горит!',
      'Colors'                  => 'Цвета',
      'Color'                   => 'Цвет',
      'Blue'                    => 'Синий',
      'Red'                     => 'Красный',
      'Orange'                  => 'Оранжевый',
      'Yellow'                  => 'Жёлтый',
      'Violet'                  => 'Фиолетовый',
      'Green'                   => 'Зелёный',
      'Grey'                    => 'Серый',
      'Checkered'               => 'Клетчатый',
      'Award "%s" Token'        => 'Награждён медалью "%s"',

      // Apps
      'All Applications' => 'Все приложения',
      'Can Use Application' => 'Может использовать приложение',
      'Can Configure Application' => 'Может сконфигурировать приложение',

      // Differential
      'This revision now requires changes to proceed.' => 'Данная ревизия требует изменений для продолжения.',
      'This revision is now accepted and ready to land.' => 'Данная ревизия отныне принята и готова для подключения.',
      'This revision now requires review to proceed.' => 'Данная ревизия требует рецензии для продолжения.',
      'Edit Revision' => 'Редактировать ревизию',
      'Update Diff' => 'Обновить изменение',
      'Edit Related Revisions...' => 'Редактировать связанные ревизии...',
      'Edit Parent Revisions' => 'Редактировать родителей',
      'Edit Child Revisions' => 'Редактировать потомков',
      'Land Revision' => 'Подключить ревизию',
      'Create Diff' => 'Создать изменение',
      'Author: %s' => 'Автор: %s',
      'Active Revisions' => 'Активные ревизии',
      'All Revisions' => 'Все ревизии',
      'Review Code' => 'Проверка кода',
      'Reviewers: %s' => 'Рецензенты: %s',
      'Must Review' => 'Необходимо проверить',
      'No revisions are blocked on your review.' => 'Нет ревизий, заблокированных в ожидании вашей проверки.',
      'Ready to Review' => 'Готовы к проверке',
      'No revisions are waiting on you to review them.' => 'Нет ревизий, ожидающих того, когда вы их проверите.',
      'Ready to Land' => 'Готовы к подключению',
      'No revisions are ready to land.' => 'Нет ревизий, готовых к подключению.',
      'Ready to Update' => 'Готовы для обновления',
      'No revisions are waiting for updates.' => 'Нет ревизий, ожидающих обновления.',
      'Waiting on Review' => 'Ожидают проверки',
      'None of your revisions are waiting on review.' => 'Нет ревизий, ожидающих проверки.',
      'Waiting on Authors' => 'Ожидают авторов',
      'No revisions are waiting on author action.' => 'Нет ревизий, ожидающих авторов.',
      'Waiting on Other Reviewers' => 'Ожидают других рецензентов.',
      'No revisions are waiting for other reviewers.' => 'Нет ревизий, ожидающих других авторов',
      '%s added inline comments to %s.' => '%s добавил(а) внутристрочные комментарии к %s.',
      '%s updated the diff for %s.' => '%s обновил(а) изменение для %s.',
      '%s accepted %s.' => '%s принял(а) %s.',
      '%s requested changes to %s.' => '%s запросил(а) изменения для %s.',
      '%s planned changes to %s.' => '%s запланировал(а) изменения для %s.',
      '%s abandoned %s.' => '%s забросил(а) %s.',
      '%s closed %s.' => '%s закрыл(а) %s.',
      '%s closed %s by committing %s (authored by %s).' => '%s закрыл(а) %s через фиксацию %s (за авторством %s).',
      '%s closed %s by committing %s.' => '%s закрыл(а) %s через фиксацию %s.',
      
      '%s closed this task as %s.' => '%s закрыл(а) эту задачу как %s.',
      '%s closed this task as a duplicate by committing %s.' => '%s закрыл(а) эту задачу как дубликат через фиксацию %s.',
      '%s closed this task as %s by committing %s.' => '%s закрыл(а) эту задачу как %s через фиксацию %s.',
      '%s reopened this task as %s by committing %s.' => '%s снова открыл(а) эту задачу как %s через фиксацию %s.',
      '%s reopened this task as %s.' => '%s снова открыл(а) эту задачу как %s.',
      '%s changed the task status from %s to %s by committing %s.' => '%s сменил(а) статус задачи с %s на %s через фиксацию %s.',
      '%s changed the task status from %s to %s.' => '%s сменил(а) статус задачи с %s на %s.',
      '%s closed %s as a duplicate by committing %s.' => '%s закрыл(а) %s как дубликат через фиксацию %s.',
      '%s closed %s as a duplicate.' => '%s закрыл(а) %s как дубликат.',
      '%s closed %s as %s by committing %s.' => '%s закрыл(а) %s как %s через фиксацию %s.',
      '%s closed %s as %s.' => '%s закрыл(а) %s как %s.',
      '%s reopened %s as %s by committing %s.' => '%s снова открыл(а) %s как %s через фиксацию %s.',
      '%s reopened %s as "%s".' => '%s снова открыл(а) %s как "%s".',
      '%s changed the status of %s from %s to %s by committing %s.' => '%s изменил(а) статус %s с %s на %s через фиксацию %s.',
      '%s changed the status of %s from %s to %s.' => '%s изменил(а) статус %s с %s на %s.',
      
      '%s requested review of %s.' => '%s запросил(а) рецензию на %s.',
      '%s reclaimed %s.' => '%s восстановил(а) %s.',
      '%s resigned from %s.' => '%s отказался(лась) от %s.',
      '%s commandeered %s.' => '%s взял(а) на себя %s.',
      '%s reopened %s.' => '%s открыл(а) снова %s.',
      '%s is now accepted and ready to land.' => '%s теперь принята и готова к подключению.',
      '%s now requires changes to proceed.' => '%s теперь требует примерения изменений для продолжения.',
      '%s now requires review to proceed.' => '%s теперь требует рецензии для продолжения.',
      'This revision is already closed.' => 'Эта ревизия уже закрыта.',
      'This revision has already been abandoned.' => 'Эта ревизия уже заброшена.',
      'Accepted' => 'Принято',
      'Requested Changes To' => 'Запрошены изменения',
      'Requested A Review Of' => 'Запрошена рецензия',
      'Resigned From' => 'Отказано',
      'Abandoned' => 'Заброшено',
      'Added Reviewers' => 'Добавлены рецензенты',
      'Commandeered' => 'Взято',
      'Reopened' => 'Снова активно',
      '%s updated this revision to %s.' => '%s обновил(а) свою ревизию на %s.',
      '%s created this revision.' => '%s создал данное изменение.',
      '%s requested changes to this revision.' => '%s запросил изменения на данную ревизию.',
      '%s planned changes to this revision.' => '%s запланировал изменения для данной ревизии.',
      '%s abandoned this revision.' => '%s забросил эту ревизию.',
      '%s commented on this revision.' => '%s прокомментировал эту ревизию.',
      '%s accepted this revision.' => '%s принял эту ревизию.',
      '%s closed this revision.' => '%s закрыл эту ревизию.',
      '%s requested a review of this revision.' => '%s запросил рецензию на эту ревизию.',
      '%s reclaimed this revision.' => '%s восстановил эту ревизию.',
      '%s updated this revision.' => '%s обновил эту ревизию.',
      '%s resigned from this revision.' => '%s отказался от этой ревизии.',
      '%s summarized this revision.' => '%s прорезюмировал эту ревизию.',
      '%s explained the test plan for this revision.' => '%s расписал план тестирования этой ревизии.',
      '%s added reviewers to this revision.' => '%s добавил рецензентов для этой ревизии.',
      '%s added CCs to this revision.' => '%s добавил подписчиков для этой ревизии.',
      '%s commandeered this revision.' => '%s взял на себя эту ревизию.',
      '%s reopened this revision.' => '%s открыл снова эту ревизию.',
      '%s added an inline comment.' => '%s добавил внутристрочный комментарий.',
      '%s completed building %s.' => '%s завершила сборку %s.',
      '%s started building %s.' => '%s начала сборку %s.',
      '%s failed to build %s!' => '%s не смогла собрать %s!',
      '%s failed to build %s for %s.' => '%s не смогла собрать %s для %s.',
      '%s completed building %s for %s.' => '%s завершила сборку %s для %s.',
      '%s started building %s for %s.' => '%s начала сборку %s для %s.',
      '%s edited a custom field on %s.' => '%s изменил(а) пользовательское поле на %s.',
      'Packages' => 'Пакеты',
      'Authored by %s on %s.' => 'За авторством %s от %s.',
      'Autoclose?' => 'Автозакрытие?',

      // Maniphest
      'Open'      => 'Открыто',
      'Resolved'  => 'Завершено',
      'Wontfix'   => 'Нинужно',
      'Invalid'   => 'Некорректное',
      'Wish' => 'Мечты',
      'Wishlist' => 'Список желаний',
      'Low' => 'Низкий',
      'Normal' => 'Нормальный',
      'High' => 'Высокий',
      'Triage' => 'Неотсортирован',
      'Needs Triage' => 'Требует выбора',
      'Unbreak!' => 'Починить!',
      'Unbreak Now!' => 'Скорее починить!',
      'Closed, Resolved' => 'Закрыто, Разрешено',
      'Closed, Wontfix' => 'Закрыто, делать не будем',
      'Closed, Invalid' => 'Закрыто, некорректное',
      'Duplicate' => 'Дубликат',
      'Closed, Duplicate' => 'Закрыто, дубликат',
      'Spite' => 'Озлобленность',
      'Closed, Spite' => 'Закрыто, со злостью',
      'Reports' => 'Отчёты',
      'Batch Task Editor' => 'Редактор пакетной обработки задач',
      'Mentioned In' => 'Упомянуто в',
      '%s moved this task from %s to %s on the %s board.' => '%s переместил(а) эту задачу с %s на %s, на доске %s.',
      '%s moved this task to %s on the %s board.' => '%s переместил(а) эту задачу на %s, на доске %s.',
      '%s moved this task on %s board(s): %s.' => '%s переместил(а) эту задачу на доску %s: %s.',
      '%s moved %s from %s to %s on the %s board.' => '%s переместил(а) %s с %s на %s, на доске %s.',
      '%s moved %s to %s on the %s board.' => '%s переместил(а) %s на %s, на доске %s.',
      '%s moved %s on %s board(s): %s.' => '%s переместил(а) %s на %s, на доске: %s.',      
      '%s created subtask %s.' => '%s создал(а) подзадачу %s.',
      '%s reopened subtask %s as %s.' => '%s снова открыл(а) подзадачу %s как %s.',
      '%s reopened subtask %s as %s.' => '%s снова открыл(а) подзадачу %s как %s.',
      '%s closed subtask %s as %s.' => '%s закрыл(а) подзадачу %s как %s.',
      '%s changed the status of subtask %s from %s to %s.' => '%s изменил(а) статус подзадачи %s с %s на %s.',
      '%s reopened %s, a subtask of %s, as %s.' => '%s переоткрыл(а) %s, подзадачу задачи %s, как %s.',
      '%s closed %s, a subtask of %s, as %s.' => '%s закрыл(а) %s, подзадачу задачи %s, как %s.',
      '%s changed the status of %s, a subtask of %s, from %s to %s.' => '%s изменил(а) статус %s, подзадачи задачи %s, с %s на %s.',
      'Build Passed' => 'Сборка прошла',
      'Build Failed' => 'Сборка провалилась',
      'Build Status' => 'Статус сборки',
      'Commented On' => 'Прокомментировано в',
      'Changed Policy' => 'Изменены политики',
      'Changed Subscribers' => 'Изменены подписчики',
      'Created' => 'Создано',
      'Retitled' => 'Переименовано',
      'Edit Related Tasks' => 'Редактирование связанных задач',
      'Save Related Tasks' => 'Сохранить связанные задачи',
      'Current Tasks' => 'Текущие задачи',
      'Quote Comment' => 'Цитировать комментарий',
      'View Remarkup' => 'Показать исходный текст',
      
      'Comment for this transaction was not loaded.' => 'Комментарий для этой транзакции не был загружен',
	    'Task Graph' => 'Граф задачи',
	    'History Graph' => 'Граф истории',
	    'Task Author' => 'Автор задачи',
	    'Edit Related Tasks...'=>'Редактировать связанные задачи...',
	    'Edit Parent Tasks' => 'Редактировать родительские задачи',
	    'Edit Subtasks' => 'Редактировать подзадачи',
	    'Close As Duplicate' => 'Закрыть как дубликат',
	    'Close This Task As a Duplicate Of' => 'Закрыть данную задачу как дубликат следующей',
	    'Merge Into Selected Task' => 'Объединить с выбранной задачей',
	    'Related Objects' => 'Связанные объекты',
	    'Mentions' => 'Упоминания',
	    'Edit Related Objects...' => 'Редактировать связанные объекты...',
	    'Edit Commit' => 'Редактировать фиксацию',
	    'Edit Commits' => 'Редактировать фиксации',
	    'Edit Tasks' => 'Редактировать задачи',
	    'Edit Mocks' => 'Редактировать дизайны',
	    'Edit Revisions' => 'Редактировать ревизии',
	    'All Mocks' => 'Все дизайны',
	    'Create Mock' => 'Создать дизайн',
	    'Open Mocks' => 'Активные дизайны',
	    'Download Raw Diff' => 'Загрузить сырое изменение',
      'Tasks and Bugs' => 'Задачи и баги',
      'Create Task' => 'Создать задачу',
      'Maniphest Task' => 'Задача Манифеста',
      'Create New Task' => 'Создать новую задачу',
      'Quick Create' => 'Быстрое создание',
      'Upload Picture' => 'Загрузить картинку',
      'Current Picture' => 'Текущая картинка',
      'Use Picture' => 'Использовать картинку',
      'Edit Project Picture' => 'Изменить картинку проекта',
      'Upload New Picture' => 'Загрузить новую картинку',
      'Choose Icon and Color...' => 'Выбрать иконку и цвет...',
      'Type a project name...' => 'Введите название проекта...',
      'Type a username...' => 'Введите имя пользователя...',
      'Type a username or function...' => 'Введите имя пользователя или функции...',
      'Type a username or "none"...' => 'Введите имя пользователя или "none"...',
      'Type a user, project, or mailing list name...' => 'Введите имя пользователя, проект или email...',
      'Queries' => 'Запросы',
      'Query: %s' => 'Запрос: %s',
      'Search...' => 'Поиск...',
      'Search Parent Tasks' => 'Найти родительские задачи',
      'Search Subtasks' => 'Найти подзадачи',
      'Parent IDs' => 'Родительские ID',
      'Assigned' => 'Ответственный',
      'Assigned: %s' => 'Ответственный: %s',
      'Authored' => 'Собственные',
      'Authored By' => 'За авторством',
      'Subscribed' => 'Подписан',
      'Open Tasks' => 'Активные задачи',
      'All Tasks' => 'Все задачи',
      'By User' => 'По пользователю',
      'By Project' => 'По проекту',
      "Compose Image" => "Составить изображение",
      "Choose Background Color" => "Выбрать фоновый цвет",
      "Choose Icon" => "Выбрать иконку",
      'Pushed' => 'Вставлено',
      'Parents' => 'Родители',
      'Reviewers' => 'Рецензенты',
      
      'This file was added.'        => 'Этот файл был добавлен',
      'This image was added.'       => 'Это изображение было добавлено',
      'This directory was added.'   => 'Эта директория была добавлена',
      'This binary file was added.' => 'Этот бинарный файл был добавлен',
      'This symlink was added.'     => 'Эта символическая ссылка была добавлена',
      'This submodule was added.'   => 'Этот подмодуль был добавлен',

      'This file was deleted.'        => 'Этот файл был удалён',
      'This image was deleted.'       => 'Это изображение было удалено',
      'This directory was deleted.'   => 'Эта директория была удалена',
      'This binary file was deleted.' => 'Этот бинарный файл был удалён',
      'This symlink was deleted.'     => 'Эта символическая ссылка была удалена',
      'This submodule was deleted.'   => 'Этот подмодуль был удалён',
      
      'This file was moved from %s.'        => 'Этот файл был перемещён сюда из %s',
      'This image was moved from %s.'       => 'Это изображение было перемещено сюда из %s',
      'This directory was moved from %s.'   => 'Эта директория была перемещена сюда из %s',
      'This binary file was moved from %s.' => 'Этот бинарный файл был перемещён сюда из %s',
      'This symlink was moved from %s.'     => 'Эта символическая ссылка была перемещена сюда из %s',
      'This submodule was moved from %s.'   => 'Этот подмодуль был перемещён сюда из %s',

      'This file was copied from %s.'        => 'Этот файл был скопирован сюда из %s',
      'This image was copied from %s.'       => 'Это изображение было скопировано сюда из %s',
      'This directory was copied from %s.'   => 'Эта директория была скопирована сюда из %s',
      'This binary file was copied from %s.' => 'Этот бинарный файл был скопирован сюда из %s',
      'This symlink was copied from %s.'     => 'Эта символическая ссылка была скопирована сюда из %s',
      'This submodule was copied from %s.'   => 'Этот подмодуль был скопирован сюда из %s',

      'This file was moved to %s.'        => 'Этот файл был перемещён в %s',
      'This image was moved to %s.'       => 'Это изображение было перемещено в %s',
      'This directory was moved to %s.'   => 'Эта директория была перемещена в %s',
      'This binary file was moved to %s.' => 'Этот бинарный файл был перемещён в %s',
      'This symlink was moved to %s.'     => 'Эта символическая ссылка была перемещена в %s',
      'This submodule was moved to %s.'   => 'Этот подмодуль был перемещён в %s',

      'This file was copied from %s.'        => 'Этот файл был скопирован в %s',
      'This image was copied from %s.'       => 'Это изображение было скопировано в %s',
      'This directory was copied from %s.'   => 'Эта директория была скопирована в %s',
      'This binary file was copied from %s.' => 'Этот бинарный файл был скопирован в %s',
      'This symlink was copied from %s.'     => 'Эта символическая ссылка была скопирована в %s',
      'This submodule was copied from %s.'   => 'Этот подмодуль был скопирован в %s',

      'This file was deleted after being copied to %s.'        => 'Этот файл был удалён после копирования из %s',
      'This image was deleted after being copied to %s.'       => 'Это изображение удалено после копирования из %s',
      'This directory was deleted after being copied to %s.'   => 'Эта директория была удалена после копирования из %s',
      'This binary file was deleted after being copied to %s.' => 'Этот бинарный файл был удалён после копирования из %s',
      'This symlink was deleted after being copied to %s.'     => 'Эта символическая ссылка была удалена после копирования из %s',
      'This submodule was deleted after being copied to %s.'   => 'Этот подмодуль был удалён после копирования из %s',
      
      'This file was not modified.' => 'Данный файл не был изменён',
      'This is an image.'           => 'Это изображение',
      'This is a directory.'        => 'Это директория',
      'This is a binary file.'      => 'Это бинарный файл',
      'This is a symlink.'          => 'Это символическая ссылка',
      'This is a submodule.'        => 'Это подмодуль',

      // Signs
      'You signed this document on %s.' => 'Вы подписали данный документ %s',
      'View/Sign Document' => 'Посмотреть/Подписать документ',
      'View Signatures' => 'Посмотреть подписи',
      'Signatures' => 'Подписи',
      'Show only documents I have signed.' => 'Показать только те документы, которые я подписал',
      'Creators' => 'Создатели',
      'Contributors' => 'Помощники',
      'All Signatures' => 'Все подписи',
      'Add Exemption' => 'Освободить от подписи',
      'Add Signature Exemption' => 'Добавить освобождённого от подписи',
      'Exempt User' => 'Пользователь',
      'Signed Documents' => 'Подписанные документы',
      'Find Signatures' => 'Найти подписи',
      'Notes' => 'Пояснения',
      'Signed on %s' => 'Подписано %s',
      'Not Signed' => 'Не подписано',
      'Version %d (%s)' => 'Версия %d (%s)',
      'No documents found.' => 'Документов не найдено',
      'Create a Document' => 'Создать документ',
      'Create Document' => 'Создать документ',
      'Who Should Sign?' => 'Кто должен подписывать?',
      'Individuals' => 'Лица',
      'Corporations' => 'Корпорации',
      'No One' => 'Никто',
      'Signature Required to use Phabricator' => 'Подпись необходима для использования Фабрикатора',
      'Document Body' => 'Тело документа',
      'Create New Document' => 'Создать новый документ',
      'Document' => 'Документ',

      'You can record a signature exemption if a user has signed an '.
      'equivalent document. Other applications will behave as through the '.
      'user has signed this document.' =>
        'Вы можете записать освобождение подписи, если пользователь подписал эквивалентный документ. '.
        'Другие приложения будут вести себя так, будто пользователь подписал этот документ.',

      'Statuses' => 'Статусы',
      'Priorities' => 'Приоритеты',
      'Assigned To' => 'Ответственный',
      'Assigned to Me' => 'Назначено на меня',
      'Advanced Filter...' => 'Расширенный фильтр...',
      'In All Projects' => 'Во всех проектах',
      'In Any Project' => 'В любом проекте',
      'Not In Projects' => 'Не в проектах',
      "In Users' Projects" => 'В проектах пользователя',
      'Authors' => 'Авторы',
      'Contains Words' => 'Содержит слова',
      'Priority' => 'Приоритет',
      'Blocking' => 'Блокировка',
      'Blocked' => 'Заблокировано',
      'Group By' => 'Группировать по',
      'Order By' => 'Сортировать по',
      'Task IDs' => 'Номера задач',
      'Created After' => 'Создано после',
      'Created Before' => 'Создано до',
      'Updated After' => 'Обновлено после',
      'Updated Before' => 'Обновлено до',
      'Page Size' => 'Размер страницы',
      'Shift-Click to Select Tasks' => 'Кликните с зажатой кнопкой Shift, чтобы выбрать несколько задач',
      'Select All' => 'Выбрать всё',
      'Clear Selection' => 'Очистить выбор',
      'Export to Excel' => 'Экспортировать в Excel',
      'Export Tasks to Excel' => 'Экспортировать задачи в Excel',
      'Do you want to export the query results to Excel?' => 'Вы желаете экспортировать результаты запроса в Excel документ',
      'Batch Edit Selected »' => 'Пакетная обработка выбранных »',
      'Edit Task' => 'Редактировать задачу',
      'Save Task' => 'Сохранить задачу',
      'Merge Duplicates In' => 'Подключить дубликаты',
      'Merge Duplicates Into This Task' => 'Объединить дубликаты с данной задачей',
      'Tasks to Close and Merge' => 'Задачи для закрытия и объединения',
      'Close and Merge Selected Tasks' => 'Закрыть и объединить выбранные задачи',
      'Create Subtask' => 'Создать подзадачу',
      'Edit Blocking Tasks' => 'Редактировать блокирующие задачи',
      'Automatically Subscribed' => 'Автоматически подписан',
      'Unsubscribe' => 'Отписаться',
      'Subscribe' => 'Подписаться',
      'Start Tracking Time' => 'Начать отслеживание времени',
      'What time did you start working?' => 'Когда вы начали работать?',
      'Award Token' => 'Наградить значком',
      'Give Token' => 'Дать значок',
      'New task created. Create another?' => 'Новая задача создана. Создать другую?',
      'Similar Task' => 'Похожая задача',
      'Empty Task' => 'Пустая задача',
      'Older changes are hidden. ' => 'Старые изменения скрыты.',
      'Show older changes.' => 'Отобразить старые изменения.',
      "Additional Hashtags" => "Дополнительные хештеги",
      "Joinable By" => "Доступно для вступления для",
      "Project Members" => "Члены проекта",
      "Select Project" => "Выбрать проект",
      "Members Of" => "Члены",
      "Public (No Login Required)" => "Публичный (не требуется авторизации)",
      "Object Policies" => "Политики объекта",
      "Members of Project..." => "Члены проекта...",
      "Other Project..." => "Другой проект...",
      "Choose Project Icon" => "Выбрать иконку проекта",
      'Reference: Advanced Functions' => 'Справка: расширенные функции',
      'User Guide: Search' => 'Справка: поиск',
      'Current Viewer' => 'Текущее лицо',
      'Select current viewer.' => 'Выбрать текущее лицо.',

      '%s created this task.' => '%s создал(а) эту задачу',
      '%s renamed this task from %s to %s.' => '%s переименовал(а) эту задачу с %s на %s.',
      '%s closed %s as "%s".' => '%s закрыл(а) %s как "%s".',
      '%s updated the image for %s from %s to %s.' => '%s обновил(а) изображение для %s с %s на %s.',
      '%s lowered the priority of %s from "%s" to "%s".' => '%s понизил(а) приоритет %s с "%s" на "%s".',
      '%s changed the status of %s from "%s" to "%s".' => '%s сменил(а) статус %s с "%s" на "%s".',
      'Weigh In' => 'Взвешивание',
      '%s added a comment.' => '%s написал(а).',
      '%s closed this task as a duplicate.' => '%s закрыл(а) эту задачу как дубликат.',
      '%s closed this task as "%s".' => '%s закрыл(а) эту задачу как "%s".',
      '%s placed this task up for grabs.' => '%s предоставил(а) задачу любому другому желающему.',
      '%s placed %s up for grabs.' => '%s предоставил(а) задачу %s любому другому желающему.',
      '%s assigned this task to %s.' => '%s назначил(а) эту задачу %s.',
      '%s claimed this task.' => '%s взял(а) на себя эту задачу.',
      '%s updated subscribers...' => '%s обновил(а) подписчиков...',
      '%s triaged this task as "%s" priority.' => '%s оценил(а) эту задачу как "%s".',
      '%s removed %s as the assignee of this task.' => '%s удалил(а) %s как исполнителя этой задачи.',
      '%s raised the priority of this task from "%s" to "%s".' => '%s поднял(а) приоритет этой задачи с "%s" до "%s".',
      '%s reopened this task as "%s".' => '%s открыл(а) снова эту задачу как "%s".',
      '%s changed the task status from "%s" to "%s".' => '%s сменил(а) статус задачи с "%s" на "%s"',
      '%s lowered the priority of this task from "%s" to "%s".' => '%s снизил(а) приоритет этой задачи с "%s" на "%s".',
      '%s edited associated projects.' => '%s отредактировал(а) ассоциированные проекты.',
      '%s awarded a token.' => '%s наградил(а) значком.',
      '%s set %s to %s.' => '%s установил(а) %s для %s.',
      '%s edited the task description.' => '%s отредактировал(а) описание задачи.',
      '%s updated the description of %s.' => '%s обновил(а) описание %s',
      '%s changed %s from %s to %s.' => '%s изменил(а) %s с %s на %s.',
      '%s committed %s (authored by %s).' => '%s зафиксировал(а) %s (за авторством %s).',

      // Actions
      'View Herald Transcript'    => 'Показать расшифровку Геральда',
      'Create Notification Rules' => "Создать правила оповещений",
      'Comment'                   => 'Комментарий',
      'Change Status'             => 'Сменить статус',
      'Reassign / Claim'          => 'Переназначить / Взять на себя',
      'Assign / Claim'            => 'Назначить ответственного / Взять на себя',
      'Add CCs'                   => 'Добавить дубликаты',
      'Change Priority'           => 'Сменить приоритет',
      'Associate Projects'        => 'Ассоциированные проекты',
      'Task'                      => 'Задача',
      'Done'                      => "Готово",
      "Edit Favorites"            => "Редактировать изобранное",

      // Diffusion
      'Importing...' => 'Импортируется...',
      'Empty Repository' => 'Пустой репозиторий',
      'Edit Repository' => 'Редактировать репозиторий',
      'This repository does not have any commits yet.' => 'Данный репозиторий не имеет каких-либо фиксаций.',
      'Clone' => 'Склонировать',
      'Type' => 'Тип',
      'Types' => 'Типы',
      'Callsign' => 'Позывной',
      'Update Frequency' => 'Частота обновления',
      'No description provided.' => 'Описание не предоставлено.',
      'Update Now' => 'Обновить сейчас',
      'Repository Active' => 'Репозиторий активен',
      'Found Binary hg' => 'Найти бинарный файл hg',
      'No Working Copy Yet' => 'Нет рабочей копии',
      'Task Daemon Not Running' => 'Фоновая служба обработки задач не запущена',
      'Edit Basic Information' => 'Редактировать основную информацию',
      'Deactivate Repository' => 'Деактивировать репозиторий',
      'Delete Repository' => 'Удалить репозиторий',
      'Edit Policies' => 'Редактировать политики',
      'New Repository' => 'Новый репозиторий',
      'No Commits' => 'Нет коммитов',
      'All Repositories' => 'Все репозитории',
      'Active Repositories' => 'Активные репозитории',
      'Most Recent Commit' => 'Самая последняя фиксация',
      'Creation (Newest First)' => 'Созданию (сначала новые)',
      'Creation (Oldest First)' => 'Созданию (сначала старые)',
      'Name Contains'    => 'Имя содержит',
      'View Push Logs'   => 'Показать логи фиксаций',
      'All Push Logs'    => 'Все логи фиксаций',
      'Push'             => 'Вставка',
      'Pusher'           => 'Вставщик',
      'Pushers'          => 'Вставщики',
      'Repository'       => 'Репозиторий',
      'Add to Dashboard' => 'Добавить на доску',

      // Flags
      'Flag For Later' => 'Пометить флажком на будущее',
      'Remove %s Flag' => 'Удалить %s флаг',
      'Flag %s' => 'Пометить флагом %s',
      'You can flag this %s if you want to remember to look at it later.' => 'Вы можете пометить флажком %s, если желаете изучить это позднее.',
      'Create Flag' => 'Создать флажок',
      'Note' => 'Заметка',
      'Members' => 'Члены',
      'Subprojects' => 'Подроекты',
      'Manage' => 'Управление',
      'Manage Repository' => 'Управление репозиторием',
      'Project History' => 'История проекта',
      'Looks Like' => 'Выглядит как',

      // Feed
      'Feed' => 'События',
      'Notifications' => 'Оповещения',
      'Connected' => 'Подключено',
      'Disconnected' => 'Отключено',
      'You have no notifications.' => 'У вас нет оповещений.',
      'To begin on such a grand journey, requires but just a single step.' => 'Для начала грандиозного путешествия требуется всего лишь один шаг.',
      'Story' => 'История',
      'All Stories' => 'Все события',
      'Notification Server not enabled.' => 'Сервер оповещений неактивен.',
      'Notification Server Issue' => 'Проблема сервера оповещений',
      'Unable to determine server status. This probably means the server is not in great shape. The specific issue encountered was:' =>
       'Не удаётся определить статус сервера. Возможно, это означает, что сервер находится не в лучшей форме. Конкретная проблема:',
      'Notification Server Status' => 'Статус сервера оповещений',
      'Mark All Read' => 'Пометить всё как прочитанное',
      'Really mark all notifications as read?' => 'Точно пометить все оповещения как прочитанные?',
      "You can't ignore your problems forever, you know." => 'Вы не можете игнорировать свои проблемы вечно, вы же знаете.',
      'Send Test Notification' => 'Отправить тестовое оповещение',
      'This is a test notification, sent at %s.' => 'Это тестовое оповещение, отправленное в %s.',
      '%s created %s.' => '%s создал(а) %s.',
      '%s edited %s.' => '%s отредактировал(а) %s.',
      '%s deleted %s.' => '%s удалил(а) %s.',
      '%s set %s to %s on %s.' => '%s установил(а) %s для %s на %s.',
      '%s changed %s from %s to %s on %s.' => '%s изменил(а) %s с %s на %s у %s.',
      '%s renamed %s from %s to %s.' => '%s переименовал(а) %s с %s на %s.',
      'Tasks must have a title.' => 'Задачи должны иметь заголовок.',

      // Diffusion
      'Host and Browse Repositories' => 'Хранение и просмотр репозиториев',

      // Audit
      'Browse and Audit Commits' => 'Просмотр и аудит фиксаций',

      // Projects
      'Visible' => 'Видимый',
      'Add Column' => 'Добавить колонку',
      'Create Column' => 'Создать колонку',
      'Reorder Columns' => 'Пересортировать колонки',
      'Show Hidden Columns' => 'Показать скрытые колонки',
      'Change Background Color' => 'Сменить цвет фона',
      'Manage Workboard' => 'Управлять доской',
      'Disable Workboard' => 'Отключить доску',
      'Workboard: %s' => 'Доска: %s',
      'Natural' => 'Естественный',
      'Sort by Priority' => 'Сортировать по приоритету',
      'Save as Default' => 'Сохранить по умолчанию',
      'Backlog' => 'Нужно сделать',
      'Batch Edit Tasks...' => 'Обработка задач...',
      'Workboard' => 'Доска задач',
      'Projects' => 'Проекты',
      'Get Organized' => 'Организовать',
      'Create Project' => 'Создать проект',
      'Create New Project' => 'Создать новый проект',
      'Joined' => 'Членство',
      'Watching' => 'Наблюдаемые',
      'Active' => 'Активные',
      '%s created this project.' => '%s создал(а) данный проект.',
      "%s set this project's icon to %s." => '%s установил(а) иконкой этого проекта %s.',
      '%s renamed this project from "%s" to "%s".' => '%s переименовал(а) этот проект с "%s" на "%s".',
      "%s set this project's color to %s." => '%s изменил(а) цвет проекта на %s.',
      "%s changed the default filter for the project workboard." => '%s изменил(а) фильтр по умолчанию на доске проекта.',
      "Edit Details" => "Редактировать детали",
      "Edit Menu" => "Редактировать меню",
      "Edit Picture" => "Редактировать изображение",
      "Archive Project" => "Архивировать проект",
      "Milestone" => "Этап",
      "Milestones" => "Этапы",
      "%s Milestones" => "%s - Этапы",
      "%s Subprojects" => "%s - Подпроекты",
      "Has Milestones" => "Имеет этапы",
      "Milestones can be created for this project." => "Этапы могут быть созданы для данного проекта.",
      "Subprojects can be created for this project." => "Подпроекты могут быть созданы для данного проекта.",
      "This project has no milestones." => "Данный проект не имеет этапов.",
      "This project has no subprojects." => "Данный проект не имеет подпроектов.",
      "None Created" => "Ничего не создано",
      "You can create subprojects for this project." => "Вы можете создать подроекты для данного проекта.",
      "This project has milestones." => "Данный проект имеет этапы.",
      "Subprojects and milestones are only partially implemented." => "Подпроекты и этапы реализованы лишь частично",
      "Create Next Milestone" => "Создать следующий этап",
      "Create Subproject" => "Создать подроект",
      "Create Milestone" => "Создать этап",
      "Subprojects and Milestones" => "Подроекты и этапы",
      "This project does not have any members." => "Данный проект не имеет каких-либо членов.",
      "Watchers" => "Наблюдатели",
      "This project does not have any watchers." => "Данный проект не имеет каких-либо наблюдателей.",
      "Membership" => "Членство",
      "Members and Watchers" => "Участники и наблюдатели",
      "Members of the parent project are members of this project." => "Участники родительского проекта являются в том числе и участниками данного проекта.",
      "Join Project" => "Вступить в проект",
      "Leave Project" => "Покинуть проект",
      "Watch Project" => "Наблюдать за проектом",
      "Disable Mail" => "Отключить оповещения по email",
      "Add Members" => "Добавить участников",
      "Lock Project" => "Заблокировать проект",
      "Members of all subprojects are members of this project." => "Участники всех подпроектов являются членами данного проекта",
      "You can create milestones for this project." => "Вы можете создавать этапы для данного проекта",
      "Has Subprojects" => "Имеет подроекты",
      "This project has subprojects." => "Данный проект имеет подроекты",
      'Warning' => "Предупреждение",
      'Parent Project' => 'Родительский проект',
      'Mail to Members' => 'Оповестить участников по почте',
      'You will receive mail that is sent to project members.' => 'Вы получите письмо, которое будет отправлено участникам проекта.',
      '%s added a comment to %s.' => '%s добавил(а) комментарий к %s.',
      '%s edited the description of %s.' => '%s отредактировал(а) описание %s.',
      '%s edited the content of %s.' => '%s отредактировал(а) контент %s.',
      '%s awarded %s a %s token.' => '%s наградил(а) %s значком %s.',
      '%s triaged %s as "%s" priority.' => '%s оценил(а) приоритет %s как "%s".',
      '%s changed the visibility for %s.' => '%s изменил(а) видимость для %s.',
      '%s changed the name of %s from %s to %s.' => '%s изменил(а) имя %s с %s на %s.',
      '%s changed the start date of %s from %s to %s.' => '%s изменил(а) начало даты %s с %s на %s.',
      '%s set the icon for %s to %s.' => '%s сменил(а) иконку для %s на %s.',
      '%s set the color for %s to %s.' => '%s сменил(а) цвет иконки для %s на %s.',
      '%s renamed %s from "%s" to "%s".' => '%s переименовал(а) %s с "%s" на "%s".',
      '%s created this object with visibility "%s".' => '%s создал(а) данный проект с видимостью "%s".',
      '%s created this object with edit policy "%s".' => '%s создал(а) данный проект с политикой редактирования "%s".',
      '%s created this object with join policy "%s".' => '%s создал(а) данный проект с политикой присоединения "%s".',
      '%s created this object in space %s.' => '%s создал(а) этот объект в пространстве %s.',
      '%s shifted this object from the %s space to the %s space.' => '%s переместил(а) данный объект из пространства %s в пространство %s.',
      "%s updated this project's image from %s to %s." => "%s обновил(а) изображение данного проекта с %s на %s.",
      "Edit Column" => "Редактировать колонку",
      "Hide Column" => "Скрыть колонку",
      "Point Limit" => "Лимит элементов",
      "Maximum number of points of tasks allowed in the column." => "Максимальное количество элементов, допустимых для пребывания в колонке.",
      "Save Column" => "Сохранить колонку",
      "Edit %s" => "Редактирование / %s",
      "Hashtags" => "Хештеги",
      "You are a member and you will receive mail that is sent to all project members." =>
        "Вы являетесь участником, и вы будете получать письма, которые будут получать все участники проекта.",
      'Normal Project' => 'Обычный проект',
      'Users with access may join and leave this project.' => 'Пользователи с доступом могут присоединиться и выйти из данного проекта.',

      // Profiles
      'User Accounts and Profiles' => 'Аккаунт пользователя и профили',
      'Enabled' => 'Активно',
      'User' => 'Живой человек',
      'User Account' => ' Аккаунт пользователя',
      'People' => 'Люди',
      'User Since' => 'Пользователь с',
      'Roles' => 'Роли',
      'Not Approved' => 'Неодобренный',
      'Unverified' => 'Неподтверждённый',
      'Verified' => 'Подтверждённый',
      'Available' => 'Доступен',
      'Edit Profile' => 'Редактировать профиль',
      'Edit Profile Picture' => 'Редактировать изображение профиля',
      'Remove Administrator' => 'Удалить администратора',
      'Change Username' => 'Изменить имя пользователя',
      'Disable User' => 'Отключить пользователя',
      'Delete User' => 'Удалить пользователя',
      'Send Welcome Email' => 'Отправить письмо-приглашение',
      'Basic Policies' => 'Базовые политики',
      'All Users' => 'Все пользователи',
      'Administrators' => 'Администраторы',
      'No One' => 'Никого',
      'User Policies' => 'Политики пользователей',
      'Advanced' => 'Расширенные',
      'Custom Policy...' => 'Пользовательская политика...',
      'User Details' => 'Информация о пользователе',
      'User has not been awarded any badges.' => 'У данного пользователя ещё нет каких-либо заслуг.',

      // Conpherence
      'Conpherence Thread' => 'Поток чата',
      'Chat with Others' => 'Чат с другими',
      'Send Messages' => 'Отправить сообщений',
      'Message' => 'Сообщение',
      'Messages' => 'Сообщения',
      'You have no messages.' => 'У вас нет сообщений',
      'To' => 'Для',
      'Participants' => 'Участники',
      'Add Participants' => 'Добавить участников',
      'Email me every update.' => 'Оповещать по почте при каждом обновлении.',
      'Notifications only.' => 'Только оповещения.',
      'Send Message' => 'Отправить сообщение',
      'New Message' => 'Новое сообщение',
      'Join a Room' => 'Присоединиться к комнате',
      'Create a Room' => 'Создать комнату',
      'No Messages' => 'Сообщений нет',
      'Messages: %d' => 'Сообщения: %d',
      'Last updated %s' => 'Обновлено в последний раз %s',
      '%s named this room "%s".' => '%s назвал(а) эту комнату "%s".',
      '%s changed the edit policy of this room from "%s" to "%s".' => '%s изменил(а) политику редактирования этой комнаты с "%s" на "%s".',
      '%s changed the visibility of this room from "%s" to "%s".' => '%s изменил(а) политику видимости этой комнаты с "%s" на "%s".',
      'Rooms' => 'Комнаты',
      'Persistent Chat' => 'Постоянный чат',
      'Send a message...' => 'Отправить сообщение...',
      'Edit Room' => 'Редактировать комнату',
      'View in Conpherence' => 'Показать в Конференции',
      'Hide Window' => 'Скрыть окно',

      // Paste
      'Create Paste' => 'Добавить кусочек кода',

      // Phriction
      'Last Author' => 'Последний автор',
      'Updated %s' => 'Обновлено %s',
      'Table of Contents' => 'Таблица с информацией',
      'Contents' => 'Содержание',
      'Document Hierarchy' => 'Иерархия документа',
      'New Document' => 'Новый документ',
      'Edit Document' => 'Редактировать документ',
      'Move Document' => 'Переместить документ',
      'View History' => 'История изменений',
      'Delete' => 'Удалить',
      'Delete Document' => 'Удалить документ',
      'Delete Document?' => 'Удалить документ?',
      'Current Path' => 'Текущий путь',
      'New Path' => 'Новый путь',
      'Path' => 'Путь',
      'Content' => 'Контент',
      'Edit Notes' => 'Заметки',
      'To view a wiki document, you must also be able to view all of its parents.' =>
        'Чтобы посмотреть вики-документ, вы должны также иметь возможность видеть всех его родителей.',
      'To edit a wiki document, you must also be able to view all of its parents.' => 
        'Чтобы редактировать документ вики, вы также должны иметь возможность видеть всех его родителей.',
      'Printable Page' => 'Версия для печати',
      'Index' => 'Индекс',
      'Create a new document at' => 'Создать документ в',

      // Calendar
      'Event' => 'Событие',
      'Calendar Event' => 'Календарное событие',
      'Calendar' => 'Календарь',
      'From %s to %s' => 'С %s на %s',
      'Create Event' => 'Создать событие',
      'Create Private Event' => 'Создать приватное событие',
      'Create Public Event' => 'Создать публичное событие',
      'Choose Icon...' => 'Выберите иконку...',
      'Choose Calendar Event Icon' => 'Выбрать иконку календарного события',
      'Edit Event' => 'Редактировать событие',
      'Join Event' => 'Присоединиться к событию',
      'Decline' => 'Отказаться',
      'Accept' => 'Принять',
      'Would you like to join this event?' => 'Вы желаете присоединиться к данному событию?',
      'Decline Event' => 'Отказаться от события',
      'Cancel Event' => 'Отменить событие',
      'You can always reinstate the event later.' => 'Вы всегда можете восстановить событие позднее.',
      "Don't Cancel Event" => 'Не отменяйте событие',
      'Reinstate Event' => 'Восстановить событие',
      'Reinstate this event?' => 'Восстановить данное событие?',
      "Don't Reinstate Event" => 'Не восстанавливать событие',
      'Clear sailing ahead.' => 'Плывём далее.',
      'No events found.' => 'Не найдено событий.',
      'My Events' => 'Мои события',
      'End' => 'Конец',
      'Starts' => 'Начинается',
      'Ends' => 'Заканчивается',
      'Invitees' => 'Приглашения',
      'All Day Event' => 'Полнодневное событие',
      'Month View' => 'Режим просмотра месяца',
      'Day View' => 'Режим просмотра дня',
      'Upcoming Events' => 'Грядущие события',
      'All Events' => 'Все события',
      'Created By' => 'Создано от',
      'Invited' => 'Приглашён',
      'Occurs After' => 'Произойдёт после',
      'Occurs Before' => 'Произойдёт до',
      'Show only upcoming events.' => 'Показать только грядущие события',
      'Cancelled Events' => 'Отменённые события',
      'Display Options' => 'Параметры отображения',
      'Add To Plate' => 'Добавить на панель...',
      '%s created this event.' => '%s создал(а) данное событие.',
      '%s edited this %s.' => '%s отредактировал(а) %s.',
      '%s changed the name of this event from %s to %s.' => '%s изменил(а) название этого события с %s на %s um.',
      '%s made this an all day event.' => '%s сделал(а) его полнодневным событием.',
      '%s converted this from an all day event.' => '%s сконвертировал(а) это из полнодневного события.',
      "%s updated the event's description." =>' %s обновил(а) описание события',
      '%s invited %s.' => '%s пригласил(а) %s.',
      '%s has joined this event.' => '%s присоединился(-лась) к данному событию.',
      '%s is attending this event.' => '%s посещает данное событие.',
      '%s is attending %s.' => '%s посещает событие %s.',
      'Would you like to decline this event?' => 'Вы желаетесь отказаться от данного события?',
      '%s has declined this event.' => '%s отказался(-лась) от данного события.',
      '%s has declined %s.' => '%s отказался(-лась) от события %s.',
      '%s cancelled this event.' => '%s отменил(а) данное событие.',
      '%s cancelled %s.' => '%s отменил(а) событие %s.',
      '%s reinstated this event.' => '%s восстановил(а) данное событие',
      '%s reinstated %s.' => '%s восстановил(а) событие %s',
      '%s edited the end date of this event.' => '%s отредактировал(а) конечную дату данного события.',
      '%s edited the start date of this event.' => '%s отредактировал(а) начальную дату данного события.',
      "%s set this event's icon to %s." => '%s установил(а) иконку этому событию на %s',
      '%s invited %s to %s.' => '%s пригласил(а) %s в %s.',
      '%s made %s an all day event.' => '%s сделал(а) %s полнодневным событием.',
      '%s converted %s from an all day event.' => '%s сконвертировал(а) %s из полнодневного события',
      
      // Harbormaster
      'All Buildables' => 'Все собираемые',
      'Buildable %d' => 'Собираемый %d',
      'Buildable' => 'Собираемый',
      'Builds' => 'Сборки',
      'Browse Builds' => 'Смотреть сборки',
      'Build %d' => 'Сборка %d',
      'My Builds' => 'Мои сборки',
      'All Builds' => 'Все сборки',
      'Waiting' => 'Ожидающие',
      'Completed' => 'Завершённые',
      'No builds found.' => 'Сборок не найдено.',

      // Files
      'Files' => 'Файлы',
      'Store and Share Files' => 'Хранение и распространение файлов',
      'Drop Files to Upload' => 'Бросьте файлы для загрузки',
      'Image' => 'Изображение',
      'Countdown to Events' => 'Обратный отсчёт для событий',

      // Settings
      'Settings' => 'Настройки',
      'Edit Settings' => 'Редактировать настройки',
      'Save Preferences' => 'Сохранить настройки',
      'Save Account Settings' => 'Сохранить настройки аккаунта',
      'Account Settings' => "Настройки аккаунта",
      'Account' => 'Аккаунт',
      'Translation' => 'Перевод',
      'Pronoun' => 'Местоимение',
      '%s updated their profile' => '%s обновили свой профиль',
      '%s updated his profile' => '%s обновил свой профиль',
      '%s updated her profile' => '%s обновила свой профиль',
      'Date and Time Settings' => 'Настройки даты и времени',
      'Timezone' => 'Временная зона',
      'Time-of-Day Format' => 'Формат времени дня',
      'Format used when rendering a time of day.' => 'Формат, который используется при рендеринге времени дня.',
      'Date Format' => 'Формат даты',
      'Format used when rendering a date.' => 'Формат, который используется для рендеринга даты.',
      'European (28-02-2000)' => 'Европейский (28-02-2000)',
      'Week Starts On' => 'Неделя начинается с',
      'Calendar weeks will start with this day.' => 'Календарные недели начинаются с этого дня.',
      '12-hour (2:34 PM)' => '12-часовой (2:34 PM)',
      '24-hour (14:34)' => '24-часовой (14:34)',

       // Config
      'Configure Phabricator' => 'Настроить Phabricator',

      // 404
      'Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.' => 'Не останавливайтесь в прошлом, не мечтайте о будущем, сосредоточьте ум на настоящем моменте',
      'Focus' => 'Фокус',

      // Auth
      'Login to Phabricator' => 'Войти в Phabricator',
      'Username or Email' => 'Имя пользователя или Email',
      'Password' => 'Пароль',
      'Forgot your password?' => 'Забыли свой пароль?',
      'Register New Account' => 'Зарегистрировать новый аккаунт',
      'Phabricator Username' => 'Имя пользователя в Phabricator',
      'Real Name' => 'Реальное имя',
      'Confirm Password' => 'Подтвердите пароль',
      'Minimum length of %d characters.' => [ 'Минимальная длина - %d символ.', 'Минимальная длина - %d символа.', 'Минимальная длина - %d символов.' ],
      'Register Phabricator Account' => 'Зарегистрировать аккаунт в Phabricator',
      'Login' => 'Войти',
      'Log out of Phabricator?' => 'Выйти из Phabricator\'а?',
      'Are you sure you want to log out?' => 'Вы уверены, что желаете выйти?',
      'Log Out' => 'Выйти',
      'Logout' => 'Выйти',

      // Date/Time
      'Date' => 'Дата',
      'Time' => 'Время',
      'Date and Time' => 'Дата и время',

      // Days
      'MTWTFSS' => 'ПВСЧПСВ',
      'Mon' => 'Пн',
      'Tue' => 'Вт',
      'Wed' => 'Ср',
      'Thu' => 'Чт',
      'Fri' => 'Пт',
      'Sat' => 'Сб',
      'Sun' => 'Вс',

      'Monday'    => 'Понедельник',
      'Tuesday'   => 'Вторник',
      'Wednesday' => 'Среда',
      'Thursday'  => 'Четверг',
      'Friday'    => 'Пятница',
      'Saturday'  => 'Суббота',
      'Sunday'    => 'Воскресенье',
      'Yesterday' => 'Вчера',
      'Today'     => 'Сегодня',
      'Tomorrow'  => 'Завтра',

      // Months
      'Jan' => 'Янв',
      'Feb' => 'Фев',
      'Mar' => 'Мар',
      'Apr' => 'Апр',
      'May' => 'Май',
      'Jun' => 'Июн',
      'Jul' => 'Июл',
      'Aug' => 'Авг',
      'Sep' => 'Сен',
      'Oct' => 'Окт',
      'Nov' => 'Ноя',
      'Dec' => 'Дек',

      'January'    => 'Январь',
      'February'   => 'Февраль',
      'March'      => 'Март',
      'April'      => 'Апрель',
      'May'        => 'Май',
      'June'       => 'Июнь',
      'July'       => 'Июль',
      'August'     => 'Август',
      'September'  => 'Сентябрь',
      'October'    => 'Октябрь',
      'November'   => 'Ноябрь',
      'December'   => 'Декабрь',

      'Query Errors' => 'Ошибки запроса',
      '"%s" date can not be parsed.' => 'Дата в поле "%s" не может быть обработана',
      '"%s" must be a date before "%s".' => 'Поле "%s" должно быть датой до "%s".',
      
      // Policies
      'Policy Details: %s' => 'Детали политики: %s',
      'Special Rules' => 'Специальные правила',
      'This object has special rules which override normal object policy rules:' => 
        'Этот объект имеет специальные правила, которые переопределяют обычные правила политики объектов:',
      'Object Policy' => 'Политика объекта',
      'Can View' => 'Могут видеть',
      'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' =>
        'Это означает, что эти пользователи могут выполнить это действие, если они сначала пройдут все проверки, описанные выше:',
      'Logged in users can take this action.' => 'Авторизованные пользователи могут выполнить это действие.',
      'Required Capabilities on Other Objects' => 'Необходимые возможности для других объектов',
      'To access this object, users must have first have access capabilities on these other objects:' =>
        'Чтобы получить доступ к этому объекту, пользователи должны сначала иметь доступ к следующим объектам:',
      'Members of a project can always view it.' => 'Члены проекта всегда могут видеть его.',
      'Users who can edit a project can always join it.' => 'Пользователи, которые могут редактировать проект, могут всегда его видеть.',
      
      // Mocks
      'Click here, or drag and drop images to add them to the mock.' => 
        'Нажмите здесь или перетащите изображения, чтобы добавить их в макет.',
      'Edit Mock' => 'Редактировать дизайн',
      'Close Mock' => 'Закрыть дизайн',
      'Close Pholio Mock' => 'Закрыть дизайн',
      'This mock will be closed.' => 'Дизайн станет неактивным.',
      'Current Revision' => 'Текущая ревизия',
      'Current Revisions' => 'Текущие ревизии',
      'Mock History' => 'История дизайна',
      'Mock Description' => 'Описание дизайна',
      '%s replaced %s with %s.' => '%s заменил(а) %s на %s.',
      '%s updated images of %s.' => '%s обновил(а) изображения %s.',
    );
  }

}
