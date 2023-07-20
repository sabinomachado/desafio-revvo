<section class="courses">
    <div class="container">
        <h2>meus cursos</h2>
        <div class="courses__list flex">

        <?php 
        foreach ($data['courses'] as $course) { ?>
            <div class="courses__card">
                <div>
                    <img src="/assets/img/curso.png" />
                </div>
                <div class="courses__card--description">
                    <h4><?php echo($course->title) ?></h4>
                    <p><?php echo($course->summary) ?></p>
                </div>
                <?php 
                echo "<a class='btn' href='/cursos/excluir?id={$course->id}'>Excluir</a>";
                echo "<a class='courses__button flexHorizontalVertical' href='/cursos/edit?id={$course->id}'>ver curso</a>";
            
                ?>
                </div>


        <?php   }  ?>
                

        <a href="/cursos/add">

        <form action="/CourseController/createAction" method="createAction">

               
            </form>


            <div class="courses__add flexHorizontalVertical flexColumn" id="courses__add">
                <i class="far fa-calendar-plus"></i>
                <p>adicionar <br/> curso</p>           
                
            </div> 
        </a>       
        </div>
    </div>
</section>

 