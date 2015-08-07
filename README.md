Yii 2 Advanced Project Template
===============================

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```

# ТЗ

ТЗ "Социалочка" для программистов
Пользовательская часть: Java Script подключаемый на сайт пользователя в виде виджета.
Серверная часть: PHP скрипт с базами данных. Ведет учет посещения страниц пользователем, времени пребывания пользователя на страницах, действиях пользователя (клики, переходы, ввод данных: емейлов, номеров телефона).
Идентификация пользователя происходит с помощью сессий куки и регистрацией пользователей на основном сайте проекта (прямая регистрация + oAuth с социальных сетей).

Для пользователей (Личный кабинет):

 - предоставляет возможность просмотреть текущие акции – бонусы участников системы, повысить свой рейтинг путем подключения аккаунтов социальных сетей, размещения отзывов о системе, сайтах- участниках, контента сайтов-участников на своих страницах (репосты), приглашении друзей в систему.
 - Подписка на информирование об текущих акциях сайтов-участников путем уточнения своих интересов указанием тематики;

Для сайтов участников:

 - Статистика посещения пользователями страниц;
 - Показ пользователей – отказников от просмотра сайтов;
 - Показ контактных данных пользователей которые отказались от просмотра сайта (если система смогла определить эти данные путем анализа ввода или через личный кабинет пользователя);
 - Тема заинтересованности пользователя путем анализа аккаунтов социальных сетей  - расширенная версия;
 - Установка текущих и будущих бонусов для пользователей
 - Таргетинг бонусов – расширенная версия.
 - Установка сообщений выдаваемых виджетом при определенных действиях пользователя или событиях.

Виджет, в который клиент загружает свои спецпредложения. Нужно ввести имейл. Получай бонусы за то, что ты находишься и что-то делаешь на сайте.
Время, сколько страниц посетил, ранг.

## Про наш виджет

Стимулирует совершить регистрацию на сайте (оставить имейл).
Виджет считает время, проведенное на сайте сейчас (в минутах) и с момента первого захода (в днях)
Определяет город, где находится посетитель, и подстраивает контент под нужный город.
Предложения формируются с учетом пола, возраста, интересов пользователя.
“Впервые на сайте?” Определяет пользователей, которые в первый раз зашли, и выдается необходимая информация, которая знакомит с ресурсом, показывает его преимущества, формирует доверие.

Позволяет получить все ответы на вопросы:

 - Доставка
 - Оплата
 - FAQ
 - Сертификаты, дипломы
 - Отзывы
 - Действующие акции
 - Система рейтинга (ранга, баллов, бонусов, званий) в зависимости от времени на сайте и совершенный действий (покупок, выполненных заданий)
 - Встроенные игры, которые засасывают и заставляют человека заходить на сайт каждый день и проводить там время.
 - Акции с ограничением по времени (несколько часов). Информирование на имейл, при желании клиента - СМС на телефон.
