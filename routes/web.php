<?php

use Illuminate\Support\Facades\Route;
// ================ Basic Routing ================
// Route::get('/', function () {
//     return "Hello To Laravel Class";
// });

// Route :: get('/courses', function() {
//     $course = ['PHP', 'Java', 'Python', 'C++']; 
//     foreach($course as $c){
//         echo "$c". "<br>";
//     }
// });

// Route :: get('/display', function() {
//     for($i=0; $i<10; $i++){
//         echo "$i". "<br>";
//     }
// });

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
// Route :: get('/user/{id}', function($id) {
//     return "The details are : $id";
// })->where('id', '[0-9]+'); 

//======== Constraint Routing with Alphabets ===========
// Route :: get('/user/{name}', function($name) {
//     return "Constraint Routing with Alphabets : $name";
// })->where('name', '[a-zA-Z]+'); 

//======== Constraint Routing with Conditions ===========
// Route :: get('/user/{id}', function($id) {
//     return "Constraint Routing with conditions : $id";
// })->where('id', '[0-9]{4}'); 

//======== Fallback Routing ===========
// Route :: get('/home', function() {
//     return "Hi, I am in Homepage";
// }); 
// Route :: get('/about', function() {
//     return "Hi, I am in About Page";
// });
// Route :: fallback(function() {
//     return "Sorry, the page you are looking for is not found";
// }); 


// // 1️⃣ Homepage Route
// Route::get('/', function () {
//     return "Welcome to the Event Registration System";
// });


// // 2️⃣ Route to display list of events
// Route::get('/events', function () {
//     $events = ["Hackathon", "Coding Contest", "AI Workshop", "Web Development Bootcamp"];

//     foreach ($events as $event) {
//         echo $event . "<br>";
//     }
// });


// // 3️⃣ Route to view details of a specific event
// Route::get('/event/{eventname}', function ($eventname) {
//     return "Details of event: " . $eventname;
// })->where('eventname','[A-Za-z]+');


// // 4️⃣ Student registration route (name + roll number)
// Route::get('/register/{name}/{roll}', function ($name, $roll) {
//     return $name . " with Roll Number " . $roll . " has registered for the event.";
// })->where('roll','[0-9]+');


// // 5️⃣ Optional parameter (branch)
// Route::get('/student/{name}/{branch?}', function ($name, $branch = "CSE") {
//     return "Student Name: " . $name . "<br>Branch: " . $branch;
// });


// // 6️⃣ Parameter constraint (roll number numeric)
// Route::get('/roll/{roll}', function ($roll) {
//     return "Roll Number: " . $roll;
// })->where('roll','[0-9]+');


// // 7️⃣ Route where ID must contain exactly 3 digits
// Route::get('/eventid/{id}', function ($id) {
//     return "Event ID: " . $id;
// })->where('id','[0-9]{3}');


// Group Routing - for grouping or organizing the tasks

//    Route:: prefix('admin')-> group(function(){
//     Route:: get('/home', function(){
//         return "I am inside home function";
//     });
//         Route:: get('/about', function(){
//             return "I am inside about function";
//         });
//         Route:: get('/profile', function(){
//             return "I am inside profile function";
//         });
//    });

   //Create a constraint routing in which the url would be student/details/y here y is a constraint, when you write any thing except y it will generate coustomized message "you made a wrong entry"

    // Route:: get('/student/details/{id}', function($id){
    //     return "The details of student with id $id";
    // })-> where('id', 'y')-> name('student.details');

    // Route:: fallback(function(){
    //     return "You made a wrong entry";
    // });


    // Route:: get('/', function(){
    //     return view('welcome');
    // });
    // Route:: view('/scai/hello/cse/web/block27/', 'data')->name('data');

    /*
|--------------------------------------------------------------------------
| Google Developer Management Portal Routes
|--------------------------------------------------------------------------
*/
   //Imagine you are a software developer at Google developing a Google Developer Management Portal using laravel. Your task is to design routing in web.php for the portal. Create a route that displays a developer profile using a required parameter(developer name) and another route that shows developer name and the project they are working on using multiple parameters. Implement a profile route where the developer's experience is optional  and if it is not provided, display a deafult message. Add a route that displays employee details but accepts only numeric values using constraint routing. Finally, create a admin panel route that groups all admin related routes together with the prefix 'admin'. Inside which there should be routes for dashboard, managing developers, and managing projects. Finally implement a fallback route that shows "404-Google Developer Portal Page Not Found" whenever user tries to acess a route that does not exixt


// /* 1️⃣ Required Parameter (Developer Profile) */
// Route::get('/developer/{name}', function ($name) {
//     return "Developer Profile: $name";
// });


// /* 2️⃣ Multiple Parameters (Developer + Project) */
// Route::get('/developer/{name}/project/{project}', function ($name, $project) {
//     return "Developer $name is working on project $project";
// });


// /* 3️⃣ Optional Parameter (Experience) */
// Route::get('/developer/profile/{name}/{experience?}', function ($name, $experience = null) {

//     if ($experience) {
//         return "Developer $name has $experience years of experience";
//     }

//     return "Developer $name - Experience not provided";
// });


// /* 4️⃣ Constraint Routing (Only Numeric Employee ID) */
// Route::get('/employee/{id}', function ($id) {
//     return "Employee details for ID: $id";
// })->whereNumber('id');


// /* 5️⃣ Admin Route Group with Prefix */
// Route::prefix('admin')->group(function () {

//     Route::get('/dashboard', function () {
//         return "Admin Dashboard";
//     });

//     Route::get('/developers', function () {
//         return "Manage Developers";
//     });

//     Route::get('/projects', function () {
//         return "Manage Projects";
//     });

// });


// /* 6️⃣ Fallback Route */
// Route::fallback(function () {
//     return "404 - Google Developer Portal Page Not Found";
// });

Route:: get('/', function(){
    $courses = ['PHP', 'Java', 'Python', 'C++'];
    return view('student',['courses'=>$courses]);
});