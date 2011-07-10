магазинчег.
я все еще усиленно раздумываю над разделением магазина на части:
* Каталог
* Корзина покупок
* Заказ
* Покупатель (Уже полно пакетов. FOSUserBundle, например. Нужно будет только расширить)
Но. Тогда теряем в производительности. И, вместо оптимизированных sql запросов по методологии DDD (например, запрос корзины со всеми товарами, их ценами, картинками и прочим мусором), мы будем плодить обращения к бд при каждом запросе связанных свойств.

что мне нужно от каталога:

    - кластерная сортировка товаров по тегам
    - возможность создания групп тегов (Бренды, Теги, др. свойства)
    - разные типы цен для разных групп клиентов
    - блочное кеширование каталога
    - иерархия характеристик товаров

для тестов:

    ./console doctrine:schema:create
    ./console doctrine:fixtures:load

routing.yml:

    n3b_shop:
        resource: "@n3bShopBundle/Resources/config/routing/routing.yml"


кстати, все еще в разработке
