<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="10">
    <link rel="stylesheet" href="css/serve-form.css">
    <title>XML Deposit</title>
</head>

<body>
    <header class="page-header">
        <h1 class="page-header__title">
            XML Deposit
        </h1>
        <h2 class="page-header__catchphrase">
            Lorem ipsum
        </h2>
    </header>

    <main class="main-content">

        
        <section class="form-info">
            <?php
            function rand_float($st_num=0,$end_num=1,$mul=1000000)
{
if ($st_num>$end_num) return false;
return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
}
if(rand_float(0,12) < 4) {
echo "<iframe src='deposit-to.html' frameborder='0' class='form-info__frame'></iframe>";
} elseif(rand_float(0,12) >=4 and rand_float(0,12) < 8) {
echo "<iframe src='deposit-detected.html' frameborder='0' class='form-info__frame'></iframe>";
} else {
echo "<iframe src='deposit-confirmed.html' frameborder='0' class='form-info__frame'></iframe>";
}
            ?>
        </section>

        <section class="faq">
            <h3 class="main__title">
                FAQ
            </h3>
            <p class="faq__item">
                <span class="faq__question">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, doloribus!
                </span>
                <span class="faq__answer">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ex architecto voluptates magnam
                    quibusdam sequi ipsa sed saepe, esse mollitia!
                </span>
            </p>
            <p class="faq__item">
                <span class="faq__question">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, doloribus!
                </span>
                <span class="faq__answer">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ex architecto voluptates magnam
                    quibusdam sequi ipsa sed saepe, esse mollitia!
                </span>
            </p>
            <p class="faq__item">
                <span class="faq__question">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, doloribus!
                </span>
                <span class="faq__answer">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ex architecto voluptates magnam
                    quibusdam sequi ipsa sed saepe, esse mollitia!
                </span>
            </p>
            <p class="faq__item">
                <span class="faq__question">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, doloribus!
                </span>
                <span class="faq__answer">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ex architecto voluptates magnam
                    quibusdam sequi ipsa sed saepe, esse mollitia!
                </span>
            </p>
        </section>
    </main>

    <footer class="footer">
        Design Tomasz Pawelec 2019
    </footer>
</body>

</html>
