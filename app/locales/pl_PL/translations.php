<?php

return array(
    'plural' => function($n) { return $n == 1 ? 0 : ($n%10 >= 2 && $n%10 <= 4 && ($n%100 < 10 || $n%100 >= 20) ? 1 : 2); },
    'attachment' => 'załącznik',
    'When there is nothing to read, redirect me to this page' => 'Gdy nie ma nic do przeczytania, przekieruj mnie na tę stronę',
    'There is nothing new to read, enjoy your favorites articles!' => 'Nie ma nic nowego do przeczytania, ciesz się ulubionymi artykułami!',
    'There is nothing new to read, enjoy your previous readings!' => 'Nie ma nic nowego do przeczytania, ciesz się poprzednimi artykułami!',
    'Immediately' => 'Natychmiast',
    'The feed id is required' => 'Id kanału jest wymagane',
    'The title is required' => 'Tytuł jest wymagany',
    'The site url is required' => 'Url strony jest wymagany',
    'The feed url is required' => 'Url kanału jest wymagany',
    'or' => 'lub',
    'edit' => 'edytuj',
    'cancel' => 'anuluj',
    'Feed URL' => 'URL kanału',
    'Website URL' => 'URL du site web',
    'Title' => 'Tytuł',
    'Edit subscription' => 'Edytuj subskrypcję',
    'Unable to edit your subscription.' => 'Nie można edytować subskrypcji.',
    'Your subscription has been updated.' => 'Twoja subskrypcja została zaktualizowana.',
    'Older items first' => 'Najpierw najstarsze',
    'Most recent first' => 'Najpierw najnowsze',
    'Default sorting order for items' => 'Domyślny porządek sortowania wpisów',
    'This subscription is empty, %sgo back to unread items%s' => 'Ta subskrypcja jest pusta. %sPowróć do nieprzeczytanych%s',
    'sort by date %s(%s)%s' => 'sortuj po dacie %s(%s)%s',
    'most recent first' => 'najpierw najnowsze',
    'older first' => 'najpierw najstarsze',
    'Show only this subscription' => 'Pokaż tylko tę subskrypcję',
    'Go to unread' => 'Przejdź do nieprzeczytanych',
    'Go to bookmarks' => 'Przejdź do zakładek',
    'Go to history' => 'Przejdź do historii',
    'Go to subscriptions' => 'Przejdź do subskrypcji',
    'Go to preferences' => 'Przejdź do preferencji',
    'Bookmarklet' => 'Bookmarklet',
    'Subscribe with Miniflux' => 'Subskrybuj Miniflux',
    'Drag and drop this link to your bookmarks' => 'Przeciągnij i upuść ten link do zakładek',
    'Download full content' => 'Pobierz pełną treść',
    'Downloading full content is slower because Miniflux grab the content from the original website. You should use that for subscriptions that display only a summary. This feature doesn\'t work with all websites.' => 'Pobieranie pełnych treści jest wolniejsze, ponieważ Miniflux przechwytuje ją z oryginalnej strony internetowej. Powinieneś używać tego do subskrypcji, które mają tylko podsumowania. Ta funkcja nie działa ze wszystkimi stronami internetowymi.',
    'API endpoint:' => 'Adres zasobu API:',
    'API username:' => 'Użytkownik API:',
    'API token:' => 'Token API:',
    'Generate new tokens' => 'Wygeneruj nowe tokeny',
    'Bookmark RSS Feed' => 'Dodaj kanał RSS do ulubionych',
    'updated just now' => 'właśnie zaktualizowano',
    'checked at' => 'sprawdzono:',
    'never updated after creation' => 'nigdy nie zaktualizowano po utworzeniu',
    'Subscription disabled' => 'Subskrypcja jest wyłączona',
    'content downloaded' => 'treść pobrana',
    'in progress...' => 'w trakcie…',
    'unable to fetch content' => 'nie można pobrać zawartości',
    'Download content' => 'Pobierz treść',
    'download content' => 'pobierz treść',
    'Help' => 'Pomoc',
    'Theme' => 'Motyw',
    'Items per page' => 'Ilość wpisów na stronę',
    'Previous page' => 'Poprzednia strona',
    'Next page' => 'Następna strona',
    'Do not fetch the content of articles' => 'Nie pobieraj treści arykułów',
    'Remove automatically read items' => 'Usuń automatycznie przeczytane wpisy',
    'Never' => 'Nigdy',
    'After %d day' => array('Po jednym dniu', 'Po %d dniach', 'Po %d dniach'),
    'unread' => 'nieprzeczytane',
    'Unread' => 'Nieprzeczytane',
    'bookmark' => 'zakładka',
    'remove bookmark' => 'usuń zakładkę',
    'bookmarks' => 'zakładki',
    'Bookmarks' => 'Zakładki',
    'Bookmark item' => 'Dodaj do zakładek',
    'No bookmark' => 'Brak zakładki',
    'history' => 'historia',
    'subscriptions' => 'subskrypcje',
    'Subscriptions' => 'Subskrypcje',
    'preferences' => 'preferencje',
    'Preferences' => 'Preferencje',
    'logout' => 'wyloguj',
    'Username' => 'Nazwa użytkownika',
    'Password' => 'Hasło',
    'Confirmation' => 'Potwierdzenie',
    'Language' => 'Język',
    'Save' => 'Zapisz',
    'Database size:' => 'Rozmiar bazy danych:',
    'Optimize the database' => 'Optymalizuj bazę danych',
    '(VACUUM command)' => '(komenda SQL VACUUM)',
    'Download the entire database' => 'Pobierz całą bazę danych',
    '(Gzip compressed Sqlite file)' => '(plik Sqlite skompresowany Gzipem)',
    'Keyboard shortcuts' => 'Skróty klawiszowe',
    'Previous item' => 'Poprzednia pozycja',
    'Next item' => 'Następna pozycja',
    'Mark as read or unread' => 'Odznacz jako przeczytane/nieprzeczytane',
    'Open original link' => 'Otwórz oryginalny link',
    'Open item' => 'Otwórz element',
    'About' => 'O aplikacji',
    'Miniflux version:' => 'Wersja Miniflux:',
    'Nothing to read' => 'Brak wpisów do przeczytania',
    'mark all as read' => 'odznacz wszystkie jako przeczytane',
    'original link' => 'oryginalny link',
    'mark as read' => 'odznacz jako przeczytane',
    'No history' => 'Brak historii',
    'mark as unread' => 'odznacz jako nieprzeczytane',
    'History' => 'Historia',
    'flush all items' => 'Usuń wszystkie wpisy',
    'Item not found' => 'Nie znaleziono wpisu',
    'Next' => 'Następny',
    'Previous' => 'Poprzedni',
    'Sign in' => 'Zaloguj',
    'feeds' => 'kanały',
    'add' => 'dodaj',
    'import' => 'importuj',
    'export' => 'eksportuj',
    'OPML Import' => 'Import OPML',
    'OPML file' => 'Plik OPML',
    'Import' => 'Importuj',
    'refresh all' => 'odśwież wszystkie',
    'No subscription' => 'Brak subskrypcji',
    'remove' => 'usuń',
    'Remove' => 'Usuń',
    'refresh' => 'odśwież',
    'New subscription' => 'Nowa subskrypcja',
    'Website or Feed URL' => 'URL strony lub kanału',
    'Add' => 'Dodaj',
    'http://website/' => 'https://jakaś.domena/rss',
    'Official website:' => 'Oficjalna strona internetowa:',
    'Bad username or password' => 'Niepoprawna nazwa lub hasło',
    'Unable to update your preferences.' => 'Nie udało się zaktualizować Twoich preferencji.',
    'Your preferences are updated.' => 'Twoje preferencje zostały zaktualizowane.',
    'Unable to import your OPML file.' => 'Nie udało się zaimportować Twojego pliku OPML.',
    'Your feeds have been imported.' => 'Twój kanał został zaimportowany.',
    'Unable to find a subscription.' => 'Nie udało sie znaleźć subskrypcji.',
    'Subscription added successfully.' => 'Subskrypcja utworzona prawidłowo.',
    'Your subscriptions are updated' => 'Twoje subskrypcje są aktualne',
    'Unable to remove this subscription.' => 'Nie udało się usunać subskrypcji.',
    'This subscription has been removed successfully.' => 'Ta subskrypcja została pomyślnie usunięta.',
    'The user name is required' => 'Nazwa użytkownika jest wymagana',
    'The maximum length is 50 characters' => 'Maksymalna długość to 50 znaków',
    'The password is required' => 'Hasło jest wymagane',
    'The minimum length is 6 characters' => 'Minimalna długość to 6 znaków',
    'The confirmation is required' => 'Potwierdzenie jest wymagane',
    'Passwords don\'t match' => 'Hasła nie są takie same',
    'Do you really want to remove these items from your history?' => 'Czy na pewno chcesz usunąć te wpisy z historii?',
    'Do you really want to remove this subscription: "%s"?' => 'Czy na pewno chcesz usunąć tę subskrypcję: « %s » ?',
    'Nothing to read, do you want to %supdate your subscriptions%s?' => 'Brak wpisów do przeczytania. Czy chcesz %sodświeżyć subskrypcje%s?',
    'Show help' => 'Pokaż pomoc',
    'Close help' => 'Zamknij pomox',
    '%d second ago' => array('sekundę temu', '%d sekundy temu', '%d sekund temu'),
    '%d minute ago' => array('minutę temu', '%d minuty temu', '%d minut temu'),
    '%d hour ago' => array('godzinę temu', '%d godziny temu', '%d godzin temu'),
    '%d day ago' => array('wczoraj', '%d dni temu', '%d dni temu'),
    '%d week ago' => array('tydzień temu', '%d tygodnie temu', '%d tygodni temu'),
    '%d month ago' => array('miesiąc temu', '%d miesięce temu', '%d miesiący temu'),
    'Timezone' => 'Strefa czasowa',
    'Update all subscriptions' => 'Zaktualizuj wszystkie subskrypcje',
    'Remember Me' => 'Zapamiętaj mnie',
    'Display items on lists' => 'Sposób wyświetlania wpisów na listach',
    'Summaries' => 'Streszczenia',
    'Full contents' => 'Pełna treść',
    'Force RTL mode (Right-to-left language)' => 'Wymuszenie trybu RTL (od prawej do lewej)',
    'Activated' => 'Aktywowany',
    'Remove this feed' => 'Usuń ten kanał',
    'Miniflux' => 'Miniflux',
    'mini%sflux%s' => 'mini%sflux%s',
    'Advanced' => 'Zaawansowane',
    'Documentation' => 'Dokumentacja',
    'Installation instructions' => 'Instrukcja instalacji',
    'Upgrade to a new version' => 'Aktualizacja do nowszej wersji',
    'Cronjob' => 'Zadania w tle',
    'Advanced configuration' => 'Konfiguracja zaawansowana',
    'Full article download' => 'Pobieranie cały artykułów',
    'Themes' => 'Motywy',
    'Json-RPC API' => 'API Json-RPC',
    'Fever API' => 'API Fever',
    'Translations' => 'Tłumaczenia',
    'Run Miniflux with Docker' => 'Uruchom Miniflux z Dockerem',
    'FAQ' => 'Często zadawane pytania (FAQ)',
    'help' => 'pomoc',
    'api' => 'api',
    'about' => 'o aplikacji',
    'database' => 'baza danych',
    'Miniflux API' => 'API Miniflux',
    'menu' => 'menu',
    'Default' => 'Domyślny',
    'Value required' => 'Wartość wymagana',
    'Must be an integer' => 'Musi być liczbą całkowitą',
    'Remove automatically unread items' => 'Usuń automatycznie nieprzeczytane wpisy',
    'Toggle RTL mode' => 'Przełącz tryb RTL',
    'external services' => 'zewnętrzne usługi',
    'Send bookmarks to Pinboard' => 'Wyślij zakładki do Pinboard',
    'Pinboard API token' => 'Token API Pinboard',
    'Pinboard tags' => 'Tagi Pinboard',
    'Instapaper username' => 'Nazwa użytkownika Instapaper',
    'Instapaper password' => 'Hasło Instapaper',
    'Instapaper' => 'Instapaper',
    'Pinboard' => 'Pinboard',
    'Send bookmarks to Instapaper' => 'Wyślij zakładki do Instapaper',
    'Authentication' => 'Uwierzytelnienie',
    'Reading' => 'Czytanie',
    'Application' => 'Aplikacja',
    'Enable image proxy' => 'Włącz proxy dla obrazków',
    'Avoid mixed content warnings with HTTPS' => 'Unikaj ostrzeżeń o mieszaniu treści z HTTPS',
    'Download favicons' => 'Pobieraj favikony',
    'general' => 'ogólne',
    'Refresh interval in minutes for unread counter' => 'Interwał odświeżania w minutach dla nieprzeczytanych',
    'Original link marks article as read' => 'Oryginalny link odznacza wpis jako przeczytany',
    'Cloak the image referrer' => 'Ukryj referencję obrazka',
    'This subscription already exists.' => 'Ta subskrypcja już istnieje.',
    'Connection timeout.' => 'Czas połącznia minął.',
    'Feed is malformed.' => 'Plik XML kanału jest nieprawidłowy.',
    'Invalid SSL certificate.' => 'Niepoprawny certyfikat SSL.',
    'Maximum number of HTTP redirection exceeded.' => 'Przekroczono maksymalną ilość przekierowań.',
    'The content size exceeds to maximum allowed size.' => 'Rozmiar treści przekracza dopuszczalny rozmiar.',
    'Unable to detect the feed format.' => 'Nie udało się rozpoznać formatu kanału.',
    'add a new group' => 'dodaj nową grupę',
    'Groups' => 'Grupy',
    'Back to the group' => 'Powróć do grupy',
    'view' => 'zobacz',
    'Item title links to' => 'Tytuł wpisu przenosi do',
    'Original' => 'Oryginał',
    'Last Login' => 'Ostatnie logowanie',
    'Search' => 'Szukaj',
    'There are no results for your search' => 'Brak wyników wyszukiwania',
    'Send bookmarks to Wallabag' => 'Wyślij zakładki do Wallabag',
    'Wallabag username' => 'Nazwa użytkownika Wallabag',
    'Wallabag password' => 'Hasło Wallabag',
    'An error occurred during the last check: "%s".' => 'Wystąpił błąd podczas ostatniego sprawdzania: « %s ».',
    'User Profile' => 'Profil użytkownika',
    'Users' => 'Użytkownicy',
    'New User' => 'Nowy użytkownik',
    'New user created successfully.' => 'Nowy użytkownik utworzony pomyślnie.',
    'Unable to create this user.' => 'Nie udało się utworzyć użytkownika.',
    'Edit User' => 'Edytuj użytkownika',
    'User modified successfully.' => 'Uzytkownik zmodyfikowany pomyślnie.',
    'Unable to edit this user.' => 'Nie udało się zaktualizować użytkownika.',
    'Remove User' => 'usuń użytkownika',
    'Not allowed to fetch feed.' => 'Brak uprawnień do pobrania kanału',
    'Unable to save this subscription in the database.' => 'Nie udało się zapisać subskrypcji w bazie danych.',
    'Titles' => 'Tytuły',
    'profile' => 'profil',
    'users' => 'użytkownicy',
    'Cronjob URL' => 'Adres URL zadań w tle (cronjob)',
    'Do you really want to remove this user: "%s"?' => 'Czy na pewno chcesz usunąć tego użytkownika : « %s » ?',
    'Administrator' => 'Administrator',
    '%e %B %Y %k:%M' => '%e.%m.%Y %k:%M',
    'Wallabag' => 'Wallabag',
    'Wallabag URL' => 'Adres URL Wallabag',
    'Wallabag Client ID' => 'ID klienta w Wallbag',
    'Wallabag Client Secret' => 'Sekret klienta w Wallabag',
    'Action' => 'Akcje',
    'Yes' => 'Tak',
    'No' => 'Nie',
    'Edit' => 'Edytuj',
    'The user id required' => 'Id użytkownika jest wymagane',
    'The username must be unique' => 'Nazwa użytkownika musi być unikalna',
    'Current Password' => 'Obecne hasło',
    'New Password' => 'Nowe hasło',
    'Wrong password' => 'Niepoprawne hasło',
    'Duplicated feed' => 'Zduplikowany kanał',
    'This group has been removed successfully.' => 'Grupa została utworzona pomyślnie.',
    'Unable to remove this group.' => 'Nie udało się usunąć grupy.',
    'Edit group' => 'Edytuj grupę',
    'Group updated successfully.' => 'Grupa została zaktualizowana pomyślnie.',
    'Unable to edit this group.' => 'Nie udało się zaktualizować grupy.',
    'groups' => 'grupy',
    'There is no group.' => 'Brak grup.',
    'Do you really want to remove this group: "%s"?' => 'Czy na pewno chcesz usunąć grupę: « %s » ?',
    'This field is required' => 'To pole jest wymagane',
    'This value must be an integer' => 'Ta wartość musi być liczbą całkowitą',
    'This text is too long (max. %d)' => 'Ten tekst jest za długi (maks %d znaków)',
    'Mark all unread items as read' => 'Odznacz wszystkie nieprzeczytane jako przeczytane',
    'Do not redirect me' => 'Nie przekierowuj mnie',
    'Last checked: ' => 'Ostatnie sprawdzenie: ',
    'Last modified: ' => 'Ostatnia modyfikacja: ',
    'Expiration date: ' => 'Termin ważności: ',
    'ETag: ' => 'ETag:',
    'None' => 'brak',
    'Last parsing error: ' => 'Ostatni błąd parsowania: ',
    'Ignore expiration date' => 'Zignoruj termin ważności',
    'Mark bookmarks as unread' => 'Odznacz zakładki jako nieprzeczytane',
    'Shaarli' => 'Shaarli',
    'Send bookmarks to Shaarli' => 'Wyślij zakładki do Shaarli',
    'Shaarli URL' => 'Adres URL Shaarli',
    'Shaarli secret' => 'Sekret Shaarli',
    'Shaarli tags' => 'Tagi Shaarli',
    'Private Bookmarks' => 'Prywatne zakładki',
    // 'mark page as read' => '',
    // 'pin' => '',
    // 'unpin' => '',
    // 'pinned' => '',
    // 'Pinned' => '',
    // 'No pinned items' => '',
);
