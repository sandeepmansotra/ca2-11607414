<head>
   <title> Edit a Project</title>
</head>
<body>
   <fieldset>
      <legend>Edit The Course</legend>
      <form method="POST" action="/courses/{{$course->id}}">
         {{method_field('PATCH')}}
         @csrf

         Course Name:<br>
         <input type="string" name="course_name" value="{{$course->course_name}}" placeholder="Course Name"/><br/>
         Course Code:<br>
         <input type="text"  name="course_code" value="{{$course->course_code}}" placeholder="Course Code"/>

         <br/>
         Price:<br>
         <input type="text" name="duration" value="{{$course->duration}}" placeholder="Course Duration"/><br/><br>
         <button name="btn1">Update Course</button><br><br>
         <a href="/courses/create" >CREATE NEW Course</a>

      </form>
   </fieldset>
</body>
