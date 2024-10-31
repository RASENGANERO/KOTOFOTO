<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отправка сообщения</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
</head>
<body>
    <section class="form-section">
        <form id="submit-form" class="form-send" method="POST">
            <div class="form-send-container">
                <div class="form-send-row">
                    <label class="label-form">Имя</label>
                    <input id="name" type="text" class="input-form" required/>
                </div>
                <div class="form-send-row">
                    <label class="label-form">Электронная почта</label>
                    <input id="email" type="email" class="input-form" required/>
                </div>
                <div class="form-send-row">
                    <label class="label-form">Сообщение</label>
                    <textarea id="message" rows="4" class="text-form" required></textarea>
                </div>
            </div>
            <button class="form-submit-btn" type="submit">Отправить сообщение</button>
            <p id="answer" class="answer-message" style="display:none;"></p>
        </form>
    </section>
</body>
</html>