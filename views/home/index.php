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
            <a class="courses__button flexHorizontalVertical" href="#">ver curso</a>
            </div>


        <?php   }  ?>
                

        <div class="courses__add flexHorizontalVertical flexColumn">
            <i class="far fa-calendar-plus"></i>
            <p>adicionar <br/> curso</p>            
        </div>        
        </div>
    </div>
</section>

 