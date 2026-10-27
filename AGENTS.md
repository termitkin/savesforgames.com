# AGENTS.md

Комментарии в коде и сообщения коммитов — на русском. Текст на страницах сайта — на английском.

## Что это

Классическая тема WordPress `savesforgames-v4-bem` (см. заголовок `style.css`) для savesforgames.com —
сайта с сохранениями (savegame) для игр. Корень репозитория = корень темы
(`wp-content/themes/<тема>/`). Ядро WordPress, плагины, аплоады и база в репозиторий не входят.

Стек: PHP-шаблоны WordPress, HTML5, CSS3, инлайновый JS, классы по BEM. Нет `package.json`,
`composer.json`, сборщика, линтера и тестов — файлы отдаются как есть. Не добавляй шаг сборки и
не предлагай команды, которых в репозитории нет.

## Проверка изменений

- Локально PHP не установлен — сайт не поднять и шаблон не отрендерить; поведение проверяется
  чтением кода.
- Синтаксис PHP проверяет CI (Gitea Actions, `.gitea/workflows/ci.yml`): `php -l` по всем `*.php`
  в контейнере `php:8.3-cli`. Локально то же самое при наличии docker:

  ```sh
  docker run --rm -v "$PWD":/app -w /app php:8.3-cli \
    sh -c 'find . -path ./.git -prune -o -name "*.php" -print0 | xargs -0 -n1 php -l'
  ```

## Деплой

Автодеплоя нет. Результат работы — коммит и пуш в `master` (источник правды — Gitea, GitHub —
зеркало). `.git-ftp-ignore` остался от выкладки через `git-ftp` и перечисляет то, что не должно
попасть на хостинг (`.git`, `.github`, `.git-ftp.log`, `readme.md` и т.п.).

## Архитектура

Стандартная иерархия шаблонов WordPress, без своих типов записей и без `template-parts`:

- `header.php` — открывает `<html>`, содержит **весь CSS темы** одним инлайновым `<style>`,
  инлайн-скрипт выбора темы оформления и липкую шапку с поиском. `style.css` — только
  WordPress-заголовок темы (Theme Name/URI/Version), активных стилей в нём нет.
- `footer.php` — разметка футера, переключатель темы light/dark/auto со своим скриптом и сниппет
  Google Analytics (gtag).
- `index.php` — лента/архив постов с пагинацией через `paginate_links()`.
- `single.php` — пост. Читает post meta с ключом `'1'` (именно `'1'`, не опечатка): если задано,
  выводит ссылку «download trainers» на `//trainersforgames.com<meta>`; затем `comments_template()`.
- `sidebar.php` — захардкоженный список «Most Popular Savegames» в `<!--noindex-->`, не виджеты.
- `comments.php` — стандартные `wp_list_comments()` / `comment_form()`; текстовый домен —
  `'twentyseventeen'` (наследие).
- `404.php` + `404-error/404.jpg` — страница «не найдено», использует `get_header()`/`get_footer()`.
- `functions.php` — плоский список сниппетов-хуков: чистка `wp_head` (RSD, generator, feeds,
  oEmbed/REST, emoji, dns-prefetch), свой `rel="canonical"` (`rel_canonical_nabtron`), метаданные
  AMP `NewsArticle`, снятие CSS плагина Post Views Counter и dashicons, перенос jQuery в футер,
  разрешение загрузки `.rar`, правки формы комментариев (убраны url и email, поле comment внизу,
  дата «X ago»). `remove_admin_bar()` объявлена, но ни на что не повешена.

### Тема оформления (light / dark / auto)

Только CSS-переменные в инлайновом `<style>` из `header.php`: светлые значения на `:root`, тёмные —
в `@media (prefers-color-scheme: dark)` и в `[data-theme-name='dark']`. Отдельного тёмного
стилевого файла нет. Логика в трёх местах, менять согласованно:

1. `header.php`, скрипт в `<head>` — читает `localStorage['theme-name']` (по умолчанию `auto`) и
   ставит `data-theme-name` на `<html>` до отрисовки.
2. `header.php`, CSS — переменные и переопределения.
3. `footer.php` — кнопки `.theme-switcher` с `data-theme-name`, обработчик клика, запись в
   `localStorage`.

Основной брейкпоинт — `@media (min-width: 720px)`.

### Связь с trainersforgames.com

Сайт-компаньон (тема в отдельном репозитории `trainersforgames.com`, близкая по устройству): ссылки на него
зашиты в футере и в блоке «download trainers» в `single.php`.

## Конвенции

- BEM в записи с одиночным подчёркиванием для модификатора: `link_size_big`.
- Внешние ссылки — `target="_blank" rel="nofollow noopener"`.
- Отступы: следуй правимому файлу (в `functions.php`, `comments.php`, `sidebar.php` — табы,
  в остальных шаблонах — пробелы).
