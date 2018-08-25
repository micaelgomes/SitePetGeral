<?php
/**
 * template de demostração de petianos
 * Template Name: sobre
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>

<?php 
    get_header(); 
    $URL = 'https://pet.ufma.br/';
    //$URL = 'http://localhost/wordpress/';
    $pagename = get_query_var('pagename'); 
?> 
	<div class="parallax-container" style="height: 200px !important;">
    <div class="parallax"><img src=<?php echo $URL.'wp-content/uploads/sites/4/2018/08/sec4.png'; ?>></div>
    <h3 class="center nunito white-text" style="padding: 3.5%; font-size: 60px;"> PET UFMA </h3>
  </div>

  <div class="row">
    <div class="col s12">
      <ul class="tabs black-text">
        <li class="tab col s3 "><a class="active black-text" href="#test1">Quem Somos</a></li>
        <li class="tab col s3 "><a class="black-text" href="#test2">Filosofia</a></li>
        <li class="tab col s3 "><a class="black-text" href="#test3">História</a></li>
        <li class="tab col s3 "><a class="black-text" href="#test4">CLAA</a></li>
      </ul>
    </div>
    
    <div id="test1" class="col s12">
      <p class = "flow-text body-post">
          O Programa de Educação Tutorial (PET) é um programa de comprovada excelência, o qual compromete-se fundamentalmente em aprimorar os cursos de graduação. Trabalha com quatro vertentes principais que são: Ensino, Cultura, Pesquisa e Extensão e forma cidadãos que aprendem durante três anos a trabalhar em equipe, a irradiar para os demais colegas o espírito de liderança e o compromisso com a geração de conhecimento para a solução dos mais diversos problemas. É o único programa institucional voltado para graduação que trabalha no formato de grupo interdisciplinar, ancorado em alunos e professores e que recebe avaliação institucional e não individual.
      </p>
      <p class="flow-text body-post">
        O Programa Especial de Treinamento é destinado a grupos de alunos que demonstrem
        potencial, interesse e habilidades destacadas em cursos de graduação das IES. O apoio é
        concedido ao curso por um período indeterminado, e ao bolsista até a conclusão da sua
        graduação, desde que obedecidas as normas do Programa constantes neste documento.<br>
        O PET é integrado por grupos tutoriais de aprendizagem. O Programa busca propiciar aos
        alunos, sob a orientação de um professor tutor, condições para a realização de atividades
        extracurriculares, que complementem a sua formação acadêmica, procurando atender mais
        plenamente às necessidades do próprio curso de graduação e/ou ampliar e aprofundar os
        objetivos e os conteúdos programáticos que integram sua grade curricular. Neste sentido,
        espera-se proporcionar uma melhoria da qualidade acadêmica dos cursos de graduação
        apoiados pelo PET.<br>
        As atividades extracurriculares que compõem o Programa têm como objetivo garantir aos
        alunos do curso oportunidades de vivenciar experiências não presentes em estruturas
        curriculares convencionais, visando a sua formação global e favorecendo a formação
        acadêmica, tanto para a integração no mercado profissional como para o desenvolvimento
        de estudos em programas de pós-graduação.<br>
        O Programa Especial de Treinamento constitui-se, portanto, em uma modalidade de
        investimento acadêmico em cursos de graduação que têm sérios compromissos
        epistemológicos, pedagógicos, éticos e sociais. Com uma concepção baseada nos moldes
        de grupos tutoriais de aprendizagem e orientado pelo objetivo de formar globalmente o
        aluno, o PET não visa apenas proporcionar aos bolsistas e aos alunos do curso uma gama
        nova e diversificada de conhecimento acadêmico, mas assume a responsabilidade de
        contribuir para sua melhor qualificação como pessoa humana e como membro da
        sociedade. 
      </p>
      <p class="flow-text body-post">
        Abaixo está o manual de orientações básicas do PET fornecido pela plataforma do MEC.
      </p>

      <div class="center nunito">
        <a class="red darken-1" href="http://portal.mec.gov.br/sesu/arquivos/pdf/PETmanual.pdf"><h5>Manual de Orientações Básicas - PET</h5></a>
      </div>
    </div>
    
    <div id="test2" class="col s12">
      <div class="container submenu">
        <div class="section">
          <div class="row">     
            <p class="flow-text body-post">A constituição de um grupo de alunos vinculado ao curso para desenvolver ações de
              ensino, pesquisa e extensão visa oportunizar aos bolsistas e demais estudantes a
              possibilidade de ampliar a gama de experiências em sua formação acadêmica. O programa
              objetiva complementar a perspectiva convencional de educação escolar baseada em um
              conjunto qualitativamente limitado de constituintes curriculares.<br>
              Um grupo tutorial se caracteriza pela presença de um tutor com a missão de estimular a
              aprendizagem ativa dos seus membros, por meio de vivência, reflexões e discussões, em
              clima de informalidade e cooperação. O método tutorial permite o desenvolvimento de
              habilidades de resolução de problemas e pensamento crítico entre os bolsistas, em
              contraste com o ensino centrado principalmente na memorização passiva de fatos e
              informações, e oportuniza aos estudantes a se tornarem cada vez mais independentes em
              relação à administração de suas necessidades de aprendizagem.<br>
              O PET, ao desenvolver ações de ensino, pesquisa e extensão, de maneira articulada,
              permite uma formação global, tanto do aluno bolsista quanto dos demais alunos do curso,
              em contraposição à fragmentação, proporcionando-lhes uma compreensão mais integral do
              que ocorre consigo mesmo e no mundo. Ao mesmo tempo a multiplicidade de experiências
              contribui para reduzir os riscos de uma especialização precoce.<br>
              A ação em grupo e a dedicação ao curso permitem desenvolver a capacidade de trabalho
              em equipe, facilitar a compreensão das características e dinâmicas individuais, bem como a
              percepção da responsabilidade coletiva e do compromisso social. A inserção do grupo
              dentro do curso permite que estas capacidades se disseminem para os alunos do curso em
              geral, modificando e ampliando a perspectiva educacional de toda a comunidade. Este
              desenvolvimento terá uma interação dinâmica com o projeto pedagógico do curso, em
              processo de mútuo aperfeiçoamento.<br>
              Nos grupos PET, o tutor é o responsável, perante a IES e a SESu/MEC pelo planejamento e
              supervisão das atividades bem como pelo desempenho do grupo sob sua orientação,
              contando com a indispensável colaboração de outros docentes da IES para a execução de
              suas ações. Cabe a ele orientar os bolsistas no caminho de uma aprendizagem segura,
              relevante, ativa, planejada e adequada às necessidades do grupo e do curso como um
              todo.<br>
              Dentro do programa, a IES é responsável por dar o suporte administrativo aos grupos,
              desenvolver o processo de avaliação institucional e contribuir para o aumento do significado
              acadêmico-pedagógico de suas atividades, garantindo a autonomia dos grupos. Estas três
              funções devem ser desenvolvidas de forma coordenada por todos os atores responsáveis
              pelo programa na IES.<br> 
              O PET é um programa de longo prazo que visa realizar, dentro da universidade brasileira, o modelo de indissociabilidade do ensino, da pesquisa e da extensão. Assim, além de um
              incentivo à melhoria da graduação, o PET pretende estimular a criação de um modelo
              pedagógico para a nossa universidade, de acordo com os princípios estabelecidos na
              Constituição Brasileira e na Lei de Diretrizes e Bases da Educação (LDB). </p>
          </div>
        </div>  
      </div>
    </div>

    <div id="test3" class="col s12">
      <p class="flow-text body-post">
          O PET foi criado em 1979 no governo do general João Baptista Figueiredo com o nome original de Programa Especial de Treinamento. Até 1999, o programa esteve submetido à CAPES, passando depois para o Ministério da Educação. Entre 1995 e 2003, quando o MEC esteve ocupado por Paulo Renato Souza, o governo tentou por diversas vezes extinguir o programa, sob alegações de que era oneroso aos cofres públicos, mas esbarrou em forte oposição da comunidade acadêmica. Em 2004, na gestão de Tarso Genro no ministério, o nome foi alterado para Programa de Educação Tutorial.
      </p> 
    </div>

    <div id="test4" class="col s12">
      <p class="light titulos center flow-text"> CLAA – Comitê Local de Acompanhamento e Avaliação </p>

      <p class = "flow-text body-post">
          <i class="material-icons">done</i>Acompanha e orienta os grupos quanto aos aspectos filosóficos, conceituais e metodológicos do Programa de Educação Tutorial – PET <br>
      
          <i class="material-icons">done</i>Coordena e participa ativamente do processo formal de acompanhamento dos grupos sob sua coordenação <br>
      
          <i class="material-icons">done</i>Referenda os processos de seleção e desligamento de alunos bolsistas e de tutores <br>
      
          <i class="material-icons">done</i>Emitir parecer final acerca do relatório anual dos grupos e encaminhá-lo à SESu  <br>
      
          <i class="material-icons">done</i>Organiza dados e informações relativas ao PET e emitir pareceres por solicitação da SESu <br>
      
          <i class="material-icons">done</i>Orienta o planejamento e execução de atividades dos grupos <br>
      
          <i class="material-icons">done</i>Representa o programa PET na UFMA <br>
      </p>
    </div>
  </div>
<?php get_footer(); ?>