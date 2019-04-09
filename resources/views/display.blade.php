<h1>Course details</h1>
<p>Id-> {{$course->id}}</p>
<p>Course Name-> {{$course->course_name}}</p>
   <p>
      Course Code-> {{$course->coure_code}}
   </p>
   <p>Course Duration->{{$course->duration}}</p>

   <div>
      <form method="POST" action="/courses/{{$course->id}}">
      @method('DELETE')
      @csrf
<a href="/courses/{{$course->id}}/edit" class="btn btn-success">EDIT PROJECT</a>
<a href="/courses/create" class="btn btn-success">CREATE NEW PROJECT</a>
   <button class="btn btn-success" >Delete Project</button>
   </form>
   </div>
