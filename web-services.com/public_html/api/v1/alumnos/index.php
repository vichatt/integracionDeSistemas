<?

$response = new \stdClass();
$alumnos = [];

$alumno=new \stdClass(); 

$alumno->id="ce2d09a5-e950-43f4-a95c-5aad5e118576"; 
$alumno->codigo="A001" ; 
$alumno->nombres="Luis Curo"; 

$alumnos[]=$alumno;

$response->success=true;
$response->data=$alumnos;

echo json_encode($response);
  