<?php

use Illuminate\Support\Facades\Route;
// ================ Basic Routing ================
Route::get('/', function () {
    return "Hello To Laravel Class";
});

Route :: get('/courses', function() {
    $course = ['PHP', 'Java', 'Python', 'C++']; 
    foreach($course as $c){
        echo "$c". "<br>";
    }
});

Route :: get('/display', function() {
    for($i=0; $i<10; $i++){
        echo "$i". "<br>";
    }
});

//======== Required Routing ===========
// Route :: get('/user/{name}', function($name) {
//     return "Welcome $name";
// });

//======== Optional Routing ===========
// Route :: get('/user/{name?}', function($name = 'Guest') {
//     return "Welcome $name";
// });

//======== Multivalue Routing ===========
// Route :: get('/user/{name}/{age}', function($name = 'Guest', $age) {
//     return "Welcome $name, you are $age years old";
// }); 

//======== Constraint Routing with numbers ===========
Route :: get('/user/{id}', function($id) {
    return "The details are : $id";
})->where('id', '[0-9]+'); 

//======== Constraint Routing with Alphabets ===========
Route :: get('/user/{name}', function($name) {
    return "Constraint Routing with Alphabets : $name";
})->where('name', '[a-zA-Z]+'); 