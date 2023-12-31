<?php

/**
 *
 *  Youtube Link : https://www.youtube.com/playlist?list=PLbGui_ZYuhijEqjCa63l0GkWh5EsG5iTR
 *
 *  Video number 38
 */


//___________________________________________________________________________________________________________________________//
//__________________________________ 38. Migrations and Creating Table Foreign Key in Laravel (Hindi)   _____________________//
//___________________________________________________________________________________________________________________________//

 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //3:00                                          Generating Migrations
 /*
    To Create a Migration use the command : (use lowercase plural name in this syntax )

    php artisan make:migration create_students_table

    //


 */

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//9:15                                                Migration Class
 /*
    the previous command will create this code in this Path

        database -> migrations -> 'migration_name'

        you can see this code :

    // Run the migrations.

        public function up(): void     //   to add new tables, columns or indices to database
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    // Reverse the migrations.

    public function down(): void       // it reverse the opperations that done by the 'up' function
    {
        Schema::dropIfExists('students');
    }



 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//12:50                                             Running Migrations
 /*
    To run a migration , you can use this command :

        php artisan migrate

    To see which migrations have run thus far you can use :

        php artisan migrate:status

 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*




 */

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 /*

 */
