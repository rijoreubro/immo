<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\App\Users;
use App\Users;
class StudInsertController extends Controller {
   public function insertform(){
      return view('stud_create');
   }
	
   public function insert(Request $request){
        
        //Assigning the input request to variable
      $name = $request->input('stud_name');
      $gender = $request->input('gender');
      // print_r($request->all());die();
      $age = $request->input('age');
      $place = $request->input('place');
      $dob = $request->input('dob');
      $job = $request->input('job');
      $hobby = $request->input('hobby');
      $qualification = $request->input('qualification');
      DB::table('student')->insert(
    ['name' => $name, 'gender' => $gender,'age'=> $age,'place'=>$place,'dob'=>$dob,'job'=>$job,'hobby'=>$hobby,'qualification'=>$qualification]
);

      //Getting the user table  and Displaying the inserted fields
$users = DB::table('student')->get();
      // $users = App\Users::all();

echo '<table border="1">';
    echo '<tr>';
    echo '<th>No</th><th>Name</th><th>gender</th><th>age</th><th>place</th><th>dob</th><th>job</th><th>hobby</th><th>qualification</th>';
    echo '</tr>';


foreach ($users as $user) {
    echo '<tr>';
   echo '<td>';
 echo $user->id;
   echo '</td>';
   echo '<td>';
 echo $user->name;
   echo '</td>';
   echo '<td>';
 echo $user->gender;
   echo '</td>';
   echo '<td>';
 echo $user->age;
   echo '</td>';
   echo '<td>';
 echo $user->place;
   echo '</td>';
   echo '<td>';
 echo $user->dob;
   echo '</td>';
   echo '<td>';
 echo $user->job;
   echo '</td>';
   echo '<td>';
 echo $user->hobby;
   echo '</td>';
   echo '<td>';
 echo $user->qualification;
   echo '</td>';
    echo '</tr>';
}
 echo '</table>';
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
