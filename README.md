# Software de gestão de cursos #

### Objetivo ###

Analisar o percurso escolar dos estudantes de um dado curso.

## 1. O projeto ##

### Funcionalidades que o projeto deve ter: ###

* **A gestão de cursos**. Esta funcionalidade  é 
composta por um conjunto de operações que permitem a adição,
a visualização, a edição e a remoção de cursos. Além disso,
deve permitir a lista dos cursos criados. 
Para cada curso pode listar-se também as disciplinas que o
compõem (o plano de estudos) e os alunos inscritos no curso.

* **A definição do plano de estudos**. É composta por várias operações
que permitem adicionar disciplinas ao plano de estudos de um curso através
do código da disciplina, designação e do semestre(ou ano letivo) em que é
ministrada. Além da adição de disciplinas ao plano, deve também ser possível
eliminar uma disciplina (desde que não tenham pautas associadas) e listar o
plano(contendo a informação de cada disciplina).

* **O carregamento de ficheiros de pautas de alunos** (ficheiros em formato
CSV - [ver anexo](https://moodle2122.uac.pt/course/view.php?id=18993))
fornecidos pelo Serviço de Gestão Académica. Cada ficheiro tem informação sobre
o resultado do momento de avaliação de um disciplina. Por exemplo, a disciplina
de PW terá um ficheiro referente à avaliação por frequência, outro relativamente
à época normal de exame, outro com a avaliação de época de recurso e, por
último, um referente à época especial, para cada semestre em que é lecionada.
As disciplinas podem ter outros esquemas de avaliação, mas não compete
à aplicação controlar esta parte. O importante é registar
a informação de cada pauta para depois se poder traçar e analisar
os percursos dos estudantes. Cada pauta tem um identificador único.
O sistema não deve permitir integrar mais do que uma vez a mesma pauta.
Estes ficheiros contêm informação sobre o código da disciplina,
a sua designação, o semestre ao qual a pauta se refere, um descritivo
do tipo de pauta e o nome, número e classificação do aluno na disciplina.
O código do curso e o ano letivo a que se referem a pauta serão indicados
na altura em que se integra o ficheiro.
O sistema deve registar a partir desta informação, e de forma automática,
as edições das disciplinas, a sua associação ao ano letivo e curso e
e inscrever os alunos na disciplina. Assim, com a integração das pautas o
sistema aprende toda a informação relevante ao processo de análise pretendido.

* **Disciplinas realizadas por aluno**. Esta funcionalidade deve permitir
o acesso às disciplinas em que o aluno foi avaliado, listando as
disciplinas (código, descrição e classificação obtida, número de avaliações
efetuadas, número de matrículas na disciplina).

* **O percurso do aluno**. Uma primeira operação deve listar,
por semestre de inscrição do aluno, as disciplinas que o aluno completou,
indicando o código e a designação da disciplina, a classificação obtida e se
a disciplina não foi realizada no semestre certo. *Para este último
indicador deve ser comparado a ordem com as disciplinas se realizam
em relação ao plano de estudos definido*.

* **Desempenho do curso**. Esta operação deve fornecer alguns dados estatísticos
sobre o curso. Indico alguns exemplos do que se pretende:
  * Por cada ano, indicar o número de alunos que terminaram, a média (das médias)
dos estudantes;
  * O número de anos que se leva (em média) para concluir o curso;
  * O número de alunos que desistem. *Um aluno é considerado desistente 
após um ano de não ter registado qualquer resultado*.

## 2. Que devemos fazer? ##
Desenvolver uma aplicação em PHP (*utilizando a framework Laravel*) organizada
em três camadas:
* **A camada de apresentação**
* **A camada de negócio**
* **A camada de acesso aos dados**

A app tem que satisfazer os requisitos descritos no ponto anterior.
A camada de aprentação deve disponibilizar uma API *RESTful* que permita
o acesso às funcionalidades da aplicação implementadas na camada de negócio.
A camada de negócio deve ser organizada de acordo como padrão
**[Domain Model](https://martinfowler.com/eaaCatalog/domainModel.html)**
e, por último, a camada de acesso aos dados deve ser implementada
recorrendo ao padrão *Active Record* implementado pelo pacote
*Eloquent* da plataforma *Laravel*.

### Branch: iteração1 ###
Temos que fazer o seguinte:
* **Levantamento de requisitos** das funcionalidades descritas
bevemente no ponto 1 deste documento; **(?)**

* **Proceder ao desenho e à implementação do modelo de domínio** que inclua
os requisitos identificados no ponto anterior;

* **Identificar as classes que serão alvo de persistência** e programá-las
usando o padrão *Active Record*, tal como oferecido na plataforma
*Laravel*;

* **Criar a base de dados em *SQLite***, localmente na pasta ***database***,
**através de migrações**, tal como oferecido na plataforma *Laravel*;

* **Popular a base de dados com informação aleatória** *(mas que faça sentido)*
de forma a conseguir interagir com a aplicação;

* **Desenhar e desenvolver uma API *RESTful*** que permita aceder às funcionalidades
oferecidas pela camada de negócio. A representação a utilizar para a
transferência do estado dos recursos será *JSON*.

### Branch: iteração2 ###

Temos que fazer o seguinte:

* **Desenvolver a camada de apresentação via Web**, recorrendo à plataforma
*Laravel*, que contenha um menu que permite selecionar as operações,
introduzir a informação necessária à sua execução e mostrar os resultados
das execuções das operações. *Não têm de desenvolver a interface de utilizador para
os casos de uso não especificando neste enunciado, como, por exemplo,
Adicionar Utilizadores ou Efetuar a autenticação*;

* Para dar um aspeto profissional à vossa aplicação podem
recorrer ao *[Bootstrap](https://getbootstrap.com)* e torná-lo responsivo
ao tamanho do ecrã;

* **Adicionar uma camada de segurança** que permita fazer autenticação
de utilizadores e autorização de operações quer na API *RESTful* quer na
interface Web;

* **Colocar o projeto a correr numa PaaS**. O plano será utilizarmos a plataforma *Heroku*.

## 3. Entregas! ##
### Primeira entrega: 17 de dezembro de 2021 ###
### Segunda entrega: 21 de janeiro de 2022 ###

**O repositório deve conter:**

1. O código fonte do nosso projeto (Não é necesário a pasta vendor);
2. Um documento PDF com o diagrama de classes da aplicação;
3. Um documento com os pontos da API *RESTful* desenvolvida.