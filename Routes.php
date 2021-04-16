<?php

Route::set('index.php', function(){
    Home::CreateHomeView('Home');
});

Route::set('about-us', function(){
    AboutUs::CreateAboutUsView('AboutUs');
});

Route::set('contact-us', function(){
    ContactUs::CreateContactUsView('ContactUs');
});
