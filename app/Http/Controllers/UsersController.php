<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Support\Facades\Config;
use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class UsersController extends Controller
{
    public function try(Request $request){

        $data = $request->all();
         $user = new User;
         $user->fullname = $data['fullname'];
         $user->password = $data['password'];
         $user->email = $data['email'];
         $user->subdomain = $data['subdomain'];
         $user->save();

         $new_db_name ="oboloo_".$user->subdomain;

            $conn = mysqli_connect(
                config('database.connections.mysql.host'), 
                env('DB_USERNAME'), 
                env('DB_PASSWORD')
            );
            if(!$conn ) {
                return false;
            }
            // new database
            $sql = 'CREATE Database IF NOT EXISTS '.$new_db_name;
            $exec_query = mysqli_query($conn,$sql);
            if(!$exec_query) {
                die('Could not create database: ' .mysqli_error($conn));
            }
            // new table creation 
            $defaultConfig = config('database.connections.mysql');
            $defaultConfig['database'] = $new_db_name;
            config(['database.connections.second' => $defaultConfig]);
            // $users = DB::connection('test')->select('Select id from users')
            
               Schema::connection('second')->create('posts',function(Blueprint $table) {
                $table->string('name');
               });

            return 'Database created successfully with name '.$new_db_name;
        }

    //     catch(\Exception $e){
    //         return false;
    //     }

    //     // try{
    //     //     echo"yess";
    //     // }

    //     // catch(\Exception $e){
    //     //     return false;
    //     // }

    //     // $old_user = DB::connection('oboloo')->table('users')->get();



    //      return back()->with('success', 'Thanks for contacting us!');

    // }


    // // public function sendEmail(){
    // //     $details = [
    // //         'title' =>'Mail From Oboloo',
    // //         'body'  =>'This is for Testing Mail'
    // //     ];

    // //     Mail::to('tahirafridi999@gmail.com')->send(new SendMail($details));
    // //     return "Email Sent";
    // // }

    // public function login(){
    //     return view('auth.login');
    // }

    // function index()
    // {
    //  return view('send_email');
    // }

    
    // function send(Request $request)
    // {
    //  $this->validate($request, [
    //   'name'     =>  'required',
    //   'email'  =>  'required|email',
    //   'message' =>  'required'
    //  ]);

    //  $data = $request->all();
    //  $user = new User;
    //  $user->fullname	 = $data['fullname'];
    //  $user->password = $data['password'];
    //  $user->email = $data['email'];
    //  $user->subdomain = $data['subdomain'];
    //  $user->save();
    //  return redirect('welcomePage');

    // //     $data = array(
    // //         'name'      =>  $request->name,
    // //         'message'   =>   $request->message
    // //     );

    // //  Mail::to('tahirafridi999@gmail.com')->send(new SendMail($data));
    //  return back()->with('success', 'Thanks for contacting us!');

    // }


    // public function createDB()
    // {
    //     try{
    //         $new_db_name = "DB_".rand()."_".time();
    //         $new_mysql_username = "root";
    //         $new_mysql_password = "";

    //         $conn = mysqli_connect(
    //             config('database.connections.mysql.host'), 
    //             env('DB_USERNAME'), 
    //             env('DB_PASSWORD')
    //         );
    //         if(!$conn ) {
    //             return false;
    //         }
    //         $sql = 'CREATE Database IF NOT EXISTS '.$new_db_name;
    //         $exec_query = mysqli_query( $conn, $sql);
    //         if(!$exec_query) {
    //             die('Could not create database: ' . mysqli_error($conn));
    //         }
    //         return 'Database created successfully with name '.$new_db_name;
    //     }

    //     catch(\Exception $e){
    //         return false;
    //     }


    //     // Schema::create($new_db_name, function (Blueprint $table) {
    //     //     $table->id();
    //     //     $table->string('name');
    //     //     $table->string('email')->unique();
    //     //     $table->string('message');
    //     // });
    // }




    // public function createdb(){ 

       
        
            // // $new_db_name = "DB_".rand()."_".time();
            // $new_db_name = "ttt";
            // $new_mysql_username = "root";
            // $new_mysql_password = "";

            // $conn = mysqli_connect(
            //     config('database.connections.tests.host'), 
            //     env('DB_USERNAME'), 
            //     env('DB_PASSWORD')
            // );
            // if(!$conn ) {
            //     return false;
            // }
            // $sql_db = 'CREATE Database IF NOT EXISTS '.$new_db_name;
            // $dbs_size = DB::connection("mysql2")->table("roo")->select(DB::raw("...")); // rest of the query..
            // Schema::connection("tests")->create('tttt',function($table) {
            // $table->id();
    // 
          
            // Schema::create($new_db_name.'tableName', function($table)
            // {
            //     $table->increments('id');
            // });

      

            // $exec_query = mysqli_query($conn,$sql_db);
            // if($exec_query) {
            //     $obj = "CREATE TABLE new  IF NOT EXISTS".$sql_db; 
            //     // die('Could not create database: ' .mysqli_error($conn));
            // }
            
    //         return 'Database created successfully with name '.$new_db_name;
     

    

    //     echo "yes";

    // }


    //  public function createtb(){

    //     //  $new_db_name = "DB_".rand()."_".time();
          
    //     $defaultConfig = config('database.connections.mysql');
    //     $defaultConfig['database'] = 'test';
    //     config(['database.connections.second' => $defaultConfig]);
    //     // $users = DB::connection('test')->select('Select id from users')
        
    //        Schema::connection('second')->create('posts',function(Blueprint $table) {
    //         $table->string('name');
    //        });
    //         return 'yes';
            // $conn = mysqli_connect(
            //     Config("database.connections.mysql", [  
            //         'host' => 'host',
            //         'database' => $new_db_name
            //         // 'username' => $new_mysql_username
            //         // 'password' => $new_mysql_password
                
            //         ])
            // );
            // if(!$conn) {
            //     return false;
            // }

            // $sql = 'CREATE Database IF NOT EXISTS '.$new_db_name;
            // $exec_query = mysqli_query( $conn, $sql);
            // if(!$exec_query) {
            //     die('Could not create database: ' . mysqli_error($conn));
            // }
            // return 'Database created successfully with name '.$new_db_name;
        // }




    


   





}
