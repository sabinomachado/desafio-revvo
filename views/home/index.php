div para o slide <br/>
div para cursos <br/>

<?php 
foreach ($data['courses'] as $course) {
    echo "ID: " . $course->id . "<br>";
    echo "Título: " . $course->title . "<br>";
    echo "Resumo: " . $course->summary . "<br>";
    echo "Link: " . $course->link . "<br>";
    echo "URL da Imagem: " . $course->url_image . "<br>";
    echo "Criado em: " . $course->created_at . "<br>";
    echo "Atualizado em: " . $course->updated_at . "<br>";
    echo "Deletado em: " . $course->deleted_at . "<br>";
    echo "Deletado: " . $course->deletado . "<br><br>";
}

?>