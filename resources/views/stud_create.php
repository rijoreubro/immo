<html>

   <head>
      <title>Employee Management | Add</title>
   </head>
   
   <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <h2>Employee Registration Form</h2>
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td>Gender</td>
               <td><input type='radio' name='gender' value='Male'/>Male</td>
               <td><input type='radio' name='gender' value='Female'/>Female</td>
            </tr>
            <tr>
               <td>Age</td>
               <td><input type='text' name='age' /></td>
            </tr>
            <tr>
               <td>Place</td>
               <td><input type='text' name='place' /></td>
            </tr>
            <tr>
               <td>Date of Birth</td>
               <td><input type='text' name='dob' /></td>
            </tr>
            <tr>
               <td>Job</td>
               <td><input type='text' name='job' /></td>
            </tr>
            <tr>
               <td>Hobby</td>
               <td><input type='text' name='hobby' /></td>
            </tr>
            <tr>
               <td>Qualifiaction</td>
               <td><input type='text' name='qualification' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>