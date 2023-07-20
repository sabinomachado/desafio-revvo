<section class="slider flexVertical">
    <div class="slider__arrowLeft"><i class="fas fa-chevron-left"></i></div>
    <div class="slider__arrowRight"><i class="fas fa-chevron-right"></i></div>
    <div class="slider__imgs flexVertical" style="background-image: url('https://www.ibe.edu.br/wp-content/uploads/2018/11/255772-8-tecnicas-para-se-destacar-em-uma-reuniao-de-negocios.jpg')">
      <div class="container">
        <div class="slider__info--wrapper flexVertical">
          <div class="slider__info">
            <h2>lorem ipsum 1</h2>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis ipsum, quia at aliquam animi provident, 
              architecto accusamus, laborum sit consequuntur laboriosam ipsam voluptates voluptatibus? Voluptas fuga explicabo deserunt mollitia provident!
            </p>
            <a class="flexHorizontalVertical" href=#>Ver curso</a>
          </div>
        </div>
      </div>
    </div>
    <div class="slider__imgs flexVertical" style="background-image: url('https://static.poder360.com.br/2023/03/reuniao-em-empresa-848x477.jpg')">
      <div class="container">
          <div class="slider__info--wrapper flexVertical">
            <div class="slider__info">
              <h2>lorem ipsum 2</h2>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis ipsum, quia at aliquam animi provident, 
                architecto accusamus, laborum sit consequuntur laboriosam ipsam voluptates voluptatibus? Voluptas fuga explicabo deserunt mollitia provident!
              </p>
              <a class="flexHorizontalVertical" href=#>Ver curso</a>
            </div>
          </div>
        </div>
    </div>
    <div class="slider__imgs flexVertical" style="background-image: url('https://www.ibe.edu.br/wp-content/uploads/2018/11/255772-8-tecnicas-para-se-destacar-em-uma-reuniao-de-negocios.jpg')">
      <div class="container">
          <div class="slider__info--wrapper flexVertical">
            <div class="slider__info">
              <h2>lorem ipsum 3</h2>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis ipsum, quia at aliquam animi provident, 
                architecto accusamus, laborum sit consequuntur laboriosam ipsam voluptates voluptatibus? Voluptas fuga explicabo deserunt mollitia provident!
              </p>
              <a class="flexHorizontalVertical" href=#>Ver curso</a>
            </div>
          </div>
        </div>
    </div>
    <div class="slider__dots--wrapper flexVertical flexSpaceAround"></div>
    
  </section>

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

            <div class="courses__add flexHorizontalVertical flexColumn" id="courses__add">
                <i class="far fa-calendar-plus"></i>
                <p>adicionar <br/> curso</p>           
                
            </div> 
        </a>       
        </div>
    </div>
</section>

 