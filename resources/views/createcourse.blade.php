<head>
   <title> Create a Course</title>
</head>
<body>
   <fieldset>
      <legend>Product Details</legend>
      <form method="post" action="/courses">
         @csrf
         Course Name:<br>
         <input type="string" name="course_name" placeholder="Course Name"  required/><br/>
         Course Code:<br>
         <input  type="text" name="course_code" required/>
         <br/>
         Course Duration:<br>
         <input type="text" name="duration" placeholder="Course Duration" required/><br/><br>
         <button name="btn1" class="btn btn-success">Create Project</button>
      </form>
   </fieldset>


</body>
