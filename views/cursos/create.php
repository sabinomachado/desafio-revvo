    <div class="container create__courses">
            <h3 class="text-center">- Novo Curso - </h3>
            <form class="pure-form" method="post">
                <div class="row campo">
                    <label for="nome"><strong>Título</strong></label><br/>
                    <input type="text" name="title" id="title" required>
                </div>
                <div class="row campo">
                <label for="experiencia"><strong>Sumário: </strong></label><br/>
                <textarea rows="6" style="width: 26em" id="summary" name="summary" required></textarea>
                </div>
        
                <div class="row campo">
                    <label for="nome"><strong>Link</strong></label><br/>
                    <input type="text" name="link" id="link" required>
                </div>  
                <div class="row campo">
                    <label for="nome"><strong>Imagem</strong></label><br/>
                    <input type="file" name="url_image" id="url_image">
                </div>
                <div class="row campo">
                    <button class="botao" type="submit" onsubmit="">Concluído</button>    
                </div>     
            </form>
    </div>

