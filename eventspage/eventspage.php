<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280"> <!-- Установлено фиксированное значение ширины -->
    <link rel="stylesheet" href="/font.css">
    <link rel="stylesheet" href="/header.css">
    <link rel="stylesheet" href="/footer.css">
    <link rel="stylesheet" href="../eventspage/eventspage.css">
    <title>Афиша событий</title>
</head>
<noscript>В вашем браузере отключен JavaScript, включите для нормального функционирования сайта</noscript>
<body>
<?php include '../header.php'; ?>
    <div class="container">
        <div class="poster">Афиша событий</div>
        <div class="event-wrapp">
            <div class="event-card">
                <img class="event-img" src="/media/event/event1.png">
                    <div class="event-text-wrapp">
                <p class="event-title">Посещение Океанариума</p>
                <p class="event-subhead">Воронежский океанариум - единственный в Центральном Черноземье (экономической зоне, обьяединяющий 5 федеральных субьектов).</p>
                <span class="event-time">До 31 августа</span>
                    </div>
            </div>
            <div class="event-card">
                <img class="event-img" src="/media/event/event2.png">
                    <div class="event-text-wrapp">
                <p class="event-title">"БеспринцЫпные чтения". Гала-концерт</p>
                <p class="event-subhead">БеспринцЫпные чтения - один из самых ярких и необычных проектов последнего времени, в рамках которо современную отечественную...</p>
                <span class="event-time">10 и 11 августа</span>
                    </div>
            </div>
            <div class="event-card">
                <img class="event-img" src="/media/event/event3.png">
                    <div class="event-text-wrapp">
                <p class="event-title">IOWA. Summer Sound x билайн</p>
                <p class="event-subhead">Этим летом Москва и Екатеринбург будут петь самые знаменитые хиты группы IOWA. Нам же нравится одно и то же? Мы угадали?</p>
                <span class="event-time">25 июля в 19:30</span>
                    </div>
            </div>
            <div class="event-card">
                <img class="event-img" src="/media/event/event4.png">
                    <div class="event-text-wrapp">
                <p class="event-title">Турнир по баскетболу 2x2 и NBA2K</p>
                <p class="event-subhead">Заявляйся в отрытые турниры по баскетболу 2x2 и по кибербаскетболу и выигрывай джерси игроков сборной России.</p>
                <span class="event-time">20 июля в 14:00</span>
                    </div>
            </div>
        </div>
        <form class="events-form" action="#">    
        <button class="events-button">ДРУГИЕ МЕРОПРИЯТИЯ</button>
        </form>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>
</html>