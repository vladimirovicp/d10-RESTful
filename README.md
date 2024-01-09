# d10-RESTful

User name: admin  User password: admin

> * **Drupal 10.2.1**
> * **PHP 8.1.8**


## ddev comands
> * **Экспорт:** ddev export-db --file=./private/db/current.sql.gz
> * **Импорт:** ddev import-db --src=./private/db/current.sql.gz
> * **Удалить все таблицы базы данных (очистить базу данных):** drush sql-drop


## ddev drush comands
> * **Чистка кэша:** ddev drush cr
> * **Экспорт всех настроек:** ddev drush cex -y
> * **Откат конфигурации:** ddev drush cim -y
> * **Экспорт переводов:** ddev drush locale:export en > config/locale/en.po && ddev drush locale:export ru > config/locale/ru.po
> * **Импорт переводов:**  ddev drush locale:import en > config/locale/en.po && ddev drush locale:import ru > config/locale/ru.po
