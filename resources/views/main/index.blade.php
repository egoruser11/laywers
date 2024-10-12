
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FlexStart Bootstrap Template - Index</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: FlexStart - v1.7.0
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            <span>Правозащита</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Главная</a></li>
                <li><a class="nav-link scrollto" href="#about">Услуги</a></li>
                <li><a class="nav-link scrollto" href="#services">Отзывы</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">О нас</a></li>
                <li><a class="nav-link scrollto" href="#contact">Оставить заявку</a></li>
                <li><a class="getstarted " href="{{route('login')}}">Личный кабинет</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Юридическая помощь</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Многолетняя юридическая экспертиза и индивидуальнный подход к каждому клиенту</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Оставить заявку</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Темы консультаций</h2>
            <p>Полный спектр консультаций</p>
        </header>

        <div class="row">

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="https://rapsinews.ru/images/28309/68/283096842.jpg" class="img-fluid" alt=""></div>
                    <span class="post-date" style="text-align: center; vertical-align: middle;font-size: 1.3em;">Административные дела</span>
                    <h3 class="post-title">Услуги по защите интересов по сорам о привлечении к административной ответственности</h3>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="https://storage.pravo.ru/image/22/11313.jpg?v=1563865158" class="img-fluid" alt=""></div>
                    <span class="post-date" style="text-align: center; vertical-align: middle; font-size: 1.3em;">Налоговые споры</span>
                    <h3 class="post-title">Поможем вам в вопросах связаных с отказом возмещения НДС</h3>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="https://d-russia.ru/wp-content/uploads/2020/09/sudb1.jpg" class="img-fluid" alt=""></div>
                    <span class="post-date" style="text-align: center; vertical-align: middle; font-size: 1.3em;">Уголовные дела</span>
                    <h3 class="post-title">Прекратим уголовное дело или переквалифицируем на менее тяжкую статью</h3>

                </div>
            </div>

        </div>

    </div>
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Довольные клиенты</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Успешные дела</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Часы консультаций</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Юристов в команде</p>
                        </div>
                    </div>
                </div>

            </div>
            <section id="features" class="features">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h2>Услуги</h2>
                        <p>Популярные услуги</p>
                    </header>

                    <div class="row">

                        <div class="col-lg-6">
                            <img src="https://img.freepik.com/free-photo/photorealistic-lawyer-environment_23-2151152197.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1723939200&semt=ais_hybrid" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>Комплексное ведение дел</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>Налог и прибыль на двииденды</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>Судебные и арбитражные дела</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>Международные договора страхования</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>Подготовка документов для подачи в суд</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>Составление исковых заявлений</h3>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- / row -->

                    <!-- Feature Tabs -->
                    <div class="row feture-tabs" data-aos="fade-up">
                        <div class="col-lg-6">
                            <h3>ПЕРЕЧЕНЬ УСЛУГ по защите интересов физических и юридических лиц</h3>

                            <!-- Tabs -->
                            <ul class="nav nav-pills mb-3">
                                <li>
                                    <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Консультации</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-bs-toggle="pill" href="#tab2">Представление</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-bs-toggle="pill" href="#tab3">Документы</a>
                                </li>
                            </ul><!-- End Tabs -->

                            <!-- Tab Content -->
                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="tab1">
                                    <ul>
                                        <li>
                                            консультации по определению перспективности дела
                                        </li>
                                        <li>
                                            консультации по определению предмета доказывания
                                        </li>
                                        <li>
                                            консультации по списку доказательств и их оценке судом
                                        </li>
                                        <li>
                                            консультации по обзору правоприменительной практики
                                        </li>
                                        <li>
                                            полное дистанционное консультационное обслуживание
                                        </li>
                                    </ul>
                                </div><!-- End Tab 1 Content -->

                                <div class="tab-pane fade show" id="tab2">
                                  <ul>
                                      <li>
                                          в судебных участках, судах общей юрисдикции, Арбитражных судах
                                      </li>
                                      <li>
                                          в органах СК, МВД, ОБЭП и ПК, следственных органах, прокуратуре
                                      </li>
                                      <li>
                                          в налоговых органах ФНС, таможенных органах ФТС, в службе ФАС
                                      </li>
                                      <li>
                                          в органах пенсионного фонда ПФР и соц. защиты населения УСЗН
                                      </li>
                                      <li>
                                          в органах архитектуры, департаментах земельных ресурсов ДЗР
                                      </li>
                                      <li>
                                          в органах ДИГМ, инспекциях жилищного надзора УДЖПиЖФ
                                      </li>
                                      <li>
                                          в органах федеральной службы исполнения наказаний ФСИН
                                      </li>
                                      <li>
                                          в органах федеральной службы судебных приставов УФССП
                                      </li>
                                      <li>
                                          в органах федеральной миграционной службы УФМС
                                          при проведении переговоров на всех уровнях
                                      </li>
                                  </ul>
                                </div><!-- End Tab 2 Content -->

                                <div class="tab-pane fade show" id="tab3">
                                    <ul>
                                        <li>
                                            исковые заявления, ходатайства, возражения и отзывы на иски
                                        </li>
                                        <li>
                                            заявления, жалобы в правоохранительные и надзорные органы
                                        </li>
                                        <li>
                                            заявления о выдаче судебного приказа, исполнительного листа
                                        </li>
                                        <li>
                                            административные исковые заявления в порядке КАС РФ
                                        </li>
                                        <li>
                                            претензии, досудебные требования, мировые соглашения
                                        </li>
                                        <li>
                                            заключения о перспективах дела с подбором практики
                                        </li>
                                        <li>
                                            опросы свидетелей и иных участников процесса
                                        </li>
                                        <li>
                                            анализ договоров, дополнительных соглашений
                                        </li>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <img src="https://img.freepik.com/free-photo/photorealistic-lawyer-environment_23-2151152197.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1723939200&semt=ais_hybrid" class="img-fluid" alt="">
                        </div>

                    </div><!-- End Feature Tabs -->

                    <!-- Feature Icons -->



</section><!-- End Recent Blog Posts Section -->
<main id="main">
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Отзывы</h2>
                <p>Наши клиенты о нас</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Сотрудничество с 'Юридической помощью 24/7' превзошло все мои ожидания. Команда специалистов быстро и качественно подготовила все необходимые документы для моего бизнеса. Я был приятно удивлён их оперативностью и готовностью ответить на все мои вопросы. Теперь я знаю, к кому обращаться в случае необходимости!
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                                <h3>Иванов Алексей</h3>
                                <h4>CEO TViDeo</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Я обратилась в юридическую компанию 'Право и Защита' по поводу сложного вопроса с наследством. Юристы компании проявили высокий профессионализм и внимательность к деталям. Они не только помогли мне разобраться в ситуации, но и предложили несколько вариантов решения проблемы. Я осталась очень довольна результатом и рекомендую их всем, кто нуждается в юридической помощи!
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                                <h3>Валерия Князева</h3>
                                <h4>Дизайнер</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Я обращалась в данную компанию по поводу трудового спора с работодателем. Юристы компании оказали мне неоценимую помощь, грамотно составили исковое заявление и представили мои интересы в суде. Благодаря их усилиям, я выиграла дело и получила компенсацию. Огромное спасибо за вашу работу!
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                                <h3>Елена Никифрова</h3>
                                <h4>Владелец сети магазинов</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Хочу выразить благодарность юристам этой компании . Они помогли мне в трудной ситуации, связанной с трудовым спором. Их опыт и знания позволили быстро решить вопрос в мою пользу. Очень доволен качеством обслуживания и индивидуальным подходом. Рекомендую всем, кто ищет надежную юридическую помощь!
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                                <h3>Алексей</h3>
                                <h4>Индивидуальный предпрениматель</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Хочу выразить благодарность команде 'Правовая защита'. Они помогли мне в вопросах семейного права, и я был приятно удивлён их чуткостью и профессионализмом. Каждый шаг был тщательно объяснён, и я чувствовал себя уверенно на протяжении всего процесса. Рекомендую всем, кто ищет надежную юридическую поддержку
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                                <h3>Петр</h3>
                                <h4>Директор</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>О нас</h2>
                <p>Наша команда</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Дмитрий</h4>
                            <span>Юрист</span>
                            <p>Наши трудовые отношения и миграционное комерческое право</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Татьяна</h4>
                            <span>Юрист</span>
                            <p>Антимонопольное право и конкуренция Реклама и маркетинг Интелектуальная собственность</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Петр</h4>
                            <span>Юрист</span>
                            <p>Корпоративное право Слияния и поглощения(M&A) Банки и финансы/ проектное финансирование </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Юлия</h4>
                            <span>Юрист</span>
                            <p>Партнерские отношения Банкротство Урегулирование споров ГЧП и Инвестиции</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Корпоративные услуги</h2>
                    <p>Наши клиенты</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Новости</h2>
                <p>Последние публикации о нас в СМИ</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt=""></div>
                        <span class="post-date">17 апреля 2024</span>
                        <h3 class="post-title">Юристы советуют бизнесу всегда быть готовым к камеральным проверкам</h3>
                        <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Подробнее</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt=""></div>
                        <span class="post-date">10 апреля 2024</span>
                        <h3 class="post-title">Неочевидные антимонопольные риски</h3>
                        <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Подробнее</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('assets/img/blog/blog-3.jpg') }}" class="img-fluid" alt=""></div>
                        <span class="post-date">12 марта 2024</span>
                        <h3 class="post-title">Приостановление соглашений об избежании двойного налогообложения</h3>
                        <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Подробнее</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Контакты</h2>
                <p>Напишите нам</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Aдрес</h3>
                                <p>г.Москва ул. Тверская.дом.1</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Позвоните нам</h3>
                                <p>+7(123)4567890</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>info@ross-ursit.ru</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Время работы</h3>
                                <p>Пн-пт 9:00AM - 18:00AM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="{{route('main.store.application')}}" method="post" >
                        <div class="row gy-4">
                            @csrf
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Ваше имя" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="phone" placeholder="Ваш телефон" required>
                            </div>

                            <div class="col-md-12">
                                <label >Тема:

                                <select name="topic_id">
                                    @foreach($topics as $topic)
                                    <option value={{$topic->id}}>{{$topic->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="description" rows="6" placeholder="Описание заявки" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">

                                <button type="submit">Отправить заявку</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">


    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        <span>Правозащита</span>
                    </a>
                    <p>Многолетняя юридическая экспертиза и индивидуальный подход к каждому клиенту</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>



                <div class="col-lg-2 col-6 footer-links">
                    <h4>Темы услуг</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Семья</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Автовопроcы</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Имущество</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Наследство</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Контакты</h4>
                    <p>
                        г.Москва ул. Тверская.дом.1<br><br>
                        <br><br>
                        <strong>Телефон:</strong> +7(123)4567890<br>
                        <strong>Email:</strong> info@ross-ursit.ru<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; <strong>2024</strong> все права защищены.
        </div>

        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
