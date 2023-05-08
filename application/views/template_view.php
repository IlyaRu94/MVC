<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="utf-8"> 
    <title>Главная</title> 
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head> 
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/portfolio">Портфолио</a></li>
                    <li><a href="/onas">О Нас</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                    <li><a href="/phpinfo">Скриншот включенного пакета php-gd</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php include 'application/views/'.$content_view; ?>
        </main>
        <footer>
            <div>Этот сайт создан как пример одностраничного сайта со структурой MVC</div>
            <div>SkillFactory, Рушнов И.А. 2023</div>
        </footer>
    </body> 
</html>