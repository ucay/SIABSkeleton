Symfonian Indonesia Admin Bundle (SIAB) Skeleton
================================================

[Symfonian Indonesia Admin Bundle][1] adalah sebuah Admin Generator yang sangat powerfull
serta mudah digunakan dan dikembangkan. Produk Asli buatan anak bangsa ini didedikasikan
untuk Anda yang tidak ingin dipusingkan dalam membuat halaman Admin/Backend.

[SIAB Skeleton][2] adalah sebuah skeleton (contoh program yang dapat langsung dijalankan)
dari SIAB Admin yang dapat digunakan langsung tanpa harus pusing dengan konfigurasi dan lain sebagainya.

Apa saja isinya?
----------------

* [SIAB Admin][1] tentunya

* User Management menggunakan [FOSUserBundle][3]

* Contoh CRUD lengkap menggunakan (Entity, Form, Controller)

* Contoh Menu mengunakan [KNPMenuBundle][4]

* DataFixtures untuk User menggunakan [DoctrineFixtures][5]

Bagaimana Cara Installnya?
--------------------------

* Install Menggunakan Composer

``php composer.phar create/project symfonyid/siab-skeleton SIAB 1.0.9``

* Buat Database dan Skema tabelnya

``cd SIAB``

``php app/console doctrine:database:create``

``php app/console doctrine:schema:install``

* Jalankan Doctrine Fixtures

``php app/console doctrine:fixtures:load``

* Jalankan Web Server

``php app/console server:run``

* Buka Browser

username: siab
password: siab

####Selamat Mencoba!!!####

####Symfonian Indonesia Team####

- Facebook: https://www.facebook.com/groups/520896581276140

- Github: https://github.com/SymfonyId

[1]: https://github.com/SymfonyId/AdminBundle
[2]: https://github.com/SymfonyId/SIABSkeleton
[3]: https://github.com/FriendsOfSymfony/FOSUserBundle
[4]: https://github.com/KnpLabs/KnpMenuBundle
[5]: https://github.com/doctrine/DoctrineFixturesBundle