<div class="jumbotron">
<div class="container">
<h1>Lists of Courses</h1>
<style>
.table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 5px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<table class="table">
   <tr>
      <th>Course_ID</th>
      <th>Course_Name</th>
      <th>Course_Code</th>
      <th>Course_Duration</th>
   </tr>
@foreach($courses as $course)

   <tr>
   <td>{{$course->id}}</td>
   <td><a href="/courses/{{$course->id}}"/>{{$course->course_name}}</a></td>
   <td>{{$course->course_code}}</td>
   <td>{{$course->duration}}</td>

   </tr>

   @endforeach
</table>
<a href="/courses/create" class="btn btn-success">CREATE NEW COURSE</a>
</div>
</div>
