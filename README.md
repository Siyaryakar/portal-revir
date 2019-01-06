# portal-revir
Kurulum
Ödev modülünü portalınıza eklemek için yapmanız gereken işlemler

1-) Portal içerisindeki composer.json dosyasında repositories bölümüne modülün linkini eklemek.
    {
        "type": "vcs",
        "url": "https://github.com/siyaryakar/portal-revir.git"
    },
2-) Portal klasörünün içerisindeki portal/backend/config/main.php , portal/frontend/config/main.php , portal/api/config/main.php dosyalarındaki modules bölümüne kendi modülünüzü eklemeniz gerekmektedir.
    'odev' => [
        'class' => 'kouosl\portal-revir\Module',
    ],
    3-) Composer.json a eklediğimiz repoyu sistemimize eklemek için vagrant ssh yaptıktan sonra cd /var/www/portal dizininde composer update veya composer require kouosl/portal-odev:dev-master komutunu çalıştırınız.
    
    4-) Migration dosyası uplanarak veri tabanına modülde kullandığımız tablolar eklenir. Bunun için vagrant ssh da "php yii migrate --migrationPath=@vendor/kouosl/portal-odev/migrations --interactive=0" komutu çalıştırılır
Bu dört adımı uyguladığınızda migrationdaki tablolar veri tabanına eklenecek ve github daki ödev modülü portal/vendor/kouosl dizininin altına portal-Odev olarak oluşarak portal.kouosl adresinden erişilebilir hale gelecektir.
