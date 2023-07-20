<div class="container form__courses">
            <h3 class="text-center">- Novo Curso - </h3>
            <form class="pure-form" method="post">
                <div class="row">
                    <label for="nome"><strong>Título</strong></label><br/>
                    <input required type="text" name="title" id="title" value="<?php echo $course->getTitle(); ?>" placeholder="Digite o título do curso">
                   
                </div>
                <div class="row">
                <label for="experiencia"><strong>Sumário: </strong></label><br/>
                <textarea rows="6" style="width: 26em" id="summary" name="summary"  required><?php echo $course->getSummary(); ?></textarea>
                </div>
        
                <div class="row">
                    <label for="nome"><strong>Link</strong></label><br/>
                    <input type="text" name="link" id="link" required value="<?php echo $course->getLink(); ?>" placeholder="Link">
                </div>  
                <div class="row">
                    <label for="nome"><strong>Imagem</strong></label><br/>
                    <input type="file" name="url_image" id="url_image">
                </div>
                <br/>
                <br/>
                <div class="row">
                    <button class="courses__button flexHorizontalVertical" type="submit" onsubmit="">Editar</button>    
                </div>     
            </form>

           


    </div>

