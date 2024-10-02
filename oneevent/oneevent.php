<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280"> <!-- Установлено фиксированное значение ширины -->
    <link rel="stylesheet" href="/font.css">
    <link rel="stylesheet" href="/header.css">
    <link rel="stylesheet" href="/footer.css">
    <link rel="stylesheet" href="oneevent.css">
    <link rel="stylesheet" href="/oneevent/oneeventslider.css">
    <title>Страница события</title>
</head>
<noscript>В вашем браузере отключен JavaScript, включите для нормального функционирования сайта</noscript>
<body>
<?php include '../header.php'; ?>
<div class="container">
    <div class="preview">
        <p class="main-theme">Интерактивная выставка искусств в Музее Эмоций</p>
        <div class="subhead-wrapp">
        <img class="date-img" src="/media/oneevent/date.png"><p class="date">31 июля - 1 сентября 11:00-21:00</p>
        <img class="geo-img" src="/media/oneevent/geo.png"><p class="geo"> Музей Эмоций</p>
        <img class="price-img" src="/media/oneevent/price.png"><p class="price"> Цена от 500 руб.</p>
</div>
</div>
</div>
<div class="container">
    <div class="event">
        <p class="event-main-text"> Совершить удивительное эмоциональное путешествие приглашает Музей Эмоций. В день рождения посетить музей можно бесплатно!</p>
        <p class="event-text">В этом уникальном музее можно кричать, прыгать, трогать и фотографировать экспонаты. Но ещё необычнее то, что цель этих экспонатов — вызывать разнообразные эмоции. Попав в музей, посетителям нужно пройти все залы, чтобы вернуться обратно. Каждая часть экспозиции посвящена одной из семи базовых эмоций — это гнев, позитивное удивление, отвращение, влюблённость, страх, радость и вдохновение. Погрузиться в свои эмоции посетителям помогает всё наполнение музея: арт-объекты, инсталляции, звуки, запахи, визуальные образы и экзотические животные.
</br></br>Во время экскурсии вы сами станете соавтором инсталляции «Миллион признаний в любви». Гостей ждёт экскурсия с опытным проводником, который расскажет много интересного об эмоциональном интеллекте, при этом давая возможность посетителям побыть наедине со своими переживаниями. Выйдя из музея, каждый снова встретится с эмоциями уже в реальной жизни, но теперь это будет более осознанное свидание. Стоимость билетов: взрослый (от 18 лет) — 700 рублей, льготный (школьники, студенты, пенсионеры) — 500 рублей, семейный (на трёх человек, из которых минимум 1 — ребёнок до 18 лет) — 1400 рублей.
</p>
<div class="slider">
    <div class="slides">
        <div class="slide"><img src="/media/img1.png" alt="Слайд 1" style="width:100%;"></div>
        <div class="slide"><img src="/media/img2.png" alt="Слайд 2" style="width:100%;"></div>
        <div class="slide"><img src="/media/img3.png" alt="Слайд 3" style="width:100%;"></div>
    </div>
    <div class="navigationslider">
        <button class="nav-button" id="prev">◀</button>
        <button class="nav-button" id="next">▶</button>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;

    document.getElementById('next').addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlidePosition();
    });

    document.getElementById('prev').addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlidePosition();
    });

    function updateSlidePosition() {
        const offset = -currentSlide * 100;
        slides.style.transform = 'translateX(' + offset + '%)';
    }
</script>
<form class="events-form" action="#">    
        <button class="events-button">НА САЙТЕ ОРГАНИЗАТОРА</button>
        </form>
</div>
</div>
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