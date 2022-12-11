<?php
    $nav_icons = array(
        'dashboards' => 'fa fa-house',
        'teachers' => 'fa-solid fa-chalkboard-user',
        'offices' => 'fa-solid fa-briefcase',
        'cms'=>'fa-solid fa-gear',
        'blogs'=>"fa-solid fa-blog",
        'academics'=>'fa-solid fa-book',
        'students'=>'fa-solid fa-chalkboard-user',
        'messages'=>'fa-solid fa-message',


    );
    
    $nav_Menus = array(
        'dashboards' => 'Dashboard', 
        'teachers'=> 'Teacher',
        'offices'=> 'Office',
        'cms'=> 'CMS',
        'blogs'=> 'Blogs',
        'academics'=>'Academic',
        'students'=>'Student',
        'messages'=>'Message'
         
    );

    $sub_nav_menus['teachers'] = array(
        'abouts'=>'About',
        'facts'=>'Fact',
        'skills'=>'Skill',
        'resume'=>'Resume',
        'subject'=>'Subject',
    );
    $sub_nav_menus['academics'] = array(
        'sections'=>'Section',
        'subjects'=>'Subject',
        'classes'=>'Class',
    )
?>