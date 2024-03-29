<?php
require_once('crest.php');
$addRecord = CRest::call('lists.element.add', [
    'IBLOCK_TYPE_ID' => 'lists',
    'IBLOCK_ID' => 312,
    'ELEMENT_ID' => rand(),
    'FIELDS' => [
        'NAME' => 'Модерация компании Название',
        ' PROPERTY_2618' => 'Значение', // режим работы для компании
        ' PROPERTY_2620' => 'Значение', // ID компании на сайте
        ' PROPERTY_2622' => 'Значение', // Телефон компании
        ' PROPERTY_2624' => 'Значение', // тип плательщика для компании
        ' PROPERTY_2626' => 'Значение', // ИНН
        ' PROPERTY_2658' => 'Значение', // ОГРН/ОГРНИП
        ' PROPERTY_2628' => 'Значение', // Название бренда
        ' PROPERTY_2630' => 'Значение', // Юридический адрес
        ' PROPERTY_2632' => 'Значение', // ФИО директора
        ' PROPERTY_2634' => 'Значение', // КПП
        ' PROPERTY_2636' => 'Значение', // тип цены
        ' PROPERTY_2638' => 'Значение', // флаг модерации
        ' PROPERTY_2642' => 'Значение', // режим работы для контакта
        ' PROPERTY_2644' => 'Значение', // имя контакта
        ' PROPERTY_2660' => 'Значение', // фамилия контакта
        ' PROPERTY_2646' => 'Значение', // отчество контакта
        ' PROPERTY_2648' => 'Значение', // email контакта
        ' PROPERTY_2650' => 'Значение', // номер телефона контакта
        ' PROPERTY_2652' => 'Значение', // город контакта
        ' PROPERTY_2654' => 'Значение', // дата рождения контакта
        ' PROPERTY_2656' => 'Значение', // ID контакта на сайте
    ]
]);