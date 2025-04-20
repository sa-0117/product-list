# 商品一覧

##環境構築  

###Docerビルド  
```  
git clone github.com:coachtech-material/laravel-docker-template.git
docker-compose up -d --build  
``` 

###Laravel環境構築    
```  
docker-compose exec php bash  
composer install  
.env.example  
php artisan key:generate  
php artisan migrate  
php artisan db:seed  
```  

##使用技術  

* PHP 8.4  
* Laravel 8.4  
* MySQL 8.0  

##ER図

![er](https://github.com/user-attachments/assets/63671674-b6c9-4c2e-b1af-8c1f05ec9e33)

##URL  

* 開発環境：[http://localhost/]  
* phpMyAdmin:[http://localhost:8080]

<<<<<<< HEAD

=======
>>>>>>> 142f161 (商品一覧(vew))
