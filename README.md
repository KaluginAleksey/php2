## 7. "Новые" возможности PHP
1. Примените генератор в классе Db. У вас уже есть метод, называющийся как-то вроде query(), который использует fetchAll() из PDO. Сделайте метод-копию queryEach(), который будет генерировать запись за записью из ответа сервера базы данных, не делая fetchAll(), а построчно исполняя fetch(). Проверьте работу этого метода, использовав его в программе.
2. Создайте класс AdminDataTable.
   1. Его конструктор принимает на вход массив моделей (это будут строки таблицы) и массив функций (это будут столбцы)
   2. Метод render() отображает таблицу следующим образом:
      1. Для каждой записи (это строка таблицы) последовательно вызываются функции (каждая - это столбец таблицы), в них передается запись (модель)
      2. То, что вернула функция - становится значением ячейки таблицы
3. То, что вернула функция - становится значением ячейки таблицы