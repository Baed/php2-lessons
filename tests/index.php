
<h1>1 урок</h1>
<p>Добавление подстановок</p>
<a href="test1.php">Выбрать всех</a><br />
<a href="test1.php?id=1">Выбрать с id=1</a><br />
<a href="test1.php?id=1&name=Иван Петров">Выбрать с id=1 и именем Иван Петров</a><br />
<a href="test1.php?id=2&name=Иван Петров">Выбрать с id=2 и именем Иван Петров</a><br />
<a href="test1.php?id=2&email=main@example.com">Выбрать с id=2 и email=main@example.com</a><br />

<p>findById</p>
<a href="test2.php?id=1">Выбрать с id=1</a><br />
<a href="test2.php?id=2">Выбрать с id=2</a><br />
<a href="test2.php?id=3">Выбрать с id=3</a><br />

<h1>2 урок</h1>
<p>Первое задание</p>
<a href="test_lesson2_task1.php">Чтение конфига</a><br />
<a href="test_lesson2_task1_1.php">Запись конфига</a><br />

<p>Второе задание</p>
<a href="test_lesson2_task2.php">Создать пользователя</a><br />

<p>Третье задание</p>
<a href="test_lesson2_task3.php?id=1&email=newnew@example.com">Обновляем email пользователя с id=1 на email newnew@example.com</a><br />

<p>Четвертое задание</p>
<a href="test_lesson2_task4.php?id=1&email=newnew@example.com&name=Жуков Аниссий">Меняем со значеним id=1</a><br />
<a href="test_lesson2_task4.php?email=newnew@example.com&name=Жуков Аниссий">Убираем id - записывается новый</a><br />

<p>Пятое задание</p>
<a href="test_lesson2_task5.php?id=1">Удаляем со значеним id=1</a><br />


<p>Результат</p>

<?php
DEFINE ('SITE_ROOT' , __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
require __DIR__ . '/../autoload.php';
